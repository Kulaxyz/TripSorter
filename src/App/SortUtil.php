<?php declare(strict_types=1);
namespace TripSorter\App;


use TripSorter\Models\Card;
use TripSorter\Models\LinkedList;

final class SortUtil
{
    /**
     * Sort cards using linked list.
     * Set head of the list and each node`s next element.
     *
     * @param Card ...$cards
     * @return LinkedList
     */
    public static function sortCards(Card ...$cards) : LinkedList
    {
        $lk = new LinkedList();

        $inLocations = [];
        $outLocationsPresence = [];

        foreach ($cards as $card) {
            $inLocations[$card->getFrom()] = $card;
            $outLocationsPresence[$card->getTo()] = true;
        }
        foreach ($cards as $card) {
            if (!isset($outLocationsPresence[$card->getFrom()])) {
                $lk->setHead($card);
            }
            if (isset($inLocations[$card->getTo()])) {
                $card->setNext($inLocations[$card->getTo()]);
            }
        }

        return $lk;
    }
}

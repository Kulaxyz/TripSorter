<?php declare(strict_types=1);
namespace TripSorter\Models;

final class LinkedList {

    private ?Card $head = null;

    /**
     * @return Card|null
     */
    public function getHead(): ?Card
    {
        return $this->head;
    }

    /**
     * @param Card|null $head
     */
    public function setHead(?Card $head): void
    {
        $this->head = &$head;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        $card = $this->getHead();
        $str = "";
        if (!$card) {
            $str .= "Empty linked list.";
            return $str;
        }
        $str .= $card->toString();

        while ($card = $card->getNext()) {
            $str .= $card->toString();
        }

        return $str;
    }

    public function print(): void
    {
        echo $this->toString();
    }
}

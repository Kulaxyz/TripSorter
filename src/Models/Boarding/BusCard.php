<?php declare(strict_types=1);
namespace TripSorter\Models\Boarding;


use TripSorter\Models\Card;

class BusCard extends Card
{

    /**
     * BusCard constructor.
     * @param string $from
     * @param string $to
     */
    public function __construct(string $from, string $to)
    {
        parent::__construct($from, $to);
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "Take bus from {$this->from} to {$this->to}. No seat assignment. ";
    }
}

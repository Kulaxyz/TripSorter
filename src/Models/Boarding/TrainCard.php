<?php declare(strict_types=1);
namespace TripSorter\Models\Boarding;


use TripSorter\Models\Card;

class TrainCard extends Card
{
    private string $number;
    private string $seat;

    /**
     * TrainCard constructor.
     * @param string $from
     * @param string $to
     * @param string $number
     * @param string $seat
     */
    public function __construct(string $from, string $to, string $number, string $seat)
    {
        parent::__construct($from, $to);
        $this->number = $number;
        $this->seat = $seat;
    }


    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getSeat(): string
    {
        return $this->seat;
    }

    /**
     * @param string $seat
     */
    public function setSeat(string $seat): void
    {
        $this->seat = $seat;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "From {$this->from} to {$this->to} take train {$this->number}. Sit in seat {$this->seat}. ";
    }
}

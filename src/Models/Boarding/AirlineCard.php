<?php declare(strict_types=1);
namespace TripSorter\Models\Boarding;


use TripSorter\Models\Card;

class AirlineCard extends Card
{
    private string $flightNum;
    private string $seat;
    private string $gate;

    /**
     * AirlineCard constructor.
     *
     * @param string $from
     * @param string $to
     * @param string $flightNum
     * @param string $seat
     * @param string $gate
     */
    public function __construct(string $from, string $to, string $flightNum, string $seat, string $gate)
    {
        parent::__construct($from, $to);
        $this->flightNum = $flightNum;
        $this->seat = $seat;
        $this->gate = $gate;
    }


    /**
     * @return string
     */
    public function getFlightNum(): string
    {
        return $this->flightNum;
    }

    /**
     * @param string $flightNum
     */
    public function setFlightNum(string $flightNum): void
    {
        $this->flightNum = $flightNum;
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
    public function getGate(): string
    {
        return $this->gate;
    }

    /**
     * @param string $gate
     */
    public function setGate(string $gate): void
    {
        $this->gate = $gate;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
       return "Take flight {$this->flightNum} from {$this->from} to {$this->to}. Gate {$this->gate}. Seat: {$this->seat}. ";
    }
}

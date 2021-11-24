<?php declare(strict_types=1);

namespace Test;
use PHPUnit\Framework\TestCase;
use TripSorter\App\SortUtil;
use TripSorter\Models\Boarding\AirlineCard;
use TripSorter\Models\Boarding\BusCard;
use TripSorter\Models\Boarding\TrainCard;


final class SortUtilTest extends TestCase
{
    public function testCorrectSorting() {
        $expected = "From Madrid to Barcelona take train 78A. Sit in seat 45B. Take bus from Barcelona to Gerona. No seat assignment. Take flight SK455 from Gerona to Stockholm. Gate 3A. Seat: 45B. Take flight SK22 from Stockholm to New York JFK. Gate 7B. Seat: 22. ";

        $sorted = SortUtil::sortCards(
            new AirlineCard("Stockholm", "New York JFK", "SK22", "22", "7B"),
            new TrainCard("Madrid", "Barcelona", "78A", "45B"),
            new BusCard("Barcelona", "Gerona"),
            new AirlineCard("Gerona", "Stockholm", "SK455", "45B", "3A")
        );

        $this->assertEquals($expected, $sorted->toString());

    }

    public function testEmptyLinkedListSorting()
    {
        $expected = "Empty linked list.";
        $sorted = SortUtil::sortCards();

        $this->assertEquals($expected, $sorted->toString());
    }
}

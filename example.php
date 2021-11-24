<?php declare(strict_types=1);
namespace TripSorter\Test;

use TripSorter\App\SortUtil;
use TripSorter\Models\Boarding\AirlineCard;
use TripSorter\Models\Boarding\BusCard;
use TripSorter\Models\Boarding\TrainCard;

require __DIR__."/vendor/autoload.php";

$sorted = SortUtil::sortCards(
    new AirlineCard("Stockholm", "New York JFK", "SK22", "22", "7B"),
    new TrainCard("Madrid", "Barcelona", "78A", "45B"),
    new BusCard("Barcelona", "Gerona"),
    new AirlineCard("Gerona", "Stockholm", "SK455", "45B", "3A")
);

$sorted->print();
echo ' You have arrived to your final destination!';

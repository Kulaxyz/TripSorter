#TripSorter

This package can be used for sorting Boarding Cards. 
The algorithm complexity is O(n).
  

##Execution of an example and tests
###Requirements
- php 7.4+
- composer

###Setup 
composer install

###Run 
php example.php

###Tests
- ./vendor/bin/phpunit tests
- ./vendor/bin/psalm --show-info=true

##TODO
- Implement baggage handling.
- Use fabric methods instead of constructors in models.

##New types of transportation
Any new type of transportation can be added without 
any changes of an existing code.
The only requirement is to inherit from Card class
 and implement required methods.


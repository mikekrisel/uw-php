Assignment 1 Part 2
===
Gain a deeper understanding of OO programming. Set up a simple real-world OO solution.

What was implemented
===
Set up basic project skeleton for what was done in part 1 of assignment. Set up namespace for every class. Autoloading using Composer (http://getcomposer.org). Implement unit tests for every public method. Generate test coverage to get 100% code coverage.

Contains the following files
===
- src/
    - vehicle.php
    - vehicleInterface.php
    - car.php
    - civic.php
    - truck.php
- tests
    - conf
        - phpunit.xml
    - src/
        - vehicleTest.php
        - carTest.php
        - civicTest.php
        - truckTest.php
- bootstrap.php   takes care autoloading
- composer.json   Sets up autoloading, dependency (phpunit)
- README.md
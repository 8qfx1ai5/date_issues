<?php
/**
 * This functions are a collection of code printing out some
 * issues using the build-in function
 * DateTime->modify()
 * 
 * Uncomment and try it out.
 */
//printTask1Days();
//printTask2Weeks();
//printTask3Months();
//printTask4Years();
//printTestCasesMonth();

/**
 * Task 1
 * 100 days
 * only every second until now
 * 
 * VALID
 */
function printTask1Days () {
    $now = new DateTime();
    for ( $i = 0; $i < 200; $i += 2 ) {
        $targetDate = ( clone $now );
        $targetDate->modify( "+$i days" );
        echo $targetDate->format( 'Y-m-d' );
        echo PHP_EOL;
    }
}


/**
 * Task 2
 * 100 weeks
 * only every second until now
 * 
 * VALID
 */
function printTask2Weeks () {
    $now = new DateTime();
    for ( $i = 0; $i < 200; $i += 2 ) {
        $targetDate = ( clone $now );
        $targetDate->modify( "+$i weeks" );
        echo $targetDate->format( 'Y-m-d' );
        echo PHP_EOL;
    }
}

/**
 * Task 3
 * 100 months
 * only every second until now
 * 
 * THIS CODE WILL NOT WORK AS EXPECTED
 */
function printTask3Months () {
    $now = new DateTime();
    for ( $i = 0; $i < 200; $i += 2 ) {
        $targetDate = ( clone $now );
        $targetDate->modify( "+$i months" );
        echo $targetDate->format( 'Y-m-d' );
        echo PHP_EOL;
    }
}

/**
 * Task 4
 * 100 weeks
 * only every second until now
 * 
 * THIS CODE WILL NOT WORK AS EXPECTED
 */
function printTask4Years () {
    $now = new DateTime();
    for ( $i = 0; $i < 200; $i += 2 ) {
        $targetDate = ( clone $now );
        $targetDate->modify( "+$i years" );
        echo $targetDate->format( 'Y-m-d' );
        echo PHP_EOL;
    }
}

/**
 * This cases can make a demonstration for the month issue by adding a single month
 */
function printTestCasesMonth () {
    $days = array (
       '2018-01-27' ,
       '2018-07-31' ,
       '2018-01-31' ,
       '2018-01-30' ,
       '2018-05-31' ,
    );
    foreach ( $days as $day ) {
        /** @var DateTime $day */
        $currentDay = (new DateTime($day))->modify( '+1 month' );
        echo $day.' => '.$currentDay->format( 'Y-m-d' ) . PHP_EOL;
    }
}

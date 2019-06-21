<!-- The benchmarker should accept any number of PHP functions (passed as callable type and a name
representing the function).
The benchmark should also accept an integer representing the number of times to execute each function.
The benchmark should execute each function the specified number of cycles and collect it's execution
time in the highest possible time resolution and return a resultset which can be passed to the reporter
component. -->
<?php

// an array to store all the results
$result = array();

$timeStart = microtime(true);

test_math($result);
test_string($result);

$result['benchmark']['calculation_total'] = timer_diff($timeStart) . ' sec.';


// stress test math functions
function test_math(&$result, $count = 99999)
{
    $timeStart = microtime(true);

    $mathFunctions = array("abs", "acos", "asin", "atan", "bindec", "floor", "exp", "sin", "tan", "pi", "is_finite", "is_nan", "sqrt");
    for ($i = 0; $i < $count; $i++) {
        foreach ($mathFunctions as $function) {
            call_user_func_array($function, array($i));
        }
    }
    $result['benchmark']['math'] = timer_diff($timeStart) . ' sec.';
}
// stress test string functions
function test_string(&$result, $count = 99999)
{
    //start time in ms
    $timeStart = microtime(true);
    //multiple built in php functions to run through
    $stringFunctions = array("addslashes", "chunk_split", "metaphone", "strip_tags", "md5", "sha1", "strtoupper", "strtolower", "strrev", "strlen", "soundex", "ord");

    $string = 'the quick brown fox jumps over the lazy dog';
    //loop that actually runs the test
    for ($i = 0; $i < $count; $i++) {
        foreach ($stringFunctions as $function) {
            call_user_func_array($function, array($string));
        }
    }
    // gives the result of end time - start time
    $result['benchmark']['string'] = timer_diff($timeStart) . ' sec.';
}
?>



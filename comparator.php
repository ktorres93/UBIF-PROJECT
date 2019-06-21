<!-- The comparator is some criteria on which the functions will be ranked in relation to execution time (min,
max, avg, mean, etc...).
Optionally it can also specify a sort order (ascending, descending). -->
<?php
require 'benchmark.php';

//compares results and creates an ordered list in decending order of times.
// a better way to do this would be to store the times into an array in bench mark and run a sort on it.
// I'll develop the better solution when I have more time. 
if (($data['benchmark']['math']) > ($data['benchmark']['string'])){
   $decendingTimes = '<tr><td>1st (Math)</td><td>' . h($data['benchmark']['math']) . '</td></tr>';
                     '<tr><td>2nd (String)</td><td>' . h($data['benchmark']['string']) . '</td></tr>';
else{
    $decendingTimes = '<tr><td>1st (String)</td><td>' . h($data['benchmark']['string']) . '</td></tr>';
                      '<tr><td>2nd (Math)</td><td>' . h($data['benchmark']['math']) . '</td></tr>';
    }
}
?>


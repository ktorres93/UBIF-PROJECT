<!-- The reporter should accept the results of the benchmark and any number of comparators. It should
generate a report which ranks the functions by the given comparators.
The user should be able to specify a format for the results (template, eg.) At a minimum the user should
be able to write the report to an I/O stream (stdout or disk). -->

<?php
function print_benchmark_result($data){

    $result = '<table>';
    $result .= '<tbody>';
    $result .= '<tr class="even"><td>Calculation total</td><td>' . h($data['benchmark']['calculation_total']) . '</td></tr>';
    $result .= '</tbody>';
    $result .= '<tr><td>Math</td><td>' . h($data['benchmark']['math']) . '</td></tr>';
    $result .= '<tr><td>String</td><td>' . h($data['benchmark']['string']) . '</td></tr>';
    $result .= '<thead><tr><th>Total</th><th>' . h($data['benchmark']['total']) . '</th></tr></thead>';
    $result .= '</table>';
}
    return $result;

function h($v)
{
    return htmlentities($v);
}

?>
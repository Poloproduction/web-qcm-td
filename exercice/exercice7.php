<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$N = array_shift($args);
$K = array_shift($args);
$score = 0;

for($i = 0; $i < $N; $i++) {
    $A = $args[$i];
    if(strpos($A, "X") === 0 && $K[$i] === 'A') {
        $score += (100/(int)$N);
    } elseif(strpos($A, "X") === 1 && $K[$i] === 'B') {
        $score += (100/(int)$N);
    } elseif(strpos($A, "X") === 2 && $K[$i] === 'C') {
        $score += (100/(int)$N);
    } elseif(strpos($A, "X") === 3 && $K[$i] === 'D') {
        $score += (100/(int)$N);
    } elseif(strpos($A, "X") === 4 && $K[$i] === 'E') {
        $score += (100/(int)$N);
    }
}

// Write an action using echo().

echo($score);



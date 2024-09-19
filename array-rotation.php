<?php
function solution($X, $Y) {
    $N = count($X);
    
    // check value X
    if ($N == 0) {
        return $X;
    }

    for ($i = 0; $i < $Y; $i++) {
        $last = array_pop($X);
        array_unshift($X, $last);
    }

    return $X;
}

$X = [7, 2, 4, 1, 6, 8, 9];
$Y = 5;
print_r(solution($X, $Y));

?>
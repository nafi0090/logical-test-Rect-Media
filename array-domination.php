<?php
function solution($X) {
    $n = count($X);
    
    if ($n == 0) {
        return -1; 
    }

    $frequencies = [];
    foreach ($X as $value) {
        if (isset($frequencies[$value])) {
            $frequencies[$value]++; 
        } else {
            $frequencies[$value] = 1;
        }
    }
    
    $dominator = '';
    foreach ($frequencies as $value => $count) {
        if ($count > $n / 2) {
            $dominator = $value;
            break;
        }
    }
    
    if ($dominator == null) {
        return -1;
    }
    
    $indices = [];
    foreach ($X as $index => $value) {
        if ($value == $dominator) {
            $indices[] = $index;
        }
    }
    
    return $indices;
}

$X = [3, 4, 3, 2, 3, -1, 3, 3];
print_r(solution($X)); 
?>
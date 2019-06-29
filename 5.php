<?php

function sort_number($number)
{
    # code...
    $number = (string)$number;
    $number = explode("0",$number);
    sort($number);
    foreach ($number as $key) {
        # code...
        $stringbaru .= $key;
    }
    return (integer)$stringbaru;
}
    print_r(sort_number(5956560159466056));

?>
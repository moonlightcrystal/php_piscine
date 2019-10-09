#!/usr/bin/php
<?php

function compare($el1, $el2)
{
    $lowEl1 = strtolower($el1);
    $lowEl2 = strtolower($el2);
    $str = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&‘()*+,-./:;<=>?@[\]^_`{|}~";

    for($i = 0; ($i < count($el1) || $i < count($el2)); $i++) {
        $posEl1 = strpos($str, $lowEl1);
        $posEl2 = strpos($str, $lowEl2);
        if($posEl1 < $posEl2)
            return(-1);
        else if($posEl1 > $posEl2)
            return(1);
    }
    return (0);
}

$i = 1;
$result = array();
    while($argc > $i) {
        $result = array_merge($result, preg_split("/[\s,]+/", trim($argv[$i])));
        $i++;
    }
    print_r($result);
    usort($result, "compare");
    foreach ($result as $value)
        printf("%s\n", $value);

#!/usr/bin/php
<?php
    $arr = array();
    $arr = array_merge($arr, preg_split("/[\s,]+/", trim($argv[1])));
    $j = 0;
    $count = count($arr);
    $arr[] = $arr[0];
    array_shift($arr);
    $string = trim(implode(' ',$arr));
    echo $string . "\n";

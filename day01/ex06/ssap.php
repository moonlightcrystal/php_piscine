#!/usr/bin/php
<?php
$i = 1;
    while($argc > $i) {
    $arr = preg_split("/[\s,]+/", $argv[$i]);
    $i++;
    $arr2 += $arr;
}
sort($arr2);
    print_r($arr2);
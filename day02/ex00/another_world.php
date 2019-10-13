#!/usr/bin/php
<?php
    $arr = array();
    $arr = array_merge($arr, preg_split("/[\t' ']+/", trim($argv[1], " \t")));
    $string = implode($arr, " ");
    echo $string . "\n";
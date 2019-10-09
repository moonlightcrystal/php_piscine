#!/usr/bin/php
<?php
    $i = 1;
    $result = array();
    while($argc > $i) {
        $result = array_merge($result, preg_split("/[\s,]+/", trim($argv[$i])));
        $i++;
    }
    sort($result);
    $count = count($result);
    $j = 0;
    while($count > 0)
    {
        if($result[$j]) {
            echo $result[$j] . "\n";
            $j++;
            $count--;
        }
        else
            exit;
    }





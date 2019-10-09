#!/usr/bin/php
<?php
    $i = 1;
    $arr = preg_split("/[\s,]+/", $argv[1]);
    $str = trim(implode(' ', $arr));
    echo ($str);
    echo "\n";
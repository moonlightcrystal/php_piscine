#!/usr/bin/php
<?php

setlocale(LC_TIME, "fr_FR");
date_default_timezone_set("Europe/Paris");
    if($argc >= 2) {
        if(preg_match_all("#^[\w] [0 - 9] {4} [\d]$#i", argv[1]) == 0) {
            $form = "%A %e %B %Y %H:%M:%S";
            if (($data = strptime($argv[1], $form)) != FALSE) {
                $dt = mktime($data[tm_hour], $data[tm_min], $data[tm_sec], $data[tm_mon] + 1, $data[tm_mday], $data[tm_year] + 1900);
                echo $dt . "\n";
                }
            else
                echo "Wrong Format\n";
            }
            else
                echo "Wrong Format\n";
}
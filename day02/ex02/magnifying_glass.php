#!/usr/bin/php
<?php

if ($argc == 2)
{
    $pointstr = fopen($argv[1], 'r');
    while (!feof($pointstr))
    {
        $string = fgets($pointstr);
        $string = preg_replace_callback('#<a.*?title="(.*?)">#', function ($callback) {
            return (str_replace($callback[1], strtoupper($callback[1]), $callback[0]));
        }, $string);
        $string = preg_replace_callback('#<a.*?>(.*?)<#', function ($callback) {
            return (str_replace($callback[1], strtoupper($callback[1]), $callback[0]));
        }, $string);
        echo $string;
    }
}



#!/usr/bin/php
<?php
    while (1) {
        echo "Enter a number: ";
        $get = trim(fgets(STDIN, 4096));
        if(feof(STDIN)) {
            echo "\n";
            exit;
        }
        if (!is_numeric($get)) {
            echo "'$get'" . "is not a number\n";
        }
        if (is_numeric($get)) {
            if ($get == 0) {
                echo "The number " . $get . " is even\n";
            } elseif ($get % 2 != 0)
                echo "The number " . $get . " is odd\n";
            elseif ($get % 2 == 0)
                echo "The number " . $get . " is even\n";
        }
}
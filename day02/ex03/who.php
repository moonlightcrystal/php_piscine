#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Moscow');
$file = fopen("/var/run/utmpx", "rb");
while ($utmpx = fread($file, 628)) //check this  hexdump -vC /var/run/utmpx
{
    if ($utmpx === false)
        break ;
    $who[] = unpack("a256user/a4id/a32tty/ipid/itype/Ltime", $utmpx);
}
//print_r($who);
foreach($who as $value)
{
    if ($value['user'] !== "utmpx-1.00" && $value['user'] != null && $value['type'] == 7)
        echo $value['user']." ".$value['tty']." ".date("M j H:i", $value['time'])."\n";
}


<?php

date_default_timezone_set("Europe/Moscow");
session_start();
if (!($_SESSION['loggued_on_user']))
    echo "ERROR\n";
else {
    if (file_exists('../private') && file_exists('../private/chat')) {
        $chat = unserialize(file_get_contents('../private/chat'));
        foreach ($chat as $key) {
            echo "[";
            echo date("H:i", $key['time']);
            echo "] ";
            echo "<b>";
            echo $key['login'];
            echo "</b>: ";
            echo $key['msg'];
            echo "<br />";
        }
    }
}

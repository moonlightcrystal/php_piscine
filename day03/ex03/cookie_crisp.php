<?php
 switch ($_GET["action"])
    {
        case ("set") :
            setcookie($_GET["name"], $_GET["value"], time() + 3600);
            break;
        case("del") :
            setcookie($_GET["name"], "", time() - 3600);
            break;
        case("get") :
            print $_COOKIE[$_GET["name"]] . "\n";
            break;

    }

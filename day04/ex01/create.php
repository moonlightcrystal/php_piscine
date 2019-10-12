<?php
    if($_POST['login'] && $_POST['passwd'] && $_POST["submit"] && $_POST["submit"] == 'OK') {
        if (!file_exists('../private'))
            mkdir('../private');
        if (!file_exists('../private/passwd'))
            file_put_contents('../private/passwd', null);
        $file = unserialize(file_get_contents("../private/passwd"));
        if ($file) {
            foreach ($file as $key) {
                if ($key["login"] === $_POST["login"])
                    $check = 1;
            }
        }
        if($check == 1)
            echo "ERROR\n";
        else {
            $all["login"] = $_POST["login"];
            $all["passwd"] = hash("sha384", $_POST["passwd"]);
            $file[] = $all;
            file_put_contents("../private/passwd", serialize($file));
            echo "OK\n";
        }
    }
    else
        echo "ERROR\n";
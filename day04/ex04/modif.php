<?php
    if($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] == 'OK') {
        $file = unserialize(file_get_contents("../private/passwd"));
        $check = 0;
        if ($file) {
            foreach ($file as $i => $key) {
                if ($key['login'] === $_POST['login'] && $key['passwd'] === hash("sha384", $_POST['oldpw']))
                    $check = 1;
                $file[$i]['passwd'] = hash("sha384", $_POST['newpw']);
            }
            if ($check == 1) {
                file_put_contents('../private/passwd', serialize($file));
                echo "OK";
            }
            else echo "ERROR\n";
        }
        else echo "ERROR\n";
    }
    else echo "ERROR\n";
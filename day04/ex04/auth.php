<?php
function auth($login, $passwd)
{
    if ($login === 0 && $passwd === 0)
        return (FALSE);
    $file = unserialize(file_get_contents("../private/passwd"));
    if (!file_exists('../private') && !file_exists('../private/passwd')) {
        return (FALSE);
    }
    if ($file) {
        foreach ($file as $key) {
            if ($key['login'] == $login && $key['passwd'] == hash("sha384", $passwd))
                return (TRUE);
        }
    }
}

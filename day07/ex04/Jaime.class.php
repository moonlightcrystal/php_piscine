<?php

include_once('Lannister.class.php');

Class Jaime extends Lannister {

    public function sleepWith($partner) {
        if (is_subclass_of($partner, 'Lannister')) {
            if (get_class($partner) == 'Cersei')
                print"With pleasure, but only in a tower in Winterfell, then.\n";
            else
                print"Not even if I'm drunk !\n";
        }
        else
            print"Let's do this.\n";
    }
}
​​

?>
<?php

include_once('Lannister.class.php');

Class Tyrion extends Lannister {
    public function sleepWith($partner) {
        if(is_subclass_of($partner, 'Lannister')) {
            print "Not even if I'm drunk !\n";
        }
        else
            print "Let's do this.\n";
    }
}
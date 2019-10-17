<?php
    
    Class Lannister {
        public function sleepWith($partner) {
            if (is_subclass_of($partner, 'Lannister')) {
                if (get_class($this) == 'Cersei') {
                   if(get_class($partner) == 'Jaime')
                        print"Let's do this.\n";
                }
                else
                    print"Not even if I'm drunk !\n";
            }
            else
                    print"Let's do this.\n";
        }
    }
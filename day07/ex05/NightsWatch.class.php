<?php

class NightsWatch {

    private $_members = [];

    public function recruit($name) {
        $this->_members[] = $name;
    }
    public function fight() {
        foreach($this->_members as $name) {
            if($name instanceof IFighter)
                $name->fight();
        }
    }

}
<?php

class Vertex {
    public static $verbose = false;

    private $_x = 0.0;
    private $_y = 0.0;
    private $_z = 0.0;
    private $_w = 1.0;
    private $_color;

    public static function doc(){
        if(file_exists("./Vertex.doc.txt")) {
            if(($instr = file_get_contents("./Vertex.doc.txt")))
                return($instr);
        }
    }

    public function __construct(array $kwargs) {

        if(array_key_exists('x', $kwargs))
        $this->_x = $kwargs[x];
        if(array_key_exists('y', $kwargs))
        $this->_y = $kwargs[y];
        if(array_key_exists('z', $kwargs))
        $this->_z = $kwargs[z];
        if(array_key_exists('w', $kwargs))
        $this->_w = $kwargs[w];
        if(array_key_exists('color', $kwargs))
        $this->_color = $kwargs[color];
        else {
            $this->_color = new Color(array('rgb' => 16777215));
        }

        if(Vertex::$verbose)
        print($this . " constructed.\n");

    }

    public function __toString() {
        $string = sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
        return($string);
    }

    public function __destruct() {
     
        if(Vertex::$verbose)
            print($this . " destructed.\n");
    }
}
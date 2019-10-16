<?php
class Color {
    public static $verbose = false;

    public $red = 0;
    public $green = 0;
    public $blue = 0;
    
    public static function doc(){
        if(file_exists('Color.doc.txt')) {
            if(($instr = file_get_contents('Color.doc.txt')))
                return($instr);
        }
    }

    public function __construct(array $kwargs) {

        if(array_key_exists('rgb', $kwargs)){
        $foo = (int)$kwargs['rgb'];
        $this->red = ($foo >> 16) & 255;
        $this->green = ($foo >> 8) & 255;
        $this->blue = $foo & 255;
        }
        else {
            if(array_key_exists('red', $kwargs))
                $this->red = (int)$kwargs['red'];
            if(array_key_exists('green', $kwargs))
                $this->green = (int)$kwargs['green'];
            if(array_key_exists('blue', $kwargs))
                $this->blue = (int)$kwargs['blue'];
        }
        if(Color::$verbose)
            print($this . " constructed.\n");
    }

    public function __toString() {
        $string = sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
        return($string);
    }

    public function add(Color $rhc) {
        $r = $this->red + $rhc->red;
        $g = $this->green + $rhc->green;
        $b = $this->blue + $rhc->blue;
        return(new Color(array('red' => $r, 'green' => $g, 'blue' => $b)));
    }

    public function sub(Color $rhc) {
        $r = $this->red - $rhc->red;
        $g = $this->green - $rhc->green;
        $b = $this->blue - $rhc->blue;
        return(new Color(array('red' => $r, 'green' => $g, 'blue' => $b)));
    }

    public function mult($f) {
        $r = $this->red * $f;
        $g = $this->green * $f;
        $b = $this->blue * $f;
        return(new Color(array('red' => $r, 'green' => $g, 'blue' => $b)));
    }

    public function __destruct() {
     
        if(Color::$verbose)
            print($this . " destructed.\n");
    }
}
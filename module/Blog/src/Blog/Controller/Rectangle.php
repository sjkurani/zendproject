<?php
namespace Blog\Controller;

class Rectangle
{
    private  $width;
    private  $height;
    public function __construct($wval,$hval) {
        $this->width = $wval;
        $this->height = $hval;
    }
    public function area() {
        return $this->width * $this->height;
    }
}


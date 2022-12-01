<?php

namespace Root\Html;

class RgbLighting
{
    private $red;
    private $green;
    private $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public function getRed()
    {
        return $this->red;
    }

    private function setRed($red)
    {
        if ($red < 0 || $red > 255){
            throw new \Exception('Недопутимый диапазон');
        }
        $this->red = $red;
    }

    public function getGreen()
    {
        return $this->green;
    }

    private function setGreen($green)
    {
        if ($green < 0 || $green > 255){
            throw new \Exception('Недопутимый диапазон');
        }
        $this->green = $green;
    }

    public function getBlue()
    {
        return $this->blue;
    }

    private function setBlue($blue)
    {
        if ($blue < 0 || $blue > 255){
            throw new \Exception('Недопутимый диапазон');
        }
        $this->blue = $blue;
    }

    public function equals($colorOne, $colorTwo): bool
    {
        return $colorOne == $colorTwo;
    }

    public static function randomColor()
    {
        return rand(0, 250);
    }

    public function mix(RgbLighting $color1): RgbLighting
    {
        $mixRed = ($color1->getRed() + $this->getRed())/2;
        $mixBlue = ($color1->getBlue() + $this->getBlue())/2;
        $mixGreen = ($color1->getGreen() + $this->getGreen())/2;
        return new RgbLighting($mixRed, $mixGreen, $mixBlue);
    }
}


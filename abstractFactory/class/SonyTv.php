<?php

namespace Hillel\abstractFactory\class;

use Hillel\abstractFactory\interface\TV;

class SonyTv implements TV
{
    public function getDescription()
    {
        echo 'I am SONY TV';
    }
}
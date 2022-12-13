<?php

namespace Hillel\abstractFactory\class;

use Hillel\abstractFactory\interface\TV;

class LgTv implements TV
{
    public function getDescription()
    {
        echo 'I am LG TV';
    }
}
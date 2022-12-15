<?php

namespace Hillel\abstractFactory\class;

use Hillel\abstractFactory\interface\ProductionTV;

class Lcd implements ProductionTV
{
    public function getDescription()
    {
        echo 'I create only LCD Tvs';
    }
}
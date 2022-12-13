<?php

namespace Hillel\abstractFactory\class;

use Hillel\abstractFactory\interface\ProductionTV;

class Led  implements ProductionTV
{
    public function getDescription()
    {
        echo 'I create only LED TVs';
    }
}
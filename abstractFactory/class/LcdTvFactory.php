<?php

namespace Hillel\abstractFactory\class;

use Hillel\abstractFactory\interface\TvFactory;
use Hillel\abstractFactory\interface\TV;
use Hillel\abstractFactory\interface\ProductionTV;

class LcdTvFactory implements TvFactory
{
    public function makeTV(): TV
    {
        return new SonyTv();
    }

    public function makeProductionTV(): ProductionTV
    {
        return new Lcd();
    }
}
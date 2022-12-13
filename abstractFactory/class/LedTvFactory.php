<?php

namespace Hillel\abstractFactory\class;

use Hillel\abstractFactory\interface\TvFactory;
use Hillel\abstractFactory\interface\TV;
use Hillel\abstractFactory\interface\ProductionTV;
class LedTvFactory implements TvFactory
{
    public function makeTV(): TV
    {
        return new LgTv();
    }

    public function makeProductionTV(): ProductionTV
    {
        return new Led();
    }
}
<?php

namespace Hillel\abstractFactory\interface;

interface TvFactory
{
    public function makeTV(): TV;
    public function makeProductionTV(): ProductionTV;
}
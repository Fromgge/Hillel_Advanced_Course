<?php

namespace Hillel\Src;
interface BirdInterface
{
    public function eat();
}
interface BirdFlyInterface
{
    public function fly();
}

interface BirdWalkingInterface
{
    public function Walking();
}

class Swallow implements BirdInterface, BirdFlyInterface, BirdWalkingInterface
{
    public function eat(): string
    {
        return 'worm';
    }
    public function fly()
    {
        return 'speed 200 km/h';
    }

    public function Walking()
    {
        return '0.05km/h';
    }
}

class Ostrich implements BirdInterface, BirdWalkingInterface
{
    public function eat(): string
    {
        return 'Lizard, Flowers';
    }
    public function walking(): string
    {
        return '20km/h';
    }
}
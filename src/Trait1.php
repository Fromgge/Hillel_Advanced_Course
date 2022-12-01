<?php

namespace Hillel\Src;

trait Trait1
{
    public function test():int
    {
        return 1;
    }
}

trait Trait2
{
    public function test():int
    {
        return 2;
    }
}

trait Trait3
{
    public function test():int
    {
        return 3;
    }
}

class Test
{
    use Trait1, Trait2, Trait3 {
        Trait1::test insteadof Trait2, Trait3;
        Trait1::test as Trait1;
        Trait2::test as Trait2;
        Trait3::test as Trait3;
    }

    public function getSum($one, $two, $three):int
    {
        return $one + $two + $three;
    }
}

$objTrait = new Test();
var_dump($objTrait->getSum($objTrait->Trait1(), $objTrait->Trait2(), $objTrait->Trait3()));
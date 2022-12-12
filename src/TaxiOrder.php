<?php

namespace Hillel\Src;

class TaxiFactory
{
    protected $car;

    public function creationOrder($model)
    {
        switch ($model) {
            case 'Econom':
                return $this->car = new Econom();
                break;
            case 'Standart':
                return $this->car = new Standart();
                break;
            case 'Lux':
                return $this->car = new Lux();
            break;
        }

    }
}

class CarOrder
{
    protected $carOrders;
    protected $car;
    public function __construct()
    {
        $this->car = new TaxiFactory();
    }

    public function order($model)
    {
        $car = $this->car->creationOrder($model);
        $this->carOrders = $car->getModel() . ' ' . $car->getCost();
    }

    public function getCarOrders()
    {
        return $this->carOrders;
    }
}

interface TransportTaxi
{
    public function getModel();
    public function getCost();
}

class Econom implements TransportTaxi
{
    public string $model = 'Lada';
    public int $cost = 90;

    public function getModel(): string
    {
        return $this->model;
    }

    public function getCost(): int
    {
        return $this->cost;
    }
}

class Standart implements TransportTaxi
{
    public string $model = 'Hyundai';
    public int $cost = 140;

    public function getModel(): string
    {
        return $this->model;
    }

    public function getCost(): int
    {
        return $this->cost;
    }
}

class Lux implements TransportTaxi
{
    public string $model = 'Mercedes Maybach';
    public int $cost = 500;

    public function getModel(): string
    {
        return $this->model;
    }

    public function getCost(): int
    {
        return $this->cost;
    }
}

$carOrder = new CarOrder();

$carOrder->order('Econom');
print_r($carOrder->getCarOrders());
echo '<br>';
$carOrder->order('Standart');
echo '<br>';
print_r($carOrder->getCarOrders());
echo '<br>';
$carOrder->order('Lux');
echo '<br>';
print_r($carOrder->getCarOrders());

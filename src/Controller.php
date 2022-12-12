<?php

namespace Hillel\Src;

interface ShowInfoDatabaseInterface
{
    public function getData(): string;
}

class MySQL implements ShowInfoDatabaseInterface {
    public function getData(): string
    {
        return "some data from database";
    }
}

class Controller
{
    private $adapter;

    public function __construct(ShowInfoDatabaseInterface $database)
    {
        $this->adapter = $database;
    }

    public function getData(): string
    {
        return $this->adapter->getData();
    }
}

$objDatabase = new Controller(new MySQL());
var_dump($objDatabase);
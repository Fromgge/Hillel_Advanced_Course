<?php

namespace Hillel\Src;

class User extends \Exception
{
    private $name;
    private $age;
    private $email;

    public function __call($method, $arguments)
    {

        if (!method_exists($this, $method)){
            try {
                throw new \Exception('Method Can not use');
            } catch (\Exception $e) {
                print_r($e->getMessage());
            }
        }else{
            return call_user_func_array(array($this, $method    ), $arguments);
        }
    }


    private function setName($name): void
    {
        $this->name = $name;
    }

    private function setAge($age): void
    {
        $this->age = $age;
    }

    public function getAll(): mixed
    {
        return $this->name . ' ' . $this->age . ' ' . $this->email;
    }
}

class MyException extends \Exception {}

$objUser = new User();

$objUser->setAge(25);
$objUser->setName('Nikita');
$objUser->Email('gapjames1@gmail.com');
echo '<pre>';
print_r($objUser->getAll());
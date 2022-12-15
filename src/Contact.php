<?php

namespace Hillel\Src;

class Contact {
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;

    public function __construct(ContactBuilder $builder)
    {
        $this->name = $builder->name;
        $this->surname = $builder->surname;
        $this->email = $builder->email;
        $this->phone = $builder->phone;
        $this->address = $builder->address;
    }
}

class ContactBuilder {
    public $name;
    public $surname;
    public $email;
    public $phone;
    public $address;

//    public function __construct($name, $surname, $email, $phone, $address)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//        $this->email = $email;
//        $this->phone = $phone;
//        $this->address = $address;
//    }

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addSurname($surname)
    {
        $this->surname = $surname;
    }

    public function addEmail($email)
    {
        $this->email = $email;
    }

    public function addPhone($phone)
    {
        $this->phone = $phone;
    }

    public function addAddress($address)
    {
        $this->address = $address;
    }

    public function build(): Contact
    {
        return new Contact($this);
    }
}


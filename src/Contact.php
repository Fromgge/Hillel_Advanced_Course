<?php

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

class ContactBuilder
{
    public $name;
    public $surname;
    public $email;
    public $phone;
    public $address;

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setSurName($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function build(): Contact
    {
        return new Contact($this);
    }
}

$contact = new ContactBuilder();

$newContact = $contact->setPhone('000-555-000')
    ->setName("John")
    ->setSurname("Surname")
    ->setEmail("john@email.com")
    ->setAddress("Some address")
    ->build();
echo '<pre>';
var_dump($newContact);
echo '</pre>';
<?php

namespace app;

class User
{

    public string $name;
    public int $age;
    public string $gender;


    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function callName()
    {
        echo "My name is " . $this->name . "<br>";
    }

    public function listInfo()
    {
        $info = array(
            'name' => $this->name,
            'age' => $this->age,
            'gender' => $this->gender
        );

        return var_dump($info);
    }
}
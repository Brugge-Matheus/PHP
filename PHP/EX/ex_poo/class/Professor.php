<?php
include 'Pessoa.php';

class Teacher extends Person{
    private $idTeacher;
    private $matter;

    public function __construct($name, $age, $gender, $cpf, $favorite) {
        $this->completeName = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->cpf = $cpf;
        $this->defineFavoriteLanguage($favorite);
    }


    
    
    
         
        
    
}


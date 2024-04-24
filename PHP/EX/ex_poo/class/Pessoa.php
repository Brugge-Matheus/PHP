<?php 
interface BasePerson {
    public function apresentation();
    public function defineFavoriteLanguage($favorite);
}

class Person implements BasePerson {
    public $completeName;
    public $age;
    public $gender;
    public $cpf;
    public $favoriteLanguage = array('Java', 'C#', 'Php', 'Javascript', 'Cobol');

    public function apresentation() 
    {
        echo "Name: " .$this->completeName ."\nAge: " .$this->age ."\nGender: " .$this->gender ."\n";
    }

    public function defineFavoriteLanguage($favorite) 
    {
        if(in_array($favorite, $this->favoriteLanguage)) {
            return $favorite;
        }
    }
}

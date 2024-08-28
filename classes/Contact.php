<?php
declare(strict_types=1);



class Contact{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $birthdate;
    public bool $related;
    public int $value;
    public string $defaultValue= 'Standartwert';

    function __construct($contactArrayInput)
    {
        $this->firstname = $contactArrayInput['firstname'];
        $this->lastname = $contactArrayInput['lastname']; 
        $this->email = $contactArrayInput['email']; 
        $this->birthdate = $contactArrayInput['birthdate']; 
        $this->related = $contactArrayInput['related']; 
        $this->value = $contactArrayInput['value'];    
    }

    function getFullname(){
        $fullname= $this->firstname." ".$this->lastname;
        return $fullname;
    }

}

?>

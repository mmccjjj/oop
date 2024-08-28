<?php

declare(strict_types=1);



class Contact
{
    protected string $firstname;
    protected string $lastname;
    protected string $email;
    protected DateTime $birthdate;
    protected bool $related;
    protected int $value;
    protected string $defaultValue = 'Standartwert';

    function __construct($contactArrayInput)
    {
        $this->firstname = $contactArrayInput['firstname'];
        $this->lastname = $contactArrayInput['lastname'];
        $this->setEmail($contactArrayInput['email']);
        $this->setBirthdate($contactArrayInput['birthdate']);
        $this->related = $contactArrayInput['related'];
        $this->value = $contactArrayInput['value'];
    }

    function getFullname()
    {
        $fullname = $this->firstname . " " . $this->lastname;
        return $fullname;
    }

    function notifyByEmail($subject, $message)
    {
        return 'Betreff: ' . $subject . 'mail: ' . $this->email . ': ' . 'Hallo ' . $this->getFullname() . ', ' . $message . '. Freundliche Grüsse';
    }

    function setEmail($email)
    {
        if ((filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $this->email = $email;
        } else {
            $this->email = "";
        }
    }

    function setBirthdate($date)
    {
        $dateTimeOb = new DateTime($date);
        if ($dateTimeOb < new DateTime()) {
            $this->birthdate = $dateTimeOb;
        } else {
            $this->birthdate = "";
        }
    }

    function getBirthdateInSwissFormat()
    {

        return  $this->birthdate->format('d.m.Y');
    }
}

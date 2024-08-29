<?php

declare(strict_types=1);

include __DIR__ . '/Contact.php';

class FamilyMember extends Contact
{
    protected string $familyRole;
    protected bool $isEmergencyContact;

    function __construct($contactArrayInput)
    {
        parent::__construct($contactArrayInput);
        $this->familyRole = $contactArrayInput['role'];
        $this->isEmergencyContact = $contactArrayInput['isEmergencyContact'];
    }


    function setFamilyRole($familyRole)
    {
        $this->familyRole = $familyRole;
    }

    function setIsEmergancyContact($emergency)
    {
        $this->isEmergencyContact = $emergency;
    }

    function shareASecret($secret)
    {
        $split = str_split($secret);
        shuffle($split);

        return "Mein Geheimnis ist: " . implode($split);
    }

    function notifyByEmail($subject, $message)
    {
        return 'Betreff: ' . $subject . 'mail: ' . $this->email . ': ' . 'Hallo ' . $this->getFullname() . ', ' . $message . '. Test';
    }
}

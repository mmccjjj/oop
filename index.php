<?php

include __DIR__ . '/classes/Contact.php';

$contactArray= [

    "person1"=> [
                    "firstname"=> "Emil",
                    "lastname"=> "Baumgartner",
                    "email"=> "email.baumgartner@opportunity-zuerich.ch",
                    "birthdate"=> "01.01.1990",
                    "related"=> true,
                    "value"=> 8,
                ],
    "person2"=> [
                    "firstname"=> "Ben",
                    "lastname"=> "Müller",
                    "email"=> "ben.müller@opportunity-zuerich.ch",
                    "birthdate"=> "06.06.1988",
                    "related"=> false,
                    "value"=> 4,
                ],
    "person3"=> [
                    "firstname"=> "Hans",
                    "lastname"=> "Meyer",
                    "email"=> "hans.meyer@opportunity-zuerich.ch",
                    "birthdate"=> "12.12.1988",
                    "related"=> false,
                    "value"=> 6,
                ],

];
// hans.meyer@opportunity-zuerich.ch
$contactPerson1= new Contact($contactArray["person1"]);



/* $contactPerson2= new Contact($contactArray["person2"]);

if ($contactPerson2== $contactPerson1){
    echo "<p>Sind Gleich</p>";
}else {
    echo "<p>Sind nicht gleich</p>";
} */


//var_dump($contactPerson2->notifyByEmail("Test", "Test Nachricht"));

$contactPerson3= new Contact($contactArray["person3"]);

var_dump($contactPerson3->getBirthdateInSwissFormat());



?>


<?php
$mois = [
    'jan' => 'janvier',
    'fev' => 'fevrier',
    'mar' => 'mars',
    'avr' => 'avril',
    'mai' => 'mai',
    'jui' => 'juin',
    'juil' => 'juillet',
    'aou' => 'aout',
    'sept' => 'septembre',
    'oct' => 'octobre',
    'nov' => 'novembre',
    'dec' => 'decembre'
];


$moisObject = (object) $mois ;

var_dump($moisObject);

$date = new DateTime('c');

var_dump($date);

<?php
// File : musketeer.php
require_once("data.php");

//  we add data 
array_push($data, [
    'id' => 5,
    'name' => 'Albert',
    'strength' => 12,
    'agility' => 12,
    'intelligence' => 12,
    'tribe' => 'de Parmagnan',
    'class' => 'mousquetaire'
]);
//  display all the data
function getData($data) {
    foreach ($data as $key => $value) {
        echo "Name : " . $value['name'] . '<br/>';
        echo "Strength : " . $value['strength'] . '<br/>';
        echo "Agility : " . $value['agility'] . '<br/>';
        echo "Intelligence : " . $value['intelligence'] . '<br/>';
        echo "Tribe : " . $value['tribe'] . '<br/>';
        echo "Class : " . $value['class'] . '<br/>';
        echo '<br/>';
    }
}
// display data from an id
function getDataId($id, $data) {
    foreach ($data as $key => $value) {
        if ($value['id'] == $id) {
            echo "Name : " . $value['name'] . '<br/>';
            echo "Strength : " . $value['strength'] . '<br/>';
            echo "Agility : " . $value['agility'] . '<br/>';
            echo "Intelligence : " . $value['intelligence'] . '<br/>';
            echo "Tribe : " . $value['tribe'] . '<br/>';
            echo "Class : " . $value['class'] . '<br/>';
            echo '<br/>';
        }
    }
}
// Function to display the Bearn mousquetaire
function getBearn($data){
    echo "Ce personnage n'existe pas <br>";
    $Béarn = array_map(function($data){
        if ($data['tribe'] === 'Béarn'){
            return $data;
        }
    }, $data);
    echo "Les personnages du Béarn sont : ";
    foreach ($Béarn as $key => $value) {
        if ($value != null){
            echo $value['name'] . ', '. '<br>';
        }
    }
}
// display the data with intelligence minimum
function getMinIntelligence($data){
    $intelligence = array_map(function($data){
        if ($data['intelligence'] >= $_GET['int_min']){
            return $data;
        }
    }, $data);
    echo "Les personnages avec une intelligence supérieur ou égale à ". $_GET['int_min'] ." sont : ";
    foreach ($intelligence as $key => $value) {
        if ($value != null){
            echo $value['name'] . ', ';
        }
    }
}
// We call the function
if ( isset($_GET['id']) ) {
    getDataId($_GET['id'],$data);
} else {
    getData($data);
    getBearn($data);
    if (isset($_GET['int_min'])) {
        getMinIntelligence($data);
    }
}


?>
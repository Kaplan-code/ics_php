<?php
function install($path, $name){
    $file = file_get_contents($path);
    $var = 'sqlite:'.$name;
    try{
        $con = new PDO($var);
    }catch (PDOException $e){
        echo $e->getCode().' '.$e->getMessage();
    }

    $con->exec($file);
}

function getCharacters($nameDB){
    $var = 'sqlite:'.$nameDB;
    try{
        $con = new PDO($var);
    }catch (PDOException $e){
        echo $e->getCode().' '.$e->getMessage();
    }

    $queries = 'SELECT * FROM characters;';

    foreach ($con->query($queries) as $row) {
        var_dump($row);
    }
}

function getCharactersFromName($nameDB, $name){
    $var = 'sqlite:'.$nameDB;
    try{
        $con = new PDO($var);
    }catch (PDOException $e){
        echo $e->getCode().' '.$e->getMessage();
    }

    $queries = 'SELECT * FROM characters WHERE name="'.$name.'";';

    foreach ($con->query($queries) as $row) {
        var_dump($row);
    }

}

function setClassCharacters($nameDB, $name, $class){
    $var = 'sqlite:'.$nameDB;
    try{
        $con = new PDO($var);
    }catch (PDOException $e){
        echo $e->getCode().' '.$e->getMessage();
    }

    $query = 'UPDATE characters SET class = "'.$class.'" WHERE name="'.$name.'";';
    
    foreach ($con->query($query) as $row) {
        var_dump($row);
    }

}

// install('create_base.sql', 'tp.db');
// getCharacters('tp.db');
// getCharactersFromName('tp.db','Robin');
// setClassCharacters('tp.db','Robin', 'warrior' );
// getCharactersFromName('tp.db','Robin');
?>

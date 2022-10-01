<?php
require_once('data.php');

if (!(isset($data[5]))) {
    array_push($data, [
        5 => [
            'id' => 5,
            'name' => 'Albert',
            'strength' => 12,
            'agility' => 12,
            'intelligence' => 12,
            'tribe' => 'Béarn',
            'class' => 'mousquetaire'
        ]
    ])    ;
}


function getData($id, $data){
    if (isset($data[$id])) {
        var_dump($data[$id]);
    }else {
        echo 'id:'.$id.' not found';
    }
}

function getBearn($data){
    for ($i=1; $i < count($data)+1; $i++) { 
        if ($data[$i]['tribe'] == 'Béarn') {
           var_dump($data[$i]);
     }    
    }
}

if (isset($_GET['id'])) {
  getData($_GET['id'], $data);
//   var_dump($data[$_GET['id']]);
}
elseif (isset($_GET['int_min'])) {
     for ($i=1; $i < count($data)+1; $i++) { 
        if ($data[$i]['intelligence'] >= $_GET['int_min']) {
            var_dump($data[$i]);
        }
    }
}
else {
    // for ($i=1; $i < count($data)+1; $i++) { 
    //     if ($data[$i]['tribe'] == 'Béarn') {
    //        var_dump($data[$i]);
    //  }  
    //     // var_dump($data[$i]['tribe']);
    // }

    $bearn = array_map(function($data){
        if ($data['tribe'] === 'Béarn') {
            return $data;
        }      
    }, $data);

    var_dump($bearn);
}

?>
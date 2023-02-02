<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    // 1. devo leggere il contenuto del json
    $string = file_get_contents('to-do-list.json');

    // 2. devo tradurre il json per php, quindi in array associativo

    $todo_list = json_decode($string, true);

    echo isset($_POST['addedTask'])

    if(isset($_POST['addedTask'])){
        $obj = [
            "language" => $_POST['addedTask'],
            "done" => false
        ];
        $todo_list[] = $obj;
        file_put_contents('./to-do-list.json', json_encode($todo_list));
    }

    header('Content-Type: application/json');
    echo json_encode($todo_list);

?>
<?php
    header('Content-type: application/json');
    $data = file_get_contents('todo-list.json');
    $dataArray = json_decode($data, true);
    $dataJson = json_encode($dataArray);

    echo $dataJson
?>
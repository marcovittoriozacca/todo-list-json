<?php

    $list_string = file_get_contents("../todo.json");
    $todolist = json_decode($list_string, true);
    

    if(isset($_POST['todoItem'])){
        if(count($todolist) < 1){
            $itemId = 1;
        }else{
            end($todolist);
            $ultimoElemento = current($todolist);
            $itemId = $ultimoElemento[key($ultimoElemento)] + 1;
        }
        $item = [
            "id" => $itemId,
            "task" => $_POST['todoItem']
        ];

        array_push($todolist, $item );
        file_put_contents("../todo.json", json_encode($todolist));
    }

    

    if(isset($_GET['id']) && $_GET['id'] >= 0){
        $useId = $_GET['id'];
        $todolist = array_filter($todolist, function($element) use ($useId) { return $element['id'] == $useId;  });
        header('Content-Type: application/json');
        echo json_encode($todolist);

    }else{
        header('Content-Type: application/json');
        echo json_encode($todolist);
    }

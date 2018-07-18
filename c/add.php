<?php


if(count($_POST) > 0){
    $name = trim($_POST['name']);
    $text = trim($_POST['text']);

    if(messages_add($name, $text)){
        header("Location: index.php");
        exit();
    }
    else{
        $error = messages_last_error();
    }
}
else{
    $name = '';
    $text = '';
    $error = '';
}

$title = 'Add Articles';

$inner = template('v_add', [
    'name' => $name,
    'text' => $text,
    'msg' => $error
]);






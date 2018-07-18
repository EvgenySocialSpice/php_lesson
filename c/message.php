<?php


$id = $_GET['id'] ?? '';

$message = messages_one($id);

if($message !== false){
    $title = 'Article : ' . $message['name'];
    $inner = template('v_message', ['message' => $message]);
}
else {
    $title = 'Error 404';
    $inner = template('v_404');
}


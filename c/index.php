<?php

    $messages = messages_all();

$template = (isset($_GET['view']) && $_GET['view'] == 'table') ?
    'index_table' :
    'index';

    $title = 'Learning PHP - course I and II';
    $inner = template("v_$template", ['messages' => $messages]);












<?php

include_once 'm/db.php';
include_once 'm/messages.php';
include_once 'm/system.php';

//session_start();

    $controller = $_GET['c'] ?? 'index';

    include_once ("c/{$controller}.php");
    $html = template('v_main', [
        'title' => $title, 'content' => $inner
    ]);

    echo $html;










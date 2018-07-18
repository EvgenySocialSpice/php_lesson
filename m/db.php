<?php

function dbConnect(){
    static $db;

    if($db === null){
        $db = new PDO('mysql:host=localhost;dbname=coursesphp', 'root', '');
        $db->exec('SET NAMES UTF8');
    }

    return $db;
}

    function dbQuery($sql, $params = []){
        $db = dbConnect();

        $query = $db->prepare($sql);
        $query->execute($params);

        dbCheckError($query);

        return $query;
    }

    function dbCheckError($query){
        $info = $query->errorInfo();

        if($info[0] != PDO::ERR_NONE){
            echo $info[2];
            exit();
        }
    }
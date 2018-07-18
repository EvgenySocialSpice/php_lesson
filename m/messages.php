<?php

function messages_all(){
    $query = dbQuery("SELECT * FROM messages ORDER BY dt DESC");
    return $query->fetchAll();
}

function messages_add($name, $text){
    if(!messages_validation($name, $text)){
        return false;
    }

    dbQuery("INSERT INTO messages (name, text) VALUES (:n, :t)", [
        'n' => $name,
        't' => $text
    ]);

    return true;
}

function messages_one($id){
    $query = dbQuery("SELECT * FROM messages WHERE id_message = :id", [
        'id' => $id
    ]);

    return $query->fetch();
}

function messages_validation($name, $text){
    $ok = true;

    if($name == ''){
        messages_last_error('Введите имя!');
        $ok = false;
    }
    elseif($text == ''){
        messages_last_error('Введите текст!');
        $ok = false;
    }

    return $ok;
}

/*
    messages_last_error($msg) - установит $msg как текст последней ошибки
    messages_last_error() - вернёт текст последней ошибки

 */
function messages_last_error($msg = null){
    static $lastError;

    if($msg !== null){
        $lastError = $msg;
    }

    return $lastError;
}
<?php

function template($pathToTemplateVeryLongName, $vars = []){
    extract($vars);
    ob_start();
    include "v/{$pathToTemplateVeryLongName}.php";
    return ob_get_clean();
}


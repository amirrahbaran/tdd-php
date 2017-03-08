<?php

/**
 * @param $class
 */
function __autoload($class) {
    $class = "classes\\" . str_replace("\\", "/", $class) . ".class.php";
    if (isset($class) && file_exists($class)) {
        /** @noinspection PhpIncludeInspection */
        require_once($class);
    }
}

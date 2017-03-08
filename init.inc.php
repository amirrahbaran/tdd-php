<?php

/**
 * @param $class
 */
function __autoload($class) {
    echo "\n";
    echo $class."\n";
    $class = "classes\\" . str_replace("\\", "/", $class) . ".class.php";
    echo $class."\n";
    if (isset($class) && file_exists($class)) {
        /** @noinspection PhpIncludeInspection */
        require_once($class);
    }
}

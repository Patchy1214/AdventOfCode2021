<?php
$path = ltrim($_SERVER['REQUEST_URI'], '/');

if(file_exists('./days/' . $path . '.php')) {
    require_once 'days/' . $path . '.php';
}

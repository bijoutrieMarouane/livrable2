<?php
session_start();
include_once 'config/config.php';


spl_autoload_register(function ($inc){
    include_once 'libraries/'.$inc.'.php';
});

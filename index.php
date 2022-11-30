<?php

use Steampixel\Route;

require_once('config.php');
require_once('User.class.php');

Route::add('/',function() {
    echo "strona główna";
});

Route::run('/loginform');
?>
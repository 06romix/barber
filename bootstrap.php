<?php
spl_autoload_register(function ($name) {
    require str_replace('\\', '/', "$name.php");
});

define('BP', __DIR__);

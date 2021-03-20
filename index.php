<?php
require 'bootstrap.php';

$action = $_GET['action'] ?? '';

$dbAdapter = new \App\DbAdapter();

switch ($action) {
    case 'add':
        $actionInstance = new \Action\RegisterNewBarber($dbAdapter);
        break;
    case 'remove':
        $actionInstance = new \Action\RemoveBarber($dbAdapter);
        break;
}

$actionInstance->execute($_POST);

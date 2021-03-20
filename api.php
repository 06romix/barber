<?php
require 'bootstrap.php';

$action = $_GET['action'] ?? '';

$dbAdapter = new \App\DbAdapter();
switch ($action) {
    case 'listOfBarbers':
        $actionInstance = new \Action\GetBarbers(new \App\BarberRepository($dbAdapter));
        break;
}

echo json_encode($actionInstance->execute());

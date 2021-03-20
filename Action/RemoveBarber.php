<?php
/**
 * @package     Plumrocket_magento2.4.0
 * @copyright   Copyright (c) 2021 Plumrocket Inc. (https://www.plumrocket.com)
 * @license     https://www.plumrocket.com/license/  End-user License Agreement
 */

declare(strict_types=1);

namespace Action;

class RemoveBarber
{
    /**
     * @var \App\DbAdapter
     */
    private $dbAdapter;

    public function __construct(\App\DbAdapter $dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
    }

    public function execute(array $data)
    {
        echo 'тут може бути ваша реклама';
//        $dsn = 'mysql:dbname=plumserverplumserver_m2d6;host=127.0.0.1';
//        $user = 'plumserver_m2';
//        $password = 'NqgDTj_04';
//
//        $pdo = new \PDO($dsn, $user, $password);
//
//        $pdo->query("INSERT INTO `barber` (`name`, `phone`) VALUES ('" . $data['name'] . "', '" . $data['phone'] . "')");
//
//        header('Location: ' . 'https://magento2.plumserver.com/dev6/barber/');
    }
}

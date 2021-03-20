<?php
declare(strict_types=1);

namespace App;

class DbAdapter
{
    private $pdo;

    public function getPdo(): \PDO
    {
        if (null === $this->pdo) {
            $config = require BP . '/etc/env.php';
            $dsn = "mysql:dbname={$config['db']['dbname']};host={$config['db']['host']}";
            $this->pdo = new \PDO($dsn, $config['db']['username'], $config['db']['password']);
        }

        return $this->pdo;
    }
}

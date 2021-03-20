<?php
/**
 * @package     Plumrocket_test
 * @copyright   Copyright (c) 2021 Plumrocket Inc. (https://www.plumrocket.com)
 * @license     https://www.plumrocket.com/license/  End-user License Agreement
 */

declare(strict_types=1);

namespace App;

class BarberRepository implements BarberRepositoryInterface
{
    /**
     * @var \App\DbAdapter
     */
    private $dbAdapter;

    public function __construct(\App\DbAdapter $dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
    }

    /**
     * @inheritDoc
     */
    public function getList(): array
    {
        $stmt = $this->dbAdapter->getPdo()->query("SELECT * FROM `barber`");

        return array_map(function ($barberRow) {
            return new \App\Barber($barberRow['name']);
        }, $stmt->fetchAll());
    }
}

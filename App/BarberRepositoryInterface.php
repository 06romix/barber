<?php
declare(strict_types=1);

namespace App;

interface BarberRepositoryInterface
{
    /**
     * @return \App\BarberInterface[]
     */
    public function getList(): array;
}

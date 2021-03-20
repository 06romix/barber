<?php
declare(strict_types=1);

namespace Action;

class RegisterNewBarber
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
        $this->dbAdapter
            ->getPdo()
            ->query("INSERT INTO `barber` (`name`, `phone`) VALUES ('" . $data['name'] . "', '" . $data['phone'] . "')");

        header('Location: ' . 'https://magento2.plumserver.com/dev6/barber/');
    }
}

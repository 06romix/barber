<?php
declare(strict_types=1);

namespace Action;

class GetBarbers
{
    /**
     * @var \App\BarberRepositoryInterface
     */
    private $barberRepository;

    public function __construct(\App\BarberRepositoryInterface $barberRepository)
    {
        $this->barberRepository = $barberRepository;
    }

    public function execute(): array
    {
        $barbers = $this->barberRepository->getList();

        $result = [];
        foreach ($barbers as $barber) {
            $result[] = [
                'name' => $barber->getName(),
            ];
        }

        return $result;
    }
}

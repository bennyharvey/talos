<?php

namespace App\Factories;

use App\DTOs\BaseStationDTO;
use App\Entities\BaseStation;

class BaseStationFactory
{
    public function build(BaseStationDTO $dto): BaseStation
    {
        return new BaseStation(
            name: $dto->name
        );
    }
}

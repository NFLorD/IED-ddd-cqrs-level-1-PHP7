<?php

namespace FleetManager\App\Query;

use FleetManager\Domain\Model\Vehicle;
use FleetManager\Infra\VehicleRepository;

class AddVehicle
{
    public function __invoke(Vehicle $vehicle)
    {
        return VehicleRepository::insert($vehicle);
    }
}
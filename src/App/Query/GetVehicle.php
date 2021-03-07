<?php

namespace FleetManager\App\Query;

use FleetManager\Infra\VehicleRepository;

class GetVehicle
{
    public function __invoke(int $id)
    {
        $vehicle = false;
        
        try {
            $vehicle = VehicleRepository::get($id);
        } catch (\Exception $exception) { }

        return $vehicle;
    }
}
<?php

namespace FleetManager\Domain\Model;

class Fleet
{
    protected $vehicles = [];

    public function addVehicle(Vehicle $vehicle)
    {
        if (isset($this->vehicles[$vehicle->getId()])) {
            return false;
        }

        $this->vehicles[$vehicle->getId()] = $vehicle;
        return true;
    }

    public function getVehicle(int $id)
    {
        return $this->vehicles[$id] ?? false;
    }
}
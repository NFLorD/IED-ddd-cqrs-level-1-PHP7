<?php

namespace FleetManager\Infra;

use FleetManager\Domain\Model\Vehicle;

/**
 * Made it all static, as we don't have a container system yet,
 * and as models are only saved in memory for the moment being.
 */
class VehicleRepository
{
    protected static $vehicles = [];

    public static function get(int $id)
    {
        if (!isset(self::$vehicles[$id])) {
            throw new \Exception('Vehicle #'.$id.' does not exist.');
        }

        return self::$vehicles[$id];
    }

    public static function find(int $id)
    {
        return self::$vehicles[$id] ?? null;
    }

    public static function insert(Vehicle $vehicle)
    {
        $vehicle->setId(count(self::$vehicles) + 1);
        self::$vehicles[$vehicle->getId()] = $vehicle;
        return $vehicle->getId();
    }
}
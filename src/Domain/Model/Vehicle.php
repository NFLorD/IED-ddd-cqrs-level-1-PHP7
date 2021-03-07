<?php

namespace FleetManager\Domain\Model;

use FleetManager\Domain\Value\Location;

class Vehicle
{
    protected $id;
    protected $location;

    public function __construct(Location $location)
    {
        $this->location = $location;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): Vehicle
    {
        $this->id = $id;

        return $this;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function setLocation(Location $location): Vehicle
    {
        $this->location = $location;
        
        return $this;
    }
}
<?php

namespace FleetManager\Domain\Value;

class Location
{
    protected $latitude;
    protected $longitude;

    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}
<?php

namespace Davispeixoto\OpenTravelAlliance\GroundShuttleType\VehicleAType;

use Davispeixoto\OpenTravelAlliance\ListVehSizeType;

/**
 * Class representing VehicleSizeAType
 */
class VehicleSizeAType extends ListVehSizeType
{

    /**
     * The maximum person capacity of the shuttle.
     *
     * @property integer $maxPassengerCapacity
     */
    private $maxPassengerCapacity = null;

    /**
     * The maximum per person baggage capacity of the shuttle.
     *
     * @property integer $maxBaggageCapacity
     */
    private $maxBaggageCapacity = null;

    /**
     * Gets as maxPassengerCapacity
     *
     * The maximum person capacity of the shuttle.
     *
     * @return integer
     */
    public function getMaxPassengerCapacity()
    {
        return $this->maxPassengerCapacity;
    }

    /**
     * Sets a new maxPassengerCapacity
     *
     * The maximum person capacity of the shuttle.
     *
     * @param integer $maxPassengerCapacity
     * @return self
     */
    public function setMaxPassengerCapacity($maxPassengerCapacity)
    {
        $this->maxPassengerCapacity = $maxPassengerCapacity;

        return $this;
    }

    /**
     * Gets as maxBaggageCapacity
     *
     * The maximum per person baggage capacity of the shuttle.
     *
     * @return integer
     */
    public function getMaxBaggageCapacity()
    {
        return $this->maxBaggageCapacity;
    }

    /**
     * Sets a new maxBaggageCapacity
     *
     * The maximum per person baggage capacity of the shuttle.
     *
     * @param integer $maxBaggageCapacity
     * @return self
     */
    public function setMaxBaggageCapacity($maxBaggageCapacity)
    {
        $this->maxBaggageCapacity = $maxBaggageCapacity;

        return $this;
    }


}


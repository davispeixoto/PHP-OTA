<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType;

/**
 * Class representing OneWayDropLocationsAType
 */
class OneWayDropLocationsAType
{

    /**
     * Location where a one way drop is allowed.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[]
     * $oneWayDropLocation
     */
    private $oneWayDropLocation = null;

    /**
     * Adds as oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType
     * $oneWayDropLocation
     */
    public function addToOneWayDropLocation(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType $oneWayDropLocation
    ) {
        $this->oneWayDropLocation[] = $oneWayDropLocation;

        return $this;
    }

    /**
     * isset oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOneWayDropLocation($index)
    {
        return isset($this->oneWayDropLocation[$index]);
    }

    /**
     * unset oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOneWayDropLocation($index)
    {
        unset($this->oneWayDropLocation[$index]);
    }

    /**
     * Gets as oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[]
     */
    public function getOneWayDropLocation()
    {
        return $this->oneWayDropLocation;
    }

    /**
     * Sets a new oneWayDropLocation
     *
     * Location where a one way drop is allowed.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[]
     * $oneWayDropLocation
     * @return self
     */
    public function setOneWayDropLocation(array $oneWayDropLocation)
    {
        $this->oneWayDropLocation = $oneWayDropLocation;

        return $this;
    }


}


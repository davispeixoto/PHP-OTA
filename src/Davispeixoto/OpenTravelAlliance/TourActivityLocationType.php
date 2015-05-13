<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityLocationType
 *
 * Location information for the tour and/or activity.
 * XSD Type: TourActivityLocationType
 */
class TourActivityLocationType
{

    /**
     * The local time zone in which the tour/activity departs and or starts.
     *
     * @property string $timeZone
     */
    private $timeZone = null;

    /**
     * Identifies the physical address of the tour departure and/or activity location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityLocationType\AddressAType
     * $address
     */
    private $address = null;

    /**
     * Describes regional information, which may include an island.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityLocationType\RegionAType
     * $region
     */
    private $region = null;

    /**
     * Describes geocoding information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityLocationType\PositionAType
     * $position
     */
    private $position = null;

    /**
     * Gets as timeZone
     *
     * The local time zone in which the tour/activity departs and or starts.
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Sets a new timeZone
     *
     * The local time zone in which the tour/activity departs and or starts.
     *
     * @param string $timeZone
     * @return self
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Gets as address
     *
     * Identifies the physical address of the tour departure and/or activity location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityLocationType\AddressAType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Identifies the physical address of the tour departure and/or activity location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLocationType\AddressAType
     * $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\TourActivityLocationType\AddressAType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as region
     *
     * Describes regional information, which may include an island.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityLocationType\RegionAType
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * Describes regional information, which may include an island.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLocationType\RegionAType
     * $region
     * @return self
     */
    public function setRegion(\Davispeixoto\OpenTravelAlliance\TourActivityLocationType\RegionAType $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Gets as position
     *
     * Describes geocoding information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityLocationType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * Describes geocoding information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLocationType\PositionAType
     * $position
     * @return self
     */
    public function setPosition(\Davispeixoto\OpenTravelAlliance\TourActivityLocationType\PositionAType $position)
    {
        $this->position = $position;

        return $this;
    }


}


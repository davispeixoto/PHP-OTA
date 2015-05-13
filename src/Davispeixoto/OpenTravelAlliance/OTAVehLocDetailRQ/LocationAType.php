<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailRQ;

use Davispeixoto\OpenTravelAlliance\LocationType;

/**
 * Class representing LocationAType
 */
class LocationAType extends LocationType
{

    /**
     * Used for extended OAG (Official Airline Guide) code in conjunction with the OAG
     * code which is sent in Code.
     *
     * @property string $extendedLocationCode
     */
    private $extendedLocationCode = null;

    /**
     * Identifies the location of a car rental site for an airport/city code. Refer to
     * OpenTravel Code List Vehicle Where At Facility (VWF).
     *
     * @property string $counterLocation
     */
    private $counterLocation = null;

    /**
     * Gets as extendedLocationCode
     *
     * Used for extended OAG (Official Airline Guide) code in conjunction with the OAG
     * code which is sent in Code.
     *
     * @return string
     */
    public function getExtendedLocationCode()
    {
        return $this->extendedLocationCode;
    }

    /**
     * Sets a new extendedLocationCode
     *
     * Used for extended OAG (Official Airline Guide) code in conjunction with the OAG
     * code which is sent in Code.
     *
     * @param string $extendedLocationCode
     * @return self
     */
    public function setExtendedLocationCode($extendedLocationCode)
    {
        $this->extendedLocationCode = $extendedLocationCode;

        return $this;
    }

    /**
     * Gets as counterLocation
     *
     * Identifies the location of a car rental site for an airport/city code. Refer to
     * OpenTravel Code List Vehicle Where At Facility (VWF).
     *
     * @return string
     */
    public function getCounterLocation()
    {
        return $this->counterLocation;
    }

    /**
     * Sets a new counterLocation
     *
     * Identifies the location of a car rental site for an airport/city code. Refer to
     * OpenTravel Code List Vehicle Where At Facility (VWF).
     *
     * @param string $counterLocation
     * @return self
     */
    public function setCounterLocation($counterLocation)
    {
        $this->counterLocation = $counterLocation;

        return $this;
    }


}


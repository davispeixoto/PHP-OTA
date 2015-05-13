<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailCoreType;

use Davispeixoto\OpenTravelAlliance\LocationType;

/**
 * Class representing DropOffLocationAType
 */
class DropOffLocationAType extends LocationType
{

    /**
     * Specifies the extended location code (e.g., ATLC10).
     *
     * @property string $extendedLocationCode
     */
    private $extendedLocationCode = null;

    /**
     * The location of the counter. Refer to OpenTravel Code List Vehicle Where At
     * Facility (VWF).
     *
     * @property string $counterLocation
     */
    private $counterLocation = null;

    /**
     * The name of the vendor location.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as extendedLocationCode
     *
     * Specifies the extended location code (e.g., ATLC10).
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
     * Specifies the extended location code (e.g., ATLC10).
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
     * The location of the counter. Refer to OpenTravel Code List Vehicle Where At
     * Facility (VWF).
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
     * The location of the counter. Refer to OpenTravel Code List Vehicle Where At
     * Facility (VWF).
     *
     * @param string $counterLocation
     * @return self
     */
    public function setCounterLocation($counterLocation)
    {
        $this->counterLocation = $counterLocation;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the vendor location.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the vendor location.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


}


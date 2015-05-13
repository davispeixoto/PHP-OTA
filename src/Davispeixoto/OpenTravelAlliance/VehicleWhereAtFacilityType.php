<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleWhereAtFacilityType
 *
 * Defines the information needed to describe the location of the associated item
 * at a rental facility. Example of the items that may make use of this type
 * include Rental Counter, Vehicle Parking Locations, etc.
 * XSD Type: VehicleWhereAtFacilityType
 */
class VehicleWhereAtFacilityType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The Location attribute identifies the location of an item at an airport. Refer
     * to OpenTravel Code List Vehicle Where At Facility (VWF) (e.g., shuttle on
     * airport).
     *
     * @property string $location
     */
    private $location = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as location
     *
     * The Location attribute identifies the location of an item at an airport. Refer
     * to OpenTravel Code List Vehicle Where At Facility (VWF) (e.g., shuttle on
     * airport).
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The Location attribute identifies the location of an item at an airport. Refer
     * to OpenTravel Code List Vehicle Where At Facility (VWF) (e.g., shuttle on
     * airport).
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }


}


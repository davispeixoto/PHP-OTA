<?php

namespace Davispeixoto\OpenTravelAlliance\ExtrasInfoType;

/**
 * Class representing ExtraLocationInfoAType
 */
class ExtraLocationInfoAType
{

    /**
     * Where the extra may be collected from and returned to. Refer to OpenTravel Code
     * List Vehicle Where at Facility (VWF)
     *
     * @property string $location
     */
    private $location = null;

    /**
     * Indicates whether the Location is for Pickup, DropOff or Both.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as location
     *
     * Where the extra may be collected from and returned to. Refer to OpenTravel Code
     * List Vehicle Where at Facility (VWF)
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
     * Where the extra may be collected from and returned to. Refer to OpenTravel Code
     * List Vehicle Where at Facility (VWF)
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates whether the Location is for Pickup, DropOff or Both.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates whether the Location is for Pickup, DropOff or Both.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}


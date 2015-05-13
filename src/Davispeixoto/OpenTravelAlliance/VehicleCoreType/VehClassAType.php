<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleCoreType;

/**
 * Class representing VehClassAType
 */
class VehClassAType
{

    /**
     * The Size attribute identifies the size of a vehicle. Refer to OpenTravel Code
     * List Size (SIZ).
     *
     * @property string $size
     */
    private $size = null;

    /**
     * Gets as size
     *
     * The Size attribute identifies the size of a vehicle. Refer to OpenTravel Code
     * List Size (SIZ).
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * The Size attribute identifies the size of a vehicle. Refer to OpenTravel Code
     * List Size (SIZ).
     *
     * @param string $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }


}


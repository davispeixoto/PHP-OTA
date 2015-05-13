<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

/**
 * Class representing TransportationAType
 */
class TransportationAType
{

    /**
     * Used to define the mode of available transportation. Refer to OpenTravel Code
     * List Transportation Code (TRP).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * Used to define the mode of available transportation. Refer to OpenTravel Code
     * List Transportation Code (TRP).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Used to define the mode of available transportation. Refer to OpenTravel Code
     * List Transportation Code (TRP).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}


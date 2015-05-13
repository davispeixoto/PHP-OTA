<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType\ServiceDetailsAType;

/**
 * Class representing MealServiceAType
 */
class MealServiceAType
{

    /**
     * Indicates the type of inflight meal service.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * Indicates the type of inflight meal service.
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
     * Indicates the type of inflight meal service.
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


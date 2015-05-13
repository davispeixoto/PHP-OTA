<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType\SeatDetailsAType;

/**
 * Class representing CabinClassAType
 */
class CabinClassAType
{

    /**
     * Cabin type for which the seat map is requested, which could be either First,
     * Business or Economy.
     *
     * @property string $cabinType
     */
    private $cabinType = null;

    /**
     * Gets as cabinType
     *
     * Cabin type for which the seat map is requested, which could be either First,
     * Business or Economy.
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * Cabin type for which the seat map is requested, which could be either First,
     * Business or Economy.
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;

        return $this;
    }


}


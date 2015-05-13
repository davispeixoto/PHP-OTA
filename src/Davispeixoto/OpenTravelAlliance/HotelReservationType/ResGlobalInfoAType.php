<?php

namespace Davispeixoto\OpenTravelAlliance\HotelReservationType;

use Davispeixoto\OpenTravelAlliance\ResGlobalInfoType;

/**
 * Class representing ResGlobalInfoAType
 */
class ResGlobalInfoAType extends ResGlobalInfoType
{

    /**
     * Property information for the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType
     * $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Gets as basicPropertyInfo
     *
     * Property information for the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType
     */
    public function getBasicPropertyInfo()
    {
        return $this->basicPropertyInfo;
    }

    /**
     * Sets a new basicPropertyInfo
     *
     * Property information for the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(\Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType $basicPropertyInfo)
    {
        $this->basicPropertyInfo = $basicPropertyInfo;

        return $this;
    }


}


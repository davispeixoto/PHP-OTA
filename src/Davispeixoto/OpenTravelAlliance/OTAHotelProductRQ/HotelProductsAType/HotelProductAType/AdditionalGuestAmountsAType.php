<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType;

/**
 * Class representing AdditionalGuestAmountsAType
 */
class AdditionalGuestAmountsAType
{

    /**
     * When true, send additional guest amount information. When false, do not send
     * additional guest amount information.
     *
     * @property boolean $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Gets as sendAllInd
     *
     * When true, send additional guest amount information. When false, do not send
     * additional guest amount information.
     *
     * @return boolean
     */
    public function getSendAllInd()
    {
        return $this->sendAllInd;
    }

    /**
     * Sets a new sendAllInd
     *
     * When true, send additional guest amount information. When false, do not send
     * additional guest amount information.
     *
     * @param boolean $sendAllInd
     * @return self
     */
    public function setSendAllInd($sendAllInd)
    {
        $this->sendAllInd = $sendAllInd;

        return $this;
    }


}


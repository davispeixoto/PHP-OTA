<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType;

/**
 * Class representing FeesAType
 */
class FeesAType
{

    /**
     * When true, send fee information. When false, do not send fee information.
     *
     * @property boolean $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Gets as sendAllInd
     *
     * When true, send fee information. When false, do not send fee information.
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
     * When true, send fee information. When false, do not send fee information.
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


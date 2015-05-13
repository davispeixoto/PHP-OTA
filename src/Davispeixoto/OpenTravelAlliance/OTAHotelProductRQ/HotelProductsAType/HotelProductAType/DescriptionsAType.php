<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{

    /**
     * When true, send description information. When false, do not send description
     * information.
     *
     * @property boolean $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Gets as sendAllInd
     *
     * When true, send description information. When false, do not send description
     * information.
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
     * When true, send description information. When false, do not send description
     * information.
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


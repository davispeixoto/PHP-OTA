<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{

    /**
     * When true, send tax information. When false, do not send tax information.
     *
     * @property boolean $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Gets as sendAllInd
     *
     * When true, send tax information. When false, do not send tax information.
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
     * When true, send tax information. When false, do not send tax information.
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


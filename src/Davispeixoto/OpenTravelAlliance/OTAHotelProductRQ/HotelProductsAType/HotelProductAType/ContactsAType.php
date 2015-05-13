<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelProductRQ\HotelProductsAType\HotelProductAType;

/**
 * Class representing ContactsAType
 */
class ContactsAType
{

    /**
     * When true, send contact information. When false, do not send contact
     * information.
     *
     * @property boolean $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Gets as sendAllInd
     *
     * When true, send contact information. When false, do not send contact
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
     * When true, send contact information. When false, do not send contact
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


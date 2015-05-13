<?php

namespace Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType;

/**
 * Class representing ContactInfoAType
 */
class ContactInfoAType
{

    /**
     * Send this data. "True" means send the data.
     *
     * @property boolean $sendData
     */
    private $sendData = null;

    /**
     * Gets as sendData
     *
     * Send this data. "True" means send the data.
     *
     * @return boolean
     */
    public function getSendData()
    {
        return $this->sendData;
    }

    /**
     * Sets a new sendData
     *
     * Send this data. "True" means send the data.
     *
     * @param boolean $sendData
     * @return self
     */
    public function setSendData($sendData)
    {
        $this->sendData = $sendData;

        return $this;
    }


}


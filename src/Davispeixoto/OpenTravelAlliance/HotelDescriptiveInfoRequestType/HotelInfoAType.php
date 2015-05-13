<?php

namespace Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType;

/**
 * Class representing HotelInfoAType
 */
class HotelInfoAType
{

    /**
     * Send this data. "True" means send the data.
     *
     * @property boolean $sendData
     */
    private $sendData = null;

    /**
     * This is a description of the operating status of the Hotel. This information may
     * support the code in HotelStatusCode.
     *
     * @property string $hotelStatus
     */
    private $hotelStatus = null;

    /**
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening)
     * of the hotels to be returned in the response. Refer to OpenTravel Code List
     * HotelStatusCode.
     *
     * @property string $hotelStatusCode
     */
    private $hotelStatusCode = null;

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

    /**
     * Gets as hotelStatus
     *
     * This is a description of the operating status of the Hotel. This information may
     * support the code in HotelStatusCode.
     *
     * @return string
     */
    public function getHotelStatus()
    {
        return $this->hotelStatus;
    }

    /**
     * Sets a new hotelStatus
     *
     * This is a description of the operating status of the Hotel. This information may
     * support the code in HotelStatusCode.
     *
     * @param string $hotelStatus
     * @return self
     */
    public function setHotelStatus($hotelStatus)
    {
        $this->hotelStatus = $hotelStatus;

        return $this;
    }

    /**
     * Gets as hotelStatusCode
     *
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening)
     * of the hotels to be returned in the response. Refer to OpenTravel Code List
     * HotelStatusCode.
     *
     * @return string
     */
    public function getHotelStatusCode()
    {
        return $this->hotelStatusCode;
    }

    /**
     * Sets a new hotelStatusCode
     *
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening)
     * of the hotels to be returned in the response. Refer to OpenTravel Code List
     * HotelStatusCode.
     *
     * @param string $hotelStatusCode
     * @return self
     */
    public function setHotelStatusCode($hotelStatusCode)
    {
        $this->hotelStatusCode = $hotelStatusCode;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType;

/**
 * Class representing RequestedInfosAType
 */
class RequestedInfosAType
{

    /**
     * When true, all response data should be sent in a single file and when false, the
     * response for each RequestedInfoCode should be in a separate file. Typically used
     * when the response is requested in electronic format.
     *
     * @property boolean $singleFileIndicator
     */
    private $singleFileIndicator = null;

    /**
     * Used to specify what information should be returned in the response.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType[]
     * $requestedInfo
     */
    private $requestedInfo = null;

    /**
     * Gets as singleFileIndicator
     *
     * When true, all response data should be sent in a single file and when false, the
     * response for each RequestedInfoCode should be in a separate file. Typically used
     * when the response is requested in electronic format.
     *
     * @return boolean
     */
    public function getSingleFileIndicator()
    {
        return $this->singleFileIndicator;
    }

    /**
     * Sets a new singleFileIndicator
     *
     * When true, all response data should be sent in a single file and when false, the
     * response for each RequestedInfoCode should be in a separate file. Typically used
     * when the response is requested in electronic format.
     *
     * @param boolean $singleFileIndicator
     * @return self
     */
    public function setSingleFileIndicator($singleFileIndicator)
    {
        $this->singleFileIndicator = $singleFileIndicator;

        return $this;
    }

    /**
     * Adds as requestedInfo
     *
     * Used to specify what information should be returned in the response.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType
     * $requestedInfo
     */
    public function addToRequestedInfo(
        \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType $requestedInfo
    ) {
        $this->requestedInfo[] = $requestedInfo;

        return $this;
    }

    /**
     * isset requestedInfo
     *
     * Used to specify what information should be returned in the response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRequestedInfo($index)
    {
        return isset($this->requestedInfo[$index]);
    }

    /**
     * unset requestedInfo
     *
     * Used to specify what information should be returned in the response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRequestedInfo($index)
    {
        unset($this->requestedInfo[$index]);
    }

    /**
     * Gets as requestedInfo
     *
     * Used to specify what information should be returned in the response.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType[]
     */
    public function getRequestedInfo()
    {
        return $this->requestedInfo;
    }

    /**
     * Sets a new requestedInfo
     *
     * Used to specify what information should be returned in the response.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelRFPTransientRQ\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType[]
     * $requestedInfo
     * @return self
     */
    public function setRequestedInfo(array $requestedInfo)
    {
        $this->requestedInfo = $requestedInfo;

        return $this;
    }


}


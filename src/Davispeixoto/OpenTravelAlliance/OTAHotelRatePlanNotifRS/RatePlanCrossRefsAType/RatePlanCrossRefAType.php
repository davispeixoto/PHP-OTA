<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanNotifRS\RatePlanCrossRefsAType;

/**
 * Class representing RatePlanCrossRefAType
 */
class RatePlanCrossRefAType
{

    /**
     * Identification of the sending system's rate plan code.
     *
     * @property string $requestRatePlanCode
     */
    private $requestRatePlanCode = null;

    /**
     * Identification of the sending system's rate plan grouping code.
     *
     * @property string $requestRatePlanGroupingCode
     */
    private $requestRatePlanGroupingCode = null;

    /**
     * Indentification of responing system's rate plan code.
     *
     * @property string $responseRatePlanCode
     */
    private $responseRatePlanCode = null;

    /**
     * Identification of the responing system's rate plan grouping code.
     *
     * @property string $responseRatePlanGroupingCode
     */
    private $responseRatePlanGroupingCode = null;

    /**
     * Gets as requestRatePlanCode
     *
     * Identification of the sending system's rate plan code.
     *
     * @return string
     */
    public function getRequestRatePlanCode()
    {
        return $this->requestRatePlanCode;
    }

    /**
     * Sets a new requestRatePlanCode
     *
     * Identification of the sending system's rate plan code.
     *
     * @param string $requestRatePlanCode
     * @return self
     */
    public function setRequestRatePlanCode($requestRatePlanCode)
    {
        $this->requestRatePlanCode = $requestRatePlanCode;

        return $this;
    }

    /**
     * Gets as requestRatePlanGroupingCode
     *
     * Identification of the sending system's rate plan grouping code.
     *
     * @return string
     */
    public function getRequestRatePlanGroupingCode()
    {
        return $this->requestRatePlanGroupingCode;
    }

    /**
     * Sets a new requestRatePlanGroupingCode
     *
     * Identification of the sending system's rate plan grouping code.
     *
     * @param string $requestRatePlanGroupingCode
     * @return self
     */
    public function setRequestRatePlanGroupingCode($requestRatePlanGroupingCode)
    {
        $this->requestRatePlanGroupingCode = $requestRatePlanGroupingCode;

        return $this;
    }

    /**
     * Gets as responseRatePlanCode
     *
     * Indentification of responing system's rate plan code.
     *
     * @return string
     */
    public function getResponseRatePlanCode()
    {
        return $this->responseRatePlanCode;
    }

    /**
     * Sets a new responseRatePlanCode
     *
     * Indentification of responing system's rate plan code.
     *
     * @param string $responseRatePlanCode
     * @return self
     */
    public function setResponseRatePlanCode($responseRatePlanCode)
    {
        $this->responseRatePlanCode = $responseRatePlanCode;

        return $this;
    }

    /**
     * Gets as responseRatePlanGroupingCode
     *
     * Identification of the responing system's rate plan grouping code.
     *
     * @return string
     */
    public function getResponseRatePlanGroupingCode()
    {
        return $this->responseRatePlanGroupingCode;
    }

    /**
     * Sets a new responseRatePlanGroupingCode
     *
     * Identification of the responing system's rate plan grouping code.
     *
     * @param string $responseRatePlanGroupingCode
     * @return self
     */
    public function setResponseRatePlanGroupingCode($responseRatePlanGroupingCode)
    {
        $this->responseRatePlanGroupingCode = $responseRatePlanGroupingCode;

        return $this;
    }


}


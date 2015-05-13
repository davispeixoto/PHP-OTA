<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvNotifRS\InventoryCrossRefsAType;

/**
 * Class representing InventoryCrossRefAType
 */
class InventoryCrossRefAType
{

    /**
     * Identification of the sending system Inventory Code
     *
     * @property string $requestInvCode
     */
    private $requestInvCode = null;

    /**
     * Identification of the sending system inventory group.
     *
     * @property string $requestInvGroupingCode
     */
    private $requestInvGroupingCode = null;

    /**
     * Identification of the responding system Inventory Code.
     *
     * @property string $responseInvCode
     */
    private $responseInvCode = null;

    /**
     * Identification of the responding system inventory group.
     *
     * @property string $responseInvGroupingCode
     */
    private $responseInvGroupingCode = null;

    /**
     * Gets as requestInvCode
     *
     * Identification of the sending system Inventory Code
     *
     * @return string
     */
    public function getRequestInvCode()
    {
        return $this->requestInvCode;
    }

    /**
     * Sets a new requestInvCode
     *
     * Identification of the sending system Inventory Code
     *
     * @param string $requestInvCode
     * @return self
     */
    public function setRequestInvCode($requestInvCode)
    {
        $this->requestInvCode = $requestInvCode;

        return $this;
    }

    /**
     * Gets as requestInvGroupingCode
     *
     * Identification of the sending system inventory group.
     *
     * @return string
     */
    public function getRequestInvGroupingCode()
    {
        return $this->requestInvGroupingCode;
    }

    /**
     * Sets a new requestInvGroupingCode
     *
     * Identification of the sending system inventory group.
     *
     * @param string $requestInvGroupingCode
     * @return self
     */
    public function setRequestInvGroupingCode($requestInvGroupingCode)
    {
        $this->requestInvGroupingCode = $requestInvGroupingCode;

        return $this;
    }

    /**
     * Gets as responseInvCode
     *
     * Identification of the responding system Inventory Code.
     *
     * @return string
     */
    public function getResponseInvCode()
    {
        return $this->responseInvCode;
    }

    /**
     * Sets a new responseInvCode
     *
     * Identification of the responding system Inventory Code.
     *
     * @param string $responseInvCode
     * @return self
     */
    public function setResponseInvCode($responseInvCode)
    {
        $this->responseInvCode = $responseInvCode;

        return $this;
    }

    /**
     * Gets as responseInvGroupingCode
     *
     * Identification of the responding system inventory group.
     *
     * @return string
     */
    public function getResponseInvGroupingCode()
    {
        return $this->responseInvGroupingCode;
    }

    /**
     * Sets a new responseInvGroupingCode
     *
     * Identification of the responding system inventory group.
     *
     * @param string $responseInvGroupingCode
     * @return self
     */
    public function setResponseInvGroupingCode($responseInvGroupingCode)
    {
        $this->responseInvGroupingCode = $responseInvGroupingCode;

        return $this;
    }


}


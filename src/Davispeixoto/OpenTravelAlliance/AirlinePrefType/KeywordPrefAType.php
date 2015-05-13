<?php

namespace Davispeixoto\OpenTravelAlliance\AirlinePrefType;

/**
 * Class representing KeywordPrefAType
 */
class KeywordPrefAType
{

    /**
     * Indicates to which airline the element is associated.
     *
     * @property string $vendorCode
     */
    private $vendorCode = null;

    /**
     * Text of the Keyword element.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * The keyword is defined by the airline.
     *
     * @property string $keyword
     */
    private $keyword = null;

    /**
     * Confirmation status from the airline. Refer to OpenTravel code list Status
     * (STS).
     *
     * @property string $statusCode
     */
    private $statusCode = null;

    /**
     * Number of passengers that will benefit from the request.
     *
     * @property integer $numberInParty
     */
    private $numberInParty = null;

    /**
     * @property string[] $airlineVendorRPH
     */
    private $airlineVendorRPH = null;

    /**
     * @property string $transferAction
     */
    private $transferAction = null;

    /**
     * Gets as vendorCode
     *
     * Indicates to which airline the element is associated.
     *
     * @return string
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * Sets a new vendorCode
     *
     * Indicates to which airline the element is associated.
     *
     * @param string $vendorCode
     * @return self
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * Gets as description
     *
     * Text of the Keyword element.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Text of the Keyword element.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as keyword
     *
     * The keyword is defined by the airline.
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Sets a new keyword
     *
     * The keyword is defined by the airline.
     *
     * @param string $keyword
     * @return self
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Gets as statusCode
     *
     * Confirmation status from the airline. Refer to OpenTravel code list Status
     * (STS).
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * Confirmation status from the airline. Refer to OpenTravel code list Status
     * (STS).
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Gets as numberInParty
     *
     * Number of passengers that will benefit from the request.
     *
     * @return integer
     */
    public function getNumberInParty()
    {
        return $this->numberInParty;
    }

    /**
     * Sets a new numberInParty
     *
     * Number of passengers that will benefit from the request.
     *
     * @param integer $numberInParty
     * @return self
     */
    public function setNumberInParty($numberInParty)
    {
        $this->numberInParty = $numberInParty;

        return $this;
    }

    /**
     * Adds as airlineVendorRPH
     *
     * @return self
     * @param string $airlineVendorRPH
     */
    public function addToAirlineVendorRPH($airlineVendorRPH)
    {
        $this->airlineVendorRPH[] = $airlineVendorRPH;

        return $this;
    }

    /**
     * isset airlineVendorRPH
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirlineVendorRPH($index)
    {
        return isset($this->airlineVendorRPH[$index]);
    }

    /**
     * unset airlineVendorRPH
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirlineVendorRPH($index)
    {
        unset($this->airlineVendorRPH[$index]);
    }

    /**
     * Gets as airlineVendorRPH
     *
     * @return string[]
     */
    public function getAirlineVendorRPH()
    {
        return $this->airlineVendorRPH;
    }

    /**
     * Sets a new airlineVendorRPH
     *
     * @param string $airlineVendorRPH
     * @return self
     */
    public function setAirlineVendorRPH(array $airlineVendorRPH)
    {
        $this->airlineVendorRPH = $airlineVendorRPH;

        return $this;
    }

    /**
     * Gets as transferAction
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;

        return $this;
    }


}


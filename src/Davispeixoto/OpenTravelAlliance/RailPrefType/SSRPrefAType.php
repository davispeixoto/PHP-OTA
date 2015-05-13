<?php

namespace Davispeixoto\OpenTravelAlliance\RailPrefType;

/**
 * Class representing SSRPrefAType
 */
class SSRPrefAType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Code of the special service request to be used for this rail travel situation.
     * Refers to standard industry code list.
     *
     * @property string $sSRCode
     */
    private $sSRCode = null;

    /**
     * Indicates to which rail operator the element is associated.
     *
     * @property string $vendorCode
     */
    private $vendorCode = null;

    /**
     * Number of passengers that will benefit from the request.
     *
     * @property integer $numberInParty
     */
    private $numberInParty = null;

    /**
     * The default status from the rail operators. Refer to the OpenTravel Code List
     * named Status (STS).
     *
     * @property string $defaultStatusCode
     */
    private $defaultStatusCode = null;

    /**
     * Text that description of the service request.
     *
     * @property string $remark
     */
    private $remark = null;

    /**
     * Database key to retrieve the other part of the card number.
     *
     * @property string $lookupKey
     */
    private $lookupKey = null;

    /**
     * Reference to one or more rail operators in VendorPref.
     *
     * @property string[] $vendorPrefRPH
     */
    private $vendorPrefRPH = null;

    /**
     * Indicates in what condition the element must be trasnferred to the booking.
     *
     * @property string $transferActionType
     */
    private $transferActionType = null;

    /**
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY)
     * code list.
     *
     * @property mixed $aDARequirement
     */
    private $aDARequirement = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as sSRCode
     *
     * Code of the special service request to be used for this rail travel situation.
     * Refers to standard industry code list.
     *
     * @return string
     */
    public function getSSRCode()
    {
        return $this->sSRCode;
    }

    /**
     * Sets a new sSRCode
     *
     * Code of the special service request to be used for this rail travel situation.
     * Refers to standard industry code list.
     *
     * @param string $sSRCode
     * @return self
     */
    public function setSSRCode($sSRCode)
    {
        $this->sSRCode = $sSRCode;

        return $this;
    }

    /**
     * Gets as vendorCode
     *
     * Indicates to which rail operator the element is associated.
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
     * Indicates to which rail operator the element is associated.
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
     * Gets as defaultStatusCode
     *
     * The default status from the rail operators. Refer to the OpenTravel Code List
     * named Status (STS).
     *
     * @return string
     */
    public function getDefaultStatusCode()
    {
        return $this->defaultStatusCode;
    }

    /**
     * Sets a new defaultStatusCode
     *
     * The default status from the rail operators. Refer to the OpenTravel Code List
     * named Status (STS).
     *
     * @param string $defaultStatusCode
     * @return self
     */
    public function setDefaultStatusCode($defaultStatusCode)
    {
        $this->defaultStatusCode = $defaultStatusCode;

        return $this;
    }

    /**
     * Gets as remark
     *
     * Text that description of the service request.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Text that description of the service request.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Gets as lookupKey
     *
     * Database key to retrieve the other part of the card number.
     *
     * @return string
     */
    public function getLookupKey()
    {
        return $this->lookupKey;
    }

    /**
     * Sets a new lookupKey
     *
     * Database key to retrieve the other part of the card number.
     *
     * @param string $lookupKey
     * @return self
     */
    public function setLookupKey($lookupKey)
    {
        $this->lookupKey = $lookupKey;

        return $this;
    }

    /**
     * Adds as vendorPrefRPH
     *
     * Reference to one or more rail operators in VendorPref.
     *
     * @return self
     * @param string $vendorPrefRPH
     */
    public function addToVendorPrefRPH($vendorPrefRPH)
    {
        $this->vendorPrefRPH[] = $vendorPrefRPH;

        return $this;
    }

    /**
     * isset vendorPrefRPH
     *
     * Reference to one or more rail operators in VendorPref.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorPrefRPH($index)
    {
        return isset($this->vendorPrefRPH[$index]);
    }

    /**
     * unset vendorPrefRPH
     *
     * Reference to one or more rail operators in VendorPref.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorPrefRPH($index)
    {
        unset($this->vendorPrefRPH[$index]);
    }

    /**
     * Gets as vendorPrefRPH
     *
     * Reference to one or more rail operators in VendorPref.
     *
     * @return string[]
     */
    public function getVendorPrefRPH()
    {
        return $this->vendorPrefRPH;
    }

    /**
     * Sets a new vendorPrefRPH
     *
     * Reference to one or more rail operators in VendorPref.
     *
     * @param string $vendorPrefRPH
     * @return self
     */
    public function setVendorPrefRPH(array $vendorPrefRPH)
    {
        $this->vendorPrefRPH = $vendorPrefRPH;

        return $this;
    }

    /**
     * Gets as transferActionType
     *
     * Indicates in what condition the element must be trasnferred to the booking.
     *
     * @return string
     */
    public function getTransferActionType()
    {
        return $this->transferActionType;
    }

    /**
     * Sets a new transferActionType
     *
     * Indicates in what condition the element must be trasnferred to the booking.
     *
     * @param string $transferActionType
     * @return self
     */
    public function setTransferActionType($transferActionType)
    {
        $this->transferActionType = $transferActionType;

        return $this;
    }

    /**
     * Gets as aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY)
     * code list.
     *
     * @return mixed
     */
    public function getADARequirement()
    {
        return $this->aDARequirement;
    }

    /**
     * Sets a new aDARequirement
     *
     * Passenger ADA requirements. Refer to OpenTravel Disability Feature Code (PHY)
     * code list.
     *
     * @param mixed $aDARequirement
     * @return self
     */
    public function setADARequirement($aDARequirement)
    {
        $this->aDARequirement = $aDARequirement;

        return $this;
    }


}


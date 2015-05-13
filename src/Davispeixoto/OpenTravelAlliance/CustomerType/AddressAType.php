<?php

namespace Davispeixoto\OpenTravelAlliance\CustomerType;

use Davispeixoto\OpenTravelAlliance\AddressInfoType;

/**
 * Class representing AddressAType
 */
class AddressAType extends AddressInfoType
{

    /**
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property boolean $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * Indicates if the address has been validated or not and if it has been successful
     * or not.
     *
     * @property string $validationStatus
     */
    private $validationStatus = null;

    /**
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @property string $transferAction
     */
    private $transferAction = null;

    /**
     * A reference to the company from which this element has been inherited.
     *
     * @property string $parentCompanyRef
     */
    private $parentCompanyRef = null;

    /**
     * Identifies a company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * Name of the person to whom this address relates.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $addresseeName
     */
    private $addresseeName = null;

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return boolean
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param boolean $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;

        return $this;
    }

    /**
     * Gets as validationStatus
     *
     * Indicates if the address has been validated or not and if it has been successful
     * or not.
     *
     * @return string
     */
    public function getValidationStatus()
    {
        return $this->validationStatus;
    }

    /**
     * Sets a new validationStatus
     *
     * Indicates if the address has been validated or not and if it has been successful
     * or not.
     *
     * @param string $validationStatus
     * @return self
     */
    public function setValidationStatus($validationStatus)
    {
        $this->validationStatus = $validationStatus;

        return $this;
    }

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
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
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;

        return $this;
    }

    /**
     * Gets as parentCompanyRef
     *
     * A reference to the company from which this element has been inherited.
     *
     * @return string
     */
    public function getParentCompanyRef()
    {
        return $this->parentCompanyRef;
    }

    /**
     * Sets a new parentCompanyRef
     *
     * A reference to the company from which this element has been inherited.
     *
     * @param string $parentCompanyRef
     * @return self
     */
    public function setParentCompanyRef($parentCompanyRef)
    {
        $this->parentCompanyRef = $parentCompanyRef;

        return $this;
    }

    /**
     * Gets as companyName
     *
     * Identifies a company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Identifies a company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Gets as addresseeName
     *
     * Name of the person to whom this address relates.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getAddresseeName()
    {
        return $this->addresseeName;
    }

    /**
     * Sets a new addresseeName
     *
     * Name of the person to whom this address relates.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $addresseeName
     * @return self
     */
    public function setAddresseeName(\Davispeixoto\OpenTravelAlliance\PersonNameType $addresseeName)
    {
        $this->addresseeName = $addresseeName;

        return $this;
    }


}


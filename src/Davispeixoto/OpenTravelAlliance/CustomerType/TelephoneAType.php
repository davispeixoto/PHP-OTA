<?php

namespace Davispeixoto\OpenTravelAlliance\CustomerType;

/**
 * Class representing TelephoneAType
 */
class TelephoneAType
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
     * Used elsewhere in the message to reference a specific telephone number
     * (including faxes).
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Describes the location of the phone, such as Home, Office, Property Reservation
     * Office, etc. Refer to OpenTravel Code List Phone Location Type (PLT).
     *
     * @property string $phoneLocationType
     */
    private $phoneLocationType = null;

    /**
     * Indicates type of technology associated with this telephone number, such as
     * Voice, Data, Fax, Pager, Mobile, TTY, etc. Refer to OpenTravel Code List Phone
     * Technology Type (PTT).
     *
     * @property string $phoneTechType
     */
    private $phoneTechType = null;

    /**
     * Describes the type of telephone number, in the context of its general use (e.g.
     * Home, Business, Emergency Contact, Travel Arranger, Day, Evening). Refer to
     * OpenTravel Code List Phone Use Type (PUT).
     *
     * @property string $phoneUseType
     */
    private $phoneUseType = null;

    /**
     * Code assigned by telecommunications authorities for international country access
     * identifier.
     *
     * @property string $countryAccessCode
     */
    private $countryAccessCode = null;

    /**
     * Code assigned for telephones in a specific region, city, or area.
     *
     * @property string $areaCityCode
     */
    private $areaCityCode = null;

    /**
     * Telephone number assigned to a single location.
     *
     * @property string $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * Extension to reach a specific party at the phone number.
     *
     * @property string $extension
     */
    private $extension = null;

    /**
     * Additional codes used for pager or telephone access rights.
     *
     * @property string $pIN
     */
    private $pIN = null;

    /**
     * A remark associated with the telephone number.
     *
     * @property string $remark
     */
    private $remark = null;

    /**
     * Specifies if the associated data is formatted or not. When true, then it is
     * formatted; when false, then not formatted.
     *
     * @property boolean $formattedInd
     */
    private $formattedInd = null;

    /**
     * When true, indicates a default value should be used.
     *
     * @property boolean $defaultInd
     */
    private $defaultInd = null;

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
     * Gets as rPH
     *
     * Used elsewhere in the message to reference a specific telephone number
     * (including faxes).
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Used elsewhere in the message to reference a specific telephone number
     * (including faxes).
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * Gets as phoneLocationType
     *
     * Describes the location of the phone, such as Home, Office, Property Reservation
     * Office, etc. Refer to OpenTravel Code List Phone Location Type (PLT).
     *
     * @return string
     */
    public function getPhoneLocationType()
    {
        return $this->phoneLocationType;
    }

    /**
     * Sets a new phoneLocationType
     *
     * Describes the location of the phone, such as Home, Office, Property Reservation
     * Office, etc. Refer to OpenTravel Code List Phone Location Type (PLT).
     *
     * @param string $phoneLocationType
     * @return self
     */
    public function setPhoneLocationType($phoneLocationType)
    {
        $this->phoneLocationType = $phoneLocationType;

        return $this;
    }

    /**
     * Gets as phoneTechType
     *
     * Indicates type of technology associated with this telephone number, such as
     * Voice, Data, Fax, Pager, Mobile, TTY, etc. Refer to OpenTravel Code List Phone
     * Technology Type (PTT).
     *
     * @return string
     */
    public function getPhoneTechType()
    {
        return $this->phoneTechType;
    }

    /**
     * Sets a new phoneTechType
     *
     * Indicates type of technology associated with this telephone number, such as
     * Voice, Data, Fax, Pager, Mobile, TTY, etc. Refer to OpenTravel Code List Phone
     * Technology Type (PTT).
     *
     * @param string $phoneTechType
     * @return self
     */
    public function setPhoneTechType($phoneTechType)
    {
        $this->phoneTechType = $phoneTechType;

        return $this;
    }

    /**
     * Gets as phoneUseType
     *
     * Describes the type of telephone number, in the context of its general use (e.g.
     * Home, Business, Emergency Contact, Travel Arranger, Day, Evening). Refer to
     * OpenTravel Code List Phone Use Type (PUT).
     *
     * @return string
     */
    public function getPhoneUseType()
    {
        return $this->phoneUseType;
    }

    /**
     * Sets a new phoneUseType
     *
     * Describes the type of telephone number, in the context of its general use (e.g.
     * Home, Business, Emergency Contact, Travel Arranger, Day, Evening). Refer to
     * OpenTravel Code List Phone Use Type (PUT).
     *
     * @param string $phoneUseType
     * @return self
     */
    public function setPhoneUseType($phoneUseType)
    {
        $this->phoneUseType = $phoneUseType;

        return $this;
    }

    /**
     * Gets as countryAccessCode
     *
     * Code assigned by telecommunications authorities for international country access
     * identifier.
     *
     * @return string
     */
    public function getCountryAccessCode()
    {
        return $this->countryAccessCode;
    }

    /**
     * Sets a new countryAccessCode
     *
     * Code assigned by telecommunications authorities for international country access
     * identifier.
     *
     * @param string $countryAccessCode
     * @return self
     */
    public function setCountryAccessCode($countryAccessCode)
    {
        $this->countryAccessCode = $countryAccessCode;

        return $this;
    }

    /**
     * Gets as areaCityCode
     *
     * Code assigned for telephones in a specific region, city, or area.
     *
     * @return string
     */
    public function getAreaCityCode()
    {
        return $this->areaCityCode;
    }

    /**
     * Sets a new areaCityCode
     *
     * Code assigned for telephones in a specific region, city, or area.
     *
     * @param string $areaCityCode
     * @return self
     */
    public function setAreaCityCode($areaCityCode)
    {
        $this->areaCityCode = $areaCityCode;

        return $this;
    }

    /**
     * Gets as phoneNumber
     *
     * Telephone number assigned to a single location.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * Telephone number assigned to a single location.
     *
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Gets as extension
     *
     * Extension to reach a specific party at the phone number.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * Extension to reach a specific party at the phone number.
     *
     * @param string $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Gets as pIN
     *
     * Additional codes used for pager or telephone access rights.
     *
     * @return string
     */
    public function getPIN()
    {
        return $this->pIN;
    }

    /**
     * Sets a new pIN
     *
     * Additional codes used for pager or telephone access rights.
     *
     * @param string $pIN
     * @return self
     */
    public function setPIN($pIN)
    {
        $this->pIN = $pIN;

        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with the telephone number.
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
     * A remark associated with the telephone number.
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
     * Gets as formattedInd
     *
     * Specifies if the associated data is formatted or not. When true, then it is
     * formatted; when false, then not formatted.
     *
     * @return boolean
     */
    public function getFormattedInd()
    {
        return $this->formattedInd;
    }

    /**
     * Sets a new formattedInd
     *
     * Specifies if the associated data is formatted or not. When true, then it is
     * formatted; when false, then not formatted.
     *
     * @param boolean $formattedInd
     * @return self
     */
    public function setFormattedInd($formattedInd)
    {
        $this->formattedInd = $formattedInd;

        return $this;
    }

    /**
     * Gets as defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @return boolean
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @param boolean $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;

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


}


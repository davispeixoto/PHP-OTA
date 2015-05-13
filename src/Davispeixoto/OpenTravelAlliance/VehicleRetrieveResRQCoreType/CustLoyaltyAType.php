<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQCoreType;

/**
 * Class representing CustLoyaltyAType
 */
class CustLoyaltyAType
{

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
     * Identifier to indicate the company owner of the loyalty program.
     *
     * @property string $programID
     */
    private $programID = null;

    /**
     * Unique identifier of the member in the program (membership number, account
     * number, etc.).
     *
     * @property string $membershipID
     */
    private $membershipID = null;

    /**
     * Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @property string $travelSector
     */
    private $travelSector = null;

    /**
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is
     * valid.
     *
     * @property string[] $vendorCode
     */
    private $vendorCode = null;

    /**
     * When true, indicates this is the primary customer loyalty program and when
     * false, indicates this is not the primary customer loyalty program.
     *
     * @property boolean $primaryLoyaltyIndicator
     */
    private $primaryLoyaltyIndicator = null;

    /**
     * Name of the alliance loyalty level (e.g.,OneWorld uses Emerald, Ruby, etc and
     * SkyTeam uses Elite, etc.)
     *
     * @property string $allianceLoyaltyLevelName
     */
    private $allianceLoyaltyLevelName = null;

    /**
     * Original assessment of the customer by the travel agent.
     *
     * @property string $customerType
     */
    private $customerType = null;

    /**
     * The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     *
     * @property string $customerValue
     */
    private $customerValue = null;

    /**
     * The password for the member in the program.
     *
     * @property string $password
     */
    private $password = null;

    /**
     * Indicates special privileges in program assigned to individual.
     *
     * @property string $loyalLevel
     */
    private $loyalLevel = null;

    /**
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @property integer $loyalLevelCode
     */
    private $loyalLevelCode = null;

    /**
     * Indicates if program is affiliated with a group of related offers accumulating
     * credits.
     *
     * @property string $singleVendorInd
     */
    private $singleVendorInd = null;

    /**
     * Indicates when the member signed up for the loyalty program.
     *
     * @property \DateTime $signupDate
     */
    private $signupDate = null;

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
     * @property boolean $expireDateExclusiveIndicator
     */
    private $expireDateExclusiveIndicator = null;

    /**
     * A reference placeholder for this loyalty membership.
     *
     * @property string $rPH
     */
    private $rPH = null;

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
     * Gets as programID
     *
     * Identifier to indicate the company owner of the loyalty program.
     *
     * @return string
     */
    public function getProgramID()
    {
        return $this->programID;
    }

    /**
     * Sets a new programID
     *
     * Identifier to indicate the company owner of the loyalty program.
     *
     * @param string $programID
     * @return self
     */
    public function setProgramID($programID)
    {
        $this->programID = $programID;

        return $this;
    }

    /**
     * Gets as membershipID
     *
     * Unique identifier of the member in the program (membership number, account
     * number, etc.).
     *
     * @return string
     */
    public function getMembershipID()
    {
        return $this->membershipID;
    }

    /**
     * Sets a new membershipID
     *
     * Unique identifier of the member in the program (membership number, account
     * number, etc.).
     *
     * @param string $membershipID
     * @return self
     */
    public function setMembershipID($membershipID)
    {
        $this->membershipID = $membershipID;

        return $this;
    }

    /**
     * Gets as travelSector
     *
     * Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;

        return $this;
    }

    /**
     * Adds as vendorCode
     *
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is
     * valid.
     *
     * @return self
     * @param string $vendorCode
     */
    public function addToVendorCode($vendorCode)
    {
        $this->vendorCode[] = $vendorCode;

        return $this;
    }

    /**
     * isset vendorCode
     *
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is
     * valid.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorCode($index)
    {
        return isset($this->vendorCode[$index]);
    }

    /**
     * unset vendorCode
     *
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is
     * valid.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorCode($index)
    {
        unset($this->vendorCode[$index]);
    }

    /**
     * Gets as vendorCode
     *
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is
     * valid.
     *
     * @return string[]
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * Sets a new vendorCode
     *
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is
     * valid.
     *
     * @param string $vendorCode
     * @return self
     */
    public function setVendorCode(array $vendorCode)
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * Gets as primaryLoyaltyIndicator
     *
     * When true, indicates this is the primary customer loyalty program and when
     * false, indicates this is not the primary customer loyalty program.
     *
     * @return boolean
     */
    public function getPrimaryLoyaltyIndicator()
    {
        return $this->primaryLoyaltyIndicator;
    }

    /**
     * Sets a new primaryLoyaltyIndicator
     *
     * When true, indicates this is the primary customer loyalty program and when
     * false, indicates this is not the primary customer loyalty program.
     *
     * @param boolean $primaryLoyaltyIndicator
     * @return self
     */
    public function setPrimaryLoyaltyIndicator($primaryLoyaltyIndicator)
    {
        $this->primaryLoyaltyIndicator = $primaryLoyaltyIndicator;

        return $this;
    }

    /**
     * Gets as allianceLoyaltyLevelName
     *
     * Name of the alliance loyalty level (e.g.,OneWorld uses Emerald, Ruby, etc and
     * SkyTeam uses Elite, etc.)
     *
     * @return string
     */
    public function getAllianceLoyaltyLevelName()
    {
        return $this->allianceLoyaltyLevelName;
    }

    /**
     * Sets a new allianceLoyaltyLevelName
     *
     * Name of the alliance loyalty level (e.g.,OneWorld uses Emerald, Ruby, etc and
     * SkyTeam uses Elite, etc.)
     *
     * @param string $allianceLoyaltyLevelName
     * @return self
     */
    public function setAllianceLoyaltyLevelName($allianceLoyaltyLevelName)
    {
        $this->allianceLoyaltyLevelName = $allianceLoyaltyLevelName;

        return $this;
    }

    /**
     * Gets as customerType
     *
     * Original assessment of the customer by the travel agent.
     *
     * @return string
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Sets a new customerType
     *
     * Original assessment of the customer by the travel agent.
     *
     * @param string $customerType
     * @return self
     */
    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;

        return $this;
    }

    /**
     * Gets as customerValue
     *
     * The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     *
     * @return string
     */
    public function getCustomerValue()
    {
        return $this->customerValue;
    }

    /**
     * Sets a new customerValue
     *
     * The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     *
     * @param string $customerValue
     * @return self
     */
    public function setCustomerValue($customerValue)
    {
        $this->customerValue = $customerValue;

        return $this;
    }

    /**
     * Gets as password
     *
     * The password for the member in the program.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * The password for the member in the program.
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets as loyalLevel
     *
     * Indicates special privileges in program assigned to individual.
     *
     * @return string
     */
    public function getLoyalLevel()
    {
        return $this->loyalLevel;
    }

    /**
     * Sets a new loyalLevel
     *
     * Indicates special privileges in program assigned to individual.
     *
     * @param string $loyalLevel
     * @return self
     */
    public function setLoyalLevel($loyalLevel)
    {
        $this->loyalLevel = $loyalLevel;

        return $this;
    }

    /**
     * Gets as loyalLevelCode
     *
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @return integer
     */
    public function getLoyalLevelCode()
    {
        return $this->loyalLevelCode;
    }

    /**
     * Sets a new loyalLevelCode
     *
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @param integer $loyalLevelCode
     * @return self
     */
    public function setLoyalLevelCode($loyalLevelCode)
    {
        $this->loyalLevelCode = $loyalLevelCode;

        return $this;
    }

    /**
     * Gets as singleVendorInd
     *
     * Indicates if program is affiliated with a group of related offers accumulating
     * credits.
     *
     * @return string
     */
    public function getSingleVendorInd()
    {
        return $this->singleVendorInd;
    }

    /**
     * Sets a new singleVendorInd
     *
     * Indicates if program is affiliated with a group of related offers accumulating
     * credits.
     *
     * @param string $singleVendorInd
     * @return self
     */
    public function setSingleVendorInd($singleVendorInd)
    {
        $this->singleVendorInd = $singleVendorInd;

        return $this;
    }

    /**
     * Gets as signupDate
     *
     * Indicates when the member signed up for the loyalty program.
     *
     * @return \DateTime
     */
    public function getSignupDate()
    {
        return $this->signupDate;
    }

    /**
     * Sets a new signupDate
     *
     * Indicates when the member signed up for the loyalty program.
     *
     * @param \DateTime $signupDate
     * @return self
     */
    public function setSignupDate(\DateTime $signupDate)
    {
        $this->signupDate = $signupDate;

        return $this;
    }

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
     * Gets as expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return boolean
     */
    public function getExpireDateExclusiveIndicator()
    {
        return $this->expireDateExclusiveIndicator;
    }

    /**
     * Sets a new expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param boolean $expireDateExclusiveIndicator
     * @return self
     */
    public function setExpireDateExclusiveIndicator($expireDateExclusiveIndicator)
    {
        $this->expireDateExclusiveIndicator = $expireDateExclusiveIndicator;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A reference placeholder for this loyalty membership.
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
     * A reference placeholder for this loyalty membership.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}


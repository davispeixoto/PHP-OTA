<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AccountInfoType
 *
 * Loyalty specific member profile information.
 * XSD Type: AccountInfoType
 */
class AccountInfoType
{

    /**
     * The point balance for a loyalty account.
     *
     * @property integer $pointBalance
     */
    private $pointBalance = null;

    /**
     * Method in which enrollment occurs.
     *
     * @property string $enrollmentType
     */
    private $enrollmentType = null;

    /**
     * Means by which the enrollment was initiated. Refer to OpenTravel Code List
     * Enrollment Method (ENR).
     *
     * @property string $enrollmentMethod
     */
    private $enrollmentMethod = null;

    /**
     * The account status. Refer to Open Travel Code List Profile Status (PST).
     *
     * @property string $accountStatus
     */
    private $accountStatus = null;

    /**
     * The date the balance was last updated. For example, in the case of an airline
     * loyalty program, the date of the last flight taken.
     *
     * @property \DateTime $lastUpdateDate
     */
    private $lastUpdateDate = null;

    /**
     * The lounge status of this account.
     *
     * @property string $loungeStatus
     */
    private $loungeStatus = null;

    /**
     * Permission for sharing all data in profile for synchronization of profiles held
     * by other travel service providers.
     *  No
     *
     * @property string $shareAllSynchInd
     */
    private $shareAllSynchInd = null;

    /**
     * Permission for sharing all data in profile for marketing purposes. A yes value
     * indicates that the customer has chosen to opt-in to marketing communication.
     * This is used in combination with the ShareAllOptOutInd and only one of these
     * attributes should have a value of yes.
     *
     * @property string $shareAllMarketInd
     */
    private $shareAllMarketInd = null;

    /**
     * When yes, a customer has explicitly opted out of marketing communication. This
     * is used in combination with the ShareAllMarketInd and only one of these
     * attributes should have a value of yes.
     *
     * @property string $shareAllOptOutInd
     */
    private $shareAllOptOutInd = null;

    /**
     * Status of the opt in.Example: OptedIn
     *
     * @property string $optInStatus
     */
    private $optInStatus = null;

    /**
     * Date and time of opt in.Example: 2012-01-14T09:57:59
     *
     * @property \DateTime $optInDate
     */
    private $optInDate = null;

    /**
     * Date and time of opt out.Example: 2012-01-14T09:57:59
     *
     * @property \DateTime $optOutDate
     */
    private $optOutDate = null;

    /**
     * Member information including name, contact information and employee information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $memberInfo
     */
    private $memberInfo = null;

    /**
     * Loyalty program preferences specified by the enrolling member.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccountInfoType\MemberPreferencesAType
     * $memberPreferences
     */
    private $memberPreferences = null;

    /**
     * Information allowing member to securely access account.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccountInfoType\SecurityInfoAType
     * $securityInfo
     */
    private $securityInfo = null;

    /**
     * Used to specify a sub-account and its point balance associated with this loyalty
     * account.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccountInfoType\SubAccountBalanceAType[]
     * $subAccountBalance
     */
    private $subAccountBalance = null;

    /**
     * Gets as pointBalance
     *
     * The point balance for a loyalty account.
     *
     * @return integer
     */
    public function getPointBalance()
    {
        return $this->pointBalance;
    }

    /**
     * Sets a new pointBalance
     *
     * The point balance for a loyalty account.
     *
     * @param integer $pointBalance
     * @return self
     */
    public function setPointBalance($pointBalance)
    {
        $this->pointBalance = $pointBalance;

        return $this;
    }

    /**
     * Gets as enrollmentType
     *
     * Method in which enrollment occurs.
     *
     * @return string
     */
    public function getEnrollmentType()
    {
        return $this->enrollmentType;
    }

    /**
     * Sets a new enrollmentType
     *
     * Method in which enrollment occurs.
     *
     * @param string $enrollmentType
     * @return self
     */
    public function setEnrollmentType($enrollmentType)
    {
        $this->enrollmentType = $enrollmentType;

        return $this;
    }

    /**
     * Gets as enrollmentMethod
     *
     * Means by which the enrollment was initiated. Refer to OpenTravel Code List
     * Enrollment Method (ENR).
     *
     * @return string
     */
    public function getEnrollmentMethod()
    {
        return $this->enrollmentMethod;
    }

    /**
     * Sets a new enrollmentMethod
     *
     * Means by which the enrollment was initiated. Refer to OpenTravel Code List
     * Enrollment Method (ENR).
     *
     * @param string $enrollmentMethod
     * @return self
     */
    public function setEnrollmentMethod($enrollmentMethod)
    {
        $this->enrollmentMethod = $enrollmentMethod;

        return $this;
    }

    /**
     * Gets as accountStatus
     *
     * The account status. Refer to Open Travel Code List Profile Status (PST).
     *
     * @return string
     */
    public function getAccountStatus()
    {
        return $this->accountStatus;
    }

    /**
     * Sets a new accountStatus
     *
     * The account status. Refer to Open Travel Code List Profile Status (PST).
     *
     * @param string $accountStatus
     * @return self
     */
    public function setAccountStatus($accountStatus)
    {
        $this->accountStatus = $accountStatus;

        return $this;
    }

    /**
     * Gets as lastUpdateDate
     *
     * The date the balance was last updated. For example, in the case of an airline
     * loyalty program, the date of the last flight taken.
     *
     * @return \DateTime
     */
    public function getLastUpdateDate()
    {
        return $this->lastUpdateDate;
    }

    /**
     * Sets a new lastUpdateDate
     *
     * The date the balance was last updated. For example, in the case of an airline
     * loyalty program, the date of the last flight taken.
     *
     * @param \DateTime $lastUpdateDate
     * @return self
     */
    public function setLastUpdateDate(\DateTime $lastUpdateDate)
    {
        $this->lastUpdateDate = $lastUpdateDate;

        return $this;
    }

    /**
     * Gets as loungeStatus
     *
     * The lounge status of this account.
     *
     * @return string
     */
    public function getLoungeStatus()
    {
        return $this->loungeStatus;
    }

    /**
     * Sets a new loungeStatus
     *
     * The lounge status of this account.
     *
     * @param string $loungeStatus
     * @return self
     */
    public function setLoungeStatus($loungeStatus)
    {
        $this->loungeStatus = $loungeStatus;

        return $this;
    }

    /**
     * Gets as shareAllSynchInd
     *
     * Permission for sharing all data in profile for synchronization of profiles held
     * by other travel service providers.
     *  No
     *
     * @return string
     */
    public function getShareAllSynchInd()
    {
        return $this->shareAllSynchInd;
    }

    /**
     * Sets a new shareAllSynchInd
     *
     * Permission for sharing all data in profile for synchronization of profiles held
     * by other travel service providers.
     *  No
     *
     * @param string $shareAllSynchInd
     * @return self
     */
    public function setShareAllSynchInd($shareAllSynchInd)
    {
        $this->shareAllSynchInd = $shareAllSynchInd;

        return $this;
    }

    /**
     * Gets as shareAllMarketInd
     *
     * Permission for sharing all data in profile for marketing purposes. A yes value
     * indicates that the customer has chosen to opt-in to marketing communication.
     * This is used in combination with the ShareAllOptOutInd and only one of these
     * attributes should have a value of yes.
     *
     * @return string
     */
    public function getShareAllMarketInd()
    {
        return $this->shareAllMarketInd;
    }

    /**
     * Sets a new shareAllMarketInd
     *
     * Permission for sharing all data in profile for marketing purposes. A yes value
     * indicates that the customer has chosen to opt-in to marketing communication.
     * This is used in combination with the ShareAllOptOutInd and only one of these
     * attributes should have a value of yes.
     *
     * @param string $shareAllMarketInd
     * @return self
     */
    public function setShareAllMarketInd($shareAllMarketInd)
    {
        $this->shareAllMarketInd = $shareAllMarketInd;

        return $this;
    }

    /**
     * Gets as shareAllOptOutInd
     *
     * When yes, a customer has explicitly opted out of marketing communication. This
     * is used in combination with the ShareAllMarketInd and only one of these
     * attributes should have a value of yes.
     *
     * @return string
     */
    public function getShareAllOptOutInd()
    {
        return $this->shareAllOptOutInd;
    }

    /**
     * Sets a new shareAllOptOutInd
     *
     * When yes, a customer has explicitly opted out of marketing communication. This
     * is used in combination with the ShareAllMarketInd and only one of these
     * attributes should have a value of yes.
     *
     * @param string $shareAllOptOutInd
     * @return self
     */
    public function setShareAllOptOutInd($shareAllOptOutInd)
    {
        $this->shareAllOptOutInd = $shareAllOptOutInd;

        return $this;
    }

    /**
     * Gets as optInStatus
     *
     * Status of the opt in.Example: OptedIn
     *
     * @return string
     */
    public function getOptInStatus()
    {
        return $this->optInStatus;
    }

    /**
     * Sets a new optInStatus
     *
     * Status of the opt in.Example: OptedIn
     *
     * @param string $optInStatus
     * @return self
     */
    public function setOptInStatus($optInStatus)
    {
        $this->optInStatus = $optInStatus;

        return $this;
    }

    /**
     * Gets as optInDate
     *
     * Date and time of opt in.Example: 2012-01-14T09:57:59
     *
     * @return \DateTime
     */
    public function getOptInDate()
    {
        return $this->optInDate;
    }

    /**
     * Sets a new optInDate
     *
     * Date and time of opt in.Example: 2012-01-14T09:57:59
     *
     * @param \DateTime $optInDate
     * @return self
     */
    public function setOptInDate(\DateTime $optInDate)
    {
        $this->optInDate = $optInDate;

        return $this;
    }

    /**
     * Gets as optOutDate
     *
     * Date and time of opt out.Example: 2012-01-14T09:57:59
     *
     * @return \DateTime
     */
    public function getOptOutDate()
    {
        return $this->optOutDate;
    }

    /**
     * Sets a new optOutDate
     *
     * Date and time of opt out.Example: 2012-01-14T09:57:59
     *
     * @param \DateTime $optOutDate
     * @return self
     */
    public function setOptOutDate(\DateTime $optOutDate)
    {
        $this->optOutDate = $optOutDate;

        return $this;
    }

    /**
     * Gets as memberInfo
     *
     * Member information including name, contact information and employee information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getMemberInfo()
    {
        return $this->memberInfo;
    }

    /**
     * Sets a new memberInfo
     *
     * Member information including name, contact information and employee information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $memberInfo
     * @return self
     */
    public function setMemberInfo(\Davispeixoto\OpenTravelAlliance\ContactPersonType $memberInfo)
    {
        $this->memberInfo = $memberInfo;

        return $this;
    }

    /**
     * Gets as memberPreferences
     *
     * Loyalty program preferences specified by the enrolling member.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccountInfoType\MemberPreferencesAType
     */
    public function getMemberPreferences()
    {
        return $this->memberPreferences;
    }

    /**
     * Sets a new memberPreferences
     *
     * Loyalty program preferences specified by the enrolling member.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccountInfoType\MemberPreferencesAType
     * $memberPreferences
     * @return self
     */
    public function setMemberPreferences(
        \Davispeixoto\OpenTravelAlliance\AccountInfoType\MemberPreferencesAType $memberPreferences
    ) {
        $this->memberPreferences = $memberPreferences;

        return $this;
    }

    /**
     * Gets as securityInfo
     *
     * Information allowing member to securely access account.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccountInfoType\SecurityInfoAType
     */
    public function getSecurityInfo()
    {
        return $this->securityInfo;
    }

    /**
     * Sets a new securityInfo
     *
     * Information allowing member to securely access account.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccountInfoType\SecurityInfoAType
     * $securityInfo
     * @return self
     */
    public function setSecurityInfo(\Davispeixoto\OpenTravelAlliance\AccountInfoType\SecurityInfoAType $securityInfo)
    {
        $this->securityInfo = $securityInfo;

        return $this;
    }

    /**
     * Adds as subAccountBalance
     *
     * Used to specify a sub-account and its point balance associated with this loyalty
     * account.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AccountInfoType\SubAccountBalanceAType
     * $subAccountBalance
     */
    public function addToSubAccountBalance(
        \Davispeixoto\OpenTravelAlliance\AccountInfoType\SubAccountBalanceAType $subAccountBalance
    ) {
        $this->subAccountBalance[] = $subAccountBalance;

        return $this;
    }

    /**
     * isset subAccountBalance
     *
     * Used to specify a sub-account and its point balance associated with this loyalty
     * account.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubAccountBalance($index)
    {
        return isset($this->subAccountBalance[$index]);
    }

    /**
     * unset subAccountBalance
     *
     * Used to specify a sub-account and its point balance associated with this loyalty
     * account.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubAccountBalance($index)
    {
        unset($this->subAccountBalance[$index]);
    }

    /**
     * Gets as subAccountBalance
     *
     * Used to specify a sub-account and its point balance associated with this loyalty
     * account.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccountInfoType\SubAccountBalanceAType[]
     */
    public function getSubAccountBalance()
    {
        return $this->subAccountBalance;
    }

    /**
     * Sets a new subAccountBalance
     *
     * Used to specify a sub-account and its point balance associated with this loyalty
     * account.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccountInfoType\SubAccountBalanceAType[]
     * $subAccountBalance
     * @return self
     */
    public function setSubAccountBalance(array $subAccountBalance)
    {
        $this->subAccountBalance = $subAccountBalance;

        return $this;
    }


}


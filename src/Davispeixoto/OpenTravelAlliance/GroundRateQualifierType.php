<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundRateQualifierType
 *
 * Rate qualifiers that apply to a ground transportation service.
 * XSD Type: GroundRateQualifierType
 */
class GroundRateQualifierType
{

    /**
     * The customer account ID if applicable.
     *
     * @property string $accountID
     */
    private $accountID = null;

    /**
     * The customer account name if applicable.
     *
     * @property string $accountName
     */
    private $accountName = null;

    /**
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @property string $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * The vendor specific code used to identify a special rate associated with a
     * specific organization.
     *
     * @property string $corpDiscountNmbr
     */
    private $corpDiscountNmbr = null;

    /**
     * Promotion code.Example: PROMO123
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * An extensible list of rate categories.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListRateCategoryType $category
     */
    private $category = null;

    /**
     * An extensible list of travel purpose types.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListTravelPurposeType $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * Account specific additional information required to complete a booking (if the
     * corporate account is being used). Up to five key value pair fields to be sent
     * with the booking request if the requestor is using one of the corporate accounts
     * requiring such information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType\SpecialInputsAType[]
     * $specialInputs
     */
    private $specialInputs = null;

    /**
     * Gets as accountID
     *
     * The customer account ID if applicable.
     *
     * @return string
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * Sets a new accountID
     *
     * The customer account ID if applicable.
     *
     * @param string $accountID
     * @return self
     */
    public function setAccountID($accountID)
    {
        $this->accountID = $accountID;

        return $this;
    }

    /**
     * Gets as accountName
     *
     * The customer account name if applicable.
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Sets a new accountName
     *
     * The customer account name if applicable.
     *
     * @param string $accountName
     * @return self
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @return string
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @param string $rateQualifier
     * @return self
     */
    public function setRateQualifier($rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Gets as corpDiscountNmbr
     *
     * The vendor specific code used to identify a special rate associated with a
     * specific organization.
     *
     * @return string
     */
    public function getCorpDiscountNmbr()
    {
        return $this->corpDiscountNmbr;
    }

    /**
     * Sets a new corpDiscountNmbr
     *
     * The vendor specific code used to identify a special rate associated with a
     * specific organization.
     *
     * @param string $corpDiscountNmbr
     * @return self
     */
    public function setCorpDiscountNmbr($corpDiscountNmbr)
    {
        $this->corpDiscountNmbr = $corpDiscountNmbr;

        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * Promotion code.Example: PROMO123
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * Promotion code.Example: PROMO123
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Gets as category
     *
     * An extensible list of rate categories.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListRateCategoryType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * An extensible list of rate categories.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListRateCategoryType $category
     * @return self
     */
    public function setCategory(\Davispeixoto\OpenTravelAlliance\ListRateCategoryType $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets as travelPurpose
     *
     * An extensible list of travel purpose types.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListTravelPurposeType
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * An extensible list of travel purpose types.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListTravelPurposeType $travelPurpose
     * @return self
     */
    public function setTravelPurpose(\Davispeixoto\OpenTravelAlliance\ListTravelPurposeType $travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;

        return $this;
    }

    /**
     * Adds as specialInputs
     *
     * Account specific additional information required to complete a booking (if the
     * corporate account is being used). Up to five key value pair fields to be sent
     * with the booking request if the requestor is using one of the corporate accounts
     * requiring such information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType\SpecialInputsAType
     * $specialInputs
     */
    public function addToSpecialInputs(
        \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType\SpecialInputsAType $specialInputs
    ) {
        $this->specialInputs[] = $specialInputs;

        return $this;
    }

    /**
     * isset specialInputs
     *
     * Account specific additional information required to complete a booking (if the
     * corporate account is being used). Up to five key value pair fields to be sent
     * with the booking request if the requestor is using one of the corporate accounts
     * requiring such information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialInputs($index)
    {
        return isset($this->specialInputs[$index]);
    }

    /**
     * unset specialInputs
     *
     * Account specific additional information required to complete a booking (if the
     * corporate account is being used). Up to five key value pair fields to be sent
     * with the booking request if the requestor is using one of the corporate accounts
     * requiring such information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialInputs($index)
    {
        unset($this->specialInputs[$index]);
    }

    /**
     * Gets as specialInputs
     *
     * Account specific additional information required to complete a booking (if the
     * corporate account is being used). Up to five key value pair fields to be sent
     * with the booking request if the requestor is using one of the corporate accounts
     * requiring such information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType\SpecialInputsAType[]
     */
    public function getSpecialInputs()
    {
        return $this->specialInputs;
    }

    /**
     * Sets a new specialInputs
     *
     * Account specific additional information required to complete a booking (if the
     * corporate account is being used). Up to five key value pair fields to be sent
     * with the booking request if the requestor is using one of the corporate accounts
     * requiring such information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundRateQualifierType\SpecialInputsAType[]
     * $specialInputs
     * @return self
     */
    public function setSpecialInputs(array $specialInputs)
    {
        $this->specialInputs = $specialInputs;

        return $this;
    }


}


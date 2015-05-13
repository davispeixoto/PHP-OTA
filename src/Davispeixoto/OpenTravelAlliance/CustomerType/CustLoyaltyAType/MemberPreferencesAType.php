<?php

namespace Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType;

/**
 * Class representing MemberPreferencesAType
 */
class MemberPreferencesAType
{

    /**
     * Indicates how person became aware of loyalty program.
     *
     * @property string $awareness
     */
    private $awareness = null;

    /**
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * List of the vendor codes associated with a promotion.
     *
     * @property string[] $promotionVendorCode
     */
    private $promotionVendorCode = null;

    /**
     * Method by which awards are allocated.
     *
     * @property string $awardsPreference
     */
    private $awardsPreference = null;

    /**
     * Additional programs that are honored by the primary loyalty account.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\AdditionalRewardAType[]
     * $additionalReward
     */
    private $additionalReward = null;

    /**
     * Source from which members can receive information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType[]
     * $offer
     */
    private $offer = null;

    /**
     * Gets as awareness
     *
     * Indicates how person became aware of loyalty program.
     *
     * @return string
     */
    public function getAwareness()
    {
        return $this->awareness;
    }

    /**
     * Sets a new awareness
     *
     * Indicates how person became aware of loyalty program.
     *
     * @param string $awareness
     * @return self
     */
    public function setAwareness($awareness)
    {
        $this->awareness = $awareness;

        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
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
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
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
     * Adds as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return self
     * @param string $promotionVendorCode
     */
    public function addToPromotionVendorCode($promotionVendorCode)
    {
        $this->promotionVendorCode[] = $promotionVendorCode;

        return $this;
    }

    /**
     * isset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotionVendorCode($index)
    {
        return isset($this->promotionVendorCode[$index]);
    }

    /**
     * unset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotionVendorCode($index)
    {
        unset($this->promotionVendorCode[$index]);
    }

    /**
     * Gets as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return string[]
     */
    public function getPromotionVendorCode()
    {
        return $this->promotionVendorCode;
    }

    /**
     * Sets a new promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param string $promotionVendorCode
     * @return self
     */
    public function setPromotionVendorCode(array $promotionVendorCode)
    {
        $this->promotionVendorCode = $promotionVendorCode;

        return $this;
    }

    /**
     * Gets as awardsPreference
     *
     * Method by which awards are allocated.
     *
     * @return string
     */
    public function getAwardsPreference()
    {
        return $this->awardsPreference;
    }

    /**
     * Sets a new awardsPreference
     *
     * Method by which awards are allocated.
     *
     * @param string $awardsPreference
     * @return self
     */
    public function setAwardsPreference($awardsPreference)
    {
        $this->awardsPreference = $awardsPreference;

        return $this;
    }

    /**
     * Adds as additionalReward
     *
     * Additional programs that are honored by the primary loyalty account.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\AdditionalRewardAType
     * $additionalReward
     */
    public function addToAdditionalReward(
        \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\AdditionalRewardAType $additionalReward
    ) {
        $this->additionalReward[] = $additionalReward;

        return $this;
    }

    /**
     * isset additionalReward
     *
     * Additional programs that are honored by the primary loyalty account.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalReward($index)
    {
        return isset($this->additionalReward[$index]);
    }

    /**
     * unset additionalReward
     *
     * Additional programs that are honored by the primary loyalty account.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalReward($index)
    {
        unset($this->additionalReward[$index]);
    }

    /**
     * Gets as additionalReward
     *
     * Additional programs that are honored by the primary loyalty account.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\AdditionalRewardAType[]
     */
    public function getAdditionalReward()
    {
        return $this->additionalReward;
    }

    /**
     * Sets a new additionalReward
     *
     * Additional programs that are honored by the primary loyalty account.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\AdditionalRewardAType[]
     * $additionalReward
     * @return self
     */
    public function setAdditionalReward(array $additionalReward)
    {
        $this->additionalReward = $additionalReward;

        return $this;
    }

    /**
     * Adds as offer
     *
     * Source from which members can receive information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType
     * $offer
     */
    public function addToOffer(
        \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType $offer
    ) {
        $this->offer[] = $offer;

        return $this;
    }

    /**
     * isset offer
     *
     * Source from which members can receive information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer
     *
     * Source from which members can receive information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffer($index)
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer
     *
     * Source from which members can receive information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * Source from which members can receive information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType[]
     * $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;

        return $this;
    }


}


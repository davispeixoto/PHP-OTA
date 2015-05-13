<?php

namespace Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType;

/**
 * Class representing ParticipantCategoryAType
 */
class ParticipantCategoryAType
{

    /**
     * This is used to specify a participant age in years.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * A specific type of age and/or group qualifier, such as "Adult". Select a value
     * from the pre-defined list or select "Other_" and enter a value known between
     * trading partners in the @Extension attribute.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\ParticipantCategoryAType\QualifierInfoAType
     * $qualifierInfo
     */
    private $qualifierInfo = null;

    /**
     * Pricing for the specified participant category information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price
     */
    private $price = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as age
     *
     * This is used to specify a participant age in years.
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * This is used to specify a participant age in years.
     *
     * @param integer $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets as qualifierInfo
     *
     * A specific type of age and/or group qualifier, such as "Adult". Select a value
     * from the pre-defined list or select "Other_" and enter a value known between
     * trading partners in the @Extension attribute.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\ParticipantCategoryAType\QualifierInfoAType
     */
    public function getQualifierInfo()
    {
        return $this->qualifierInfo;
    }

    /**
     * Sets a new qualifierInfo
     *
     * A specific type of age and/or group qualifier, such as "Adult". Select a value
     * from the pre-defined list or select "Other_" and enter a value known between
     * trading partners in the @Extension attribute.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\ParticipantCategoryAType\QualifierInfoAType
     * $qualifierInfo
     * @return self
     */
    public function setQualifierInfo(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\ParticipantCategoryAType\QualifierInfoAType $qualifierInfo
    ) {
        $this->qualifierInfo = $qualifierInfo;

        return $this;
    }

    /**
     * Gets as price
     *
     * Pricing for the specified participant category information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityChargeType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * Pricing for the specified participant category information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price
     * @return self
     */
    public function setPrice(\Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}


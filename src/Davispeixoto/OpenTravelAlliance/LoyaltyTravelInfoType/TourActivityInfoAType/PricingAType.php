<?php

namespace Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType;

/**
 * Class representing PricingAType
 */
class PricingAType
{

    /**
     * Pricing information for the tour/ activity that is not assciated with
     * participant category(s) and/or group(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\SummaryAType
     * $summary
     */
    private $summary = null;

    /**
     * Pricing for one or more participant category(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\ParticipantCategoryAType[]
     * $participantCategory
     */
    private $participantCategory = null;

    /**
     * Group pricing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\GroupAType[]
     * $group
     */
    private $group = null;

    /**
     * Gets as summary
     *
     * Pricing information for the tour/ activity that is not assciated with
     * participant category(s) and/or group(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\SummaryAType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Pricing information for the tour/ activity that is not assciated with
     * participant category(s) and/or group(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\SummaryAType
     * $summary
     * @return self
     */
    public function setSummary(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\SummaryAType $summary
    ) {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Adds as participantCategory
     *
     * Pricing for one or more participant category(s).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\ParticipantCategoryAType
     * $participantCategory
     */
    public function addToParticipantCategory(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\ParticipantCategoryAType $participantCategory
    ) {
        $this->participantCategory[] = $participantCategory;

        return $this;
    }

    /**
     * isset participantCategory
     *
     * Pricing for one or more participant category(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantCategory($index)
    {
        return isset($this->participantCategory[$index]);
    }

    /**
     * unset participantCategory
     *
     * Pricing for one or more participant category(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantCategory($index)
    {
        unset($this->participantCategory[$index]);
    }

    /**
     * Gets as participantCategory
     *
     * Pricing for one or more participant category(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\ParticipantCategoryAType[]
     */
    public function getParticipantCategory()
    {
        return $this->participantCategory;
    }

    /**
     * Sets a new participantCategory
     *
     * Pricing for one or more participant category(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\ParticipantCategoryAType[]
     * $participantCategory
     * @return self
     */
    public function setParticipantCategory(array $participantCategory)
    {
        $this->participantCategory = $participantCategory;

        return $this;
    }

    /**
     * Adds as group
     *
     * Group pricing.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\GroupAType
     * $group
     */
    public function addToGroup(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\GroupAType $group
    ) {
        $this->group[] = $group;

        return $this;
    }

    /**
     * isset group
     *
     * Group pricing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGroup($index)
    {
        return isset($this->group[$index]);
    }

    /**
     * unset group
     *
     * Group pricing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGroup($index)
    {
        unset($this->group[$index]);
    }

    /**
     * Gets as group
     *
     * Group pricing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\GroupAType[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * Group pricing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType\PricingAType\GroupAType[]
     * $group
     * @return self
     */
    public function setGroup(array $group)
    {
        $this->group = $group;

        return $this;
    }


}


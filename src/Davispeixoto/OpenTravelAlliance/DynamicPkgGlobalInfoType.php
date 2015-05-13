<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DynamicPkgGlobalInfoType
 *
 * ResGlobalInfo is a container for various information that affects the
 * Reservation as a whole. These include global comments, counts, reservation IDs,
 * loyalty programs, and payment methods.
 * XSD Type: DynamicPkgGlobalInfoType
 */
class DynamicPkgGlobalInfoType extends ResGlobalInfoType
{

    /**
     * A collection of unique identifiers that can be used to represent the dynamic
     * package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $dynamicPkgIDs
     */
    private $dynamicPkgIDs = null;

    /**
     * Multimodal offer influencers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * Collection of promotions applied to the package.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType\PromotionsAType\PromotionAType[]
     * $promotions
     */
    private $promotions = null;

    /**
     * Adds as dynamicPkgID
     *
     * A collection of unique identifiers that can be used to represent the dynamic
     * package.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $dynamicPkgID
     */
    public function addToDynamicPkgIDs(\Davispeixoto\OpenTravelAlliance\UniqueIDType $dynamicPkgID)
    {
        $this->dynamicPkgIDs[] = $dynamicPkgID;

        return $this;
    }

    /**
     * isset dynamicPkgIDs
     *
     * A collection of unique identifiers that can be used to represent the dynamic
     * package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDynamicPkgIDs($index)
    {
        return isset($this->dynamicPkgIDs[$index]);
    }

    /**
     * unset dynamicPkgIDs
     *
     * A collection of unique identifiers that can be used to represent the dynamic
     * package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDynamicPkgIDs($index)
    {
        unset($this->dynamicPkgIDs[$index]);
    }

    /**
     * Gets as dynamicPkgIDs
     *
     * A collection of unique identifiers that can be used to represent the dynamic
     * package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getDynamicPkgIDs()
    {
        return $this->dynamicPkgIDs;
    }

    /**
     * Sets a new dynamicPkgIDs
     *
     * A collection of unique identifiers that can be used to represent the dynamic
     * package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $dynamicPkgIDs
     * @return self
     */
    public function setDynamicPkgIDs(array $dynamicPkgIDs)
    {
        $this->dynamicPkgIDs = $dynamicPkgIDs;

        return $this;
    }

    /**
     * Gets as multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultiModalOfferType
     */
    public function getMultimodalOffer()
    {
        return $this->multimodalOffer;
    }

    /**
     * Sets a new multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     * @return self
     */
    public function setMultimodalOffer(\Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer)
    {
        $this->multimodalOffer = $multimodalOffer;

        return $this;
    }

    /**
     * Adds as promotion
     *
     * Collection of promotions applied to the package.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType\PromotionsAType\PromotionAType
     * $promotion
     */
    public function addToPromotions(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType\PromotionsAType\PromotionAType $promotion
    ) {
        $this->promotions[] = $promotion;

        return $this;
    }

    /**
     * isset promotions
     *
     * Collection of promotions applied to the package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotions($index)
    {
        return isset($this->promotions[$index]);
    }

    /**
     * unset promotions
     *
     * Collection of promotions applied to the package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotions($index)
    {
        unset($this->promotions[$index]);
    }

    /**
     * Gets as promotions
     *
     * Collection of promotions applied to the package.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType\PromotionsAType\PromotionAType[]
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Sets a new promotions
     *
     * Collection of promotions applied to the package.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType\PromotionsAType\PromotionAType[]
     * $promotions
     * @return self
     */
    public function setPromotions(array $promotions)
    {
        $this->promotions = $promotions;

        return $this;
    }


}


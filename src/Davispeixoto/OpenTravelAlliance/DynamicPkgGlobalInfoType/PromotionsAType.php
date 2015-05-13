<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType;

/**
 * Class representing PromotionsAType
 */
class PromotionsAType
{

    /**
     * Provides promotion information associated with the package.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType\PromotionsAType\PromotionAType[]
     * $promotion
     */
    private $promotion = null;

    /**
     * Adds as promotion
     *
     * Provides promotion information associated with the package.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType\PromotionsAType\PromotionAType
     * $promotion
     */
    public function addToPromotion(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType\PromotionsAType\PromotionAType $promotion
    ) {
        $this->promotion[] = $promotion;

        return $this;
    }

    /**
     * isset promotion
     *
     * Provides promotion information associated with the package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotion($index)
    {
        return isset($this->promotion[$index]);
    }

    /**
     * unset promotion
     *
     * Provides promotion information associated with the package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotion($index)
    {
        unset($this->promotion[$index]);
    }

    /**
     * Gets as promotion
     *
     * Provides promotion information associated with the package.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType\PromotionsAType\PromotionAType[]
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Sets a new promotion
     *
     * Provides promotion information associated with the package.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType\PromotionsAType\PromotionAType[]
     * $promotion
     * @return self
     */
    public function setPromotion(array $promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }


}


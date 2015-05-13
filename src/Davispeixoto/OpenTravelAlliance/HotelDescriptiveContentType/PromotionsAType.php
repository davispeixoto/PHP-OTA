<?php

namespace Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType;

/**
 * Class representing PromotionsAType
 */
class PromotionsAType
{

    /**
     * A hotel package or promotion.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PromotionsAType\PromotionAType[]
     * $promotion
     */
    private $promotion = null;

    /**
     * Adds as promotion
     *
     * A hotel package or promotion.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PromotionsAType\PromotionAType
     * $promotion
     */
    public function addToPromotion(
        \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PromotionsAType\PromotionAType $promotion
    ) {
        $this->promotion[] = $promotion;

        return $this;
    }

    /**
     * isset promotion
     *
     * A hotel package or promotion.
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
     * A hotel package or promotion.
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
     * A hotel package or promotion.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PromotionsAType\PromotionAType[]
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Sets a new promotion
     *
     * A hotel package or promotion.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PromotionsAType\PromotionAType[]
     * $promotion
     * @return self
     */
    public function setPromotion(array $promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }


}


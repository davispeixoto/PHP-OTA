<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityPromotionType
 *
 * Promotion details, including coupons and other discount plans.
 * XSD Type: TourActivityPromotionType
 */
class TourActivityPromotionType
{

    /**
     * One or more descriptions, codes and effective dates for promotional pricing (up
     * to 5 may be specified.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\PromotionAType[]
     * $promotion
     */
    private $promotion = null;

    /**
     * Discount program details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType
     * $discountProgram
     */
    private $discountProgram = null;

    /**
     * Adds as promotion
     *
     * One or more descriptions, codes and effective dates for promotional pricing (up
     * to 5 may be specified.)
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\PromotionAType
     * $promotion
     */
    public function addToPromotion(\Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\PromotionAType $promotion)
    {
        $this->promotion[] = $promotion;

        return $this;
    }

    /**
     * isset promotion
     *
     * One or more descriptions, codes and effective dates for promotional pricing (up
     * to 5 may be specified.)
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
     * One or more descriptions, codes and effective dates for promotional pricing (up
     * to 5 may be specified.)
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
     * One or more descriptions, codes and effective dates for promotional pricing (up
     * to 5 may be specified.)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\PromotionAType[]
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Sets a new promotion
     *
     * One or more descriptions, codes and effective dates for promotional pricing (up
     * to 5 may be specified.)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\PromotionAType[]
     * $promotion
     * @return self
     */
    public function setPromotion(array $promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Gets as discountProgram
     *
     * Discount program details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType
     */
    public function getDiscountProgram()
    {
        return $this->discountProgram;
    }

    /**
     * Sets a new discountProgram
     *
     * Discount program details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType
     * $discountProgram
     * @return self
     */
    public function setDiscountProgram(
        \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType $discountProgram
    ) {
        $this->discountProgram = $discountProgram;

        return $this;
    }


}


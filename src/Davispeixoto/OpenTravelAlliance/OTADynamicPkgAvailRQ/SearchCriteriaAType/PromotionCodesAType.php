<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType;

/**
 * Class representing PromotionCodesAType
 */
class PromotionCodesAType
{

    /**
     * Used to apply discounts and tracking codes to a package.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType\PromotionCodeAType[]
     * $promotionCode
     */
    private $promotionCode = null;

    /**
     * Adds as promotionCode
     *
     * Used to apply discounts and tracking codes to a package.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType\PromotionCodeAType
     * $promotionCode
     */
    public function addToPromotionCode(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType\PromotionCodeAType $promotionCode
    ) {
        $this->promotionCode[] = $promotionCode;

        return $this;
    }

    /**
     * isset promotionCode
     *
     * Used to apply discounts and tracking codes to a package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotionCode($index)
    {
        return isset($this->promotionCode[$index]);
    }

    /**
     * unset promotionCode
     *
     * Used to apply discounts and tracking codes to a package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotionCode($index)
    {
        unset($this->promotionCode[$index]);
    }

    /**
     * Gets as promotionCode
     *
     * Used to apply discounts and tracking codes to a package.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType\PromotionCodeAType[]
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * Used to apply discounts and tracking codes to a package.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType\PromotionCodeAType[]
     * $promotionCode
     * @return self
     */
    public function setPromotionCode(array $promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }


}


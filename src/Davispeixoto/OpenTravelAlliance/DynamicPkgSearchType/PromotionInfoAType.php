<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgSearchType;

/**
 * Class representing PromotionInfoAType
 */
class PromotionInfoAType
{

    /**
     * A unique reference to the promotion code.
     *
     * @property string $promotionCodeRPH
     */
    private $promotionCodeRPH = null;

    /**
     * Gets as promotionCodeRPH
     *
     * A unique reference to the promotion code.
     *
     * @return string
     */
    public function getPromotionCodeRPH()
    {
        return $this->promotionCodeRPH;
    }

    /**
     * Sets a new promotionCodeRPH
     *
     * A unique reference to the promotion code.
     *
     * @param string $promotionCodeRPH
     * @return self
     */
    public function setPromotionCodeRPH($promotionCodeRPH)
    {
        $this->promotionCodeRPH = $promotionCodeRPH;

        return $this;
    }


}


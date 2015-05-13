<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType;

/**
 * Class representing PromotionsAType
 */
class PromotionsAType
{

    /**
     * A promotion that has similar date criteria as the meeting dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType[]
     * $promotion
     */
    private $promotion = null;

    /**
     * Adds as promotion
     *
     * A promotion that has similar date criteria as the meeting dates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType
     * $promotion
     */
    public function addToPromotion(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType $promotion
    ) {
        $this->promotion[] = $promotion;

        return $this;
    }

    /**
     * isset promotion
     *
     * A promotion that has similar date criteria as the meeting dates.
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
     * A promotion that has similar date criteria as the meeting dates.
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
     * A promotion that has similar date criteria as the meeting dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType[]
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Sets a new promotion
     *
     * A promotion that has similar date criteria as the meeting dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType[]
     * $promotion
     * @return self
     */
    public function setPromotion(array $promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }


}


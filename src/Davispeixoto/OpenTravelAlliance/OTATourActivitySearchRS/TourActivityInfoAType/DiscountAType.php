<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType;

/**
 * Class representing DiscountAType
 */
class DiscountAType
{

    /**
     * Details about a supported discount program.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType\ProgramDetailAType
     * $programDetail
     */
    private $programDetail = null;

    /**
     * One or more promotion nanes, codes and effective dates that may apply to this
     * tour/ activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType\PromotionAType[]
     * $promotion
     */
    private $promotion = null;

    /**
     * Gets as programDetail
     *
     * Details about a supported discount program.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType\ProgramDetailAType
     */
    public function getProgramDetail()
    {
        return $this->programDetail;
    }

    /**
     * Sets a new programDetail
     *
     * Details about a supported discount program.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType\ProgramDetailAType
     * $programDetail
     * @return self
     */
    public function setProgramDetail(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType\ProgramDetailAType $programDetail
    ) {
        $this->programDetail = $programDetail;

        return $this;
    }

    /**
     * Adds as promotion
     *
     * One or more promotion nanes, codes and effective dates that may apply to this
     * tour/ activity.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType\PromotionAType
     * $promotion
     */
    public function addToPromotion(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType\PromotionAType $promotion
    ) {
        $this->promotion[] = $promotion;

        return $this;
    }

    /**
     * isset promotion
     *
     * One or more promotion nanes, codes and effective dates that may apply to this
     * tour/ activity.
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
     * One or more promotion nanes, codes and effective dates that may apply to this
     * tour/ activity.
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
     * One or more promotion nanes, codes and effective dates that may apply to this
     * tour/ activity.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType\PromotionAType[]
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Sets a new promotion
     *
     * One or more promotion nanes, codes and effective dates that may apply to this
     * tour/ activity.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType\PromotionAType[]
     * $promotion
     * @return self
     */
    public function setPromotion(array $promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }


}


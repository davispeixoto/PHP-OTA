<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityPromotionType;

/**
 * Class representing DiscountProgramAType
 */
class DiscountProgramAType
{

    /**
     * Details about a discount program.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType\DetailAType
     * $detail
     */
    private $detail = null;

    /**
     * Participation information, including card number and valid dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType\ParticipationInfoAType
     * $participationInfo
     */
    private $participationInfo = null;

    /**
     * Gets as detail
     *
     * Details about a discount program.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType\DetailAType
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Details about a discount program.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType\DetailAType
     * $detail
     * @return self
     */
    public function setDetail(
        \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType\DetailAType $detail
    ) {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Gets as participationInfo
     *
     * Participation information, including card number and valid dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType\ParticipationInfoAType
     */
    public function getParticipationInfo()
    {
        return $this->participationInfo;
    }

    /**
     * Sets a new participationInfo
     *
     * Participation information, including card number and valid dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType\ParticipationInfoAType
     * $participationInfo
     * @return self
     */
    public function setParticipationInfo(
        \Davispeixoto\OpenTravelAlliance\TourActivityPromotionType\DiscountProgramAType\ParticipationInfoAType $participationInfo
    ) {
        $this->participationInfo = $participationInfo;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType;

use Davispeixoto\OpenTravelAlliance\DateTimeSpanType;

/**
 * Class representing DateAType
 */
class DateAType extends DateTimeSpanType
{

    /**
     * This is the type of date for a block of rooms and/or meeting space.
     *
     * @property string $dateType
     */
    private $dateType = null;

    /**
     * This reference place holder refers to the promotion date range. This is used to
     * link a particular promotion to a particular date range.
     *
     * @property string $promotionRPH
     */
    private $promotionRPH = null;

    /**
     * Gets as dateType
     *
     * This is the type of date for a block of rooms and/or meeting space.
     *
     * @return string
     */
    public function getDateType()
    {
        return $this->dateType;
    }

    /**
     * Sets a new dateType
     *
     * This is the type of date for a block of rooms and/or meeting space.
     *
     * @param string $dateType
     * @return self
     */
    public function setDateType($dateType)
    {
        $this->dateType = $dateType;

        return $this;
    }

    /**
     * Gets as promotionRPH
     *
     * This reference place holder refers to the promotion date range. This is used to
     * link a particular promotion to a particular date range.
     *
     * @return string
     */
    public function getPromotionRPH()
    {
        return $this->promotionRPH;
    }

    /**
     * Sets a new promotionRPH
     *
     * This reference place holder refers to the promotion date range. This is used to
     * link a particular promotion to a particular date range.
     *
     * @param string $promotionRPH
     * @return self
     */
    public function setPromotionRPH($promotionRPH)
    {
        $this->promotionRPH = $promotionRPH;

        return $this;
    }


}


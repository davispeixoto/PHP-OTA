<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\DiscountAType;

/**
 * Class representing ParticipationInfoAType
 */
class ParticipationInfoAType
{

    /**
     * The starting date for a participant or group discount program.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $validFromDate
     */
    private $validFromDate = null;

    /**
     * The ending date for a participant or group discount program.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $validThroughDate
     */
    private $validThroughDate = null;

    /**
     * The card or other number associated with the program.
     *
     * @property string $programNumber
     */
    private $programNumber = null;

    /**
     * The name (individual or corporate) on the discount card.
     *
     * @property string $nameOnCard
     */
    private $nameOnCard = null;

    /**
     * Gets as validFromDate
     *
     * The starting date for a participant or group discount program.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getValidFromDate()
    {
        return $this->validFromDate;
    }

    /**
     * Sets a new validFromDate
     *
     * The starting date for a participant or group discount program.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $validFromDate
     * @return self
     */
    public function setValidFromDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $validFromDate)
    {
        $this->validFromDate = $validFromDate;

        return $this;
    }

    /**
     * Gets as validThroughDate
     *
     * The ending date for a participant or group discount program.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getValidThroughDate()
    {
        return $this->validThroughDate;
    }

    /**
     * Sets a new validThroughDate
     *
     * The ending date for a participant or group discount program.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     * $validThroughDate
     * @return self
     */
    public function setValidThroughDate(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $validThroughDate)
    {
        $this->validThroughDate = $validThroughDate;

        return $this;
    }

    /**
     * Gets as programNumber
     *
     * The card or other number associated with the program.
     *
     * @return string
     */
    public function getProgramNumber()
    {
        return $this->programNumber;
    }

    /**
     * Sets a new programNumber
     *
     * The card or other number associated with the program.
     *
     * @param string $programNumber
     * @return self
     */
    public function setProgramNumber($programNumber)
    {
        $this->programNumber = $programNumber;

        return $this;
    }

    /**
     * Gets as nameOnCard
     *
     * The name (individual or corporate) on the discount card.
     *
     * @return string
     */
    public function getNameOnCard()
    {
        return $this->nameOnCard;
    }

    /**
     * Sets a new nameOnCard
     *
     * The name (individual or corporate) on the discount card.
     *
     * @param string $nameOnCard
     * @return self
     */
    public function setNameOnCard($nameOnCard)
    {
        $this->nameOnCard = $nameOnCard;

        return $this;
    }


}


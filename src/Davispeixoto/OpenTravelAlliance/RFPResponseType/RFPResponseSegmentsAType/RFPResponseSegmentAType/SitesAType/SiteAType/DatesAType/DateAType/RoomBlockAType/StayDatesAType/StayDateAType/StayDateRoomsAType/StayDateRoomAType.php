<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType;

/**
 * Class representing StayDateRoomAType
 */
class StayDateRoomAType
{

    /**
     * This identifies the room type (e.g. king, double, double double). This is NOT an
     * OpenTravel Codelist due to the infinite number of possible room types.
     *
     * @property string $roomType
     */
    private $roomType = null;

    /**
     * This is the number of rooms proposed for a particular day or date range for the
     * room type indicated in the RoomTypeRequirement attribute.
     *
     * @property integer $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * Collection of rates for a particular room type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType\RatesAType\RateAType[]
     * $rates
     */
    private $rates = null;

    /**
     * Comments for this specific room type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * Gets as roomType
     *
     * This identifies the room type (e.g. king, double, double double). This is NOT an
     * OpenTravel Codelist due to the infinite number of possible room types.
     *
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * This identifies the room type (e.g. king, double, double double). This is NOT an
     * OpenTravel Codelist due to the infinite number of possible room types.
     *
     * @param string $roomType
     * @return self
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * This is the number of rooms proposed for a particular day or date range for the
     * room type indicated in the RoomTypeRequirement attribute.
     *
     * @return integer
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * This is the number of rooms proposed for a particular day or date range for the
     * room type indicated in the RoomTypeRequirement attribute.
     *
     * @param integer $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;

        return $this;
    }

    /**
     * Adds as rate
     *
     * Collection of rates for a particular room type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType\RatesAType\RateAType
     * $rate
     */
    public function addToRates(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType\RatesAType\RateAType $rate
    ) {
        $this->rates[] = $rate;

        return $this;
    }

    /**
     * isset rates
     *
     * Collection of rates for a particular room type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRates($index)
    {
        return isset($this->rates[$index]);
    }

    /**
     * unset rates
     *
     * Collection of rates for a particular room type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRates($index)
    {
        unset($this->rates[$index]);
    }

    /**
     * Gets as rates
     *
     * Collection of rates for a particular room type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType\RatesAType\RateAType[]
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Sets a new rates
     *
     * Collection of rates for a particular room type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType\DateAType\RoomBlockAType\StayDatesAType\StayDateAType\StayDateRoomsAType\StayDateRoomAType\RatesAType\RateAType[]
     * $rates
     * @return self
     */
    public function setRates(array $rates)
    {
        $this->rates = $rates;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Comments for this specific room type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * Comments for this specific room type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Comments for this specific room type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Comments for this specific room type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments for this specific room type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}


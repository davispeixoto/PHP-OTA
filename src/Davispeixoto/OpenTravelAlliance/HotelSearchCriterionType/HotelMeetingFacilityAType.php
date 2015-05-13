<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

/**
 * Class representing HotelMeetingFacilityAType
 */
class HotelMeetingFacilityAType
{

    /**
     * The total number of unique meeting rooms provided at the hotel facility. For
     * example, if the hotel has a grand ballroom that breaks into Salon A, B, and C
     * -the total number of unique meeting rooms is three.
     *
     * @property integer $meetingRoomCount
     */
    private $meetingRoomCount = null;

    /**
     * The largest seating capacity available in the largest meeting room - generally
     * this is for theatre-style room setup.
     *
     * @property integer $largestSeatingCapacity
     */
    private $largestSeatingCapacity = null;

    /**
     * The amount of room space for the largest unique meeting room at the hotel
     * facility.
     *
     * @property integer $largestRoomSpace
     */
    private $largestRoomSpace = null;

    /**
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * Used as a qualifier when searching for properties. Refer to OpenTravel Code list
     * Meeting Room Code (MRC).
     *
     * @property string $meetingRoomCode
     */
    private $meetingRoomCode = null;

    /**
     * Gets as meetingRoomCount
     *
     * The total number of unique meeting rooms provided at the hotel facility. For
     * example, if the hotel has a grand ballroom that breaks into Salon A, B, and C
     * -the total number of unique meeting rooms is three.
     *
     * @return integer
     */
    public function getMeetingRoomCount()
    {
        return $this->meetingRoomCount;
    }

    /**
     * Sets a new meetingRoomCount
     *
     * The total number of unique meeting rooms provided at the hotel facility. For
     * example, if the hotel has a grand ballroom that breaks into Salon A, B, and C
     * -the total number of unique meeting rooms is three.
     *
     * @param integer $meetingRoomCount
     * @return self
     */
    public function setMeetingRoomCount($meetingRoomCount)
    {
        $this->meetingRoomCount = $meetingRoomCount;

        return $this;
    }

    /**
     * Gets as largestSeatingCapacity
     *
     * The largest seating capacity available in the largest meeting room - generally
     * this is for theatre-style room setup.
     *
     * @return integer
     */
    public function getLargestSeatingCapacity()
    {
        return $this->largestSeatingCapacity;
    }

    /**
     * Sets a new largestSeatingCapacity
     *
     * The largest seating capacity available in the largest meeting room - generally
     * this is for theatre-style room setup.
     *
     * @param integer $largestSeatingCapacity
     * @return self
     */
    public function setLargestSeatingCapacity($largestSeatingCapacity)
    {
        $this->largestSeatingCapacity = $largestSeatingCapacity;

        return $this;
    }

    /**
     * Gets as largestRoomSpace
     *
     * The amount of room space for the largest unique meeting room at the hotel
     * facility.
     *
     * @return integer
     */
    public function getLargestRoomSpace()
    {
        return $this->largestRoomSpace;
    }

    /**
     * Sets a new largestRoomSpace
     *
     * The amount of room space for the largest unique meeting room at the hotel
     * facility.
     *
     * @param integer $largestRoomSpace
     * @return self
     */
    public function setLargestRoomSpace($largestRoomSpace)
    {
        $this->largestRoomSpace = $largestRoomSpace;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as meetingRoomCode
     *
     * Used as a qualifier when searching for properties. Refer to OpenTravel Code list
     * Meeting Room Code (MRC).
     *
     * @return string
     */
    public function getMeetingRoomCode()
    {
        return $this->meetingRoomCode;
    }

    /**
     * Sets a new meetingRoomCode
     *
     * Used as a qualifier when searching for properties. Refer to OpenTravel Code list
     * Meeting Room Code (MRC).
     *
     * @param string $meetingRoomCode
     * @return self
     */
    public function setMeetingRoomCode($meetingRoomCode)
    {
        $this->meetingRoomCode = $meetingRoomCode;

        return $this;
    }


}


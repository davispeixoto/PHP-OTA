<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType;

/**
 * Class representing SeatBoardingInfoAType
 */
class SeatBoardingInfoAType
{

    /**
     * Specifies the boarding priority for a standby revenue or non-revenue passenger.
     *
     * @property string $boardingPriority
     */
    private $boardingPriority = null;

    /**
     * Customer boarding order sequence.
     *
     * @property string $boardingZone
     */
    private $boardingZone = null;

    /**
     * Indicates the type of seat (e.g., exit row, bulkhead row). Refer to OpenTravel
     * Code list Air Seat Type (AST).
     *
     * @property string[] $seatCharacteristics
     */
    private $seatCharacteristics = null;

    /**
     * Customer seat assignment. This contains both row number and seat.
     *
     * @property string $seatNumber
     */
    private $seatNumber = null;

    /**
     * Identifies the category of a non revenue passenger.
     *
     * @property string $nonRevCategory
     */
    private $nonRevCategory = null;

    /**
     * Gets as boardingPriority
     *
     * Specifies the boarding priority for a standby revenue or non-revenue passenger.
     *
     * @return string
     */
    public function getBoardingPriority()
    {
        return $this->boardingPriority;
    }

    /**
     * Sets a new boardingPriority
     *
     * Specifies the boarding priority for a standby revenue or non-revenue passenger.
     *
     * @param string $boardingPriority
     * @return self
     */
    public function setBoardingPriority($boardingPriority)
    {
        $this->boardingPriority = $boardingPriority;

        return $this;
    }

    /**
     * Gets as boardingZone
     *
     * Customer boarding order sequence.
     *
     * @return string
     */
    public function getBoardingZone()
    {
        return $this->boardingZone;
    }

    /**
     * Sets a new boardingZone
     *
     * Customer boarding order sequence.
     *
     * @param string $boardingZone
     * @return self
     */
    public function setBoardingZone($boardingZone)
    {
        $this->boardingZone = $boardingZone;

        return $this;
    }

    /**
     * Adds as seatCharacteristics
     *
     * Indicates the type of seat (e.g., exit row, bulkhead row). Refer to OpenTravel
     * Code list Air Seat Type (AST).
     *
     * @return self
     * @param string $seatCharacteristics
     */
    public function addToSeatCharacteristics($seatCharacteristics)
    {
        $this->seatCharacteristics[] = $seatCharacteristics;

        return $this;
    }

    /**
     * isset seatCharacteristics
     *
     * Indicates the type of seat (e.g., exit row, bulkhead row). Refer to OpenTravel
     * Code list Air Seat Type (AST).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatCharacteristics($index)
    {
        return isset($this->seatCharacteristics[$index]);
    }

    /**
     * unset seatCharacteristics
     *
     * Indicates the type of seat (e.g., exit row, bulkhead row). Refer to OpenTravel
     * Code list Air Seat Type (AST).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatCharacteristics($index)
    {
        unset($this->seatCharacteristics[$index]);
    }

    /**
     * Gets as seatCharacteristics
     *
     * Indicates the type of seat (e.g., exit row, bulkhead row). Refer to OpenTravel
     * Code list Air Seat Type (AST).
     *
     * @return string[]
     */
    public function getSeatCharacteristics()
    {
        return $this->seatCharacteristics;
    }

    /**
     * Sets a new seatCharacteristics
     *
     * Indicates the type of seat (e.g., exit row, bulkhead row). Refer to OpenTravel
     * Code list Air Seat Type (AST).
     *
     * @param string $seatCharacteristics
     * @return self
     */
    public function setSeatCharacteristics(array $seatCharacteristics)
    {
        $this->seatCharacteristics = $seatCharacteristics;

        return $this;
    }

    /**
     * Gets as seatNumber
     *
     * Customer seat assignment. This contains both row number and seat.
     *
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * Sets a new seatNumber
     *
     * Customer seat assignment. This contains both row number and seat.
     *
     * @param string $seatNumber
     * @return self
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;

        return $this;
    }

    /**
     * Gets as nonRevCategory
     *
     * Identifies the category of a non revenue passenger.
     *
     * @return string
     */
    public function getNonRevCategory()
    {
        return $this->nonRevCategory;
    }

    /**
     * Sets a new nonRevCategory
     *
     * Identifies the category of a non revenue passenger.
     *
     * @param string $nonRevCategory
     * @return self
     */
    public function setNonRevCategory($nonRevCategory)
    {
        $this->nonRevCategory = $nonRevCategory;

        return $this;
    }


}


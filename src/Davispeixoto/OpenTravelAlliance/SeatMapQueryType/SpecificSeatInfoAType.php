<?php

namespace Davispeixoto\OpenTravelAlliance\SeatMapQueryType;

/**
 * Class representing SpecificSeatInfoAType
 */
class SpecificSeatInfoAType
{

    /**
     * The level of the deck, e.g. "Upper."
     *
     * @property string $deckLevel
     */
    private $deckLevel = null;

    /**
     * Sequence number of a row.
     *
     * @property integer $rowNumber
     */
    private $rowNumber = null;

    /**
     * Seat number within a row without row designator, e.g. "C".
     *
     * @property string $seatInRow
     */
    private $seatInRow = null;

    /**
     * Used to provide the seat number that includes a row identifier, e.g. 1C.
     *
     * @property string $seatNumber
     */
    private $seatNumber = null;

    /**
     * A reference to a traveler defined in the BookingReferenceID or Traveler element.
     *
     * @property mixed $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Gets as deckLevel
     *
     * The level of the deck, e.g. "Upper."
     *
     * @return string
     */
    public function getDeckLevel()
    {
        return $this->deckLevel;
    }

    /**
     * Sets a new deckLevel
     *
     * The level of the deck, e.g. "Upper."
     *
     * @param string $deckLevel
     * @return self
     */
    public function setDeckLevel($deckLevel)
    {
        $this->deckLevel = $deckLevel;

        return $this;
    }

    /**
     * Gets as rowNumber
     *
     * Sequence number of a row.
     *
     * @return integer
     */
    public function getRowNumber()
    {
        return $this->rowNumber;
    }

    /**
     * Sets a new rowNumber
     *
     * Sequence number of a row.
     *
     * @param integer $rowNumber
     * @return self
     */
    public function setRowNumber($rowNumber)
    {
        $this->rowNumber = $rowNumber;

        return $this;
    }

    /**
     * Gets as seatInRow
     *
     * Seat number within a row without row designator, e.g. "C".
     *
     * @return string
     */
    public function getSeatInRow()
    {
        return $this->seatInRow;
    }

    /**
     * Sets a new seatInRow
     *
     * Seat number within a row without row designator, e.g. "C".
     *
     * @param string $seatInRow
     * @return self
     */
    public function setSeatInRow($seatInRow)
    {
        $this->seatInRow = $seatInRow;

        return $this;
    }

    /**
     * Gets as seatNumber
     *
     * Used to provide the seat number that includes a row identifier, e.g. 1C.
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
     * Used to provide the seat number that includes a row identifier, e.g. 1C.
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
     * Gets as travelerRPH
     *
     * A reference to a traveler defined in the BookingReferenceID or Traveler element.
     *
     * @return mixed
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * A reference to a traveler defined in the BookingReferenceID or Traveler element.
     *
     * @param mixed $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }


}


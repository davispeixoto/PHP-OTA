<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRQ;

use Davispeixoto\OpenTravelAlliance\RestaurantType;

/**
 * Class representing DiningRoomAType
 */
class DiningRoomAType extends RestaurantType
{

    /**
     * Indicates the guest smoking preference. Refer to OpenTravel Code table Option
     * Type Code (OTC).
     *
     * @property string $smokingCode
     */
    private $smokingCode = null;

    /**
     * Name of the deck on the ship where the dining room is located.
     *
     * @property string $deckName
     */
    private $deckName = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Specifies the table size and age categories.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRQ\DiningRoomAType\SeatingAType[]
     * $seating
     */
    private $seating = null;

    /**
     * Gets as smokingCode
     *
     * Indicates the guest smoking preference. Refer to OpenTravel Code table Option
     * Type Code (OTC).
     *
     * @return string
     */
    public function getSmokingCode()
    {
        return $this->smokingCode;
    }

    /**
     * Sets a new smokingCode
     *
     * Indicates the guest smoking preference. Refer to OpenTravel Code table Option
     * Type Code (OTC).
     *
     * @param string $smokingCode
     * @return self
     */
    public function setSmokingCode($smokingCode)
    {
        $this->smokingCode = $smokingCode;

        return $this;
    }

    /**
     * Gets as deckName
     *
     * Name of the deck on the ship where the dining room is located.
     *
     * @return string
     */
    public function getDeckName()
    {
        return $this->deckName;
    }

    /**
     * Sets a new deckName
     *
     * Name of the deck on the ship where the dining room is located.
     *
     * @param string $deckName
     * @return self
     */
    public function setDeckName($deckName)
    {
        $this->deckName = $deckName;

        return $this;
    }

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return boolean
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param boolean $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * Adds as seating
     *
     * Specifies the table size and age categories.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRQ\DiningRoomAType\SeatingAType
     * $seating
     */
    public function addToSeating(
        \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRQ\DiningRoomAType\SeatingAType $seating
    ) {
        $this->seating[] = $seating;

        return $this;
    }

    /**
     * isset seating
     *
     * Specifies the table size and age categories.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeating($index)
    {
        return isset($this->seating[$index]);
    }

    /**
     * unset seating
     *
     * Specifies the table size and age categories.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeating($index)
    {
        unset($this->seating[$index]);
    }

    /**
     * Gets as seating
     *
     * Specifies the table size and age categories.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRQ\DiningRoomAType\SeatingAType[]
     */
    public function getSeating()
    {
        return $this->seating;
    }

    /**
     * Sets a new seating
     *
     * Specifies the table size and age categories.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRQ\DiningRoomAType\SeatingAType[]
     * $seating
     * @return self
     */
    public function setSeating(array $seating)
    {
        $this->seating = $seating;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCabinHoldRQ;

use Davispeixoto\OpenTravelAlliance\SearchQualifierType;

/**
 * Class representing SearchQualifiersAType
 */
class SearchQualifiersAType extends SearchQualifierType
{

    /**
     * Number of the deck on the ship where the cabin is located.
     *
     * @property string $deckNumber
     */
    private $deckNumber = null;

    /**
     * Name of the deck on the ship where the cabin is located.
     *
     * @property string $deckName
     */
    private $deckName = null;

    /**
     * Gets as deckNumber
     *
     * Number of the deck on the ship where the cabin is located.
     *
     * @return string
     */
    public function getDeckNumber()
    {
        return $this->deckNumber;
    }

    /**
     * Sets a new deckNumber
     *
     * Number of the deck on the ship where the cabin is located.
     *
     * @param string $deckNumber
     * @return self
     */
    public function setDeckNumber($deckNumber)
    {
        $this->deckNumber = $deckNumber;

        return $this;
    }

    /**
     * Gets as deckName
     *
     * Name of the deck on the ship where the cabin is located.
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
     * Name of the deck on the ship where the cabin is located.
     *
     * @param string $deckName
     * @return self
     */
    public function setDeckName($deckName)
    {
        $this->deckName = $deckName;

        return $this;
    }


}


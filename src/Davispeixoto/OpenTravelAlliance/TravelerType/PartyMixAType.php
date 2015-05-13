<?php

namespace Davispeixoto\OpenTravelAlliance\TravelerType;

/**
 * Class representing PartyMixAType
 */
class PartyMixAType
{

    /**
     * The number of adults in the party.
     *
     * @property integer $numberOfAdults
     */
    private $numberOfAdults = null;

    /**
     * The number of children in the party.
     *
     * @property integer $numberOfChildren
     */
    private $numberOfChildren = null;

    /**
     * Information regarding a traveler in the party.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelerType\PartyMixAType\TravelerAType[]
     * $traveler
     */
    private $traveler = null;

    /**
     * Gets as numberOfAdults
     *
     * The number of adults in the party.
     *
     * @return integer
     */
    public function getNumberOfAdults()
    {
        return $this->numberOfAdults;
    }

    /**
     * Sets a new numberOfAdults
     *
     * The number of adults in the party.
     *
     * @param integer $numberOfAdults
     * @return self
     */
    public function setNumberOfAdults($numberOfAdults)
    {
        $this->numberOfAdults = $numberOfAdults;

        return $this;
    }

    /**
     * Gets as numberOfChildren
     *
     * The number of children in the party.
     *
     * @return integer
     */
    public function getNumberOfChildren()
    {
        return $this->numberOfChildren;
    }

    /**
     * Sets a new numberOfChildren
     *
     * The number of children in the party.
     *
     * @param integer $numberOfChildren
     * @return self
     */
    public function setNumberOfChildren($numberOfChildren)
    {
        $this->numberOfChildren = $numberOfChildren;

        return $this;
    }

    /**
     * Adds as traveler
     *
     * Information regarding a traveler in the party.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TravelerType\PartyMixAType\TravelerAType
     * $traveler
     */
    public function addToTraveler(\Davispeixoto\OpenTravelAlliance\TravelerType\PartyMixAType\TravelerAType $traveler)
    {
        $this->traveler[] = $traveler;

        return $this;
    }

    /**
     * isset traveler
     *
     * Information regarding a traveler in the party.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTraveler($index)
    {
        return isset($this->traveler[$index]);
    }

    /**
     * unset traveler
     *
     * Information regarding a traveler in the party.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTraveler($index)
    {
        unset($this->traveler[$index]);
    }

    /**
     * Gets as traveler
     *
     * Information regarding a traveler in the party.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelerType\PartyMixAType\TravelerAType[]
     */
    public function getTraveler()
    {
        return $this->traveler;
    }

    /**
     * Sets a new traveler
     *
     * Information regarding a traveler in the party.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerType\PartyMixAType\TravelerAType[]
     * $traveler
     * @return self
     */
    public function setTraveler(array $traveler)
    {
        $this->traveler = $traveler;

        return $this;
    }


}


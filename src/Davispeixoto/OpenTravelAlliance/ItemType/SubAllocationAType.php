<?php

namespace Davispeixoto\OpenTravelAlliance\ItemType;

/**
 * Class representing SubAllocationAType
 */
class SubAllocationAType
{

    /**
     * This is a list of reference place holders used as an index for the travelers
     * booking this item.
     *
     * @property string[] $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Adds as travelerRPH
     *
     * This is a list of reference place holders used as an index for the travelers
     * booking this item.
     *
     * @return self
     * @param string $travelerRPH
     */
    public function addToTravelerRPH($travelerRPH)
    {
        $this->travelerRPH[] = $travelerRPH;

        return $this;
    }

    /**
     * isset travelerRPH
     *
     * This is a list of reference place holders used as an index for the travelers
     * booking this item.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerRPH($index)
    {
        return isset($this->travelerRPH[$index]);
    }

    /**
     * unset travelerRPH
     *
     * This is a list of reference place holders used as an index for the travelers
     * booking this item.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerRPH($index)
    {
        unset($this->travelerRPH[$index]);
    }

    /**
     * Gets as travelerRPH
     *
     * This is a list of reference place holders used as an index for the travelers
     * booking this item.
     *
     * @return string[]
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * This is a list of reference place holders used as an index for the travelers
     * booking this item.
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH(array $travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }


}


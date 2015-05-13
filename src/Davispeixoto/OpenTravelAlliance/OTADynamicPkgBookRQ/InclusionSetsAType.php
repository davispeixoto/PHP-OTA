<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgBookRQ;

/**
 * Class representing InclusionSetsAType
 */
class InclusionSetsAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\InclusionSetType[] $inclusionSet
     */
    private $inclusionSet = null;

    /**
     * Adds as inclusionSet
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\InclusionSetType $inclusionSet
     */
    public function addToInclusionSet(\Davispeixoto\OpenTravelAlliance\InclusionSetType $inclusionSet)
    {
        $this->inclusionSet[] = $inclusionSet;

        return $this;
    }

    /**
     * isset inclusionSet
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInclusionSet($index)
    {
        return isset($this->inclusionSet[$index]);
    }

    /**
     * unset inclusionSet
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInclusionSet($index)
    {
        unset($this->inclusionSet[$index]);
    }

    /**
     * Gets as inclusionSet
     *
     * @return \Davispeixoto\OpenTravelAlliance\InclusionSetType[]
     */
    public function getInclusionSet()
    {
        return $this->inclusionSet;
    }

    /**
     * Sets a new inclusionSet
     *
     * @param \Davispeixoto\OpenTravelAlliance\InclusionSetType[] $inclusionSet
     * @return self
     */
    public function setInclusionSet(array $inclusionSet)
    {
        $this->inclusionSet = $inclusionSet;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseFareAvailRS;

/**
 * Class representing FareCodeOptionsAType
 */
class FareCodeOptionsAType
{

    /**
     * Specifies the fare information available for the selected sailing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareCodeOptionType[] $fareCodeOption
     */
    private $fareCodeOption = null;

    /**
     * Adds as fareCodeOption
     *
     * Specifies the fare information available for the selected sailing.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FareCodeOptionType $fareCodeOption
     */
    public function addToFareCodeOption(\Davispeixoto\OpenTravelAlliance\FareCodeOptionType $fareCodeOption)
    {
        $this->fareCodeOption[] = $fareCodeOption;

        return $this;
    }

    /**
     * isset fareCodeOption
     *
     * Specifies the fare information available for the selected sailing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareCodeOption($index)
    {
        return isset($this->fareCodeOption[$index]);
    }

    /**
     * unset fareCodeOption
     *
     * Specifies the fare information available for the selected sailing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareCodeOption($index)
    {
        unset($this->fareCodeOption[$index]);
    }

    /**
     * Gets as fareCodeOption
     *
     * Specifies the fare information available for the selected sailing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareCodeOptionType[]
     */
    public function getFareCodeOption()
    {
        return $this->fareCodeOption;
    }

    /**
     * Sets a new fareCodeOption
     *
     * Specifies the fare information available for the selected sailing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareCodeOptionType[] $fareCodeOption
     * @return self
     */
    public function setFareCodeOption(array $fareCodeOption)
    {
        $this->fareCodeOption = $fareCodeOption;

        return $this;
    }


}


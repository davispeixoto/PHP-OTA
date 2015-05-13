<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS;

/**
 * Class representing DiningOptionsAType
 */
class DiningOptionsAType
{

    /**
     * Contains information about the proposed dining.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType[]
     * $diningOption
     */
    private $diningOption = null;

    /**
     * Adds as diningOption
     *
     * Contains information about the proposed dining.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType
     * $diningOption
     */
    public function addToDiningOption(
        \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType $diningOption
    ) {
        $this->diningOption[] = $diningOption;

        return $this;
    }

    /**
     * isset diningOption
     *
     * Contains information about the proposed dining.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiningOption($index)
    {
        return isset($this->diningOption[$index]);
    }

    /**
     * unset diningOption
     *
     * Contains information about the proposed dining.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiningOption($index)
    {
        unset($this->diningOption[$index]);
    }

    /**
     * Gets as diningOption
     *
     * Contains information about the proposed dining.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType[]
     */
    public function getDiningOption()
    {
        return $this->diningOption;
    }

    /**
     * Sets a new diningOption
     *
     * Contains information about the proposed dining.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType[]
     * $diningOption
     * @return self
     */
    public function setDiningOption(array $diningOption)
    {
        $this->diningOption = $diningOption;

        return $this;
    }


}


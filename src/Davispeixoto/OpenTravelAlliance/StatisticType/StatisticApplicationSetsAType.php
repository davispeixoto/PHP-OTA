<?php

namespace Davispeixoto\OpenTravelAlliance\StatisticType;

/**
 * Class representing StatisticApplicationSetsAType
 */
class StatisticApplicationSetsAType
{

    /**
     * Repeated for each date or set of statistic codes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType[]
     * $statisticApplicationSet
     */
    private $statisticApplicationSet = null;

    /**
     * Adds as statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType
     * $statisticApplicationSet
     */
    public function addToStatisticApplicationSet(
        \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType $statisticApplicationSet
    ) {
        $this->statisticApplicationSet[] = $statisticApplicationSet;

        return $this;
    }

    /**
     * isset statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStatisticApplicationSet($index)
    {
        return isset($this->statisticApplicationSet[$index]);
    }

    /**
     * unset statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStatisticApplicationSet($index)
    {
        unset($this->statisticApplicationSet[$index]);
    }

    /**
     * Gets as statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType[]
     */
    public function getStatisticApplicationSet()
    {
        return $this->statisticApplicationSet;
    }

    /**
     * Sets a new statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType[]
     * $statisticApplicationSet
     * @return self
     */
    public function setStatisticApplicationSet(array $statisticApplicationSet)
    {
        $this->statisticApplicationSet = $statisticApplicationSet;

        return $this;
    }


}


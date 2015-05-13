<?php

namespace Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType;

/**
 * Class representing StatisticCodesAType
 */
class StatisticCodesAType
{

    /**
     * Defines the codes and corresponding categories for which the data in the other
     * elements has been gathered.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType[]
     * $statisticCode
     */
    private $statisticCode = null;

    /**
     * Adds as statisticCode
     *
     * Defines the codes and corresponding categories for which the data in the other
     * elements has been gathered.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType
     * $statisticCode
     */
    public function addToStatisticCode(
        \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType $statisticCode
    ) {
        $this->statisticCode[] = $statisticCode;

        return $this;
    }

    /**
     * isset statisticCode
     *
     * Defines the codes and corresponding categories for which the data in the other
     * elements has been gathered.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStatisticCode($index)
    {
        return isset($this->statisticCode[$index]);
    }

    /**
     * unset statisticCode
     *
     * Defines the codes and corresponding categories for which the data in the other
     * elements has been gathered.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStatisticCode($index)
    {
        unset($this->statisticCode[$index]);
    }

    /**
     * Gets as statisticCode
     *
     * Defines the codes and corresponding categories for which the data in the other
     * elements has been gathered.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType[]
     */
    public function getStatisticCode()
    {
        return $this->statisticCode;
    }

    /**
     * Sets a new statisticCode
     *
     * Defines the codes and corresponding categories for which the data in the other
     * elements has been gathered.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType[]
     * $statisticCode
     * @return self
     */
    public function setStatisticCode(array $statisticCode)
    {
        $this->statisticCode = $statisticCode;

        return $this;
    }


}


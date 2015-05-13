<?php

namespace Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType;

/**
 * Class representing StatisticCodeAType
 */
class StatisticCodeAType
{

    /**
     * Actual code used by the system to collect the statistics (e.g. CORP, RACK if
     * category is Market Segment).
     *
     * @property string $statCode
     */
    private $statCode = null;

    /**
     * Category Code category of StatCode attribute (e.g. Market Segment). Refer to
     * Code List SCC.
     *
     * @property string $statCategoryCode
     */
    private $statCategoryCode = null;

    /**
     * Gets as statCode
     *
     * Actual code used by the system to collect the statistics (e.g. CORP, RACK if
     * category is Market Segment).
     *
     * @return string
     */
    public function getStatCode()
    {
        return $this->statCode;
    }

    /**
     * Sets a new statCode
     *
     * Actual code used by the system to collect the statistics (e.g. CORP, RACK if
     * category is Market Segment).
     *
     * @param string $statCode
     * @return self
     */
    public function setStatCode($statCode)
    {
        $this->statCode = $statCode;

        return $this;
    }

    /**
     * Gets as statCategoryCode
     *
     * Category Code category of StatCode attribute (e.g. Market Segment). Refer to
     * Code List SCC.
     *
     * @return string
     */
    public function getStatCategoryCode()
    {
        return $this->statCategoryCode;
    }

    /**
     * Sets a new statCategoryCode
     *
     * Category Code category of StatCode attribute (e.g. Market Segment). Refer to
     * Code List SCC.
     *
     * @param string $statCategoryCode
     * @return self
     */
    public function setStatCategoryCode($statCategoryCode)
    {
        $this->statCategoryCode = $statCategoryCode;

        return $this;
    }


}


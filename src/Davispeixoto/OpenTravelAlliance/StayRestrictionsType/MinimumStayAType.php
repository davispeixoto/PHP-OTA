<?php

namespace Davispeixoto\OpenTravelAlliance\StayRestrictionsType;

/**
 * Class representing MinimumStayAType
 */
class MinimumStayAType
{

    /**
     * The time of day when return travel may commence.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $returnTimeOfDay
     */
    private $returnTimeOfDay = null;

    /**
     * The amount of elapsed time or number of occurrences of a day of the week needed
     * to satisfy a minimum stay requirement.
     *
     * @property integer $minStay
     */
    private $minStay = null;

    /**
     * The unit of elapsed time or the day of the week applied to the MinStay value.
     *
     * @property string $stayUnit
     */
    private $stayUnit = null;

    /**
     * The specific date for the minimum stay requirement.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $minStayDate
     */
    private $minStayDate = null;

    /**
     * If true, there are complicated rules for the minimum stay requirement.
     *
     * @property boolean $complicatedRulesInd
     */
    private $complicatedRulesInd = null;

    /**
     * Gets as returnTimeOfDay
     *
     * The time of day when return travel may commence.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getReturnTimeOfDay()
    {
        return $this->returnTimeOfDay;
    }

    /**
     * Sets a new returnTimeOfDay
     *
     * The time of day when return travel may commence.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $returnTimeOfDay
     * @return self
     */
    public function setReturnTimeOfDay(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $returnTimeOfDay)
    {
        $this->returnTimeOfDay = $returnTimeOfDay;

        return $this;
    }

    /**
     * Gets as minStay
     *
     * The amount of elapsed time or number of occurrences of a day of the week needed
     * to satisfy a minimum stay requirement.
     *
     * @return integer
     */
    public function getMinStay()
    {
        return $this->minStay;
    }

    /**
     * Sets a new minStay
     *
     * The amount of elapsed time or number of occurrences of a day of the week needed
     * to satisfy a minimum stay requirement.
     *
     * @param integer $minStay
     * @return self
     */
    public function setMinStay($minStay)
    {
        $this->minStay = $minStay;

        return $this;
    }

    /**
     * Gets as stayUnit
     *
     * The unit of elapsed time or the day of the week applied to the MinStay value.
     *
     * @return string
     */
    public function getStayUnit()
    {
        return $this->stayUnit;
    }

    /**
     * Sets a new stayUnit
     *
     * The unit of elapsed time or the day of the week applied to the MinStay value.
     *
     * @param string $stayUnit
     * @return self
     */
    public function setStayUnit($stayUnit)
    {
        $this->stayUnit = $stayUnit;

        return $this;
    }

    /**
     * Gets as minStayDate
     *
     * The specific date for the minimum stay requirement.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType
     */
    public function getMinStayDate()
    {
        return $this->minStayDate;
    }

    /**
     * Sets a new minStayDate
     *
     * The specific date for the minimum stay requirement.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $minStayDate
     * @return self
     */
    public function setMinStayDate(\Davispeixoto\OpenTravelAlliance\TimeOrDateTimeType $minStayDate)
    {
        $this->minStayDate = $minStayDate;

        return $this;
    }

    /**
     * Gets as complicatedRulesInd
     *
     * If true, there are complicated rules for the minimum stay requirement.
     *
     * @return boolean
     */
    public function getComplicatedRulesInd()
    {
        return $this->complicatedRulesInd;
    }

    /**
     * Sets a new complicatedRulesInd
     *
     * If true, there are complicated rules for the minimum stay requirement.
     *
     * @param boolean $complicatedRulesInd
     * @return self
     */
    public function setComplicatedRulesInd($complicatedRulesInd)
    {
        $this->complicatedRulesInd = $complicatedRulesInd;

        return $this;
    }


}


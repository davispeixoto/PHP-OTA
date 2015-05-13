<?php

namespace Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType;

/**
 * Class representing RatePlanRefAType
 */
class RatePlanRefAType
{

    /**
     * The code that identifies a feature's rate plan.
     *
     * @property string $planCode
     */
    private $planCode = null;

    /**
     * The id that uniquely identifies a feature's rate plan.
     *
     * @property string $planID
     */
    private $planID = null;

    /**
     * Gets as planCode
     *
     * The code that identifies a feature's rate plan.
     *
     * @return string
     */
    public function getPlanCode()
    {
        return $this->planCode;
    }

    /**
     * Sets a new planCode
     *
     * The code that identifies a feature's rate plan.
     *
     * @param string $planCode
     * @return self
     */
    public function setPlanCode($planCode)
    {
        $this->planCode = $planCode;

        return $this;
    }

    /**
     * Gets as planID
     *
     * The id that uniquely identifies a feature's rate plan.
     *
     * @return string
     */
    public function getPlanID()
    {
        return $this->planID;
    }

    /**
     * Sets a new planID
     *
     * The id that uniquely identifies a feature's rate plan.
     *
     * @param string $planID
     * @return self
     */
    public function setPlanID($planID)
    {
        $this->planID = $planID;

        return $this;
    }


}


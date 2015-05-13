<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanLevelFeeAType;

use Davispeixoto\OpenTravelAlliance\FeeType;

/**
 * Class representing FeeAType
 */
class FeeAType extends FeeType
{

    /**
     * This describes meal plans associated with a rate plan. Refer to OpenTravel Code
     * Table Meal Plan Type (MPT).
     *
     * @property string $mealPlanCode
     */
    private $mealPlanCode = null;

    /**
     * Gets as mealPlanCode
     *
     * This describes meal plans associated with a rate plan. Refer to OpenTravel Code
     * Table Meal Plan Type (MPT).
     *
     * @return string
     */
    public function getMealPlanCode()
    {
        return $this->mealPlanCode;
    }

    /**
     * Sets a new mealPlanCode
     *
     * This describes meal plans associated with a rate plan. Refer to OpenTravel Code
     * Table Meal Plan Type (MPT).
     *
     * @param string $mealPlanCode
     * @return self
     */
    public function setMealPlanCode($mealPlanCode)
    {
        $this->mealPlanCode = $mealPlanCode;

        return $this;
    }


}


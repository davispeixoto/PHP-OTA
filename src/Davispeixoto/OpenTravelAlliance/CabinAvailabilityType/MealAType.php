<?php

namespace Davispeixoto\OpenTravelAlliance\CabinAvailabilityType;

/**
 * Class representing MealAType
 */
class MealAType
{

    /**
     * Used to designate a meal or beverage service.
     *
     * @property string $mealCode
     */
    private $mealCode = null;

    /**
     * Gets as mealCode
     *
     * Used to designate a meal or beverage service.
     *
     * @return string
     */
    public function getMealCode()
    {
        return $this->mealCode;
    }

    /**
     * Sets a new mealCode
     *
     * Used to designate a meal or beverage service.
     *
     * @param string $mealCode
     * @return self
     */
    public function setMealCode($mealCode)
    {
        $this->mealCode = $mealCode;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType;

/**
 * Class representing MealsIncludedAType
 */
class MealsIncludedAType
{

    /**
     * The Breakfast indicator MAY be used to specify if breakfast is included with
     * this rate plan. When true, breakfast MUST be included.
     *
     * @property boolean $breakfast
     */
    private $breakfast = null;

    /**
     * The Lunch indicator MAY be used to specify if lunch is included with this rate
     * plan. When true, lunch MUST be included.
     *
     * @property boolean $lunch
     */
    private $lunch = null;

    /**
     * The Dinner indicator MAY be used to specify if dinner is included with this rate
     * plan. When true, dinner MUST be included.
     *
     * @property boolean $dinner
     */
    private $dinner = null;

    /**
     * The MealPlanCodes MAY be used to identify the types of meals included with this
     * rate plan. The MealPlanCodes MUST refer to OpenTravel Code List Meal Plan Type
     * (MPT).
     *
     * @property string[] $mealPlanCodes
     */
    private $mealPlanCodes = null;

    /**
     * Gets as breakfast
     *
     * The Breakfast indicator MAY be used to specify if breakfast is included with
     * this rate plan. When true, breakfast MUST be included.
     *
     * @return boolean
     */
    public function getBreakfast()
    {
        return $this->breakfast;
    }

    /**
     * Sets a new breakfast
     *
     * The Breakfast indicator MAY be used to specify if breakfast is included with
     * this rate plan. When true, breakfast MUST be included.
     *
     * @param boolean $breakfast
     * @return self
     */
    public function setBreakfast($breakfast)
    {
        $this->breakfast = $breakfast;

        return $this;
    }

    /**
     * Gets as lunch
     *
     * The Lunch indicator MAY be used to specify if lunch is included with this rate
     * plan. When true, lunch MUST be included.
     *
     * @return boolean
     */
    public function getLunch()
    {
        return $this->lunch;
    }

    /**
     * Sets a new lunch
     *
     * The Lunch indicator MAY be used to specify if lunch is included with this rate
     * plan. When true, lunch MUST be included.
     *
     * @param boolean $lunch
     * @return self
     */
    public function setLunch($lunch)
    {
        $this->lunch = $lunch;

        return $this;
    }

    /**
     * Gets as dinner
     *
     * The Dinner indicator MAY be used to specify if dinner is included with this rate
     * plan. When true, dinner MUST be included.
     *
     * @return boolean
     */
    public function getDinner()
    {
        return $this->dinner;
    }

    /**
     * Sets a new dinner
     *
     * The Dinner indicator MAY be used to specify if dinner is included with this rate
     * plan. When true, dinner MUST be included.
     *
     * @param boolean $dinner
     * @return self
     */
    public function setDinner($dinner)
    {
        $this->dinner = $dinner;

        return $this;
    }

    /**
     * Adds as mealPlanCodes
     *
     * The MealPlanCodes MAY be used to identify the types of meals included with this
     * rate plan. The MealPlanCodes MUST refer to OpenTravel Code List Meal Plan Type
     * (MPT).
     *
     * @return self
     * @param string $mealPlanCodes
     */
    public function addToMealPlanCodes($mealPlanCodes)
    {
        $this->mealPlanCodes[] = $mealPlanCodes;

        return $this;
    }

    /**
     * isset mealPlanCodes
     *
     * The MealPlanCodes MAY be used to identify the types of meals included with this
     * rate plan. The MealPlanCodes MUST refer to OpenTravel Code List Meal Plan Type
     * (MPT).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMealPlanCodes($index)
    {
        return isset($this->mealPlanCodes[$index]);
    }

    /**
     * unset mealPlanCodes
     *
     * The MealPlanCodes MAY be used to identify the types of meals included with this
     * rate plan. The MealPlanCodes MUST refer to OpenTravel Code List Meal Plan Type
     * (MPT).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMealPlanCodes($index)
    {
        unset($this->mealPlanCodes[$index]);
    }

    /**
     * Gets as mealPlanCodes
     *
     * The MealPlanCodes MAY be used to identify the types of meals included with this
     * rate plan. The MealPlanCodes MUST refer to OpenTravel Code List Meal Plan Type
     * (MPT).
     *
     * @return string[]
     */
    public function getMealPlanCodes()
    {
        return $this->mealPlanCodes;
    }

    /**
     * Sets a new mealPlanCodes
     *
     * The MealPlanCodes MAY be used to identify the types of meals included with this
     * rate plan. The MealPlanCodes MUST refer to OpenTravel Code List Meal Plan Type
     * (MPT).
     *
     * @param string $mealPlanCodes
     * @return self
     */
    public function setMealPlanCodes(array $mealPlanCodes)
    {
        $this->mealPlanCodes = $mealPlanCodes;

        return $this;
    }


}


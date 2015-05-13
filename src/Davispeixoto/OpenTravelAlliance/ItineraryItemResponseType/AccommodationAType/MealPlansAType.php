<?php

namespace Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType;

/**
 * Class representing MealPlansAType
 */
class MealPlansAType
{

    /**
     * Details of meal arrangements, booked or available according to context, with
     * appropriate supplementary charges.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MealPlanType[] $mealPlan
     */
    private $mealPlan = null;

    /**
     * Adds as mealPlan
     *
     * Details of meal arrangements, booked or available according to context, with
     * appropriate supplementary charges.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType $mealPlan
     */
    public function addToMealPlan(\Davispeixoto\OpenTravelAlliance\MealPlanType $mealPlan)
    {
        $this->mealPlan[] = $mealPlan;

        return $this;
    }

    /**
     * isset mealPlan
     *
     * Details of meal arrangements, booked or available according to context, with
     * appropriate supplementary charges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMealPlan($index)
    {
        return isset($this->mealPlan[$index]);
    }

    /**
     * unset mealPlan
     *
     * Details of meal arrangements, booked or available according to context, with
     * appropriate supplementary charges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMealPlan($index)
    {
        unset($this->mealPlan[$index]);
    }

    /**
     * Gets as mealPlan
     *
     * Details of meal arrangements, booked or available according to context, with
     * appropriate supplementary charges.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MealPlanType[]
     */
    public function getMealPlan()
    {
        return $this->mealPlan;
    }

    /**
     * Sets a new mealPlan
     *
     * Details of meal arrangements, booked or available according to context, with
     * appropriate supplementary charges.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType[] $mealPlan
     * @return self
     */
    public function setMealPlan(array $mealPlan)
    {
        $this->mealPlan = $mealPlan;

        return $this;
    }


}


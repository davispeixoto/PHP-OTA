<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RatePlanType
 *
 * Detailed rate plan information.
 * XSD Type: RatePlanType
 */
class RatePlanType
{

    /**
     * RatePlanCode MUST specify the code that identifies this rate plan.
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * MealsIncluded MAY specify which meals are included in this rate plan. FastRez
     * RECOMMENDS that either the MealPlanCodes attribute be used OR the Breakfast,
     * Lunch and Dinner booleans be used, but that they SHOULD NOT be used in
     * conjunction with each other.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MealsIncludedType $mealsIncluded
     */
    private $mealsIncluded = null;

    /**
     * The RatePlanDescription MUST provide textual information regarding the rate
     * plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RatePlanDescriptionType
     * $ratePlanDescription
     */
    private $ratePlanDescription = null;

    /**
     * Gets as ratePlanCode
     *
     * RatePlanCode MUST specify the code that identifies this rate plan.
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * RatePlanCode MUST specify the code that identifies this rate plan.
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;

        return $this;
    }

    /**
     * Gets as mealsIncluded
     *
     * MealsIncluded MAY specify which meals are included in this rate plan. FastRez
     * RECOMMENDS that either the MealPlanCodes attribute be used OR the Breakfast,
     * Lunch and Dinner booleans be used, but that they SHOULD NOT be used in
     * conjunction with each other.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MealsIncludedType
     */
    public function getMealsIncluded()
    {
        return $this->mealsIncluded;
    }

    /**
     * Sets a new mealsIncluded
     *
     * MealsIncluded MAY specify which meals are included in this rate plan. FastRez
     * RECOMMENDS that either the MealPlanCodes attribute be used OR the Breakfast,
     * Lunch and Dinner booleans be used, but that they SHOULD NOT be used in
     * conjunction with each other.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MealsIncludedType $mealsIncluded
     * @return self
     */
    public function setMealsIncluded(\Davispeixoto\OpenTravelAlliance\MealsIncludedType $mealsIncluded)
    {
        $this->mealsIncluded = $mealsIncluded;

        return $this;
    }

    /**
     * Gets as ratePlanDescription
     *
     * The RatePlanDescription MUST provide textual information regarding the rate
     * plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RatePlanDescriptionType
     */
    public function getRatePlanDescription()
    {
        return $this->ratePlanDescription;
    }

    /**
     * Sets a new ratePlanDescription
     *
     * The RatePlanDescription MUST provide textual information regarding the rate
     * plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RatePlanDescriptionType
     * $ratePlanDescription
     * @return self
     */
    public function setRatePlanDescription(
        \Davispeixoto\OpenTravelAlliance\RatePlanDescriptionType $ratePlanDescription
    ) {
        $this->ratePlanDescription = $ratePlanDescription;

        return $this;
    }


}


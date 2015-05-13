<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType;

/**
 * Class representing RatePlanAType
 */
class RatePlanAType
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
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\MealsIncludedAType
     * $mealsIncluded
     */
    private $mealsIncluded = null;

    /**
     * The RatePlanDescription MUST provide textual information regarding the rate
     * plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType
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
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\MealsIncludedAType
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\MealsIncludedAType
     * $mealsIncluded
     * @return self
     */
    public function setMealsIncluded(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\MealsIncludedAType $mealsIncluded
    ) {
        $this->mealsIncluded = $mealsIncluded;

        return $this;
    }

    /**
     * Gets as ratePlanDescription
     *
     * The RatePlanDescription MUST provide textual information regarding the rate
     * plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType
     * $ratePlanDescription
     * @return self
     */
    public function setRatePlanDescription(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType $ratePlanDescription
    ) {
        $this->ratePlanDescription = $ratePlanDescription;

        return $this;
    }


}


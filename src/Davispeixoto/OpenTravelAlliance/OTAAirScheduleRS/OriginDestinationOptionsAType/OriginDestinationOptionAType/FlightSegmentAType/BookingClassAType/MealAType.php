<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType;

/**
 * Class representing MealAType
 */
class MealAType
{

    /**
     * Meal offered in this booking class for the flight.
     *
     * @property string $mealCode
     */
    private $mealCode = null;

    /**
     * Gets as mealCode
     *
     * Meal offered in this booking class for the flight.
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
     * Meal offered in this booking class for the flight.
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


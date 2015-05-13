<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirAvailRS\OriginDestinationInformationAType\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAvailAType;

/**
 * Class representing MealAType
 */
class MealAType
{

    /**
     * Used to designate a meal or beverage service.
     *
     * @property string $mealService
     */
    private $mealService = null;

    /**
     * Gets as mealService
     *
     * Used to designate a meal or beverage service.
     *
     * @return string
     */
    public function getMealService()
    {
        return $this->mealService;
    }

    /**
     * Sets a new mealService
     *
     * Used to designate a meal or beverage service.
     *
     * @param string $mealService
     * @return self
     */
    public function setMealService($mealService)
    {
        $this->mealService = $mealService;

        return $this;
    }


}


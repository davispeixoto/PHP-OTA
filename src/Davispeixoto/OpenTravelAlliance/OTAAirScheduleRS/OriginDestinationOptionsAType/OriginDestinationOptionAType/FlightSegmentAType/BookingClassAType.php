<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType;

/**
 * Class representing BookingClassAType
 */
class BookingClassAType
{

    /**
     * A reservation booking code for this flight segment.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * Identifies any meal and/or beverage services that are provided.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType\MealAType[]
     * $meal
     */
    private $meal = null;

    /**
     * Gets as resBookDesigCode
     *
     * A reservation booking code for this flight segment.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * A reservation booking code for this flight segment.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * Adds as meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType\MealAType
     * $meal
     */
    public function addToMeal(
        \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType\MealAType $meal
    ) {
        $this->meal[] = $meal;

        return $this;
    }

    /**
     * isset meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMeal($index)
    {
        return isset($this->meal[$index]);
    }

    /**
     * unset meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMeal($index)
    {
        unset($this->meal[$index]);
    }

    /**
     * Gets as meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType\MealAType[]
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * Sets a new meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType\BookingClassAType\MealAType[]
     * $meal
     * @return self
     */
    public function setMeal(array $meal)
    {
        $this->meal = $meal;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType;

/**
 * Class representing SittingDetailAType
 */
class SittingDetailAType
{

    /**
     * Meal name such as: Breakfast, lunch or dinner.
     *
     * @property string $mealName
     */
    private $mealName = null;

    /**
     * Time on the ship the meal seating begins.
     *
     * @property \DateTime $mealStartTime
     */
    private $mealStartTime = null;

    /**
     * Time on the ship the meal seating ends.
     *
     * @property \DateTime $mealEndTime
     */
    private $mealEndTime = null;

    /**
     * Gets as mealName
     *
     * Meal name such as: Breakfast, lunch or dinner.
     *
     * @return string
     */
    public function getMealName()
    {
        return $this->mealName;
    }

    /**
     * Sets a new mealName
     *
     * Meal name such as: Breakfast, lunch or dinner.
     *
     * @param string $mealName
     * @return self
     */
    public function setMealName($mealName)
    {
        $this->mealName = $mealName;

        return $this;
    }

    /**
     * Gets as mealStartTime
     *
     * Time on the ship the meal seating begins.
     *
     * @return \DateTime
     */
    public function getMealStartTime()
    {
        return $this->mealStartTime;
    }

    /**
     * Sets a new mealStartTime
     *
     * Time on the ship the meal seating begins.
     *
     * @param \DateTime $mealStartTime
     * @return self
     */
    public function setMealStartTime(\DateTime $mealStartTime)
    {
        $this->mealStartTime = $mealStartTime;

        return $this;
    }

    /**
     * Gets as mealEndTime
     *
     * Time on the ship the meal seating ends.
     *
     * @return \DateTime
     */
    public function getMealEndTime()
    {
        return $this->mealEndTime;
    }

    /**
     * Sets a new mealEndTime
     *
     * Time on the ship the meal seating ends.
     *
     * @param \DateTime $mealEndTime
     * @return self
     */
    public function setMealEndTime(\DateTime $mealEndTime)
    {
        $this->mealEndTime = $mealEndTime;

        return $this;
    }


}


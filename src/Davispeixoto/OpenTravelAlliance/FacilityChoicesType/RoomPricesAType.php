<?php

namespace Davispeixoto\OpenTravelAlliance\FacilityChoicesType;

/**
 * Class representing RoomPricesAType
 */
class RoomPricesAType
{

    /**
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
     *
     * @property string $mealPlan
     */
    private $mealPlan = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\RoomPriceType[] $roomPrice
     */
    private $roomPrice = null;

    /**
     * Gets as mealPlan
     *
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
     *
     * @return string
     */
    public function getMealPlan()
    {
        return $this->mealPlan;
    }

    /**
     * Sets a new mealPlan
     *
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
     *
     * @param string $mealPlan
     * @return self
     */
    public function setMealPlan($mealPlan)
    {
        $this->mealPlan = $mealPlan;

        return $this;
    }

    /**
     * Adds as roomPrice
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomPriceType $roomPrice
     */
    public function addToRoomPrice(\Davispeixoto\OpenTravelAlliance\RoomPriceType $roomPrice)
    {
        $this->roomPrice[] = $roomPrice;

        return $this;
    }

    /**
     * isset roomPrice
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomPrice($index)
    {
        return isset($this->roomPrice[$index]);
    }

    /**
     * unset roomPrice
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomPrice($index)
    {
        unset($this->roomPrice[$index]);
    }

    /**
     * Gets as roomPrice
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomPriceType[]
     */
    public function getRoomPrice()
    {
        return $this->roomPrice;
    }

    /**
     * Sets a new roomPrice
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomPriceType[] $roomPrice
     * @return self
     */
    public function setRoomPrice(array $roomPrice)
    {
        $this->roomPrice = $roomPrice;

        return $this;
    }


}


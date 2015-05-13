<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FacilityChoicesType
 *
 * Provides the available facilities for the enquiror's chosen property and stay.
 * XSD Type: FacilityChoicesType
 */
class FacilityChoicesType
{

    /**
     * Minimum number of persons allowed in a unit of accommodation or place.
     *
     * @property integer $minOccupancy
     */
    private $minOccupancy = null;

    /**
     * Maximum number of persons allowed in a unit of accommodation or place.
     *
     * @property integer $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PkgRoomInventoryType[]
     * $availableRooms
     */
    private $availableRooms = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\MealPlanType[] $availableMealPlans
     */
    private $availableMealPlans = null;

    /**
     * A collection of price information for each available room based on an available
     * board terms (meal plan) e.g prices for each room based on Half Board.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FacilityChoicesType\RoomPricesAType[]
     * $roomPrices
     */
    private $roomPrices = null;

    /**
     * Gets as minOccupancy
     *
     * Minimum number of persons allowed in a unit of accommodation or place.
     *
     * @return integer
     */
    public function getMinOccupancy()
    {
        return $this->minOccupancy;
    }

    /**
     * Sets a new minOccupancy
     *
     * Minimum number of persons allowed in a unit of accommodation or place.
     *
     * @param integer $minOccupancy
     * @return self
     */
    public function setMinOccupancy($minOccupancy)
    {
        $this->minOccupancy = $minOccupancy;

        return $this;
    }

    /**
     * Gets as maxOccupancy
     *
     * Maximum number of persons allowed in a unit of accommodation or place.
     *
     * @return integer
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * Maximum number of persons allowed in a unit of accommodation or place.
     *
     * @param integer $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;

        return $this;
    }

    /**
     * Adds as room
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PkgRoomInventoryType $room
     */
    public function addToAvailableRooms(\Davispeixoto\OpenTravelAlliance\PkgRoomInventoryType $room)
    {
        $this->availableRooms[] = $room;

        return $this;
    }

    /**
     * isset availableRooms
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailableRooms($index)
    {
        return isset($this->availableRooms[$index]);
    }

    /**
     * unset availableRooms
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailableRooms($index)
    {
        unset($this->availableRooms[$index]);
    }

    /**
     * Gets as availableRooms
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgRoomInventoryType[]
     */
    public function getAvailableRooms()
    {
        return $this->availableRooms;
    }

    /**
     * Sets a new availableRooms
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgRoomInventoryType[] $availableRooms
     * @return self
     */
    public function setAvailableRooms(array $availableRooms)
    {
        $this->availableRooms = $availableRooms;

        return $this;
    }

    /**
     * Adds as mealPlan
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType $mealPlan
     */
    public function addToAvailableMealPlans(\Davispeixoto\OpenTravelAlliance\MealPlanType $mealPlan)
    {
        $this->availableMealPlans[] = $mealPlan;

        return $this;
    }

    /**
     * isset availableMealPlans
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailableMealPlans($index)
    {
        return isset($this->availableMealPlans[$index]);
    }

    /**
     * unset availableMealPlans
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailableMealPlans($index)
    {
        unset($this->availableMealPlans[$index]);
    }

    /**
     * Gets as availableMealPlans
     *
     * @return \Davispeixoto\OpenTravelAlliance\MealPlanType[]
     */
    public function getAvailableMealPlans()
    {
        return $this->availableMealPlans;
    }

    /**
     * Sets a new availableMealPlans
     *
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType[] $availableMealPlans
     * @return self
     */
    public function setAvailableMealPlans(array $availableMealPlans)
    {
        $this->availableMealPlans = $availableMealPlans;

        return $this;
    }

    /**
     * Adds as roomPrices
     *
     * A collection of price information for each available room based on an available
     * board terms (meal plan) e.g prices for each room based on Half Board.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FacilityChoicesType\RoomPricesAType
     * $roomPrices
     */
    public function addToRoomPrices(\Davispeixoto\OpenTravelAlliance\FacilityChoicesType\RoomPricesAType $roomPrices)
    {
        $this->roomPrices[] = $roomPrices;

        return $this;
    }

    /**
     * isset roomPrices
     *
     * A collection of price information for each available room based on an available
     * board terms (meal plan) e.g prices for each room based on Half Board.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomPrices($index)
    {
        return isset($this->roomPrices[$index]);
    }

    /**
     * unset roomPrices
     *
     * A collection of price information for each available room based on an available
     * board terms (meal plan) e.g prices for each room based on Half Board.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomPrices($index)
    {
        unset($this->roomPrices[$index]);
    }

    /**
     * Gets as roomPrices
     *
     * A collection of price information for each available room based on an available
     * board terms (meal plan) e.g prices for each room based on Half Board.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FacilityChoicesType\RoomPricesAType[]
     */
    public function getRoomPrices()
    {
        return $this->roomPrices;
    }

    /**
     * Sets a new roomPrices
     *
     * A collection of price information for each available room based on an available
     * board terms (meal plan) e.g prices for each room based on Half Board.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FacilityChoicesType\RoomPricesAType[]
     * $roomPrices
     * @return self
     */
    public function setRoomPrices(array $roomPrices)
    {
        $this->roomPrices = $roomPrices;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType;

/**
 * Class representing PricesAType
 */
class PricesAType
{

    /**
     * When 'true', the Amount value in each Price element is additional to the base
     * price; when 'false', the Amount is a full passenger price.
     *
     * @property boolean $supplementIndicator
     */
    private $supplementIndicator = null;

    /**
     * Pointer to the MealPlan for which this set of RoomPrices applies - normally used
     * when the SupplementIndicator attribute is 'False'.
     *
     * @property string $mealPlanRPH
     */
    private $mealPlanRPH = null;

    /**
     * The per- passenger price of a room.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType\PriceAType[]
     * $price
     */
    private $price = null;

    /**
     * Gets as supplementIndicator
     *
     * When 'true', the Amount value in each Price element is additional to the base
     * price; when 'false', the Amount is a full passenger price.
     *
     * @return boolean
     */
    public function getSupplementIndicator()
    {
        return $this->supplementIndicator;
    }

    /**
     * Sets a new supplementIndicator
     *
     * When 'true', the Amount value in each Price element is additional to the base
     * price; when 'false', the Amount is a full passenger price.
     *
     * @param boolean $supplementIndicator
     * @return self
     */
    public function setSupplementIndicator($supplementIndicator)
    {
        $this->supplementIndicator = $supplementIndicator;

        return $this;
    }

    /**
     * Gets as mealPlanRPH
     *
     * Pointer to the MealPlan for which this set of RoomPrices applies - normally used
     * when the SupplementIndicator attribute is 'False'.
     *
     * @return string
     */
    public function getMealPlanRPH()
    {
        return $this->mealPlanRPH;
    }

    /**
     * Sets a new mealPlanRPH
     *
     * Pointer to the MealPlan for which this set of RoomPrices applies - normally used
     * when the SupplementIndicator attribute is 'False'.
     *
     * @param string $mealPlanRPH
     * @return self
     */
    public function setMealPlanRPH($mealPlanRPH)
    {
        $this->mealPlanRPH = $mealPlanRPH;

        return $this;
    }

    /**
     * Adds as price
     *
     * The per- passenger price of a room.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType\PriceAType
     * $price
     */
    public function addToPrice(
        \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType\PriceAType $price
    ) {
        $this->price[] = $price;

        return $this;
    }

    /**
     * isset price
     *
     * The per- passenger price of a room.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPrice($index)
    {
        return isset($this->price[$index]);
    }

    /**
     * unset price
     *
     * The per- passenger price of a room.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPrice($index)
    {
        unset($this->price[$index]);
    }

    /**
     * Gets as price
     *
     * The per- passenger price of a room.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType\PriceAType[]
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * The per- passenger price of a room.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType\PriceAType[]
     * $price
     * @return self
     */
    public function setPrice(array $price)
    {
        $this->price = $price;

        return $this;
    }


}


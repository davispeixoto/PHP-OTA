<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RestaurantsType
 *
 * Provides detailed information regarding restaurants.
 * XSD Type: RestaurantsType
 */
class RestaurantsType
{

    /**
     * Identifies the total number of food and beverage outlets for a property.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Details of a specific restaurant such as type of restaurant, directions,
     * schedules, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType[]
     * $restaurant
     */
    private $restaurant = null;

    /**
     * Collection of type of restaurant offered.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     * $srvcInfoCodes
     */
    private $srvcInfoCodes = null;

    /**
     * Gets as quantity
     *
     * Identifies the total number of food and beverage outlets for a property.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Identifies the total number of food and beverage outlets for a property.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Adds as restaurant
     *
     * Details of a specific restaurant such as type of restaurant, directions,
     * schedules, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType
     * $restaurant
     */
    public function addToRestaurant(\Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType $restaurant)
    {
        $this->restaurant[] = $restaurant;

        return $this;
    }

    /**
     * isset restaurant
     *
     * Details of a specific restaurant such as type of restaurant, directions,
     * schedules, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRestaurant($index)
    {
        return isset($this->restaurant[$index]);
    }

    /**
     * unset restaurant
     *
     * Details of a specific restaurant such as type of restaurant, directions,
     * schedules, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRestaurant($index)
    {
        unset($this->restaurant[$index]);
    }

    /**
     * Gets as restaurant
     *
     * Details of a specific restaurant such as type of restaurant, directions,
     * schedules, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType[]
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }

    /**
     * Sets a new restaurant
     *
     * Details of a specific restaurant such as type of restaurant, directions,
     * schedules, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RestaurantsType\RestaurantAType[]
     * $restaurant
     * @return self
     */
    public function setRestaurant(array $restaurant)
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    /**
     * Adds as srvcInfoCode
     *
     * Collection of type of restaurant offered.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\SrvcInfoCodesAType\SrvcInfoCodeAType
     * $srvcInfoCode
     */
    public function addToSrvcInfoCodes(
        \Davispeixoto\OpenTravelAlliance\RestaurantsType\SrvcInfoCodesAType\SrvcInfoCodeAType $srvcInfoCode
    ) {
        $this->srvcInfoCodes[] = $srvcInfoCode;

        return $this;
    }

    /**
     * isset srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSrvcInfoCodes($index)
    {
        return isset($this->srvcInfoCodes[$index]);
    }

    /**
     * unset srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSrvcInfoCodes($index)
    {
        unset($this->srvcInfoCodes[$index]);
    }

    /**
     * Gets as srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     */
    public function getSrvcInfoCodes()
    {
        return $this->srvcInfoCodes;
    }

    /**
     * Sets a new srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantsType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     * $srvcInfoCodes
     * @return self
     */
    public function setSrvcInfoCodes(array $srvcInfoCodes)
    {
        $this->srvcInfoCodes = $srvcInfoCodes;

        return $this;
    }


}


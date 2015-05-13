<?php

namespace Davispeixoto\OpenTravelAlliance\RestaurantType;

/**
 * Class representing CuisineCodesAType
 */
class CuisineCodesAType
{

    /**
     * The code for the type of cuisine served at the restaurant.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\CuisineCodesAType\CuisineCodeAType[]
     * $cuisineCode
     */
    private $cuisineCode = null;

    /**
     * Adds as cuisineCode
     *
     * The code for the type of cuisine served at the restaurant.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\CuisineCodesAType\CuisineCodeAType
     * $cuisineCode
     */
    public function addToCuisineCode(
        \Davispeixoto\OpenTravelAlliance\RestaurantType\CuisineCodesAType\CuisineCodeAType $cuisineCode
    ) {
        $this->cuisineCode[] = $cuisineCode;

        return $this;
    }

    /**
     * isset cuisineCode
     *
     * The code for the type of cuisine served at the restaurant.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCuisineCode($index)
    {
        return isset($this->cuisineCode[$index]);
    }

    /**
     * unset cuisineCode
     *
     * The code for the type of cuisine served at the restaurant.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCuisineCode($index)
    {
        unset($this->cuisineCode[$index]);
    }

    /**
     * Gets as cuisineCode
     *
     * The code for the type of cuisine served at the restaurant.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\CuisineCodesAType\CuisineCodeAType[]
     */
    public function getCuisineCode()
    {
        return $this->cuisineCode;
    }

    /**
     * Sets a new cuisineCode
     *
     * The code for the type of cuisine served at the restaurant.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\CuisineCodesAType\CuisineCodeAType[]
     * $cuisineCode
     * @return self
     */
    public function setCuisineCode(array $cuisineCode)
    {
        $this->cuisineCode = $cuisineCode;

        return $this;
    }


}


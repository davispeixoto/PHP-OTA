<?php

namespace Davispeixoto\OpenTravelAlliance\MealPlanType;

/**
 * Class representing PricesAType
 */
class PricesAType
{

    /**
     * The passenger price of an item - e.g. the base price for a package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MealPlanType\PricesAType\PriceAType[]
     * $price
     */
    private $price = null;

    /**
     * Adds as price
     *
     * The passenger price of an item - e.g. the base price for a package.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType\PricesAType\PriceAType
     * $price
     */
    public function addToPrice(\Davispeixoto\OpenTravelAlliance\MealPlanType\PricesAType\PriceAType $price)
    {
        $this->price[] = $price;

        return $this;
    }

    /**
     * isset price
     *
     * The passenger price of an item - e.g. the base price for a package.
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
     * The passenger price of an item - e.g. the base price for a package.
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
     * The passenger price of an item - e.g. the base price for a package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MealPlanType\PricesAType\PriceAType[]
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * The passenger price of an item - e.g. the base price for a package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType\PricesAType\PriceAType[]
     * $price
     * @return self
     */
    public function setPrice(array $price)
    {
        $this->price = $price;

        return $this;
    }


}


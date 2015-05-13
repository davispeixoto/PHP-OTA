<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing MealPrefType
 *
 * Identifies a food and beverage preference.
 * XSD Type: MealPrefType
 */
class MealPrefType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Type of meal required (e.g.,vegetarian, Kosher, low fat, etc.)
     *
     * @property string $mealType
     */
    private $mealType = null;

    /**
     * Dining preferences used with this collection.
     *
     * @property string $favoriteFood
     */
    private $favoriteFood = null;

    /**
     * Type of drink(s) preferred.
     *
     * @property string $beverage
     */
    private $beverage = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as mealType
     *
     * Type of meal required (e.g.,vegetarian, Kosher, low fat, etc.)
     *
     * @return string
     */
    public function getMealType()
    {
        return $this->mealType;
    }

    /**
     * Sets a new mealType
     *
     * Type of meal required (e.g.,vegetarian, Kosher, low fat, etc.)
     *
     * @param string $mealType
     * @return self
     */
    public function setMealType($mealType)
    {
        $this->mealType = $mealType;

        return $this;
    }

    /**
     * Gets as favoriteFood
     *
     * Dining preferences used with this collection.
     *
     * @return string
     */
    public function getFavoriteFood()
    {
        return $this->favoriteFood;
    }

    /**
     * Sets a new favoriteFood
     *
     * Dining preferences used with this collection.
     *
     * @param string $favoriteFood
     * @return self
     */
    public function setFavoriteFood($favoriteFood)
    {
        $this->favoriteFood = $favoriteFood;

        return $this;
    }

    /**
     * Gets as beverage
     *
     * Type of drink(s) preferred.
     *
     * @return string
     */
    public function getBeverage()
    {
        return $this->beverage;
    }

    /**
     * Sets a new beverage
     *
     * Type of drink(s) preferred.
     *
     * @param string $beverage
     * @return self
     */
    public function setBeverage($beverage)
    {
        $this->beverage = $beverage;

        return $this;
    }


}


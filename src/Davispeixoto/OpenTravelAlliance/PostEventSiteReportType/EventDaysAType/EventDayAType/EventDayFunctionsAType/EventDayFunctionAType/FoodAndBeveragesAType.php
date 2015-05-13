<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType;

/**
 * Class representing FoodAndBeveragesAType
 */
class FoodAndBeveragesAType
{

    /**
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @property string $providedBy
     */
    private $providedBy = null;

    /**
     * Identifes the name of the provider of the item or service.
     *
     * @property string $providerName
     */
    private $providerName = null;

    /**
     * Food and beverage details for a function.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType[]
     * $foodAndBeverage
     */
    private $foodAndBeverage = null;

    /**
     * Gets as providedBy
     *
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @return string
     */
    public function getProvidedBy()
    {
        return $this->providedBy;
    }

    /**
     * Sets a new providedBy
     *
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @param string $providedBy
     * @return self
     */
    public function setProvidedBy($providedBy)
    {
        $this->providedBy = $providedBy;

        return $this;
    }

    /**
     * Gets as providerName
     *
     * Identifes the name of the provider of the item or service.
     *
     * @return string
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Sets a new providerName
     *
     * Identifes the name of the provider of the item or service.
     *
     * @param string $providerName
     * @return self
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;

        return $this;
    }

    /**
     * Adds as foodAndBeverage
     *
     * Food and beverage details for a function.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType
     * $foodAndBeverage
     */
    public function addToFoodAndBeverage(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType $foodAndBeverage
    ) {
        $this->foodAndBeverage[] = $foodAndBeverage;

        return $this;
    }

    /**
     * isset foodAndBeverage
     *
     * Food and beverage details for a function.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFoodAndBeverage($index)
    {
        return isset($this->foodAndBeverage[$index]);
    }

    /**
     * unset foodAndBeverage
     *
     * Food and beverage details for a function.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFoodAndBeverage($index)
    {
        unset($this->foodAndBeverage[$index]);
    }

    /**
     * Gets as foodAndBeverage
     *
     * Food and beverage details for a function.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType[]
     */
    public function getFoodAndBeverage()
    {
        return $this->foodAndBeverage;
    }

    /**
     * Sets a new foodAndBeverage
     *
     * Food and beverage details for a function.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType[]
     * $foodAndBeverage
     * @return self
     */
    public function setFoodAndBeverage(array $foodAndBeverage)
    {
        $this->foodAndBeverage = $foodAndBeverage;

        return $this;
    }


}


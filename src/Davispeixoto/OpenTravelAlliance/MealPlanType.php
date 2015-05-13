<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing MealPlanType
 *
 * Details of meal arrangements, booked or available according to context, with
 * appropriate supplementary charges.
 * XSD Type: MealPlanType
 */
class MealPlanType
{

    /**
     * A description of the meal plan.
     *
     * @property string $plan
     */
    private $plan = null;

    /**
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Used to associate a cost with a specific inventory item, e.g. a supplement for a
     * flight leg.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * A list of the Rooms with which this Meal Plan is available.
     *
     * @property string[] $listOfRoomRPH
     */
    private $listOfRoomRPH = null;

    /**
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType[]
     * $customerCounts
     */
    private $customerCounts = null;

    /**
     * Details of individual passengers - may be used instead of CustomerCounts.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MealPlanType\PassengerRPHsAType
     * $passengerRPHs
     */
    private $passengerRPHs = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\MealPlanType\PricesAType\PriceAType[]
     * $prices
     */
    private $prices = null;

    /**
     * Gets as plan
     *
     * A description of the meal plan.
     *
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Sets a new plan
     *
     * A description of the meal plan.
     *
     * @param string $plan
     * @return self
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Gets as code
     *
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and
     * breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
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
     * Used to define the quantity for an associated element or attribute.
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
     * Gets as rPH
     *
     * Used to associate a cost with a specific inventory item, e.g. a supplement for a
     * flight leg.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Used to associate a cost with a specific inventory item, e.g. a supplement for a
     * flight leg.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Adds as listOfRoomRPH
     *
     * A list of the Rooms with which this Meal Plan is available.
     *
     * @return self
     * @param string $listOfRoomRPH
     */
    public function addToListOfRoomRPH($listOfRoomRPH)
    {
        $this->listOfRoomRPH[] = $listOfRoomRPH;

        return $this;
    }

    /**
     * isset listOfRoomRPH
     *
     * A list of the Rooms with which this Meal Plan is available.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfRoomRPH($index)
    {
        return isset($this->listOfRoomRPH[$index]);
    }

    /**
     * unset listOfRoomRPH
     *
     * A list of the Rooms with which this Meal Plan is available.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfRoomRPH($index)
    {
        unset($this->listOfRoomRPH[$index]);
    }

    /**
     * Gets as listOfRoomRPH
     *
     * A list of the Rooms with which this Meal Plan is available.
     *
     * @return string[]
     */
    public function getListOfRoomRPH()
    {
        return $this->listOfRoomRPH;
    }

    /**
     * Sets a new listOfRoomRPH
     *
     * A list of the Rooms with which this Meal Plan is available.
     *
     * @param string $listOfRoomRPH
     * @return self
     */
    public function setListOfRoomRPH(array $listOfRoomRPH)
    {
        $this->listOfRoomRPH = $listOfRoomRPH;

        return $this;
    }

    /**
     * Adds as customerCount
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType
     * $customerCount
     */
    public function addToCustomerCounts(
        \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType $customerCount
    ) {
        $this->customerCounts[] = $customerCount;

        return $this;
    }

    /**
     * isset customerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomerCounts($index)
    {
        return isset($this->customerCounts[$index]);
    }

    /**
     * unset customerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomerCounts($index)
    {
        unset($this->customerCounts[$index]);
    }

    /**
     * Gets as customerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType[]
     */
    public function getCustomerCounts()
    {
        return $this->customerCounts;
    }

    /**
     * Sets a new customerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType[]
     * $customerCounts
     * @return self
     */
    public function setCustomerCounts(array $customerCounts)
    {
        $this->customerCounts = $customerCounts;

        return $this;
    }

    /**
     * Gets as passengerRPHs
     *
     * Details of individual passengers - may be used instead of CustomerCounts.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MealPlanType\PassengerRPHsAType
     */
    public function getPassengerRPHs()
    {
        return $this->passengerRPHs;
    }

    /**
     * Sets a new passengerRPHs
     *
     * Details of individual passengers - may be used instead of CustomerCounts.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType\PassengerRPHsAType
     * $passengerRPHs
     * @return self
     */
    public function setPassengerRPHs(\Davispeixoto\OpenTravelAlliance\MealPlanType\PassengerRPHsAType $passengerRPHs)
    {
        $this->passengerRPHs = $passengerRPHs;

        return $this;
    }

    /**
     * Adds as price
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType\PricesAType\PriceAType
     * $price
     */
    public function addToPrices(\Davispeixoto\OpenTravelAlliance\MealPlanType\PricesAType\PriceAType $price)
    {
        $this->prices[] = $price;

        return $this;
    }

    /**
     * isset prices
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPrices($index)
    {
        return isset($this->prices[$index]);
    }

    /**
     * unset prices
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPrices($index)
    {
        unset($this->prices[$index]);
    }

    /**
     * Gets as prices
     *
     * @return \Davispeixoto\OpenTravelAlliance\MealPlanType\PricesAType\PriceAType[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType\PricesAType\PriceAType[]
     * $prices
     * @return self
     */
    public function setPrices(array $prices)
    {
        $this->prices = $prices;

        return $this;
    }


}


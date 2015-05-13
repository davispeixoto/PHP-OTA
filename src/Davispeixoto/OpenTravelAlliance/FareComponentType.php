<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FareComponentType
 *
 * Information representing sold data supporting the fare construction applicable
 * to each fare component in a transaction.
 * XSD Type: FareComponentType
 */
class FareComponentType
{

    /**
     * The date on which the fare was calculated and quoted.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $priceQuoteDate
     */
    private $priceQuoteDate = null;

    /**
     * A qualifier for pricing to select fares.
     *
     * @property string $accountCode
     */
    private $accountCode = null;

    /**
     * A qualifier for pricing to select fares.
     *
     * @property string $pricingDesignator
     */
    private $pricingDesignator = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * A published value used to convert a NUC amount to the currency of commencement
     * of travel.
     *
     * @property float $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Priceable unit number.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType[]
     * $priceableUnit
     */
    private $priceableUnit = null;

    /**
     * The total base, total net, or total sell construction amount.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\TotalConstructionAmountAType[]
     * $totalConstructionAmount
     */
    private $totalConstructionAmount = null;

    /**
     * Gets as priceQuoteDate
     *
     * The date on which the fare was calculated and quoted.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getPriceQuoteDate()
    {
        return $this->priceQuoteDate;
    }

    /**
     * Sets a new priceQuoteDate
     *
     * The date on which the fare was calculated and quoted.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $priceQuoteDate
     * @return self
     */
    public function setPriceQuoteDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $priceQuoteDate)
    {
        $this->priceQuoteDate = $priceQuoteDate;

        return $this;
    }

    /**
     * Gets as accountCode
     *
     * A qualifier for pricing to select fares.
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }

    /**
     * Sets a new accountCode
     *
     * A qualifier for pricing to select fares.
     *
     * @param string $accountCode
     * @return self
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;

        return $this;
    }

    /**
     * Gets as pricingDesignator
     *
     * A qualifier for pricing to select fares.
     *
     * @return string
     */
    public function getPricingDesignator()
    {
        return $this->pricingDesignator;
    }

    /**
     * Sets a new pricingDesignator
     *
     * A qualifier for pricing to select fares.
     *
     * @param string $pricingDesignator
     * @return self
     */
    public function setPricingDesignator($pricingDesignator)
    {
        $this->pricingDesignator = $pricingDesignator;

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
     * Gets as exchangeRate
     *
     * A published value used to convert a NUC amount to the currency of commencement
     * of travel.
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * A published value used to convert a NUC amount to the currency of commencement
     * of travel.
     *
     * @param float $exchangeRate
     * @return self
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    /**
     * Adds as priceableUnit
     *
     * Priceable unit number.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType
     * $priceableUnit
     */
    public function addToPriceableUnit(
        \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType $priceableUnit
    ) {
        $this->priceableUnit[] = $priceableUnit;

        return $this;
    }

    /**
     * isset priceableUnit
     *
     * Priceable unit number.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriceableUnit($index)
    {
        return isset($this->priceableUnit[$index]);
    }

    /**
     * unset priceableUnit
     *
     * Priceable unit number.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriceableUnit($index)
    {
        unset($this->priceableUnit[$index]);
    }

    /**
     * Gets as priceableUnit
     *
     * Priceable unit number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType[]
     */
    public function getPriceableUnit()
    {
        return $this->priceableUnit;
    }

    /**
     * Sets a new priceableUnit
     *
     * Priceable unit number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType[]
     * $priceableUnit
     * @return self
     */
    public function setPriceableUnit(array $priceableUnit)
    {
        $this->priceableUnit = $priceableUnit;

        return $this;
    }

    /**
     * Adds as totalConstructionAmount
     *
     * The total base, total net, or total sell construction amount.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\TotalConstructionAmountAType
     * $totalConstructionAmount
     */
    public function addToTotalConstructionAmount(
        \Davispeixoto\OpenTravelAlliance\FareComponentType\TotalConstructionAmountAType $totalConstructionAmount
    ) {
        $this->totalConstructionAmount[] = $totalConstructionAmount;

        return $this;
    }

    /**
     * isset totalConstructionAmount
     *
     * The total base, total net, or total sell construction amount.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTotalConstructionAmount($index)
    {
        return isset($this->totalConstructionAmount[$index]);
    }

    /**
     * unset totalConstructionAmount
     *
     * The total base, total net, or total sell construction amount.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTotalConstructionAmount($index)
    {
        unset($this->totalConstructionAmount[$index]);
    }

    /**
     * Gets as totalConstructionAmount
     *
     * The total base, total net, or total sell construction amount.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\TotalConstructionAmountAType[]
     */
    public function getTotalConstructionAmount()
    {
        return $this->totalConstructionAmount;
    }

    /**
     * Sets a new totalConstructionAmount
     *
     * The total base, total net, or total sell construction amount.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\TotalConstructionAmountAType[]
     * $totalConstructionAmount
     * @return self
     */
    public function setTotalConstructionAmount(array $totalConstructionAmount)
    {
        $this->totalConstructionAmount = $totalConstructionAmount;

        return $this;
    }


}


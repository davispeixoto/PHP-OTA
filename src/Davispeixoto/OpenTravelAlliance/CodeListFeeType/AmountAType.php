<?php

namespace Davispeixoto\OpenTravelAlliance\CodeListFeeType;

/**
 * Class representing AmountAType
 */
class AmountAType
{

    /**
     * Money amount and currency encoding information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\AmountAType\CurrencyAType
     * $currency
     */
    private $currency = null;

    /**
     * Alternate currency information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\AmountAType\AlternateCurrencyAType
     * $alternateCurrency
     */
    private $alternateCurrency = null;

    /**
     * Fee percentage.Example: 6.25Note: This is a percentage of another amount that
     * this fee or tax is based on.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * Gets as currency
     *
     * Money amount and currency encoding information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\AmountAType\CurrencyAType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * Money amount and currency encoding information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\AmountAType\CurrencyAType
     * $currency
     * @return self
     */
    public function setCurrency(\Davispeixoto\OpenTravelAlliance\CodeListFeeType\AmountAType\CurrencyAType $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets as alternateCurrency
     *
     * Alternate currency information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\AmountAType\AlternateCurrencyAType
     */
    public function getAlternateCurrency()
    {
        return $this->alternateCurrency;
    }

    /**
     * Sets a new alternateCurrency
     *
     * Alternate currency information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\AmountAType\AlternateCurrencyAType
     * $alternateCurrency
     * @return self
     */
    public function setAlternateCurrency(
        \Davispeixoto\OpenTravelAlliance\CodeListFeeType\AmountAType\AlternateCurrencyAType $alternateCurrency
    ) {
        $this->alternateCurrency = $alternateCurrency;

        return $this;
    }

    /**
     * Gets as percent
     *
     * Fee percentage.Example: 6.25Note: This is a percentage of another amount that
     * this fee or tax is based on.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * Fee percentage.Example: 6.25Note: This is a percentage of another amount that
     * this fee or tax is based on.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }


}


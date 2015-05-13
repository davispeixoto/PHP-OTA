<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailPriceType
 *
 * Information about rail pricing, including price details and price breakdown.
 * XSD Type: RailPriceType
 */
class RailPriceType
{

    /**
     * The rail price including basic fare, discounts, service charges, fare
     * adjustments, fees and taxes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPriceType\PriceAType $price
     */
    private $price = null;

    /**
     * Details about the rail price, including basic fare, adjustments, discounts,
     * ancillary charges, terms and conditions, fees and taxes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType
     * $priceBreakdown
     */
    private $priceBreakdown = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as price
     *
     * The rail price including basic fare, discounts, service charges, fare
     * adjustments, fees and taxes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPriceType\PriceAType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * The rail price including basic fare, discounts, service charges, fare
     * adjustments, fees and taxes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPriceType\PriceAType $price
     * @return self
     */
    public function setPrice(\Davispeixoto\OpenTravelAlliance\RailPriceType\PriceAType $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets as priceBreakdown
     *
     * Details about the rail price, including basic fare, adjustments, discounts,
     * ancillary charges, terms and conditions, fees and taxes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType
     */
    public function getPriceBreakdown()
    {
        return $this->priceBreakdown;
    }

    /**
     * Sets a new priceBreakdown
     *
     * Details about the rail price, including basic fare, adjustments, discounts,
     * ancillary charges, terms and conditions, fees and taxes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType $priceBreakdown
     * @return self
     */
    public function setPriceBreakdown(\Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType $priceBreakdown)
    {
        $this->priceBreakdown = $priceBreakdown;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType;

/**
 * Class representing RailItineraryPriceAType
 */
class RailItineraryPriceAType
{

    /**
     * The total price for the rail itinerary.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType\TotalPriceAType
     * $totalPrice
     */
    private $totalPrice = null;

    /**
     * Pricing details for a rail itinerary, including summary or detailed basic fare,
     * discounts, service charges, fare adjustments, fees and taxes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType\PriceDetailAType[]
     * $priceDetail
     */
    private $priceDetail = null;

    /**
     * Gets as totalPrice
     *
     * The total price for the rail itinerary.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType\TotalPriceAType
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Sets a new totalPrice
     *
     * The total price for the rail itinerary.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType\TotalPriceAType
     * $totalPrice
     * @return self
     */
    public function setTotalPrice(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType\TotalPriceAType $totalPrice
    ) {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Adds as priceDetail
     *
     * Pricing details for a rail itinerary, including summary or detailed basic fare,
     * discounts, service charges, fare adjustments, fees and taxes.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType\PriceDetailAType
     * $priceDetail
     */
    public function addToPriceDetail(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType\PriceDetailAType $priceDetail
    ) {
        $this->priceDetail[] = $priceDetail;

        return $this;
    }

    /**
     * isset priceDetail
     *
     * Pricing details for a rail itinerary, including summary or detailed basic fare,
     * discounts, service charges, fare adjustments, fees and taxes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriceDetail($index)
    {
        return isset($this->priceDetail[$index]);
    }

    /**
     * unset priceDetail
     *
     * Pricing details for a rail itinerary, including summary or detailed basic fare,
     * discounts, service charges, fare adjustments, fees and taxes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriceDetail($index)
    {
        unset($this->priceDetail[$index]);
    }

    /**
     * Gets as priceDetail
     *
     * Pricing details for a rail itinerary, including summary or detailed basic fare,
     * discounts, service charges, fare adjustments, fees and taxes.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType\PriceDetailAType[]
     */
    public function getPriceDetail()
    {
        return $this->priceDetail;
    }

    /**
     * Sets a new priceDetail
     *
     * Pricing details for a rail itinerary, including summary or detailed basic fare,
     * discounts, service charges, fare adjustments, fees and taxes.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType\PriceDetailAType[]
     * $priceDetail
     * @return self
     */
    public function setPriceDetail(array $priceDetail)
    {
        $this->priceDetail = $priceDetail;

        return $this;
    }


}


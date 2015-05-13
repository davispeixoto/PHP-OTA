<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType;

/**
 * Class representing RatesAType
 */
class RatesAType
{

    /**
     * An individual rate, which is a collection of amounts by guest, additional
     * guests, fees, collection of related guarantee, cancel and payment policies, a
     * description and the unique id to identify the rate. Rate restrictions can be
     * sent along with the rate as attributes of this rate. The indivual rate can also
     * be qualified by the inventory information (InventoryGroup attribute group).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatesAType\RateAType[] $rate
     */
    private $rate = null;

    /**
     * Adds as rate
     *
     * An individual rate, which is a collection of amounts by guest, additional
     * guests, fees, collection of related guarantee, cancel and payment policies, a
     * description and the unique id to identify the rate. Rate restrictions can be
     * sent along with the rate as attributes of this rate. The indivual rate can also
     * be qualified by the inventory information (InventoryGroup attribute group).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatesAType\RateAType
     * $rate
     */
    public function addToRate(\Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatesAType\RateAType $rate)
    {
        $this->rate[] = $rate;

        return $this;
    }

    /**
     * isset rate
     *
     * An individual rate, which is a collection of amounts by guest, additional
     * guests, fees, collection of related guarantee, cancel and payment policies, a
     * description and the unique id to identify the rate. Rate restrictions can be
     * sent along with the rate as attributes of this rate. The indivual rate can also
     * be qualified by the inventory information (InventoryGroup attribute group).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRate($index)
    {
        return isset($this->rate[$index]);
    }

    /**
     * unset rate
     *
     * An individual rate, which is a collection of amounts by guest, additional
     * guests, fees, collection of related guarantee, cancel and payment policies, a
     * description and the unique id to identify the rate. Rate restrictions can be
     * sent along with the rate as attributes of this rate. The indivual rate can also
     * be qualified by the inventory information (InventoryGroup attribute group).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRate($index)
    {
        unset($this->rate[$index]);
    }

    /**
     * Gets as rate
     *
     * An individual rate, which is a collection of amounts by guest, additional
     * guests, fees, collection of related guarantee, cancel and payment policies, a
     * description and the unique id to identify the rate. Rate restrictions can be
     * sent along with the rate as attributes of this rate. The indivual rate can also
     * be qualified by the inventory information (InventoryGroup attribute group).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatesAType\RateAType[]
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * An individual rate, which is a collection of amounts by guest, additional
     * guests, fees, collection of related guarantee, cancel and payment policies, a
     * description and the unique id to identify the rate. Rate restrictions can be
     * sent along with the rate as attributes of this rate. The indivual rate can also
     * be qualified by the inventory information (InventoryGroup attribute group).
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatesAType\RateAType[]
     * $rate
     * @return self
     */
    public function setRate(array $rate)
    {
        $this->rate = $rate;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType;

/**
 * Class representing PriceInfosAType
 */
class PriceInfosAType
{

    /**
     * Summary of all charges for the PriceType at the guest level.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType\PriceInfoAType[]
     * $priceInfo
     */
    private $priceInfo = null;

    /**
     * Adds as priceInfo
     *
     * Summary of all charges for the PriceType at the guest level.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType\PriceInfoAType
     * $priceInfo
     */
    public function addToPriceInfo(
        \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType\PriceInfoAType $priceInfo
    ) {
        $this->priceInfo[] = $priceInfo;

        return $this;
    }

    /**
     * isset priceInfo
     *
     * Summary of all charges for the PriceType at the guest level.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriceInfo($index)
    {
        return isset($this->priceInfo[$index]);
    }

    /**
     * unset priceInfo
     *
     * Summary of all charges for the PriceType at the guest level.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriceInfo($index)
    {
        unset($this->priceInfo[$index]);
    }

    /**
     * Gets as priceInfo
     *
     * Summary of all charges for the PriceType at the guest level.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType\PriceInfoAType[]
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }

    /**
     * Sets a new priceInfo
     *
     * Summary of all charges for the PriceType at the guest level.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType\PriceInfoAType[]
     * $priceInfo
     * @return self
     */
    public function setPriceInfo(array $priceInfo)
    {
        $this->priceInfo = $priceInfo;

        return $this;
    }


}


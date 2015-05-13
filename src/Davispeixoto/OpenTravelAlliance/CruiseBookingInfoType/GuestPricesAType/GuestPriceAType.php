<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType;

use Davispeixoto\OpenTravelAlliance\GuestType;

/**
 * Class representing GuestPriceAType
 */
class GuestPriceAType extends GuestType
{

    /**
     * Collection of price info.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType\PriceInfoAType[]
     * $priceInfos
     */
    private $priceInfos = null;

    /**
     * Adds as priceInfo
     *
     * Collection of price info.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType\PriceInfoAType
     * $priceInfo
     */
    public function addToPriceInfos(
        \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType\PriceInfoAType $priceInfo
    ) {
        $this->priceInfos[] = $priceInfo;

        return $this;
    }

    /**
     * isset priceInfos
     *
     * Collection of price info.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriceInfos($index)
    {
        return isset($this->priceInfos[$index]);
    }

    /**
     * unset priceInfos
     *
     * Collection of price info.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriceInfos($index)
    {
        unset($this->priceInfos[$index]);
    }

    /**
     * Gets as priceInfos
     *
     * Collection of price info.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType\PriceInfoAType[]
     */
    public function getPriceInfos()
    {
        return $this->priceInfos;
    }

    /**
     * Sets a new priceInfos
     *
     * Collection of price info.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType\PriceInfosAType\PriceInfoAType[]
     * $priceInfos
     * @return self
     */
    public function setPriceInfos(array $priceInfos)
    {
        $this->priceInfos = $priceInfos;

        return $this;
    }


}


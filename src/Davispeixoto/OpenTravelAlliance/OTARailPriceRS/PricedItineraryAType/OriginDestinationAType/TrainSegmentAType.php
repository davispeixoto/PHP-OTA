<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType;

use Davispeixoto\OpenTravelAlliance\TrainSegmentSummaryType;

/**
 * Class representing TrainSegmentAType
 */
class TrainSegmentAType extends TrainSegmentSummaryType
{

    /**
     * Price information, including breakdown calculated at the train segment level.
     * Each PriceDetail element contains the fare quote corresponding to the traveler's
     * rail accommodation and ancillary service(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType\PriceDetailAType[]
     * $priceDetail
     */
    private $priceDetail = null;

    /**
     * Adds as priceDetail
     *
     * Price information, including breakdown calculated at the train segment level.
     * Each PriceDetail element contains the fare quote corresponding to the traveler's
     * rail accommodation and ancillary service(s).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType\PriceDetailAType
     * $priceDetail
     */
    public function addToPriceDetail(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType\PriceDetailAType $priceDetail
    ) {
        $this->priceDetail[] = $priceDetail;

        return $this;
    }

    /**
     * isset priceDetail
     *
     * Price information, including breakdown calculated at the train segment level.
     * Each PriceDetail element contains the fare quote corresponding to the traveler's
     * rail accommodation and ancillary service(s).
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
     * Price information, including breakdown calculated at the train segment level.
     * Each PriceDetail element contains the fare quote corresponding to the traveler's
     * rail accommodation and ancillary service(s).
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
     * Price information, including breakdown calculated at the train segment level.
     * Each PriceDetail element contains the fare quote corresponding to the traveler's
     * rail accommodation and ancillary service(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType\PriceDetailAType[]
     */
    public function getPriceDetail()
    {
        return $this->priceDetail;
    }

    /**
     * Sets a new priceDetail
     *
     * Price information, including breakdown calculated at the train segment level.
     * Each PriceDetail element contains the fare quote corresponding to the traveler's
     * rail accommodation and ancillary service(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType\PriceDetailAType[]
     * $priceDetail
     * @return self
     */
    public function setPriceDetail(array $priceDetail)
    {
        $this->priceDetail = $priceDetail;

        return $this;
    }


}


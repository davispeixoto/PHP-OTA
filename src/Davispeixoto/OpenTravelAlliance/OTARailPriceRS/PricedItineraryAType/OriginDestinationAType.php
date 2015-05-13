<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType;

/**
 * Class representing OriginDestinationAType
 */
class OriginDestinationAType
{

    /**
     * Travel origin location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * Travel destinationlocation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * A collection of one or more train segments.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType[]
     * $trainSegment
     */
    private $trainSegment = null;

    /**
     * Pricing details calculated at the origin/destination level.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\PriceDetailAType[]
     * $priceDetail
     */
    private $priceDetail = null;

    /**
     * Gets as originLocation
     *
     * Travel origin location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * Travel origin location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     * @return self
     */
    public function setOriginLocation(\Davispeixoto\OpenTravelAlliance\LocationType $originLocation)
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * Travel destinationlocation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * Travel destinationlocation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Adds as trainSegment
     *
     * A collection of one or more train segments.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType
     * $trainSegment
     */
    public function addToTrainSegment(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType $trainSegment
    ) {
        $this->trainSegment[] = $trainSegment;

        return $this;
    }

    /**
     * isset trainSegment
     *
     * A collection of one or more train segments.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTrainSegment($index)
    {
        return isset($this->trainSegment[$index]);
    }

    /**
     * unset trainSegment
     *
     * A collection of one or more train segments.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTrainSegment($index)
    {
        unset($this->trainSegment[$index]);
    }

    /**
     * Gets as trainSegment
     *
     * A collection of one or more train segments.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType[]
     */
    public function getTrainSegment()
    {
        return $this->trainSegment;
    }

    /**
     * Sets a new trainSegment
     *
     * A collection of one or more train segments.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\TrainSegmentAType[]
     * $trainSegment
     * @return self
     */
    public function setTrainSegment(array $trainSegment)
    {
        $this->trainSegment = $trainSegment;

        return $this;
    }

    /**
     * Adds as priceDetail
     *
     * Pricing details calculated at the origin/destination level.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\PriceDetailAType
     * $priceDetail
     */
    public function addToPriceDetail(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\PriceDetailAType $priceDetail
    ) {
        $this->priceDetail[] = $priceDetail;

        return $this;
    }

    /**
     * isset priceDetail
     *
     * Pricing details calculated at the origin/destination level.
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
     * Pricing details calculated at the origin/destination level.
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
     * Pricing details calculated at the origin/destination level.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\PriceDetailAType[]
     */
    public function getPriceDetail()
    {
        return $this->priceDetail;
    }

    /**
     * Sets a new priceDetail
     *
     * Pricing details calculated at the origin/destination level.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType\PriceDetailAType[]
     * $priceDetail
     * @return self
     */
    public function setPriceDetail(array $priceDetail)
    {
        $this->priceDetail = $priceDetail;

        return $this;
    }


}


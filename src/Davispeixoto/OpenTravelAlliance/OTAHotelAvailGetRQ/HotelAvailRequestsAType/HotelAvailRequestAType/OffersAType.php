<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing OffersAType
 */
class OffersAType
{

    /**
     * When true, send all offer data.
     *
     * @property boolean $sendData
     */
    private $sendData = null;

    /**
     * Requested offer.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType\OfferAType[]
     * $offer
     */
    private $offer = null;

    /**
     * Gets as sendData
     *
     * When true, send all offer data.
     *
     * @return boolean
     */
    public function getSendData()
    {
        return $this->sendData;
    }

    /**
     * Sets a new sendData
     *
     * When true, send all offer data.
     *
     * @param boolean $sendData
     * @return self
     */
    public function setSendData($sendData)
    {
        $this->sendData = $sendData;

        return $this;
    }

    /**
     * Adds as offer
     *
     * Requested offer.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType\OfferAType
     * $offer
     */
    public function addToOffer(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType\OfferAType $offer
    ) {
        $this->offer[] = $offer;

        return $this;
    }

    /**
     * isset offer
     *
     * Requested offer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer
     *
     * Requested offer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffer($index)
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer
     *
     * Requested offer.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType\OfferAType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * Requested offer.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType\OffersAType\OfferAType[]
     * $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;

        return $this;
    }


}


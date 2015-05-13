<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType;

/**
 * Class representing OffersAType
 */
class OffersAType
{

    /**
     * An individual offer, which defines the type of offer, the conditions under which
     * it can be applied and the amounts and/or percentages deducted.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\OffersAType\OfferAType[]
     * $offer
     */
    private $offer = null;

    /**
     * Adds as offer
     *
     * An individual offer, which defines the type of offer, the conditions under which
     * it can be applied and the amounts and/or percentages deducted.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\OffersAType\OfferAType
     * $offer
     */
    public function addToOffer(\Davispeixoto\OpenTravelAlliance\HotelRatePlanType\OffersAType\OfferAType $offer)
    {
        $this->offer[] = $offer;

        return $this;
    }

    /**
     * isset offer
     *
     * An individual offer, which defines the type of offer, the conditions under which
     * it can be applied and the amounts and/or percentages deducted.
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
     * An individual offer, which defines the type of offer, the conditions under which
     * it can be applied and the amounts and/or percentages deducted.
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
     * An individual offer, which defines the type of offer, the conditions under which
     * it can be applied and the amounts and/or percentages deducted.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\OffersAType\OfferAType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * An individual offer, which defines the type of offer, the conditions under which
     * it can be applied and the amounts and/or percentages deducted.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\OffersAType\OfferAType[]
     * $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;

        return $this;
    }


}


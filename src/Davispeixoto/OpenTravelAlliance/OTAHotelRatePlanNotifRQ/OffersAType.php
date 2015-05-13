<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelRatePlanNotifRQ;

/**
 * Class representing OffersAType
 */
class OffersAType
{

    /**
     * An offer that applies to all of the rate plans. It defines the type of offer,
     * the conditions under which it can be applied and the amounts and/or percentages
     * deducted.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OfferType[] $offer
     */
    private $offer = null;

    /**
     * Adds as offer
     *
     * An offer that applies to all of the rate plans. It defines the type of offer,
     * the conditions under which it can be applied and the amounts and/or percentages
     * deducted.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OfferType $offer
     */
    public function addToOffer(\Davispeixoto\OpenTravelAlliance\OfferType $offer)
    {
        $this->offer[] = $offer;

        return $this;
    }

    /**
     * isset offer
     *
     * An offer that applies to all of the rate plans. It defines the type of offer,
     * the conditions under which it can be applied and the amounts and/or percentages
     * deducted.
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
     * An offer that applies to all of the rate plans. It defines the type of offer,
     * the conditions under which it can be applied and the amounts and/or percentages
     * deducted.
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
     * An offer that applies to all of the rate plans. It defines the type of offer,
     * the conditions under which it can be applied and the amounts and/or percentages
     * deducted.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OfferType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * An offer that applies to all of the rate plans. It defines the type of offer,
     * the conditions under which it can be applied and the amounts and/or percentages
     * deducted.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OfferType[] $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;

        return $this;
    }


}


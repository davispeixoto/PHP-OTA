<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBookRS;

use Davispeixoto\OpenTravelAlliance\AirReservationType;

/**
 * Class representing AirReservationAType
 */
class AirReservationAType extends AirReservationType
{

    /**
     * Provides the original PNR creation date/time.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $createDateTime
     */
    private $createDateTime = null;

    /**
     * Merchandising offer information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer
     */
    private $offer = null;

    /**
     * Gets as createDateTime
     *
     * Provides the original PNR creation date/time.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * Provides the original PNR creation date/time.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $createDateTime
     * @return self
     */
    public function setCreateDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $createDateTime)
    {
        $this->createDateTime = $createDateTime;

        return $this;
    }

    /**
     * Gets as offer
     *
     * Merchandising offer information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * Merchandising offer information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer
     * @return self
     */
    public function setOffer(\Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer)
    {
        $this->offer = $offer;

        return $this;
    }


}


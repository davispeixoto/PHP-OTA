<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType;

use Davispeixoto\OpenTravelAlliance\PricedItineraryType;

/**
 * Class representing ItineraryAType
 */
class ItineraryAType extends PricedItineraryType
{

    /**
     * A unique ID for this priced itinerary that may be used elsewhere in the message.
     *
     * @property integer $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A unique ID for this priced itinerary that may be used elsewhere in the message.
     *
     * @return integer
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique ID for this priced itinerary that may be used elsewhere in the message.
     *
     * @param integer $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}


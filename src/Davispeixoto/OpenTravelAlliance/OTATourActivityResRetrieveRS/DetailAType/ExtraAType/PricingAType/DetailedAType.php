<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType;

use Davispeixoto\OpenTravelAlliance\TourActivityParticipantType;

/**
 * Class representing DetailedAType
 */
class DetailedAType extends TourActivityParticipantType
{

    /**
     * The charges associated with known participant(s), participant category(s) and
     * group information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price
     */
    private $price = null;

    /**
     * Gets as price
     *
     * The charges associated with known participant(s), participant category(s) and
     * group information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityChargeType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * The charges associated with known participant(s), participant category(s) and
     * group information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price
     * @return self
     */
    public function setPrice(\Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price)
    {
        $this->price = $price;

        return $this;
    }


}


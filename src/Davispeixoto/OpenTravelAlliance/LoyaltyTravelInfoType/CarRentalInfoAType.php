<?php

namespace Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType;

/**
 * Class representing CarRentalInfoAType
 */
class CarRentalInfoAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\CarRentalInfoAType\CarSegmentAType
     * $carSegment
     */
    private $carSegment = null;

    /**
     * Gets as carSegment
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\CarRentalInfoAType\CarSegmentAType
     */
    public function getCarSegment()
    {
        return $this->carSegment;
    }

    /**
     * Sets a new carSegment
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\CarRentalInfoAType\CarSegmentAType
     * $carSegment
     * @return self
     */
    public function setCarSegment(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\CarRentalInfoAType\CarSegmentAType $carSegment
    ) {
        $this->carSegment = $carSegment;

        return $this;
    }


}


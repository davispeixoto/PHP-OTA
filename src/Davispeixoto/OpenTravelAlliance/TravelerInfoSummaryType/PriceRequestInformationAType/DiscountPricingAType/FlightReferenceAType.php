<?php

namespace Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType;

/**
 * Class representing FlightReferenceAType
 */
class FlightReferenceAType
{

    /**
     * The flight segment to which the discount pricing should be applied.
     *
     * @property string $flightRefNumber
     */
    private $flightRefNumber = null;

    /**
     * Gets as flightRefNumber
     *
     * The flight segment to which the discount pricing should be applied.
     *
     * @return string
     */
    public function getFlightRefNumber()
    {
        return $this->flightRefNumber;
    }

    /**
     * Sets a new flightRefNumber
     *
     * The flight segment to which the discount pricing should be applied.
     *
     * @param string $flightRefNumber
     * @return self
     */
    public function setFlightRefNumber($flightRefNumber)
    {
        $this->flightRefNumber = $flightRefNumber;

        return $this;
    }


}


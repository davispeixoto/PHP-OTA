<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType;

/**
 * Class representing ApplyToAType
 */
class ApplyToAType
{

    /**
     * A reference to a unique traveler ID.
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * A reference to a unique O/D pair.
     *
     * @property string $origDestSequenceRPH
     */
    private $origDestSequenceRPH = null;

    /**
     * Gets as travelerRPH
     *
     * A reference to a unique traveler ID.
     *
     * @return string
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * A reference to a unique traveler ID.
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }

    /**
     * Gets as origDestSequenceRPH
     *
     * A reference to a unique O/D pair.
     *
     * @return string
     */
    public function getOrigDestSequenceRPH()
    {
        return $this->origDestSequenceRPH;
    }

    /**
     * Sets a new origDestSequenceRPH
     *
     * A reference to a unique O/D pair.
     *
     * @param string $origDestSequenceRPH
     * @return self
     */
    public function setOrigDestSequenceRPH($origDestSequenceRPH)
    {
        $this->origDestSequenceRPH = $origDestSequenceRPH;

        return $this;
    }


}


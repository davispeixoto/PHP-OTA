<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType;

/**
 * Class representing ApplyToAType
 */
class ApplyToAType
{

    /**
     * A reference to a set of baggage allowance information.
     *
     * @property string $allowanceRPH
     */
    private $allowanceRPH = null;

    /**
     * A reference to a unique O/D pair.
     *
     * @property string $origDestSequenceRPH
     */
    private $origDestSequenceRPH = null;

    /**
     * A reference to a set of service information.
     *
     * @property string $serviceRPH
     */
    private $serviceRPH = null;

    /**
     * A reference to a unique traveler ID.
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Gets as allowanceRPH
     *
     * A reference to a set of baggage allowance information.
     *
     * @return string
     */
    public function getAllowanceRPH()
    {
        return $this->allowanceRPH;
    }

    /**
     * Sets a new allowanceRPH
     *
     * A reference to a set of baggage allowance information.
     *
     * @param string $allowanceRPH
     * @return self
     */
    public function setAllowanceRPH($allowanceRPH)
    {
        $this->allowanceRPH = $allowanceRPH;

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

    /**
     * Gets as serviceRPH
     *
     * A reference to a set of service information.
     *
     * @return string
     */
    public function getServiceRPH()
    {
        return $this->serviceRPH;
    }

    /**
     * Sets a new serviceRPH
     *
     * A reference to a set of service information.
     *
     * @param string $serviceRPH
     * @return self
     */
    public function setServiceRPH($serviceRPH)
    {
        $this->serviceRPH = $serviceRPH;

        return $this;
    }

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


}


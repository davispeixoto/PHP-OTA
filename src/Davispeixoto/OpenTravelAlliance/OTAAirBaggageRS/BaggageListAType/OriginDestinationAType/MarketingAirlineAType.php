<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType;

use Davispeixoto\OpenTravelAlliance\CompanyNameType;

/**
 * Class representing MarketingAirlineAType
 */
class MarketingAirlineAType extends CompanyNameType
{

    /**
     * If true, this carrier is the most significant carrier governing the baggage
     * restrictions.
     *
     * @property boolean $mostSignificantInd
     */
    private $mostSignificantInd = null;

    /**
     * A reference to a set of baggage allowance information.
     *
     * @property string $allowanceRPH
     */
    private $allowanceRPH = null;

    /**
     * A reference to a set of service information.
     *
     * @property string $serviceRPH
     */
    private $serviceRPH = null;

    /**
     * Gets as mostSignificantInd
     *
     * If true, this carrier is the most significant carrier governing the baggage
     * restrictions.
     *
     * @return boolean
     */
    public function getMostSignificantInd()
    {
        return $this->mostSignificantInd;
    }

    /**
     * Sets a new mostSignificantInd
     *
     * If true, this carrier is the most significant carrier governing the baggage
     * restrictions.
     *
     * @param boolean $mostSignificantInd
     * @return self
     */
    public function setMostSignificantInd($mostSignificantInd)
    {
        $this->mostSignificantInd = $mostSignificantInd;

        return $this;
    }

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


}


<?php

namespace Davispeixoto\OpenTravelAlliance\AirReservationType\PricingOverviewAType;

/**
 * Class representing PricingIndicatorAType
 */
class PricingIndicatorAType
{

    /**
     * Used to specify the type of pricing information. References OpenTravel Code list
     * Pricing Processing Code (PPC).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * When true the information in the type attribute should not be applied to the
     * pricing.
     *
     * @property boolean $excludeInd
     */
    private $excludeInd = null;

    /**
     * Used to give additional information on the pricing preference. Refer to
     * OpenTravel Code List Pricing Qualification Code (PQC).
     *
     * @property string $qualifier
     */
    private $qualifier = null;

    /**
     * Gets as type
     *
     * Used to specify the type of pricing information. References OpenTravel Code list
     * Pricing Processing Code (PPC).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used to specify the type of pricing information. References OpenTravel Code list
     * Pricing Processing Code (PPC).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as excludeInd
     *
     * When true the information in the type attribute should not be applied to the
     * pricing.
     *
     * @return boolean
     */
    public function getExcludeInd()
    {
        return $this->excludeInd;
    }

    /**
     * Sets a new excludeInd
     *
     * When true the information in the type attribute should not be applied to the
     * pricing.
     *
     * @param boolean $excludeInd
     * @return self
     */
    public function setExcludeInd($excludeInd)
    {
        $this->excludeInd = $excludeInd;

        return $this;
    }

    /**
     * Gets as qualifier
     *
     * Used to give additional information on the pricing preference. Refer to
     * OpenTravel Code List Pricing Qualification Code (PQC).
     *
     * @return string
     */
    public function getQualifier()
    {
        return $this->qualifier;
    }

    /**
     * Sets a new qualifier
     *
     * Used to give additional information on the pricing preference. Refer to
     * OpenTravel Code List Pricing Qualification Code (PQC).
     *
     * @param string $qualifier
     * @return self
     */
    public function setQualifier($qualifier)
    {
        $this->qualifier = $qualifier;

        return $this;
    }


}


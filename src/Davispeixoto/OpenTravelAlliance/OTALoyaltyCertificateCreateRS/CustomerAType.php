<?php

namespace Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateCreateRS;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing CustomerAType
 */
class CustomerAType extends PersonNameType
{

    /**
     * The Reference Place Holder (RPH) is an index code used to identify an instance
     * in a collection of like items (e.g. used to assign individual passengers or
     * clients to particular itinerary items).
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * The Reference Place Holder (RPH) is an index code used to identify an instance
     * in a collection of like items (e.g. used to assign individual passengers or
     * clients to particular itinerary items).
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * The Reference Place Holder (RPH) is an index code used to identify an instance
     * in a collection of like items (e.g. used to assign individual passengers or
     * clients to particular itinerary items).
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}


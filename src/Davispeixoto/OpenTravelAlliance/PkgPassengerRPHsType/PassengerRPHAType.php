<?php

namespace Davispeixoto\OpenTravelAlliance\PkgPassengerRPHsType;

/**
 * Class representing PassengerRPHAType
 */
class PassengerRPHAType
{

    /**
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
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
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
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


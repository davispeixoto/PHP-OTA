<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\CarComponentAType;

use Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleReservationRQCoreType
{

    /**
     * A reference string used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @property string $quoteID
     */
    private $quoteID = null;

    /**
     * Gets as quoteID
     *
     * A reference string used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * A reference string used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;

        return $this;
    }


}


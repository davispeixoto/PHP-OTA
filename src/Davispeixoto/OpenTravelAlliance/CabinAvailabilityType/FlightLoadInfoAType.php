<?php

namespace Davispeixoto\OpenTravelAlliance\CabinAvailabilityType;

/**
 * Class representing FlightLoadInfoAType
 */
class FlightLoadInfoAType
{

    /**
     * The quantity of seats authorized for sale for a cabin and flight leg.
     *
     * @property integer $authorizedSeatQty
     */
    private $authorizedSeatQty = null;

    /**
     * The listed quantity of standby passengers (non-revenue PAX) for a cabin and
     * flight leg.
     *
     * @property integer $nRSAStandbyPaxQty
     */
    private $nRSAStandbyPaxQty = null;

    /**
     * The quantity of booked revenue passengers (revenue PAX) for each cabin and
     * flight leg.
     *
     * @property integer $revenuePaxQty
     */
    private $revenuePaxQty = null;

    /**
     * Gets as authorizedSeatQty
     *
     * The quantity of seats authorized for sale for a cabin and flight leg.
     *
     * @return integer
     */
    public function getAuthorizedSeatQty()
    {
        return $this->authorizedSeatQty;
    }

    /**
     * Sets a new authorizedSeatQty
     *
     * The quantity of seats authorized for sale for a cabin and flight leg.
     *
     * @param integer $authorizedSeatQty
     * @return self
     */
    public function setAuthorizedSeatQty($authorizedSeatQty)
    {
        $this->authorizedSeatQty = $authorizedSeatQty;

        return $this;
    }

    /**
     * Gets as nRSAStandbyPaxQty
     *
     * The listed quantity of standby passengers (non-revenue PAX) for a cabin and
     * flight leg.
     *
     * @return integer
     */
    public function getNRSAStandbyPaxQty()
    {
        return $this->nRSAStandbyPaxQty;
    }

    /**
     * Sets a new nRSAStandbyPaxQty
     *
     * The listed quantity of standby passengers (non-revenue PAX) for a cabin and
     * flight leg.
     *
     * @param integer $nRSAStandbyPaxQty
     * @return self
     */
    public function setNRSAStandbyPaxQty($nRSAStandbyPaxQty)
    {
        $this->nRSAStandbyPaxQty = $nRSAStandbyPaxQty;

        return $this;
    }

    /**
     * Gets as revenuePaxQty
     *
     * The quantity of booked revenue passengers (revenue PAX) for each cabin and
     * flight leg.
     *
     * @return integer
     */
    public function getRevenuePaxQty()
    {
        return $this->revenuePaxQty;
    }

    /**
     * Sets a new revenuePaxQty
     *
     * The quantity of booked revenue passengers (revenue PAX) for each cabin and
     * flight leg.
     *
     * @param integer $revenuePaxQty
     * @return self
     */
    public function setRevenuePaxQty($revenuePaxQty)
    {
        $this->revenuePaxQty = $revenuePaxQty;

        return $this;
    }


}


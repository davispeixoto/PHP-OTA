<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\AirItineraryAType\ItineraryUpgradeAType;

/**
 * Class representing UpgradeSegmentAType
 */
class UpgradeSegmentAType
{

    /**
     * A reference to the segment that is being upgraded from AirItinerary or
     * PricedAirItinerary.
     *
     * @property string $itinerarySegmentRPH
     */
    private $itinerarySegmentRPH = null;

    /**
     * The Marketing Carrier Reservation Booking Designator (RBD) to upgrade to.
     *
     * @property string $marketingResBookDesigCode
     */
    private $marketingResBookDesigCode = null;

    /**
     * The Operating Carrier Reservation Booking Designator (RBD) to upgrade to.
     *
     * @property string $operatingResBookDesigCode
     */
    private $operatingResBookDesigCode = null;

    /**
     * Gets as itinerarySegmentRPH
     *
     * A reference to the segment that is being upgraded from AirItinerary or
     * PricedAirItinerary.
     *
     * @return string
     */
    public function getItinerarySegmentRPH()
    {
        return $this->itinerarySegmentRPH;
    }

    /**
     * Sets a new itinerarySegmentRPH
     *
     * A reference to the segment that is being upgraded from AirItinerary or
     * PricedAirItinerary.
     *
     * @param string $itinerarySegmentRPH
     * @return self
     */
    public function setItinerarySegmentRPH($itinerarySegmentRPH)
    {
        $this->itinerarySegmentRPH = $itinerarySegmentRPH;

        return $this;
    }

    /**
     * Gets as marketingResBookDesigCode
     *
     * The Marketing Carrier Reservation Booking Designator (RBD) to upgrade to.
     *
     * @return string
     */
    public function getMarketingResBookDesigCode()
    {
        return $this->marketingResBookDesigCode;
    }

    /**
     * Sets a new marketingResBookDesigCode
     *
     * The Marketing Carrier Reservation Booking Designator (RBD) to upgrade to.
     *
     * @param string $marketingResBookDesigCode
     * @return self
     */
    public function setMarketingResBookDesigCode($marketingResBookDesigCode)
    {
        $this->marketingResBookDesigCode = $marketingResBookDesigCode;

        return $this;
    }

    /**
     * Gets as operatingResBookDesigCode
     *
     * The Operating Carrier Reservation Booking Designator (RBD) to upgrade to.
     *
     * @return string
     */
    public function getOperatingResBookDesigCode()
    {
        return $this->operatingResBookDesigCode;
    }

    /**
     * Sets a new operatingResBookDesigCode
     *
     * The Operating Carrier Reservation Booking Designator (RBD) to upgrade to.
     *
     * @param string $operatingResBookDesigCode
     * @return self
     */
    public function setOperatingResBookDesigCode($operatingResBookDesigCode)
    {
        $this->operatingResBookDesigCode = $operatingResBookDesigCode;

        return $this;
    }


}


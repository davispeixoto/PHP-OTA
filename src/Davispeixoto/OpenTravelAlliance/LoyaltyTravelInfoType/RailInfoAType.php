<?php

namespace Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType;

/**
 * Class representing RailInfoAType
 */
class RailInfoAType
{

    /**
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\RailInfoAType\OriginDestinationAType[]
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Indicates the type of fares of interest to the customer, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Information on the fulfillment of the ticket, e.g. the party that will be
     * issuing the ticket.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $fulfillment
     */
    private $fulfillment = null;

    /**
     * Adds as originDestination
     *
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\RailInfoAType\OriginDestinationAType
     * $originDestination
     */
    public function addToOriginDestination(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\RailInfoAType\OriginDestinationAType $originDestination
    ) {
        $this->originDestination[] = $originDestination;

        return $this;
    }

    /**
     * isset originDestination
     *
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestination($index)
    {
        return isset($this->originDestination[$index]);
    }

    /**
     * unset originDestination
     *
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestination($index)
    {
        unset($this->originDestination[$index]);
    }

    /**
     * Gets as originDestination
     *
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\RailInfoAType\OriginDestinationAType[]
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\RailInfoAType\OriginDestinationAType[]
     * $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination)
    {
        $this->originDestination = $originDestination;

        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * Indicates the type of fares of interest to the customer, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Indicates the type of fares of interest to the customer, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType $rateQualifier
     * @return self
     */
    public function setRateQualifier(\Davispeixoto\OpenTravelAlliance\RailRateQualifyingType $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * Information on the fulfillment of the ticket, e.g. the party that will be
     * issuing the ticket.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Sets a new fulfillment
     *
     * Information on the fulfillment of the ticket, e.g. the party that will be
     * issuing the ticket.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $fulfillment
     * @return self
     */
    public function setFulfillment(\Davispeixoto\OpenTravelAlliance\CompanyNameType $fulfillment)
    {
        $this->fulfillment = $fulfillment;

        return $this;
    }


}


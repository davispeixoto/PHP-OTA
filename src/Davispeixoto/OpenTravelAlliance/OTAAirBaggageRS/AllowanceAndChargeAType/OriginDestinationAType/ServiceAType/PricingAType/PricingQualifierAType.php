<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType;

/**
 * Class representing PricingQualifierAType
 */
class PricingQualifierAType
{

    /**
     * Negotiated fares and services.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType\NegotiatedFareAType
     * $negotiatedFare
     */
    private $negotiatedFare = null;

    /**
     * Original ticket/document issue information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType\OriginalIssueInfoAType
     * $originalIssueInfo
     */
    private $originalIssueInfo = null;

    /**
     * Other pricing qualifiers, including promotions, restrictions and tax exemptions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType $other
     */
    private $other = null;

    /**
     * Private fares and services.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PrivateFareType $privateFare
     */
    private $privateFare = null;

    /**
     * Gets as negotiatedFare
     *
     * Negotiated fares and services.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType\NegotiatedFareAType
     */
    public function getNegotiatedFare()
    {
        return $this->negotiatedFare;
    }

    /**
     * Sets a new negotiatedFare
     *
     * Negotiated fares and services.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType\NegotiatedFareAType
     * $negotiatedFare
     * @return self
     */
    public function setNegotiatedFare(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType\NegotiatedFareAType $negotiatedFare
    ) {
        $this->negotiatedFare = $negotiatedFare;

        return $this;
    }

    /**
     * Gets as originalIssueInfo
     *
     * Original ticket/document issue information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType\OriginalIssueInfoAType
     */
    public function getOriginalIssueInfo()
    {
        return $this->originalIssueInfo;
    }

    /**
     * Sets a new originalIssueInfo
     *
     * Original ticket/document issue information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType\OriginalIssueInfoAType
     * $originalIssueInfo
     * @return self
     */
    public function setOriginalIssueInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType\OriginalIssueInfoAType $originalIssueInfo
    ) {
        $this->originalIssueInfo = $originalIssueInfo;

        return $this;
    }

    /**
     * Gets as other
     *
     * Other pricing qualifiers, including promotions, restrictions and tax exemptions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Sets a new other
     *
     * Other pricing qualifiers, including promotions, restrictions and tax exemptions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType $other
     * @return self
     */
    public function setOther(\Davispeixoto\OpenTravelAlliance\AirPricingQualifierType $other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Gets as privateFare
     *
     * Private fares and services.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PrivateFareType
     */
    public function getPrivateFare()
    {
        return $this->privateFare;
    }

    /**
     * Sets a new privateFare
     *
     * Private fares and services.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PrivateFareType $privateFare
     * @return self
     */
    public function setPrivateFare(\Davispeixoto\OpenTravelAlliance\PrivateFareType $privateFare)
    {
        $this->privateFare = $privateFare;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{

    /**
     * The EMD type value.
     *
     * @property string $eMDTypeValue
     */
    private $eMDTypeValue = null;

    /**
     * The allowance method.
     *
     * @property string $method
     */
    private $method = null;

    /**
     * The 3 letter IATA city or airport code related to the service location.
     *
     * @property string $serviceLocation
     */
    private $serviceLocation = null;

    /**
     * The date of service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $serviceDate
     */
    private $serviceDate = null;

    /**
     * A unique identifier to reference this set of service information.
     *
     * @property string $serviceRPH
     */
    private $serviceRPH = null;

    /**
     * Airline or ATPCO encoded service family(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\FamilyAType
     * $family
     */
    private $family = null;

    /**
     * Pricing for this baggage service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType
     * $pricing
     */
    private $pricing = null;

    /**
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\ApplyToAType[]
     * $applyTo
     */
    private $applyTo = null;

    /**
     * ATPCO diagnostic information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\ATPCODiagnosticAType
     * $aTPCODiagnostic
     */
    private $aTPCODiagnostic = null;

    /**
     * Gets as eMDTypeValue
     *
     * The EMD type value.
     *
     * @return string
     */
    public function getEMDTypeValue()
    {
        return $this->eMDTypeValue;
    }

    /**
     * Sets a new eMDTypeValue
     *
     * The EMD type value.
     *
     * @param string $eMDTypeValue
     * @return self
     */
    public function setEMDTypeValue($eMDTypeValue)
    {
        $this->eMDTypeValue = $eMDTypeValue;

        return $this;
    }

    /**
     * Gets as method
     *
     * The allowance method.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * The allowance method.
     *
     * @param string $method
     * @return self
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Gets as serviceLocation
     *
     * The 3 letter IATA city or airport code related to the service location.
     *
     * @return string
     */
    public function getServiceLocation()
    {
        return $this->serviceLocation;
    }

    /**
     * Sets a new serviceLocation
     *
     * The 3 letter IATA city or airport code related to the service location.
     *
     * @param string $serviceLocation
     * @return self
     */
    public function setServiceLocation($serviceLocation)
    {
        $this->serviceLocation = $serviceLocation;

        return $this;
    }

    /**
     * Gets as serviceDate
     *
     * The date of service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getServiceDate()
    {
        return $this->serviceDate;
    }

    /**
     * Sets a new serviceDate
     *
     * The date of service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $serviceDate
     * @return self
     */
    public function setServiceDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $serviceDate)
    {
        $this->serviceDate = $serviceDate;

        return $this;
    }

    /**
     * Gets as serviceRPH
     *
     * A unique identifier to reference this set of service information.
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
     * A unique identifier to reference this set of service information.
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
     * Gets as family
     *
     * Airline or ATPCO encoded service family(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\FamilyAType
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Sets a new family
     *
     * Airline or ATPCO encoded service family(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\FamilyAType
     * $family
     * @return self
     */
    public function setFamily(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\FamilyAType $family
    ) {
        $this->family = $family;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Pricing for this baggage service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Pricing for this baggage service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType $pricing
    ) {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Adds as applyTo
     *
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\ApplyToAType
     * $applyTo
     */
    public function addToApplyTo(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\ApplyToAType $applyTo
    ) {
        $this->applyTo[] = $applyTo;

        return $this;
    }

    /**
     * isset applyTo
     *
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetApplyTo($index)
    {
        return isset($this->applyTo[$index]);
    }

    /**
     * unset applyTo
     *
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetApplyTo($index)
    {
        unset($this->applyTo[$index]);
    }

    /**
     * Gets as applyTo
     *
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\ApplyToAType[]
     */
    public function getApplyTo()
    {
        return $this->applyTo;
    }

    /**
     * Sets a new applyTo
     *
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\ApplyToAType[]
     * $applyTo
     * @return self
     */
    public function setApplyTo(array $applyTo)
    {
        $this->applyTo = $applyTo;

        return $this;
    }

    /**
     * Gets as aTPCODiagnostic
     *
     * ATPCO diagnostic information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\ATPCODiagnosticAType
     */
    public function getATPCODiagnostic()
    {
        return $this->aTPCODiagnostic;
    }

    /**
     * Sets a new aTPCODiagnostic
     *
     * ATPCO diagnostic information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\ATPCODiagnosticAType
     * $aTPCODiagnostic
     * @return self
     */
    public function setATPCODiagnostic(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\ATPCODiagnosticAType $aTPCODiagnostic
    ) {
        $this->aTPCODiagnostic = $aTPCODiagnostic;

        return $this;
    }


}


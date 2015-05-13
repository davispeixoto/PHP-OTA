<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType;

use Davispeixoto\OpenTravelAlliance\BaggageSpecificationType;

/**
 * Class representing BaggageDetailAType
 */
class BaggageDetailAType extends BaggageSpecificationType
{

    /**
     * The maximum pieces of baggage allowed.
     *
     * @property integer $maximumPieces
     */
    private $maximumPieces = null;

    /**
     * Number of pieces.
     *
     * @property integer $quantity
     */
    private $quantity = null;

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
     * Airline or ATPCO service family with pricing and booking instructions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType
     * $serviceFamily
     */
    private $serviceFamily = null;

    /**
     * Gets as maximumPieces
     *
     * The maximum pieces of baggage allowed.
     *
     * @return integer
     */
    public function getMaximumPieces()
    {
        return $this->maximumPieces;
    }

    /**
     * Sets a new maximumPieces
     *
     * The maximum pieces of baggage allowed.
     *
     * @param integer $maximumPieces
     * @return self
     */
    public function setMaximumPieces($maximumPieces)
    {
        $this->maximumPieces = $maximumPieces;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Number of pieces.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Number of pieces.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

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
     * Gets as serviceFamily
     *
     * Airline or ATPCO service family with pricing and booking instructions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType
     */
    public function getServiceFamily()
    {
        return $this->serviceFamily;
    }

    /**
     * Sets a new serviceFamily
     *
     * Airline or ATPCO service family with pricing and booking instructions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType
     * $serviceFamily
     * @return self
     */
    public function setServiceFamily(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType $serviceFamily
    ) {
        $this->serviceFamily = $serviceFamily;

        return $this;
    }


}


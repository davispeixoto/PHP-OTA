<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType;

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
     * A reference to a set of baggage allowance information.
     *
     * @property string $allowanceRPH
     */
    private $allowanceRPH = null;

    /**
     * A reference to a set of service information.
     *
     * @property string $serviceRPH
     */
    private $serviceRPH = null;

    /**
     * Number of pieces.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Airline or ATPCO encoded service family(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType\FamilyAType
     * $family
     */
    private $family = null;

    /**
     * Actual pricing. This is what is displayed to customer. Include pricing type with
     * taxes. Extend with DisplayLabel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType\PricingAType
     * $pricing
     */
    private $pricing = null;

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
     * Gets as allowanceRPH
     *
     * A reference to a set of baggage allowance information.
     *
     * @return string
     */
    public function getAllowanceRPH()
    {
        return $this->allowanceRPH;
    }

    /**
     * Sets a new allowanceRPH
     *
     * A reference to a set of baggage allowance information.
     *
     * @param string $allowanceRPH
     * @return self
     */
    public function setAllowanceRPH($allowanceRPH)
    {
        $this->allowanceRPH = $allowanceRPH;

        return $this;
    }

    /**
     * Gets as serviceRPH
     *
     * A reference to a set of service information.
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
     * A reference to a set of service information.
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
     * Gets as family
     *
     * Airline or ATPCO encoded service family(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType\FamilyAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType\FamilyAType
     * $family
     * @return self
     */
    public function setFamily(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType\FamilyAType $family
    ) {
        $this->family = $family;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Actual pricing. This is what is displayed to customer. Include pricing type with
     * taxes. Extend with DisplayLabel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Actual pricing. This is what is displayed to customer. Include pricing type with
     * taxes. Extend with DisplayLabel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType\PricingAType $pricing
    ) {
        $this->pricing = $pricing;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType;

/**
 * Class representing DiscountPricingAType
 */
class DiscountPricingAType
{

    /**
     * Used to specify the purpose of the discount pricing.
     *
     * @property string $purpose
     */
    private $purpose = null;

    /**
     * Specifies the type of amount being sent.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Used to specify how the discount is to be applied.
     *
     * @property string $usage
     */
    private $usage = null;

    /**
     * The monetary amount or percentage of discount that should be applied.
     *
     * @property float $discount
     */
    private $discount = null;

    /**
     * Specifies the code applicable to the fare that is being discounted.
     *
     * @property string $ticketDesignatorCode
     */
    private $ticketDesignatorCode = null;

    /**
     * @property string $text
     */
    private $text = null;

    /**
     * Specifies a flight to which the discount pricing applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType\FlightReferenceAType[]
     * $flightReference
     */
    private $flightReference = null;

    /**
     * Gets as purpose
     *
     * Used to specify the purpose of the discount pricing.
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Used to specify the purpose of the discount pricing.
     *
     * @param string $purpose
     * @return self
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * Gets as type
     *
     * Specifies the type of amount being sent.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specifies the type of amount being sent.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as usage
     *
     * Used to specify how the discount is to be applied.
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * Used to specify how the discount is to be applied.
     *
     * @param string $usage
     * @return self
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;

        return $this;
    }

    /**
     * Gets as discount
     *
     * The monetary amount or percentage of discount that should be applied.
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * The monetary amount or percentage of discount that should be applied.
     *
     * @param float $discount
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Gets as ticketDesignatorCode
     *
     * Specifies the code applicable to the fare that is being discounted.
     *
     * @return string
     */
    public function getTicketDesignatorCode()
    {
        return $this->ticketDesignatorCode;
    }

    /**
     * Sets a new ticketDesignatorCode
     *
     * Specifies the code applicable to the fare that is being discounted.
     *
     * @param string $ticketDesignatorCode
     * @return self
     */
    public function setTicketDesignatorCode($ticketDesignatorCode)
    {
        $this->ticketDesignatorCode = $ticketDesignatorCode;

        return $this;
    }

    /**
     * Gets as text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Adds as flightReference
     *
     * Specifies a flight to which the discount pricing applies.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType\FlightReferenceAType
     * $flightReference
     */
    public function addToFlightReference(
        \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType\FlightReferenceAType $flightReference
    ) {
        $this->flightReference[] = $flightReference;

        return $this;
    }

    /**
     * isset flightReference
     *
     * Specifies a flight to which the discount pricing applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightReference($index)
    {
        return isset($this->flightReference[$index]);
    }

    /**
     * unset flightReference
     *
     * Specifies a flight to which the discount pricing applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightReference($index)
    {
        unset($this->flightReference[$index]);
    }

    /**
     * Gets as flightReference
     *
     * Specifies a flight to which the discount pricing applies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType\FlightReferenceAType[]
     */
    public function getFlightReference()
    {
        return $this->flightReference;
    }

    /**
     * Sets a new flightReference
     *
     * Specifies a flight to which the discount pricing applies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType\FlightReferenceAType[]
     * $flightReference
     * @return self
     */
    public function setFlightReference(array $flightReference)
    {
        $this->flightReference = $flightReference;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PricedItineraryType
 *
 * Itinerary with pricing information.
 * XSD Type: PricedItineraryType
 */
class PricedItineraryType
{

    /**
     * Assigns a number to priced itineraries.
     *
     * @property integer $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * Specifies how the pricing was done.
     *
     * @property string $priceType
     */
    private $priceType = null;

    /**
     * The neutral unit currency rate.
     *
     * @property float $nUCRate
     */
    private $nUCRate = null;

    /**
     * The currency exchange rate.
     *
     * @property float $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Specifies the origin and destination of the traveler. Attributes: DirectionInd -
     * A directional indicator that identifies a type of air booking, either one-way,
     * round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw)
     * respectively. ActionCode - Indicates the status of the booking, such as OK or
     * Wait-List. NumberInParty - Indicates the traveler count.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary
     */
    private $airItinerary = null;

    /**
     * Pricing Information for an Air Itinerary.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PricedItineraryType\AirItineraryPricingInfoAType
     * $airItineraryPricingInfo
     */
    private $airItineraryPricingInfo = null;

    /**
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $notes
     */
    private $notes = null;

    /**
     * Container for ticketing information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PricedItineraryType\TicketingInfoAType
     * $ticketingInfo
     */
    private $ticketingInfo = null;

    /**
     * Gets as sequenceNumber
     *
     * Assigns a number to priced itineraries.
     *
     * @return integer
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * Assigns a number to priced itineraries.
     *
     * @param integer $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * Gets as priceType
     *
     * Specifies how the pricing was done.
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * Specifies how the pricing was done.
     *
     * @param string $priceType
     * @return self
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;

        return $this;
    }

    /**
     * Gets as nUCRate
     *
     * The neutral unit currency rate.
     *
     * @return float
     */
    public function getNUCRate()
    {
        return $this->nUCRate;
    }

    /**
     * Sets a new nUCRate
     *
     * The neutral unit currency rate.
     *
     * @param float $nUCRate
     * @return self
     */
    public function setNUCRate($nUCRate)
    {
        $this->nUCRate = $nUCRate;

        return $this;
    }

    /**
     * Gets as exchangeRate
     *
     * The currency exchange rate.
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * The currency exchange rate.
     *
     * @param float $exchangeRate
     * @return self
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    /**
     * Gets as airItinerary
     *
     * Specifies the origin and destination of the traveler. Attributes: DirectionInd -
     * A directional indicator that identifies a type of air booking, either one-way,
     * round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw)
     * respectively. ActionCode - Indicates the status of the booking, such as OK or
     * Wait-List. NumberInParty - Indicates the traveler count.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirItineraryType
     */
    public function getAirItinerary()
    {
        return $this->airItinerary;
    }

    /**
     * Sets a new airItinerary
     *
     * Specifies the origin and destination of the traveler. Attributes: DirectionInd -
     * A directional indicator that identifies a type of air booking, either one-way,
     * round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw)
     * respectively. ActionCode - Indicates the status of the booking, such as OK or
     * Wait-List. NumberInParty - Indicates the traveler count.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary
     * @return self
     */
    public function setAirItinerary(\Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary)
    {
        $this->airItinerary = $airItinerary;

        return $this;
    }

    /**
     * Gets as airItineraryPricingInfo
     *
     * Pricing Information for an Air Itinerary.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PricedItineraryType\AirItineraryPricingInfoAType
     */
    public function getAirItineraryPricingInfo()
    {
        return $this->airItineraryPricingInfo;
    }

    /**
     * Sets a new airItineraryPricingInfo
     *
     * Pricing Information for an Air Itinerary.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PricedItineraryType\AirItineraryPricingInfoAType
     * $airItineraryPricingInfo
     * @return self
     */
    public function setAirItineraryPricingInfo(
        \Davispeixoto\OpenTravelAlliance\PricedItineraryType\AirItineraryPricingInfoAType $airItineraryPricingInfo
    ) {
        $this->airItineraryPricingInfo = $airItineraryPricingInfo;

        return $this;
    }

    /**
     * Adds as notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $notes
     */
    public function addToNotes(\Davispeixoto\OpenTravelAlliance\FreeTextType $notes)
    {
        $this->notes[] = $notes;

        return $this;
    }

    /**
     * isset notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNotes($index)
    {
        return isset($this->notes[$index]);
    }

    /**
     * unset notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNotes($index)
    {
        unset($this->notes[$index]);
    }

    /**
     * Gets as notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $notes
     * @return self
     */
    public function setNotes(array $notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Gets as ticketingInfo
     *
     * Container for ticketing information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PricedItineraryType\TicketingInfoAType
     */
    public function getTicketingInfo()
    {
        return $this->ticketingInfo;
    }

    /**
     * Sets a new ticketingInfo
     *
     * Container for ticketing information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PricedItineraryType\TicketingInfoAType
     * $ticketingInfo
     * @return self
     */
    public function setTicketingInfo(
        \Davispeixoto\OpenTravelAlliance\PricedItineraryType\TicketingInfoAType $ticketingInfo
    ) {
        $this->ticketingInfo = $ticketingInfo;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRS;

/**
 * Class representing PricedItineraryAType
 */
class PricedItineraryAType
{

    /**
     * Pricing information for a rail itinerary.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType
     * $railItineraryPrice
     */
    private $railItineraryPrice = null;

    /**
     * Journey information from one specific origin to one specific destination,
     * including train segment and pricing details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType[]
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Passenger information, including occupation, age qualifier, disability, loyalty
     * program, personal identification and contact information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     * $passengerInfo
     */
    private $passengerInfo = null;

    /**
     * A description of the priced itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $note
     */
    private $note = null;

    /**
     * Gets as railItineraryPrice
     *
     * Pricing information for a rail itinerary.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType
     */
    public function getRailItineraryPrice()
    {
        return $this->railItineraryPrice;
    }

    /**
     * Sets a new railItineraryPrice
     *
     * Pricing information for a rail itinerary.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType
     * $railItineraryPrice
     * @return self
     */
    public function setRailItineraryPrice(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\RailItineraryPriceAType $railItineraryPrice
    ) {
        $this->railItineraryPrice = $railItineraryPrice;

        return $this;
    }

    /**
     * Adds as originDestination
     *
     * Journey information from one specific origin to one specific destination,
     * including train segment and pricing details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType
     * $originDestination
     */
    public function addToOriginDestination(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType $originDestination
    ) {
        $this->originDestination[] = $originDestination;

        return $this;
    }

    /**
     * isset originDestination
     *
     * Journey information from one specific origin to one specific destination,
     * including train segment and pricing details.
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
     * Journey information from one specific origin to one specific destination,
     * including train segment and pricing details.
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
     * Journey information from one specific origin to one specific destination,
     * including train segment and pricing details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType[]
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Journey information from one specific origin to one specific destination,
     * including train segment and pricing details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRS\PricedItineraryAType\OriginDestinationAType[]
     * $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination)
    {
        $this->originDestination = $originDestination;

        return $this;
    }

    /**
     * Adds as passengerInfo
     *
     * Passenger information, including occupation, age qualifier, disability, loyalty
     * program, personal identification and contact information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType
     * $passengerInfo
     */
    public function addToPassengerInfo(\Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType $passengerInfo)
    {
        $this->passengerInfo[] = $passengerInfo;

        return $this;
    }

    /**
     * isset passengerInfo
     *
     * Passenger information, including occupation, age qualifier, disability, loyalty
     * program, personal identification and contact information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerInfo($index)
    {
        return isset($this->passengerInfo[$index]);
    }

    /**
     * unset passengerInfo
     *
     * Passenger information, including occupation, age qualifier, disability, loyalty
     * program, personal identification and contact information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerInfo($index)
    {
        unset($this->passengerInfo[$index]);
    }

    /**
     * Gets as passengerInfo
     *
     * Passenger information, including occupation, age qualifier, disability, loyalty
     * program, personal identification and contact information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     */
    public function getPassengerInfo()
    {
        return $this->passengerInfo;
    }

    /**
     * Sets a new passengerInfo
     *
     * Passenger information, including occupation, age qualifier, disability, loyalty
     * program, personal identification and contact information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     * $passengerInfo
     * @return self
     */
    public function setPassengerInfo(array $passengerInfo)
    {
        $this->passengerInfo = $passengerInfo;

        return $this;
    }

    /**
     * Adds as note
     *
     * A description of the priced itinerary.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $note
     */
    public function addToNote(\Davispeixoto\OpenTravelAlliance\FreeTextType $note)
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * isset note
     *
     * A description of the priced itinerary.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * A description of the priced itinerary.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * A description of the priced itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * A description of the priced itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;

        return $this;
    }


}


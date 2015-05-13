<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType;

use Davispeixoto\OpenTravelAlliance\DynamicPkgResponseType;

/**
 * Class representing AirResultsAType
 *
 * A collection of available air inventory.
 */
class AirResultsAType extends DynamicPkgResponseType
{

    /**
     * the type of search (Roundtrip, Oneway, PriceFlights)
     *
     * @property string $responseType
     */
    private $responseType = null;

    /**
     * Container for priced itineraries.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PricedItinerariesType\PricedItineraryAType[]
     * $pricedItineraries
     */
    private $pricedItineraries = null;

    /**
     * Information on the locations between which availability was requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType
     * $originDestinationInformation
     */
    private $originDestinationInformation = null;

    /**
     * Gets as responseType
     *
     * the type of search (Roundtrip, Oneway, PriceFlights)
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * the type of search (Roundtrip, Oneway, PriceFlights)
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Adds as pricedItinerary
     *
     * Container for priced itineraries.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PricedItinerariesType\PricedItineraryAType
     * $pricedItinerary
     */
    public function addToPricedItineraries(
        \Davispeixoto\OpenTravelAlliance\PricedItinerariesType\PricedItineraryAType $pricedItinerary
    ) {
        $this->pricedItineraries[] = $pricedItinerary;

        return $this;
    }

    /**
     * isset pricedItineraries
     *
     * Container for priced itineraries.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedItineraries($index)
    {
        return isset($this->pricedItineraries[$index]);
    }

    /**
     * unset pricedItineraries
     *
     * Container for priced itineraries.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedItineraries($index)
    {
        unset($this->pricedItineraries[$index]);
    }

    /**
     * Gets as pricedItineraries
     *
     * Container for priced itineraries.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PricedItinerariesType\PricedItineraryAType[]
     */
    public function getPricedItineraries()
    {
        return $this->pricedItineraries;
    }

    /**
     * Sets a new pricedItineraries
     *
     * Container for priced itineraries.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PricedItinerariesType\PricedItineraryAType[]
     * $pricedItineraries
     * @return self
     */
    public function setPricedItineraries(array $pricedItineraries)
    {
        $this->pricedItineraries = $pricedItineraries;

        return $this;
    }

    /**
     * Gets as originDestinationInformation
     *
     * Information on the locations between which availability was requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType
     */
    public function getOriginDestinationInformation()
    {
        return $this->originDestinationInformation;
    }

    /**
     * Sets a new originDestinationInformation
     *
     * Information on the locations between which availability was requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType
     * $originDestinationInformation
     * @return self
     */
    public function setOriginDestinationInformation(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\AirResultsAType\OriginDestinationInformationAType $originDestinationInformation
    ) {
        $this->originDestinationInformation = $originDestinationInformation;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS;

/**
 * Class representing FareInfoAType
 */
class FareInfoAType
{

    /**
     * Origin location for this fare information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * Destination location for this fare information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * The owner of the fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $filingOperator
     */
    private $filingOperator = null;

    /**
     * Fares options for one or more Origin/Destination pairs.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType\FareOptionAType[]
     * $fareOption
     */
    private $fareOption = null;

    /**
     * Gets as originLocation
     *
     * Origin location for this fare information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * Origin location for this fare information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     * @return self
     */
    public function setOriginLocation(\Davispeixoto\OpenTravelAlliance\LocationType $originLocation)
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * Destination location for this fare information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * Destination location for this fare information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Gets as filingOperator
     *
     * The owner of the fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getFilingOperator()
    {
        return $this->filingOperator;
    }

    /**
     * Sets a new filingOperator
     *
     * The owner of the fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $filingOperator
     * @return self
     */
    public function setFilingOperator(\Davispeixoto\OpenTravelAlliance\CompanyNameType $filingOperator)
    {
        $this->filingOperator = $filingOperator;

        return $this;
    }

    /**
     * Adds as fareOption
     *
     * Fares options for one or more Origin/Destination pairs.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType\FareOptionAType
     * $fareOption
     */
    public function addToFareOption(
        \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType\FareOptionAType $fareOption
    ) {
        $this->fareOption[] = $fareOption;

        return $this;
    }

    /**
     * isset fareOption
     *
     * Fares options for one or more Origin/Destination pairs.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareOption($index)
    {
        return isset($this->fareOption[$index]);
    }

    /**
     * unset fareOption
     *
     * Fares options for one or more Origin/Destination pairs.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareOption($index)
    {
        unset($this->fareOption[$index]);
    }

    /**
     * Gets as fareOption
     *
     * Fares options for one or more Origin/Destination pairs.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType\FareOptionAType[]
     */
    public function getFareOption()
    {
        return $this->fareOption;
    }

    /**
     * Sets a new fareOption
     *
     * Fares options for one or more Origin/Destination pairs.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRS\FareInfoAType\FareOptionAType[]
     * $fareOption
     * @return self
     */
    public function setFareOption(array $fareOption)
    {
        $this->fareOption = $fareOption;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TravelerInfoSummaryType
 *
 * Specify passenger numbers and types
 * XSD Type: TravelerInfoSummaryType
 */
class TravelerInfoSummaryType
{

    /**
     * Number of seats requested.
     *
     * @property integer[] $seatsRequested
     */
    private $seatsRequested = null;

    /**
     * Specifies passenger numbers and types.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelerInformationType[]
     * $airTravelerAvail
     */
    private $airTravelerAvail = null;

    /**
     * Identifies pricing source, if negotiated fares are requested and if it is a
     * reprice request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType
     * $priceRequestInformation
     */
    private $priceRequestInformation = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as seatsRequested
     *
     * Number of seats requested.
     *
     * @return self
     * @param integer $seatsRequested
     */
    public function addToSeatsRequested($seatsRequested)
    {
        $this->seatsRequested[] = $seatsRequested;

        return $this;
    }

    /**
     * isset seatsRequested
     *
     * Number of seats requested.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatsRequested($index)
    {
        return isset($this->seatsRequested[$index]);
    }

    /**
     * unset seatsRequested
     *
     * Number of seats requested.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatsRequested($index)
    {
        unset($this->seatsRequested[$index]);
    }

    /**
     * Gets as seatsRequested
     *
     * Number of seats requested.
     *
     * @return integer[]
     */
    public function getSeatsRequested()
    {
        return $this->seatsRequested;
    }

    /**
     * Sets a new seatsRequested
     *
     * Number of seats requested.
     *
     * @param integer[] $seatsRequested
     * @return self
     */
    public function setSeatsRequested(array $seatsRequested)
    {
        $this->seatsRequested = $seatsRequested;

        return $this;
    }

    /**
     * Adds as airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInformationType
     * $airTravelerAvail
     */
    public function addToAirTravelerAvail(\Davispeixoto\OpenTravelAlliance\TravelerInformationType $airTravelerAvail)
    {
        $this->airTravelerAvail[] = $airTravelerAvail;

        return $this;
    }

    /**
     * isset airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirTravelerAvail($index)
    {
        return isset($this->airTravelerAvail[$index]);
    }

    /**
     * unset airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirTravelerAvail($index)
    {
        unset($this->airTravelerAvail[$index]);
    }

    /**
     * Gets as airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelerInformationType[]
     */
    public function getAirTravelerAvail()
    {
        return $this->airTravelerAvail;
    }

    /**
     * Sets a new airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInformationType[]
     * $airTravelerAvail
     * @return self
     */
    public function setAirTravelerAvail(array $airTravelerAvail)
    {
        $this->airTravelerAvail = $airTravelerAvail;

        return $this;
    }

    /**
     * Gets as priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a
     * reprice request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType
     */
    public function getPriceRequestInformation()
    {
        return $this->priceRequestInformation;
    }

    /**
     * Sets a new priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a
     * reprice request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType
     * $priceRequestInformation
     * @return self
     */
    public function setPriceRequestInformation(
        \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType $priceRequestInformation
    ) {
        $this->priceRequestInformation = $priceRequestInformation;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}


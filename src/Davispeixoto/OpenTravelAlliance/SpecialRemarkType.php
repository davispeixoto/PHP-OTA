<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SpecialRemarkType
 *
 * Itinerary Remarks, Invoice Remarks, etc.
 * XSD Type: SpecialRemarkType
 */
class SpecialRemarkType
{

    /**
     * Type of special remark used (e.g., itinerary remark, invoice remark). Refer to
     * OpenTravel Code List Special Remark Option Type (SRO).
     *
     * @property string $remarkType
     */
    private $remarkType = null;

    /**
     * Used to further define the remark type.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * One or more travelers to whom this request applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\TravelerRefNumberAType[]
     * $travelerRefNumber
     */
    private $travelerRefNumber = null;

    /**
     * One or more flights to whom this request applies
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\FlightRefNumberAType[]
     * $flightRefNumber
     */
    private $flightRefNumber = null;

    /**
     * Text associated with remark
     *
     * @property string $text
     */
    private $text = null;

    /**
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $airline
     */
    private $airline = null;

    /**
     * A container for authorized viewers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[]
     * $authorizedViewers
     */
    private $authorizedViewers = null;

    /**
     * Gets as remarkType
     *
     * Type of special remark used (e.g., itinerary remark, invoice remark). Refer to
     * OpenTravel Code List Special Remark Option Type (SRO).
     *
     * @return string
     */
    public function getRemarkType()
    {
        return $this->remarkType;
    }

    /**
     * Sets a new remarkType
     *
     * Type of special remark used (e.g., itinerary remark, invoice remark). Refer to
     * OpenTravel Code List Special Remark Option Type (SRO).
     *
     * @param string $remarkType
     * @return self
     */
    public function setRemarkType($remarkType)
    {
        $this->remarkType = $remarkType;

        return $this;
    }

    /**
     * Gets as iD
     *
     * Used to further define the remark type.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * Used to further define the remark type.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Adds as travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\TravelerRefNumberAType
     * $travelerRefNumber
     */
    public function addToTravelerRefNumber(
        \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\TravelerRefNumberAType $travelerRefNumber
    ) {
        $this->travelerRefNumber[] = $travelerRefNumber;

        return $this;
    }

    /**
     * isset travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerRefNumber($index)
    {
        return isset($this->travelerRefNumber[$index]);
    }

    /**
     * unset travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerRefNumber($index)
    {
        unset($this->travelerRefNumber[$index]);
    }

    /**
     * Gets as travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\TravelerRefNumberAType[]
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\TravelerRefNumberAType[]
     * $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(array $travelerRefNumber)
    {
        $this->travelerRefNumber = $travelerRefNumber;

        return $this;
    }

    /**
     * Adds as flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\FlightRefNumberAType
     * $flightRefNumber
     */
    public function addToFlightRefNumber(
        \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\FlightRefNumberAType $flightRefNumber
    ) {
        $this->flightRefNumber[] = $flightRefNumber;

        return $this;
    }

    /**
     * isset flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightRefNumber($index)
    {
        return isset($this->flightRefNumber[$index]);
    }

    /**
     * unset flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightRefNumber($index)
    {
        unset($this->flightRefNumber[$index]);
    }

    /**
     * Gets as flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\FlightRefNumberAType[]
     */
    public function getFlightRefNumber()
    {
        return $this->flightRefNumber;
    }

    /**
     * Sets a new flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\FlightRefNumberAType[]
     * $flightRefNumber
     * @return self
     */
    public function setFlightRefNumber(array $flightRefNumber)
    {
        $this->flightRefNumber = $flightRefNumber;

        return $this;
    }

    /**
     * Gets as text
     *
     * Text associated with remark
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
     * Text associated with remark
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
     * Adds as airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $airline
     */
    public function addToAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $airline)
    {
        $this->airline[] = $airline;

        return $this;
    }

    /**
     * isset airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirline($index)
    {
        return isset($this->airline[$index]);
    }

    /**
     * unset airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirline($index)
    {
        unset($this->airline[$index]);
    }

    /**
     * Gets as airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $airline
     * @return self
     */
    public function setAirline(array $airline)
    {
        $this->airline = $airline;

        return $this;
    }

    /**
     * Adds as authorizedViewer
     *
     * A container for authorized viewers.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType
     * $authorizedViewer
     */
    public function addToAuthorizedViewers(
        \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType $authorizedViewer
    ) {
        $this->authorizedViewers[] = $authorizedViewer;

        return $this;
    }

    /**
     * isset authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthorizedViewers($index)
    {
        return isset($this->authorizedViewers[$index]);
    }

    /**
     * unset authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthorizedViewers($index)
    {
        unset($this->authorizedViewers[$index]);
    }

    /**
     * Gets as authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[]
     */
    public function getAuthorizedViewers()
    {
        return $this->authorizedViewers;
    }

    /**
     * Sets a new authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[]
     * $authorizedViewers
     * @return self
     */
    public function setAuthorizedViewers(array $authorizedViewers)
    {
        $this->authorizedViewers = $authorizedViewers;

        return $this;
    }


}


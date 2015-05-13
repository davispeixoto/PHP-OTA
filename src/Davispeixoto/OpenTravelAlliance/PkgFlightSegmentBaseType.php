<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PkgFlightSegmentBaseType
 *
 * Construct for holding a flight segment availability object.
 * XSD Type: PkgFlightSegmentBaseType
 */
class PkgFlightSegmentBaseType
{

    /**
     * Specifies the date and time of a flight departure.
     *
     * @property \DateTime $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * Specifies the date and time of a flight arrival.
     *
     * @property \DateTime $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * The number of stops the flight makes
     *
     * @property integer $stopQuantity
     */
    private $stopQuantity = null;

    /**
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Used to specify the source of the data being exchanged as determined by trading
     * partners.
     *
     * @property string $infoSource
     */
    private $infoSource = null;

    /**
     * Departure point of flight segment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentBaseType\DepartureAirportAType
     * $departureAirport
     */
    private $departureAirport = null;

    /**
     * Arrival point of flight segment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentBaseType\ArrivalAirportAType
     * $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperatingAirlineType
     * $operatingAirline
     */
    private $operatingAirline = null;

    /**
     * The type of equipment used for the flight..
     *
     * @property \Davispeixoto\OpenTravelAlliance\EquipmentType[] $equipment
     */
    private $equipment = null;

    /**
     * Gets as departureDateTime
     *
     * Specifies the date and time of a flight departure.
     *
     * @return \DateTime
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * Specifies the date and time of a flight departure.
     *
     * @param \DateTime $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(\DateTime $departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * Specifies the date and time of a flight arrival.
     *
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * Specifies the date and time of a flight arrival.
     *
     * @param \DateTime $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\DateTime $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Gets as stopQuantity
     *
     * The number of stops the flight makes
     *
     * @return integer
     */
    public function getStopQuantity()
    {
        return $this->stopQuantity;
    }

    /**
     * Sets a new stopQuantity
     *
     * The number of stops the flight makes
     *
     * @param integer $stopQuantity
     * @return self
     */
    public function setStopQuantity($stopQuantity)
    {
        $this->stopQuantity = $stopQuantity;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading
     * partners.
     *
     * @return string
     */
    public function getInfoSource()
    {
        return $this->infoSource;
    }

    /**
     * Sets a new infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading
     * partners.
     *
     * @param string $infoSource
     * @return self
     */
    public function setInfoSource($infoSource)
    {
        $this->infoSource = $infoSource;

        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Departure point of flight segment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentBaseType\DepartureAirportAType
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * Sets a new departureAirport
     *
     * Departure point of flight segment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentBaseType\DepartureAirportAType
     * $departureAirport
     * @return self
     */
    public function setDepartureAirport(
        \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentBaseType\DepartureAirportAType $departureAirport
    ) {
        $this->departureAirport = $departureAirport;

        return $this;
    }

    /**
     * Gets as arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentBaseType\ArrivalAirportAType
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * Sets a new arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentBaseType\ArrivalAirportAType
     * $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(
        \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentBaseType\ArrivalAirportAType $arrivalAirport
    ) {
        $this->arrivalAirport = $arrivalAirport;

        return $this;
    }

    /**
     * Gets as operatingAirline
     *
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperatingAirlineType
     */
    public function getOperatingAirline()
    {
        return $this->operatingAirline;
    }

    /**
     * Sets a new operatingAirline
     *
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperatingAirlineType $operatingAirline
     * @return self
     */
    public function setOperatingAirline(\Davispeixoto\OpenTravelAlliance\OperatingAirlineType $operatingAirline)
    {
        $this->operatingAirline = $operatingAirline;

        return $this;
    }

    /**
     * Adds as equipment
     *
     * The type of equipment used for the flight..
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EquipmentType $equipment
     */
    public function addToEquipment(\Davispeixoto\OpenTravelAlliance\EquipmentType $equipment)
    {
        $this->equipment[] = $equipment;

        return $this;
    }

    /**
     * isset equipment
     *
     * The type of equipment used for the flight..
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEquipment($index)
    {
        return isset($this->equipment[$index]);
    }

    /**
     * unset equipment
     *
     * The type of equipment used for the flight..
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEquipment($index)
    {
        unset($this->equipment[$index]);
    }

    /**
     * Gets as equipment
     *
     * The type of equipment used for the flight..
     *
     * @return \Davispeixoto\OpenTravelAlliance\EquipmentType[]
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * The type of equipment used for the flight..
     *
     * @param \Davispeixoto\OpenTravelAlliance\EquipmentType[] $equipment
     * @return self
     */
    public function setEquipment(array $equipment)
    {
        $this->equipment = $equipment;

        return $this;
    }


}


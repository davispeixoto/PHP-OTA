<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundLocationType
 *
 * Service location details.
 * XSD Type: GroundLocationType
 */
class GroundLocationType
{

    /**
     * The date and time of the service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime
     */
    private $dateTime = null;

    /**
     * A physical address or location type and name.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationType\AddressAType
     * $address
     */
    private $address = null;

    /**
     * Airport details, including terminal and gate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationType\AirportInfoAType
     * $airportInfo
     */
    private $airportInfo = null;

    /**
     * Airline details, including flight number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationType\AirlineAType
     * $airline
     */
    private $airline = null;

    /**
     * Gets as dateTime
     *
     * The date and time of the service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * The date and time of the service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime
     * @return self
     */
    public function setDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Gets as address
     *
     * A physical address or location type and name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundLocationType\AddressAType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * A physical address or location type and name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationType\AddressAType $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\GroundLocationType\AddressAType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as airportInfo
     *
     * Airport details, including terminal and gate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundLocationType\AirportInfoAType
     */
    public function getAirportInfo()
    {
        return $this->airportInfo;
    }

    /**
     * Sets a new airportInfo
     *
     * Airport details, including terminal and gate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationType\AirportInfoAType
     * $airportInfo
     * @return self
     */
    public function setAirportInfo(\Davispeixoto\OpenTravelAlliance\GroundLocationType\AirportInfoAType $airportInfo)
    {
        $this->airportInfo = $airportInfo;

        return $this;
    }

    /**
     * Gets as airline
     *
     * Airline details, including flight number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundLocationType\AirlineAType
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Airline details, including flight number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationType\AirlineAType $airline
     * @return self
     */
    public function setAirline(\Davispeixoto\OpenTravelAlliance\GroundLocationType\AirlineAType $airline)
    {
        $this->airline = $airline;

        return $this;
    }


}


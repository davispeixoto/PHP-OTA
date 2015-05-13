<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirSeatMarketingClassType
 *
 * Seat marketing classification data for a section of seats within a specified
 * aircraft equipment type.
 * XSD Type: AirSeatMarketingClassType
 */
class AirSeatMarketingClassType
{

    /**
     * The aircraft equipment code. Use a three character IATA code or a string value
     * that is known to your trading partners.(Reference) IATA Air Equipment codes:
     * http://www.worldtrading.net/airlines_airports_aircraft/search_aircraft_code.html
     *
     * @property string $airEquipType
     */
    private $airEquipType = null;

    /**
     * A unique ID for this seat information that may be referenced elsewhere in this
     * message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * The unique ID (defined in the ConfirmedBookingInfo/ AirItinerary/AirItinerary/
     * OriginDestinationOptions/ OriginDestinationOption/ FlightSegment/@RPH) attribute
     * if this is a premium seat re-accommodation.
     *
     * @property string $purchasedSeatRPH
     */
    private $purchasedSeatRPH = null;

    /**
     * Cabin information for the aircraft equipment type, including seat types, cabin
     * class code and cabin sub-class information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType[]
     * $cabinInfo
     */
    private $cabinInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as airEquipType
     *
     * The aircraft equipment code. Use a three character IATA code or a string value
     * that is known to your trading partners.(Reference) IATA Air Equipment codes:
     * http://www.worldtrading.net/airlines_airports_aircraft/search_aircraft_code.html
     *
     * @return string
     */
    public function getAirEquipType()
    {
        return $this->airEquipType;
    }

    /**
     * Sets a new airEquipType
     *
     * The aircraft equipment code. Use a three character IATA code or a string value
     * that is known to your trading partners.(Reference) IATA Air Equipment codes:
     * http://www.worldtrading.net/airlines_airports_aircraft/search_aircraft_code.html
     *
     * @param string $airEquipType
     * @return self
     */
    public function setAirEquipType($airEquipType)
    {
        $this->airEquipType = $airEquipType;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique ID for this seat information that may be referenced elsewhere in this
     * message.
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
     * A unique ID for this seat information that may be referenced elsewhere in this
     * message.
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
     * Gets as purchasedSeatRPH
     *
     * The unique ID (defined in the ConfirmedBookingInfo/ AirItinerary/AirItinerary/
     * OriginDestinationOptions/ OriginDestinationOption/ FlightSegment/@RPH) attribute
     * if this is a premium seat re-accommodation.
     *
     * @return string
     */
    public function getPurchasedSeatRPH()
    {
        return $this->purchasedSeatRPH;
    }

    /**
     * Sets a new purchasedSeatRPH
     *
     * The unique ID (defined in the ConfirmedBookingInfo/ AirItinerary/AirItinerary/
     * OriginDestinationOptions/ OriginDestinationOption/ FlightSegment/@RPH) attribute
     * if this is a premium seat re-accommodation.
     *
     * @param string $purchasedSeatRPH
     * @return self
     */
    public function setPurchasedSeatRPH($purchasedSeatRPH)
    {
        $this->purchasedSeatRPH = $purchasedSeatRPH;

        return $this;
    }

    /**
     * Adds as cabinInfo
     *
     * Cabin information for the aircraft equipment type, including seat types, cabin
     * class code and cabin sub-class information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType
     * $cabinInfo
     */
    public function addToCabinInfo(\Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType $cabinInfo)
    {
        $this->cabinInfo[] = $cabinInfo;

        return $this;
    }

    /**
     * isset cabinInfo
     *
     * Cabin information for the aircraft equipment type, including seat types, cabin
     * class code and cabin sub-class information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinInfo($index)
    {
        return isset($this->cabinInfo[$index]);
    }

    /**
     * unset cabinInfo
     *
     * Cabin information for the aircraft equipment type, including seat types, cabin
     * class code and cabin sub-class information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinInfo($index)
    {
        unset($this->cabinInfo[$index]);
    }

    /**
     * Gets as cabinInfo
     *
     * Cabin information for the aircraft equipment type, including seat types, cabin
     * class code and cabin sub-class information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType[]
     */
    public function getCabinInfo()
    {
        return $this->cabinInfo;
    }

    /**
     * Sets a new cabinInfo
     *
     * Cabin information for the aircraft equipment type, including seat types, cabin
     * class code and cabin sub-class information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType[]
     * $cabinInfo
     * @return self
     */
    public function setCabinInfo(array $cabinInfo)
    {
        $this->cabinInfo = $cabinInfo;

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


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SeatMapQueryType
 *
 * Object to hold criteria used to generate one or more seat maps.
 * XSD Type: SeatMapQueryType
 */
class SeatMapQueryType
{

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * The calculated number of required seats, e.g.: 0 for Infant On Lap, 1 for Normal
     * Passenger and 2 for Oversized Passenger. This may be used to determine if two
     * seats need to be together.
     *
     * @property integer $totalReqSeatQty
     */
    private $totalReqSeatQty = null;

    /**
     * If true, this is a seat re-accommodation request. In this scenario, two
     * instances of DetailedInfo should be used, one for the original equipment and one
     * for the changed equipment.
     *
     * @property boolean $changeInd
     */
    private $changeInd = null;

    /**
     * Flight information, including flight number, airline, arrival, departure,
     * origin/destination and flight segment(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\FlightInfoAType[]
     * $flightInfo
     */
    private $flightInfo = null;

    /**
     * One or more unique aircraft equipment types to generate a seat map for.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EquipmentType[] $equipment
     */
    private $equipment = null;

    /**
     * Booking reference (PNR) information if the seat map is being generated by PNR.
     * Note that travelers with associated PNR(s) are defined here.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookingReferenceType[]
     * $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Cabin classes to be included or excluded from the seat map(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\CabinClassAType[]
     * $cabinClass
     */
    private $cabinClass = null;

    /**
     * An extensible list of seat features to be included in the seat map. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatFeaturesType[] $features
     */
    private $features = null;

    /**
     * Known or specifically requested seat information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SpecificSeatInfoAType[]
     * $specificSeatInfo
     */
    private $specificSeatInfo = null;

    /**
     * Object to hold the seat details that is to be requested.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType
     * $seatDetails
     */
    private $seatDetails = null;

    /**
     * An extensible list of seat status types to be included in the seat map. Select
     * an existing value from the list or use "Other_" and the @extension attribute to
     * add a new value known between trading partners.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StatusType[] $status
     */
    private $status = null;

    /**
     * Details about travelers not associated with a booking reference (PNR.)
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelerInfoType[] $traveler
     */
    private $traveler = null;

    /**
     * Zones to be included or excluded from the seat map(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatZoneQueryType[] $zone
     */
    private $zone = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return boolean
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param boolean $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * Gets as totalReqSeatQty
     *
     * The calculated number of required seats, e.g.: 0 for Infant On Lap, 1 for Normal
     * Passenger and 2 for Oversized Passenger. This may be used to determine if two
     * seats need to be together.
     *
     * @return integer
     */
    public function getTotalReqSeatQty()
    {
        return $this->totalReqSeatQty;
    }

    /**
     * Sets a new totalReqSeatQty
     *
     * The calculated number of required seats, e.g.: 0 for Infant On Lap, 1 for Normal
     * Passenger and 2 for Oversized Passenger. This may be used to determine if two
     * seats need to be together.
     *
     * @param integer $totalReqSeatQty
     * @return self
     */
    public function setTotalReqSeatQty($totalReqSeatQty)
    {
        $this->totalReqSeatQty = $totalReqSeatQty;

        return $this;
    }

    /**
     * Gets as changeInd
     *
     * If true, this is a seat re-accommodation request. In this scenario, two
     * instances of DetailedInfo should be used, one for the original equipment and one
     * for the changed equipment.
     *
     * @return boolean
     */
    public function getChangeInd()
    {
        return $this->changeInd;
    }

    /**
     * Sets a new changeInd
     *
     * If true, this is a seat re-accommodation request. In this scenario, two
     * instances of DetailedInfo should be used, one for the original equipment and one
     * for the changed equipment.
     *
     * @param boolean $changeInd
     * @return self
     */
    public function setChangeInd($changeInd)
    {
        $this->changeInd = $changeInd;

        return $this;
    }

    /**
     * Adds as flightInfo
     *
     * Flight information, including flight number, airline, arrival, departure,
     * origin/destination and flight segment(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\FlightInfoAType
     * $flightInfo
     */
    public function addToFlightInfo(\Davispeixoto\OpenTravelAlliance\SeatMapQueryType\FlightInfoAType $flightInfo)
    {
        $this->flightInfo[] = $flightInfo;

        return $this;
    }

    /**
     * isset flightInfo
     *
     * Flight information, including flight number, airline, arrival, departure,
     * origin/destination and flight segment(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightInfo($index)
    {
        return isset($this->flightInfo[$index]);
    }

    /**
     * unset flightInfo
     *
     * Flight information, including flight number, airline, arrival, departure,
     * origin/destination and flight segment(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightInfo($index)
    {
        unset($this->flightInfo[$index]);
    }

    /**
     * Gets as flightInfo
     *
     * Flight information, including flight number, airline, arrival, departure,
     * origin/destination and flight segment(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\FlightInfoAType[]
     */
    public function getFlightInfo()
    {
        return $this->flightInfo;
    }

    /**
     * Sets a new flightInfo
     *
     * Flight information, including flight number, airline, arrival, departure,
     * origin/destination and flight segment(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\FlightInfoAType[]
     * $flightInfo
     * @return self
     */
    public function setFlightInfo(array $flightInfo)
    {
        $this->flightInfo = $flightInfo;

        return $this;
    }

    /**
     * Adds as equipment
     *
     * One or more unique aircraft equipment types to generate a seat map for.
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
     * One or more unique aircraft equipment types to generate a seat map for.
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
     * One or more unique aircraft equipment types to generate a seat map for.
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
     * One or more unique aircraft equipment types to generate a seat map for.
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
     * One or more unique aircraft equipment types to generate a seat map for.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EquipmentType[] $equipment
     * @return self
     */
    public function setEquipment(array $equipment)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Adds as bookingReferenceID
     *
     * Booking reference (PNR) information if the seat map is being generated by PNR.
     * Note that travelers with associated PNR(s) are defined here.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BookingReferenceType $bookingReferenceID
     */
    public function addToBookingReferenceID(\Davispeixoto\OpenTravelAlliance\BookingReferenceType $bookingReferenceID)
    {
        $this->bookingReferenceID[] = $bookingReferenceID;

        return $this;
    }

    /**
     * isset bookingReferenceID
     *
     * Booking reference (PNR) information if the seat map is being generated by PNR.
     * Note that travelers with associated PNR(s) are defined here.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingReferenceID($index)
    {
        return isset($this->bookingReferenceID[$index]);
    }

    /**
     * unset bookingReferenceID
     *
     * Booking reference (PNR) information if the seat map is being generated by PNR.
     * Note that travelers with associated PNR(s) are defined here.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingReferenceID($index)
    {
        unset($this->bookingReferenceID[$index]);
    }

    /**
     * Gets as bookingReferenceID
     *
     * Booking reference (PNR) information if the seat map is being generated by PNR.
     * Note that travelers with associated PNR(s) are defined here.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookingReferenceType[]
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * Booking reference (PNR) information if the seat map is being generated by PNR.
     * Note that travelers with associated PNR(s) are defined here.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookingReferenceType[]
     * $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(array $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }

    /**
     * Adds as cabinClass
     *
     * Cabin classes to be included or excluded from the seat map(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\CabinClassAType
     * $cabinClass
     */
    public function addToCabinClass(\Davispeixoto\OpenTravelAlliance\SeatMapQueryType\CabinClassAType $cabinClass)
    {
        $this->cabinClass[] = $cabinClass;

        return $this;
    }

    /**
     * isset cabinClass
     *
     * Cabin classes to be included or excluded from the seat map(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinClass($index)
    {
        return isset($this->cabinClass[$index]);
    }

    /**
     * unset cabinClass
     *
     * Cabin classes to be included or excluded from the seat map(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinClass($index)
    {
        unset($this->cabinClass[$index]);
    }

    /**
     * Gets as cabinClass
     *
     * Cabin classes to be included or excluded from the seat map(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\CabinClassAType[]
     */
    public function getCabinClass()
    {
        return $this->cabinClass;
    }

    /**
     * Sets a new cabinClass
     *
     * Cabin classes to be included or excluded from the seat map(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\CabinClassAType[]
     * $cabinClass
     * @return self
     */
    public function setCabinClass(array $cabinClass)
    {
        $this->cabinClass = $cabinClass;

        return $this;
    }

    /**
     * Adds as features
     *
     * An extensible list of seat features to be included in the seat map. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatFeaturesType $features
     */
    public function addToFeatures(\Davispeixoto\OpenTravelAlliance\SeatFeaturesType $features)
    {
        $this->features[] = $features;

        return $this;
    }

    /**
     * isset features
     *
     * An extensible list of seat features to be included in the seat map. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * An extensible list of seat features to be included in the seat map. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * An extensible list of seat features to be included in the seat map. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatFeaturesType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * An extensible list of seat features to be included in the seat map. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatFeaturesType[] $features
     * @return self
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Adds as specificSeatInfo
     *
     * Known or specifically requested seat information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SpecificSeatInfoAType
     * $specificSeatInfo
     */
    public function addToSpecificSeatInfo(
        \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SpecificSeatInfoAType $specificSeatInfo
    ) {
        $this->specificSeatInfo[] = $specificSeatInfo;

        return $this;
    }

    /**
     * isset specificSeatInfo
     *
     * Known or specifically requested seat information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecificSeatInfo($index)
    {
        return isset($this->specificSeatInfo[$index]);
    }

    /**
     * unset specificSeatInfo
     *
     * Known or specifically requested seat information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecificSeatInfo($index)
    {
        unset($this->specificSeatInfo[$index]);
    }

    /**
     * Gets as specificSeatInfo
     *
     * Known or specifically requested seat information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SpecificSeatInfoAType[]
     */
    public function getSpecificSeatInfo()
    {
        return $this->specificSeatInfo;
    }

    /**
     * Sets a new specificSeatInfo
     *
     * Known or specifically requested seat information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SpecificSeatInfoAType[]
     * $specificSeatInfo
     * @return self
     */
    public function setSpecificSeatInfo(array $specificSeatInfo)
    {
        $this->specificSeatInfo = $specificSeatInfo;

        return $this;
    }

    /**
     * Gets as seatDetails
     *
     * Object to hold the seat details that is to be requested.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType
     */
    public function getSeatDetails()
    {
        return $this->seatDetails;
    }

    /**
     * Sets a new seatDetails
     *
     * Object to hold the seat details that is to be requested.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType
     * $seatDetails
     * @return self
     */
    public function setSeatDetails(\Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType $seatDetails)
    {
        $this->seatDetails = $seatDetails;

        return $this;
    }

    /**
     * Adds as status
     *
     * An extensible list of seat status types to be included in the seat map. Select
     * an existing value from the list or use "Other_" and the @extension attribute to
     * add a new value known between trading partners.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\StatusType $status
     */
    public function addToStatus(\Davispeixoto\OpenTravelAlliance\StatusType $status)
    {
        $this->status[] = $status;

        return $this;
    }

    /**
     * isset status
     *
     * An extensible list of seat status types to be included in the seat map. Select
     * an existing value from the list or use "Other_" and the @extension attribute to
     * add a new value known between trading partners.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * An extensible list of seat status types to be included in the seat map. Select
     * an existing value from the list or use "Other_" and the @extension attribute to
     * add a new value known between trading partners.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * An extensible list of seat status types to be included in the seat map. Select
     * an existing value from the list or use "Other_" and the @extension attribute to
     * add a new value known between trading partners.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StatusType[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * An extensible list of seat status types to be included in the seat map. Select
     * an existing value from the list or use "Other_" and the @extension attribute to
     * add a new value known between trading partners.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StatusType[] $status
     * @return self
     */
    public function setStatus(array $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Adds as traveler
     *
     * Details about travelers not associated with a booking reference (PNR.)
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInfoType $traveler
     */
    public function addToTraveler(\Davispeixoto\OpenTravelAlliance\TravelerInfoType $traveler)
    {
        $this->traveler[] = $traveler;

        return $this;
    }

    /**
     * isset traveler
     *
     * Details about travelers not associated with a booking reference (PNR.)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTraveler($index)
    {
        return isset($this->traveler[$index]);
    }

    /**
     * unset traveler
     *
     * Details about travelers not associated with a booking reference (PNR.)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTraveler($index)
    {
        unset($this->traveler[$index]);
    }

    /**
     * Gets as traveler
     *
     * Details about travelers not associated with a booking reference (PNR.)
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelerInfoType[]
     */
    public function getTraveler()
    {
        return $this->traveler;
    }

    /**
     * Sets a new traveler
     *
     * Details about travelers not associated with a booking reference (PNR.)
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInfoType[] $traveler
     * @return self
     */
    public function setTraveler(array $traveler)
    {
        $this->traveler = $traveler;

        return $this;
    }

    /**
     * Adds as zone
     *
     * Zones to be included or excluded from the seat map(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatZoneQueryType $zone
     */
    public function addToZone(\Davispeixoto\OpenTravelAlliance\SeatZoneQueryType $zone)
    {
        $this->zone[] = $zone;

        return $this;
    }

    /**
     * isset zone
     *
     * Zones to be included or excluded from the seat map(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetZone($index)
    {
        return isset($this->zone[$index]);
    }

    /**
     * unset zone
     *
     * Zones to be included or excluded from the seat map(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetZone($index)
    {
        unset($this->zone[$index]);
    }

    /**
     * Gets as zone
     *
     * Zones to be included or excluded from the seat map(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatZoneQueryType[]
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Sets a new zone
     *
     * Zones to be included or excluded from the seat map(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatZoneQueryType[] $zone
     * @return self
     */
    public function setZone(array $zone)
    {
        $this->zone = $zone;

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


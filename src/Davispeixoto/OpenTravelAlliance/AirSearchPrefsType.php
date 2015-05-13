<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirSearchPrefsType
 *
 * Defines user preferences to be used in conducting a search.
 * XSD Type: AirSearchPrefsType
 */
class AirSearchPrefsType
{

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Request for flights in response that meet the given Department of Transport
     * on-time rate. This is a number between 0 and 100.
     *
     * @property float $onTimeRate
     */
    private $onTimeRate = null;

    /**
     * Request flights that are e-ticketable in the response.
     *  false
     *
     * @property boolean $eTicketDesired
     */
    private $eTicketDesired = null;

    /**
     * Request flights that have no more than the requested number of stops.
     *
     * @property integer $maxStopsQuantity
     */
    private $maxStopsQuantity = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * Specify vendors to include and exclude from the response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\VendorPrefAType[]
     * $vendorPref
     */
    private $vendorPref = null;

    /**
     * Defines preferred flight characteristics to be used in a search.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\FlightTypePrefAType[]
     * $flightTypePref
     */
    private $flightTypePref = null;

    /**
     * Constrains a fare search to those with restrictions that satisfy user-imposed
     * limitations.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\FareRestrictPrefAType[]
     * $fareRestrictPref
     */
    private $fareRestrictPref = null;

    /**
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EquipmentTypePrefType[] $equipPref
     */
    private $equipPref = null;

    /**
     * Defines preferred cabin(s) to be used in a search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\CabinPrefAType[]
     * $cabinPref
     */
    private $cabinPref = null;

    /**
     * Defines Distribution prefernces.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\TicketDistribPrefAType[]
     * $ticketDistribPref
     */
    private $ticketDistribPref = null;

    /**
     * The booking class seat preferences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\BookingSeatPrefAType
     * $bookingSeatPref
     */
    private $bookingSeatPref = null;

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
     * Gets as onTimeRate
     *
     * Request for flights in response that meet the given Department of Transport
     * on-time rate. This is a number between 0 and 100.
     *
     * @return float
     */
    public function getOnTimeRate()
    {
        return $this->onTimeRate;
    }

    /**
     * Sets a new onTimeRate
     *
     * Request for flights in response that meet the given Department of Transport
     * on-time rate. This is a number between 0 and 100.
     *
     * @param float $onTimeRate
     * @return self
     */
    public function setOnTimeRate($onTimeRate)
    {
        $this->onTimeRate = $onTimeRate;

        return $this;
    }

    /**
     * Gets as eTicketDesired
     *
     * Request flights that are e-ticketable in the response.
     *  false
     *
     * @return boolean
     */
    public function getETicketDesired()
    {
        return $this->eTicketDesired;
    }

    /**
     * Sets a new eTicketDesired
     *
     * Request flights that are e-ticketable in the response.
     *  false
     *
     * @param boolean $eTicketDesired
     * @return self
     */
    public function setETicketDesired($eTicketDesired)
    {
        $this->eTicketDesired = $eTicketDesired;

        return $this;
    }

    /**
     * Gets as maxStopsQuantity
     *
     * Request flights that have no more than the requested number of stops.
     *
     * @return integer
     */
    public function getMaxStopsQuantity()
    {
        return $this->maxStopsQuantity;
    }

    /**
     * Sets a new maxStopsQuantity
     *
     * Request flights that have no more than the requested number of stops.
     *
     * @param integer $maxStopsQuantity
     * @return self
     */
    public function setMaxStopsQuantity($maxStopsQuantity)
    {
        $this->maxStopsQuantity = $maxStopsQuantity;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Adds as vendorPref
     *
     * Specify vendors to include and exclude from the response.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\VendorPrefAType
     * $vendorPref
     */
    public function addToVendorPref(\Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\VendorPrefAType $vendorPref)
    {
        $this->vendorPref[] = $vendorPref;

        return $this;
    }

    /**
     * isset vendorPref
     *
     * Specify vendors to include and exclude from the response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorPref($index)
    {
        return isset($this->vendorPref[$index]);
    }

    /**
     * unset vendorPref
     *
     * Specify vendors to include and exclude from the response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorPref($index)
    {
        unset($this->vendorPref[$index]);
    }

    /**
     * Gets as vendorPref
     *
     * Specify vendors to include and exclude from the response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\VendorPrefAType[]
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Specify vendors to include and exclude from the response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\VendorPrefAType[]
     * $vendorPref
     * @return self
     */
    public function setVendorPref(array $vendorPref)
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }

    /**
     * Adds as flightTypePref
     *
     * Defines preferred flight characteristics to be used in a search.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\FlightTypePrefAType
     * $flightTypePref
     */
    public function addToFlightTypePref(
        \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\FlightTypePrefAType $flightTypePref
    ) {
        $this->flightTypePref[] = $flightTypePref;

        return $this;
    }

    /**
     * isset flightTypePref
     *
     * Defines preferred flight characteristics to be used in a search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightTypePref($index)
    {
        return isset($this->flightTypePref[$index]);
    }

    /**
     * unset flightTypePref
     *
     * Defines preferred flight characteristics to be used in a search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightTypePref($index)
    {
        unset($this->flightTypePref[$index]);
    }

    /**
     * Gets as flightTypePref
     *
     * Defines preferred flight characteristics to be used in a search.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\FlightTypePrefAType[]
     */
    public function getFlightTypePref()
    {
        return $this->flightTypePref;
    }

    /**
     * Sets a new flightTypePref
     *
     * Defines preferred flight characteristics to be used in a search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\FlightTypePrefAType[]
     * $flightTypePref
     * @return self
     */
    public function setFlightTypePref(array $flightTypePref)
    {
        $this->flightTypePref = $flightTypePref;

        return $this;
    }

    /**
     * Adds as fareRestrictPref
     *
     * Constrains a fare search to those with restrictions that satisfy user-imposed
     * limitations.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\FareRestrictPrefAType
     * $fareRestrictPref
     */
    public function addToFareRestrictPref(
        \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\FareRestrictPrefAType $fareRestrictPref
    ) {
        $this->fareRestrictPref[] = $fareRestrictPref;

        return $this;
    }

    /**
     * isset fareRestrictPref
     *
     * Constrains a fare search to those with restrictions that satisfy user-imposed
     * limitations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareRestrictPref($index)
    {
        return isset($this->fareRestrictPref[$index]);
    }

    /**
     * unset fareRestrictPref
     *
     * Constrains a fare search to those with restrictions that satisfy user-imposed
     * limitations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareRestrictPref($index)
    {
        unset($this->fareRestrictPref[$index]);
    }

    /**
     * Gets as fareRestrictPref
     *
     * Constrains a fare search to those with restrictions that satisfy user-imposed
     * limitations.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\FareRestrictPrefAType[]
     */
    public function getFareRestrictPref()
    {
        return $this->fareRestrictPref;
    }

    /**
     * Sets a new fareRestrictPref
     *
     * Constrains a fare search to those with restrictions that satisfy user-imposed
     * limitations.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\FareRestrictPrefAType[]
     * $fareRestrictPref
     * @return self
     */
    public function setFareRestrictPref(array $fareRestrictPref)
    {
        $this->fareRestrictPref = $fareRestrictPref;

        return $this;
    }

    /**
     * Adds as equipPref
     *
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EquipmentTypePrefType $equipPref
     */
    public function addToEquipPref(\Davispeixoto\OpenTravelAlliance\EquipmentTypePrefType $equipPref)
    {
        $this->equipPref[] = $equipPref;

        return $this;
    }

    /**
     * isset equipPref
     *
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEquipPref($index)
    {
        return isset($this->equipPref[$index]);
    }

    /**
     * unset equipPref
     *
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEquipPref($index)
    {
        unset($this->equipPref[$index]);
    }

    /**
     * Gets as equipPref
     *
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EquipmentTypePrefType[]
     */
    public function getEquipPref()
    {
        return $this->equipPref;
    }

    /**
     * Sets a new equipPref
     *
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EquipmentTypePrefType[] $equipPref
     * @return self
     */
    public function setEquipPref(array $equipPref)
    {
        $this->equipPref = $equipPref;

        return $this;
    }

    /**
     * Adds as cabinPref
     *
     * Defines preferred cabin(s) to be used in a search.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\CabinPrefAType
     * $cabinPref
     */
    public function addToCabinPref(\Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\CabinPrefAType $cabinPref)
    {
        $this->cabinPref[] = $cabinPref;

        return $this;
    }

    /**
     * isset cabinPref
     *
     * Defines preferred cabin(s) to be used in a search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinPref($index)
    {
        return isset($this->cabinPref[$index]);
    }

    /**
     * unset cabinPref
     *
     * Defines preferred cabin(s) to be used in a search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinPref($index)
    {
        unset($this->cabinPref[$index]);
    }

    /**
     * Gets as cabinPref
     *
     * Defines preferred cabin(s) to be used in a search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\CabinPrefAType[]
     */
    public function getCabinPref()
    {
        return $this->cabinPref;
    }

    /**
     * Sets a new cabinPref
     *
     * Defines preferred cabin(s) to be used in a search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\CabinPrefAType[]
     * $cabinPref
     * @return self
     */
    public function setCabinPref(array $cabinPref)
    {
        $this->cabinPref = $cabinPref;

        return $this;
    }

    /**
     * Adds as ticketDistribPref
     *
     * Defines Distribution prefernces.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\TicketDistribPrefAType
     * $ticketDistribPref
     */
    public function addToTicketDistribPref(
        \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\TicketDistribPrefAType $ticketDistribPref
    ) {
        $this->ticketDistribPref[] = $ticketDistribPref;

        return $this;
    }

    /**
     * isset ticketDistribPref
     *
     * Defines Distribution prefernces.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketDistribPref($index)
    {
        return isset($this->ticketDistribPref[$index]);
    }

    /**
     * unset ticketDistribPref
     *
     * Defines Distribution prefernces.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketDistribPref($index)
    {
        unset($this->ticketDistribPref[$index]);
    }

    /**
     * Gets as ticketDistribPref
     *
     * Defines Distribution prefernces.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\TicketDistribPrefAType[]
     */
    public function getTicketDistribPref()
    {
        return $this->ticketDistribPref;
    }

    /**
     * Sets a new ticketDistribPref
     *
     * Defines Distribution prefernces.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\TicketDistribPrefAType[]
     * $ticketDistribPref
     * @return self
     */
    public function setTicketDistribPref(array $ticketDistribPref)
    {
        $this->ticketDistribPref = $ticketDistribPref;

        return $this;
    }

    /**
     * Gets as bookingSeatPref
     *
     * The booking class seat preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\BookingSeatPrefAType
     */
    public function getBookingSeatPref()
    {
        return $this->bookingSeatPref;
    }

    /**
     * Sets a new bookingSeatPref
     *
     * The booking class seat preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\BookingSeatPrefAType
     * $bookingSeatPref
     * @return self
     */
    public function setBookingSeatPref(
        \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType\BookingSeatPrefAType $bookingSeatPref
    ) {
        $this->bookingSeatPref = $bookingSeatPref;

        return $this;
    }


}


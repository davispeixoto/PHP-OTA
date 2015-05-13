<?php

namespace Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType;

/**
 * Class representing PackageReservationAType
 *
 * The supplier's code to identify the travel arrangement for the package.
 */
class PackageReservationAType
{

    /**
     * The supplier's code to identify the travel arrangement for the package.
     *
     * @property string $travelCode
     */
    private $travelCode = null;

    /**
     * The supplier's code to identify the accommodation/tour arrangement for a
     * package.
     *
     * @property string $tourCode
     */
    private $tourCode = null;

    /**
     * A code identifying a complete package arrangement, replacing individual travel
     * and accommodation codes.
     *
     * @property string $packageID
     */
    private $packageID = null;

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
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Refer to OpenTravel Code List Status (STS).
     *
     * @property string $reservationStatusCode
     */
    private $reservationStatusCode = null;

    /**
     * This defines the status of the reservation.
     *
     * @property string $reservationStatus
     */
    private $reservationStatus = null;

    /**
     * The package booking reference.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * The surname, initial, and title of the passenger.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     */
    private $name = null;

    /**
     * The code for the final destination - normally an IATA code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalLocation
     */
    private $arrivalLocation = null;

    /**
     * The code for the traveller's departure point - normally an IATA code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureLocation
     */
    private $departureLocation = null;

    /**
     * Gets as travelCode
     *
     * The supplier's code to identify the travel arrangement for the package.
     *
     * @return string
     */
    public function getTravelCode()
    {
        return $this->travelCode;
    }

    /**
     * Sets a new travelCode
     *
     * The supplier's code to identify the travel arrangement for the package.
     *
     * @param string $travelCode
     * @return self
     */
    public function setTravelCode($travelCode)
    {
        $this->travelCode = $travelCode;

        return $this;
    }

    /**
     * Gets as tourCode
     *
     * The supplier's code to identify the accommodation/tour arrangement for a
     * package.
     *
     * @return string
     */
    public function getTourCode()
    {
        return $this->tourCode;
    }

    /**
     * Sets a new tourCode
     *
     * The supplier's code to identify the accommodation/tour arrangement for a
     * package.
     *
     * @param string $tourCode
     * @return self
     */
    public function setTourCode($tourCode)
    {
        $this->tourCode = $tourCode;

        return $this;
    }

    /**
     * Gets as packageID
     *
     * A code identifying a complete package arrangement, replacing individual travel
     * and accommodation codes.
     *
     * @return string
     */
    public function getPackageID()
    {
        return $this->packageID;
    }

    /**
     * Sets a new packageID
     *
     * A code identifying a complete package arrangement, replacing individual travel
     * and accommodation codes.
     *
     * @param string $packageID
     * @return self
     */
    public function setPackageID($packageID)
    {
        $this->packageID = $packageID;

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
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as reservationStatusCode
     *
     * Refer to OpenTravel Code List Status (STS).
     *
     * @return string
     */
    public function getReservationStatusCode()
    {
        return $this->reservationStatusCode;
    }

    /**
     * Sets a new reservationStatusCode
     *
     * Refer to OpenTravel Code List Status (STS).
     *
     * @param string $reservationStatusCode
     * @return self
     */
    public function setReservationStatusCode($reservationStatusCode)
    {
        $this->reservationStatusCode = $reservationStatusCode;

        return $this;
    }

    /**
     * Gets as reservationStatus
     *
     * This defines the status of the reservation.
     *
     * @return string
     */
    public function getReservationStatus()
    {
        return $this->reservationStatus;
    }

    /**
     * Sets a new reservationStatus
     *
     * This defines the status of the reservation.
     *
     * @param string $reservationStatus
     * @return self
     */
    public function setReservationStatus($reservationStatus)
    {
        $this->reservationStatus = $reservationStatus;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The package booking reference.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The package booking reference.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as name
     *
     * The surname, initial, and title of the passenger.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The surname, initial, and title of the passenger.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     * @return self
     */
    public function setName(\Davispeixoto\OpenTravelAlliance\PersonNameType $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as arrivalLocation
     *
     * The code for the final destination - normally an IATA code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getArrivalLocation()
    {
        return $this->arrivalLocation;
    }

    /**
     * Sets a new arrivalLocation
     *
     * The code for the final destination - normally an IATA code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $arrivalLocation
     * @return self
     */
    public function setArrivalLocation(\Davispeixoto\OpenTravelAlliance\LocationType $arrivalLocation)
    {
        $this->arrivalLocation = $arrivalLocation;

        return $this;
    }

    /**
     * Gets as departureLocation
     *
     * The code for the traveller's departure point - normally an IATA code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDepartureLocation()
    {
        return $this->departureLocation;
    }

    /**
     * Sets a new departureLocation
     *
     * The code for the traveller's departure point - normally an IATA code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $departureLocation
     * @return self
     */
    public function setDepartureLocation(\Davispeixoto\OpenTravelAlliance\LocationType $departureLocation)
    {
        $this->departureLocation = $departureLocation;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\MultiModalOfferType;

/**
 * Class representing TripCharacteristicsAType
 */
class TripCharacteristicsAType
{

    /**
     * Requestor trip mode.Example: FlightNote: This is the trip mode that has been
     * accommodated by the offer requestor, e.g. the mode that serves as the basis for
     * all information in this subsequent offer request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyTripModeType $mode
     */
    private $mode = null;

    /**
     * Reservation booking method.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyBookingMethodType
     * $bookingMethod
     */
    private $bookingMethod = null;

    /**
     * Trip mode time period.Note: This data is for informational use only as is
     * assumed that traveler(s) are already engaged during this time period.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\DateTimeDurationAType
     * $dateTimeDuration
     */
    private $dateTimeDuration = null;

    /**
     * Location(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\LocationAType[]
     * $location
     */
    private $location = null;

    /**
     * Price and payment details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyPaymentType $priceAndPayment
     */
    private $priceAndPayment = null;

    /**
     * Reservation status.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyReservationStatusType
     * $reservationStatus
     */
    private $reservationStatus = null;

    /**
     * Baggage.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\BaggageAType
     * $baggage
     */
    private $baggage = null;

    /**
     * Pets and service animals.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\AnimalsAType
     * $animals
     */
    private $animals = null;

    /**
     * Activity related trip mode information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyActivityType $activity
     */
    private $activity = null;

    /**
     * Lodging related trip mode information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\LodgingAType
     * $lodging
     */
    private $lodging = null;

    /**
     * Transportation trip mode information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyTransportationType
     * $transportation
     */
    private $transportation = null;

    /**
     * Offer requestor assessed trip value.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyValueType $tripValue
     */
    private $tripValue = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as mode
     *
     * Requestor trip mode.Example: FlightNote: This is the trip mode that has been
     * accommodated by the offer requestor, e.g. the mode that serves as the basis for
     * all information in this subsequent offer request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyTripModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Requestor trip mode.Example: FlightNote: This is the trip mode that has been
     * accommodated by the offer requestor, e.g. the mode that serves as the basis for
     * all information in this subsequent offer request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyTripModeType $mode
     * @return self
     */
    public function setMode(\Davispeixoto\OpenTravelAlliance\OntologyTripModeType $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Gets as bookingMethod
     *
     * Reservation booking method.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyBookingMethodType
     */
    public function getBookingMethod()
    {
        return $this->bookingMethod;
    }

    /**
     * Sets a new bookingMethod
     *
     * Reservation booking method.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyBookingMethodType $bookingMethod
     * @return self
     */
    public function setBookingMethod(\Davispeixoto\OpenTravelAlliance\OntologyBookingMethodType $bookingMethod)
    {
        $this->bookingMethod = $bookingMethod;

        return $this;
    }

    /**
     * Gets as dateTimeDuration
     *
     * Trip mode time period.Note: This data is for informational use only as is
     * assumed that traveler(s) are already engaged during this time period.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\DateTimeDurationAType
     */
    public function getDateTimeDuration()
    {
        return $this->dateTimeDuration;
    }

    /**
     * Sets a new dateTimeDuration
     *
     * Trip mode time period.Note: This data is for informational use only as is
     * assumed that traveler(s) are already engaged during this time period.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\DateTimeDurationAType
     * $dateTimeDuration
     * @return self
     */
    public function setDateTimeDuration(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\DateTimeDurationAType $dateTimeDuration
    ) {
        $this->dateTimeDuration = $dateTimeDuration;

        return $this;
    }

    /**
     * Adds as location
     *
     * Location(s).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\LocationAType
     * $location
     */
    public function addToLocation(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\LocationAType $location
    ) {
        $this->location[] = $location;

        return $this;
    }

    /**
     * isset location
     *
     * Location(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * Location(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * Location(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\LocationAType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Location(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\LocationAType[]
     * $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Gets as priceAndPayment
     *
     * Price and payment details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyPaymentType
     */
    public function getPriceAndPayment()
    {
        return $this->priceAndPayment;
    }

    /**
     * Sets a new priceAndPayment
     *
     * Price and payment details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyPaymentType $priceAndPayment
     * @return self
     */
    public function setPriceAndPayment(\Davispeixoto\OpenTravelAlliance\OntologyPaymentType $priceAndPayment)
    {
        $this->priceAndPayment = $priceAndPayment;

        return $this;
    }

    /**
     * Gets as reservationStatus
     *
     * Reservation status.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyReservationStatusType
     */
    public function getReservationStatus()
    {
        return $this->reservationStatus;
    }

    /**
     * Sets a new reservationStatus
     *
     * Reservation status.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyReservationStatusType
     * $reservationStatus
     * @return self
     */
    public function setReservationStatus(
        \Davispeixoto\OpenTravelAlliance\OntologyReservationStatusType $reservationStatus
    ) {
        $this->reservationStatus = $reservationStatus;

        return $this;
    }

    /**
     * Gets as baggage
     *
     * Baggage.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\BaggageAType
     */
    public function getBaggage()
    {
        return $this->baggage;
    }

    /**
     * Sets a new baggage
     *
     * Baggage.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\BaggageAType
     * $baggage
     * @return self
     */
    public function setBaggage(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\BaggageAType $baggage
    ) {
        $this->baggage = $baggage;

        return $this;
    }

    /**
     * Gets as animals
     *
     * Pets and service animals.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\AnimalsAType
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * Sets a new animals
     *
     * Pets and service animals.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\AnimalsAType
     * $animals
     * @return self
     */
    public function setAnimals(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\AnimalsAType $animals
    ) {
        $this->animals = $animals;

        return $this;
    }

    /**
     * Gets as activity
     *
     * Activity related trip mode information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyActivityType
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * Activity related trip mode information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyActivityType $activity
     * @return self
     */
    public function setActivity(\Davispeixoto\OpenTravelAlliance\OntologyActivityType $activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Gets as lodging
     *
     * Lodging related trip mode information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\LodgingAType
     */
    public function getLodging()
    {
        return $this->lodging;
    }

    /**
     * Sets a new lodging
     *
     * Lodging related trip mode information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\LodgingAType
     * $lodging
     * @return self
     */
    public function setLodging(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TripCharacteristicsAType\LodgingAType $lodging
    ) {
        $this->lodging = $lodging;

        return $this;
    }

    /**
     * Gets as transportation
     *
     * Transportation trip mode information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyTransportationType
     */
    public function getTransportation()
    {
        return $this->transportation;
    }

    /**
     * Sets a new transportation
     *
     * Transportation trip mode information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyTransportationType
     * $transportation
     * @return self
     */
    public function setTransportation(\Davispeixoto\OpenTravelAlliance\OntologyTransportationType $transportation)
    {
        $this->transportation = $transportation;

        return $this;
    }

    /**
     * Gets as tripValue
     *
     * Offer requestor assessed trip value.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyValueType
     */
    public function getTripValue()
    {
        return $this->tripValue;
    }

    /**
     * Sets a new tripValue
     *
     * Offer requestor assessed trip value.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyValueType $tripValue
     * @return self
     */
    public function setTripValue(\Davispeixoto\OpenTravelAlliance\OntologyValueType $tripValue)
    {
        $this->tripValue = $tripValue;

        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(\Davispeixoto\OpenTravelAlliance\OntologyExtension $ontologyExtension)
    {
        $this->ontologyExtension = $ontologyExtension;

        return $this;
    }


}


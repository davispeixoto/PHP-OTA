<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ItineraryItemResponseType
 *
 * Response data for any valid item of inventory.
 * XSD Type: ItineraryItemResponseType
 */
class ItineraryItemResponseType
{

    /**
     * The position of this item in the package itinerary.
     *
     * @property integer $itinerarySequence
     */
    private $itinerarySequence = null;

    /**
     * The position of this item in the package in time sequence. Note: it is possible
     * for more than one inventory item to have the same ChronologicalSequence value
     * e.g. Car Hire and Hotel Stay.
     *
     * @property integer $chronologicalSequence
     */
    private $chronologicalSequence = null;

    /**
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Defines an accommodation component of a package holiday.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType
     * $accommodation
     */
    private $accommodation = null;

    /**
     * Details of a flight item required in the package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentType $flight
     */
    private $flight = null;

    /**
     * Details of a rental car included in the package.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\RentalCarAType
     * $rentalCar
     */
    private $rentalCar = null;

    /**
     * Gets as itinerarySequence
     *
     * The position of this item in the package itinerary.
     *
     * @return integer
     */
    public function getItinerarySequence()
    {
        return $this->itinerarySequence;
    }

    /**
     * Sets a new itinerarySequence
     *
     * The position of this item in the package itinerary.
     *
     * @param integer $itinerarySequence
     * @return self
     */
    public function setItinerarySequence($itinerarySequence)
    {
        $this->itinerarySequence = $itinerarySequence;

        return $this;
    }

    /**
     * Gets as chronologicalSequence
     *
     * The position of this item in the package in time sequence. Note: it is possible
     * for more than one inventory item to have the same ChronologicalSequence value
     * e.g. Car Hire and Hotel Stay.
     *
     * @return integer
     */
    public function getChronologicalSequence()
    {
        return $this->chronologicalSequence;
    }

    /**
     * Sets a new chronologicalSequence
     *
     * The position of this item in the package in time sequence. Note: it is possible
     * for more than one inventory item to have the same ChronologicalSequence value
     * e.g. Car Hire and Hotel Stay.
     *
     * @param integer $chronologicalSequence
     * @return self
     */
    public function setChronologicalSequence($chronologicalSequence)
    {
        $this->chronologicalSequence = $chronologicalSequence;

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
     * Gets as accommodation
     *
     * Defines an accommodation component of a package holiday.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Sets a new accommodation
     *
     * Defines an accommodation component of a package holiday.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType
     * $accommodation
     * @return self
     */
    public function setAccommodation(
        \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType $accommodation
    ) {
        $this->accommodation = $accommodation;

        return $this;
    }

    /**
     * Gets as flight
     *
     * Details of a flight item required in the package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentType
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Sets a new flight
     *
     * Details of a flight item required in the package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgFlightSegmentType $flight
     * @return self
     */
    public function setFlight(\Davispeixoto\OpenTravelAlliance\PkgFlightSegmentType $flight)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Gets as rentalCar
     *
     * Details of a rental car included in the package.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\RentalCarAType
     */
    public function getRentalCar()
    {
        return $this->rentalCar;
    }

    /**
     * Sets a new rentalCar
     *
     * Details of a rental car included in the package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\RentalCarAType
     * $rentalCar
     * @return self
     */
    public function setRentalCar(\Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\RentalCarAType $rentalCar)
    {
        $this->rentalCar = $rentalCar;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ItineraryItemRequestType
 *
 * Request data for any valid item of inventory.
 * XSD Type: ItineraryItemRequestType
 */
class ItineraryItemRequestType
{

    /**
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Details of an accommodation item required in the package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationSegmentRequestType
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
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType\RentalCarAType
     * $rentalCar
     */
    private $rentalCar = null;

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
     * Details of an accommodation item required in the package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationSegmentRequestType
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Sets a new accommodation
     *
     * Details of an accommodation item required in the package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationSegmentRequestType
     * $accommodation
     * @return self
     */
    public function setAccommodation(\Davispeixoto\OpenTravelAlliance\AccommodationSegmentRequestType $accommodation)
    {
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
     * @return \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType\RentalCarAType
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
     * @param \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType\RentalCarAType
     * $rentalCar
     * @return self
     */
    public function setRentalCar(\Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType\RentalCarAType $rentalCar)
    {
        $this->rentalCar = $rentalCar;

        return $this;
    }


}


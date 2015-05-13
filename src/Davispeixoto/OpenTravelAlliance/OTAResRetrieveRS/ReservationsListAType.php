<?php

namespace Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS;

/**
 * Class representing ReservationsListAType
 */
class ReservationsListAType
{

    /**
     * One line in a list of airline reservations.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\AirReservationAType[]
     * $airReservation
     */
    private $airReservation = null;

    /**
     * One line in a list of hotel reservations. It may contain the reservation id,
     * booked date, arrival and departure dates, number of nights and rooms, hotel
     * info, guest info, and room info.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelReservationType[]
     * $hotelReservation
     */
    private $hotelReservation = null;

    /**
     * One line in a list of package reservations. It contains the reservation id,
     * departure date and point, destination point, duration, tour and travel codes,
     * flight code, passenger name and number of passengers, and booking status.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\PackageReservationAType[]
     * $packageReservation
     */
    private $packageReservation = null;

    /**
     * One line in a list of golf reservations. It contains the reservation id's, golf
     * facility and round id, date and time of play, package id, membership info, and
     * golfer name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GolfReservationAType[]
     * $golfReservation
     */
    private $golfReservation = null;

    /**
     * One line in a list of vehicle reservations. It contains the pickup and return
     * dates, confirmation number, pickup and return locations, customer name, and
     * vehicle information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType[]
     * $vehicleReservation
     */
    private $vehicleReservation = null;

    /**
     * One line in a list of reservations from a global distribution system. It may
     * contain the booking reference, the person name, start date, and an itinerary
     * name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GlobalReservationAType[]
     * $globalReservation
     */
    private $globalReservation = null;

    /**
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CruiseReservationType[]
     * $cruiseReservation
     */
    private $cruiseReservation = null;

    /**
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType[]
     * $railReservation
     */
    private $railReservation = null;

    /**
     * Adds as airReservation
     *
     * One line in a list of airline reservations.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\AirReservationAType
     * $airReservation
     */
    public function addToAirReservation(
        \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\AirReservationAType $airReservation
    ) {
        $this->airReservation[] = $airReservation;

        return $this;
    }

    /**
     * isset airReservation
     *
     * One line in a list of airline reservations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirReservation($index)
    {
        return isset($this->airReservation[$index]);
    }

    /**
     * unset airReservation
     *
     * One line in a list of airline reservations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirReservation($index)
    {
        unset($this->airReservation[$index]);
    }

    /**
     * Gets as airReservation
     *
     * One line in a list of airline reservations.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\AirReservationAType[]
     */
    public function getAirReservation()
    {
        return $this->airReservation;
    }

    /**
     * Sets a new airReservation
     *
     * One line in a list of airline reservations.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\AirReservationAType[]
     * $airReservation
     * @return self
     */
    public function setAirReservation(array $airReservation)
    {
        $this->airReservation = $airReservation;

        return $this;
    }

    /**
     * Adds as hotelReservation
     *
     * One line in a list of hotel reservations. It may contain the reservation id,
     * booked date, arrival and departure dates, number of nights and rooms, hotel
     * info, guest info, and room info.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelReservationType $hotelReservation
     */
    public function addToHotelReservation(\Davispeixoto\OpenTravelAlliance\HotelReservationType $hotelReservation)
    {
        $this->hotelReservation[] = $hotelReservation;

        return $this;
    }

    /**
     * isset hotelReservation
     *
     * One line in a list of hotel reservations. It may contain the reservation id,
     * booked date, arrival and departure dates, number of nights and rooms, hotel
     * info, guest info, and room info.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelReservation($index)
    {
        return isset($this->hotelReservation[$index]);
    }

    /**
     * unset hotelReservation
     *
     * One line in a list of hotel reservations. It may contain the reservation id,
     * booked date, arrival and departure dates, number of nights and rooms, hotel
     * info, guest info, and room info.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelReservation($index)
    {
        unset($this->hotelReservation[$index]);
    }

    /**
     * Gets as hotelReservation
     *
     * One line in a list of hotel reservations. It may contain the reservation id,
     * booked date, arrival and departure dates, number of nights and rooms, hotel
     * info, guest info, and room info.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelReservationType[]
     */
    public function getHotelReservation()
    {
        return $this->hotelReservation;
    }

    /**
     * Sets a new hotelReservation
     *
     * One line in a list of hotel reservations. It may contain the reservation id,
     * booked date, arrival and departure dates, number of nights and rooms, hotel
     * info, guest info, and room info.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelReservationType[] $hotelReservation
     * @return self
     */
    public function setHotelReservation(array $hotelReservation)
    {
        $this->hotelReservation = $hotelReservation;

        return $this;
    }

    /**
     * Adds as packageReservation
     *
     * One line in a list of package reservations. It contains the reservation id,
     * departure date and point, destination point, duration, tour and travel codes,
     * flight code, passenger name and number of passengers, and booking status.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\PackageReservationAType
     * $packageReservation
     */
    public function addToPackageReservation(
        \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\PackageReservationAType $packageReservation
    ) {
        $this->packageReservation[] = $packageReservation;

        return $this;
    }

    /**
     * isset packageReservation
     *
     * One line in a list of package reservations. It contains the reservation id,
     * departure date and point, destination point, duration, tour and travel codes,
     * flight code, passenger name and number of passengers, and booking status.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPackageReservation($index)
    {
        return isset($this->packageReservation[$index]);
    }

    /**
     * unset packageReservation
     *
     * One line in a list of package reservations. It contains the reservation id,
     * departure date and point, destination point, duration, tour and travel codes,
     * flight code, passenger name and number of passengers, and booking status.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPackageReservation($index)
    {
        unset($this->packageReservation[$index]);
    }

    /**
     * Gets as packageReservation
     *
     * One line in a list of package reservations. It contains the reservation id,
     * departure date and point, destination point, duration, tour and travel codes,
     * flight code, passenger name and number of passengers, and booking status.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\PackageReservationAType[]
     */
    public function getPackageReservation()
    {
        return $this->packageReservation;
    }

    /**
     * Sets a new packageReservation
     *
     * One line in a list of package reservations. It contains the reservation id,
     * departure date and point, destination point, duration, tour and travel codes,
     * flight code, passenger name and number of passengers, and booking status.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\PackageReservationAType[]
     * $packageReservation
     * @return self
     */
    public function setPackageReservation(array $packageReservation)
    {
        $this->packageReservation = $packageReservation;

        return $this;
    }

    /**
     * Adds as golfReservation
     *
     * One line in a list of golf reservations. It contains the reservation id's, golf
     * facility and round id, date and time of play, package id, membership info, and
     * golfer name.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GolfReservationAType
     * $golfReservation
     */
    public function addToGolfReservation(
        \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GolfReservationAType $golfReservation
    ) {
        $this->golfReservation[] = $golfReservation;

        return $this;
    }

    /**
     * isset golfReservation
     *
     * One line in a list of golf reservations. It contains the reservation id's, golf
     * facility and round id, date and time of play, package id, membership info, and
     * golfer name.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGolfReservation($index)
    {
        return isset($this->golfReservation[$index]);
    }

    /**
     * unset golfReservation
     *
     * One line in a list of golf reservations. It contains the reservation id's, golf
     * facility and round id, date and time of play, package id, membership info, and
     * golfer name.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGolfReservation($index)
    {
        unset($this->golfReservation[$index]);
    }

    /**
     * Gets as golfReservation
     *
     * One line in a list of golf reservations. It contains the reservation id's, golf
     * facility and round id, date and time of play, package id, membership info, and
     * golfer name.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GolfReservationAType[]
     */
    public function getGolfReservation()
    {
        return $this->golfReservation;
    }

    /**
     * Sets a new golfReservation
     *
     * One line in a list of golf reservations. It contains the reservation id's, golf
     * facility and round id, date and time of play, package id, membership info, and
     * golfer name.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GolfReservationAType[]
     * $golfReservation
     * @return self
     */
    public function setGolfReservation(array $golfReservation)
    {
        $this->golfReservation = $golfReservation;

        return $this;
    }

    /**
     * Adds as vehResSummary
     *
     * One line in a list of vehicle reservations. It contains the pickup and return
     * dates, confirmation number, pickup and return locations, customer name, and
     * vehicle information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType
     * $vehResSummary
     */
    public function addToVehicleReservation(
        \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType $vehResSummary
    ) {
        $this->vehicleReservation[] = $vehResSummary;

        return $this;
    }

    /**
     * isset vehicleReservation
     *
     * One line in a list of vehicle reservations. It contains the pickup and return
     * dates, confirmation number, pickup and return locations, customer name, and
     * vehicle information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicleReservation($index)
    {
        return isset($this->vehicleReservation[$index]);
    }

    /**
     * unset vehicleReservation
     *
     * One line in a list of vehicle reservations. It contains the pickup and return
     * dates, confirmation number, pickup and return locations, customer name, and
     * vehicle information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicleReservation($index)
    {
        unset($this->vehicleReservation[$index]);
    }

    /**
     * Gets as vehicleReservation
     *
     * One line in a list of vehicle reservations. It contains the pickup and return
     * dates, confirmation number, pickup and return locations, customer name, and
     * vehicle information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType[]
     */
    public function getVehicleReservation()
    {
        return $this->vehicleReservation;
    }

    /**
     * Sets a new vehicleReservation
     *
     * One line in a list of vehicle reservations. It contains the pickup and return
     * dates, confirmation number, pickup and return locations, customer name, and
     * vehicle information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleReservationSummaryType[]
     * $vehicleReservation
     * @return self
     */
    public function setVehicleReservation(array $vehicleReservation)
    {
        $this->vehicleReservation = $vehicleReservation;

        return $this;
    }

    /**
     * Adds as globalReservation
     *
     * One line in a list of reservations from a global distribution system. It may
     * contain the booking reference, the person name, start date, and an itinerary
     * name.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GlobalReservationAType
     * $globalReservation
     */
    public function addToGlobalReservation(
        \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GlobalReservationAType $globalReservation
    ) {
        $this->globalReservation[] = $globalReservation;

        return $this;
    }

    /**
     * isset globalReservation
     *
     * One line in a list of reservations from a global distribution system. It may
     * contain the booking reference, the person name, start date, and an itinerary
     * name.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGlobalReservation($index)
    {
        return isset($this->globalReservation[$index]);
    }

    /**
     * unset globalReservation
     *
     * One line in a list of reservations from a global distribution system. It may
     * contain the booking reference, the person name, start date, and an itinerary
     * name.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGlobalReservation($index)
    {
        unset($this->globalReservation[$index]);
    }

    /**
     * Gets as globalReservation
     *
     * One line in a list of reservations from a global distribution system. It may
     * contain the booking reference, the person name, start date, and an itinerary
     * name.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GlobalReservationAType[]
     */
    public function getGlobalReservation()
    {
        return $this->globalReservation;
    }

    /**
     * Sets a new globalReservation
     *
     * One line in a list of reservations from a global distribution system. It may
     * contain the booking reference, the person name, start date, and an itinerary
     * name.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GlobalReservationAType[]
     * $globalReservation
     * @return self
     */
    public function setGlobalReservation(array $globalReservation)
    {
        $this->globalReservation = $globalReservation;

        return $this;
    }

    /**
     * Adds as cruiseReservation
     *
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CruiseReservationType $cruiseReservation
     */
    public function addToCruiseReservation(\Davispeixoto\OpenTravelAlliance\CruiseReservationType $cruiseReservation)
    {
        $this->cruiseReservation[] = $cruiseReservation;

        return $this;
    }

    /**
     * isset cruiseReservation
     *
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCruiseReservation($index)
    {
        return isset($this->cruiseReservation[$index]);
    }

    /**
     * unset cruiseReservation
     *
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCruiseReservation($index)
    {
        unset($this->cruiseReservation[$index]);
    }

    /**
     * Gets as cruiseReservation
     *
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CruiseReservationType[]
     */
    public function getCruiseReservation()
    {
        return $this->cruiseReservation;
    }

    /**
     * Sets a new cruiseReservation
     *
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruiseReservationType[]
     * $cruiseReservation
     * @return self
     */
    public function setCruiseReservation(array $cruiseReservation)
    {
        $this->cruiseReservation = $cruiseReservation;

        return $this;
    }

    /**
     * Adds as railReservation
     *
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType
     * $railReservation
     */
    public function addToRailReservation(\Davispeixoto\OpenTravelAlliance\RailReservationSummaryType $railReservation)
    {
        $this->railReservation[] = $railReservation;

        return $this;
    }

    /**
     * isset railReservation
     *
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRailReservation($index)
    {
        return isset($this->railReservation[$index]);
    }

    /**
     * unset railReservation
     *
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRailReservation($index)
    {
        unset($this->railReservation[$index]);
    }

    /**
     * Gets as railReservation
     *
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType[]
     */
    public function getRailReservation()
    {
        return $this->railReservation;
    }

    /**
     * Sets a new railReservation
     *
     * Retrieves either a single booking or a list of bookings matching the specified
     * criteria.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType[]
     * $railReservation
     * @return self
     */
    public function setRailReservation(array $railReservation)
    {
        $this->railReservation = $railReservation;

        return $this;
    }


}


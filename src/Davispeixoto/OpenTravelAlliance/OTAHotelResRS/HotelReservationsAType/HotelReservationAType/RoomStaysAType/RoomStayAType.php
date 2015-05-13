<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType;

/**
 * Class representing RoomStayAType
 */
class RoomStayAType
{

    /**
     * A collection of room types associated with this reservation.The RoomType element
     * is used to contain all the room type information for a single RateType Code (ex
     * A1K) for a given date range.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType[]
     * $roomTypes
     */
    private $roomTypes = null;

    /**
     * A collection of Rate Plans associated with a particular reservation.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType[]
     * $ratePlans
     */
    private $ratePlans = null;

    /**
     * A collection of Room Rates associated with a particular reservation.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     * $roomRates
     */
    private $roomRates = null;

    /**
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     */
    private $guestCounts = null;

    /**
     * BasicPropertyInfo MUST identify the property for this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\BasicPropertyInfoAType
     * $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Adds as roomType
     *
     * A collection of room types associated with this reservation.The RoomType element
     * is used to contain all the room type information for a single RateType Code (ex
     * A1K) for a given date range.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType
     * $roomType
     */
    public function addToRoomTypes(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType $roomType
    ) {
        $this->roomTypes[] = $roomType;

        return $this;
    }

    /**
     * isset roomTypes
     *
     * A collection of room types associated with this reservation.The RoomType element
     * is used to contain all the room type information for a single RateType Code (ex
     * A1K) for a given date range.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomTypes($index)
    {
        return isset($this->roomTypes[$index]);
    }

    /**
     * unset roomTypes
     *
     * A collection of room types associated with this reservation.The RoomType element
     * is used to contain all the room type information for a single RateType Code (ex
     * A1K) for a given date range.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomTypes($index)
    {
        unset($this->roomTypes[$index]);
    }

    /**
     * Gets as roomTypes
     *
     * A collection of room types associated with this reservation.The RoomType element
     * is used to contain all the room type information for a single RateType Code (ex
     * A1K) for a given date range.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * A collection of room types associated with this reservation.The RoomType element
     * is used to contain all the room type information for a single RateType Code (ex
     * A1K) for a given date range.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType[]
     * $roomTypes
     * @return self
     */
    public function setRoomTypes(array $roomTypes)
    {
        $this->roomTypes = $roomTypes;

        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * A collection of Rate Plans associated with a particular reservation.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType
     * $ratePlan
     */
    public function addToRatePlans(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType $ratePlan
    ) {
        $this->ratePlans[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlans
     *
     * A collection of Rate Plans associated with a particular reservation.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlans($index)
    {
        return isset($this->ratePlans[$index]);
    }

    /**
     * unset ratePlans
     *
     * A collection of Rate Plans associated with a particular reservation.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlans($index)
    {
        unset($this->ratePlans[$index]);
    }

    /**
     * Gets as ratePlans
     *
     * A collection of Rate Plans associated with a particular reservation.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * A collection of Rate Plans associated with a particular reservation.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType[]
     * $ratePlans
     * @return self
     */
    public function setRatePlans(array $ratePlans)
    {
        $this->ratePlans = $ratePlans;

        return $this;
    }

    /**
     * Adds as roomRate
     *
     * A collection of Room Rates associated with a particular reservation.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType
     * $roomRate
     */
    public function addToRoomRates(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType $roomRate
    ) {
        $this->roomRates[] = $roomRate;

        return $this;
    }

    /**
     * isset roomRates
     *
     * A collection of Room Rates associated with a particular reservation.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomRates($index)
    {
        return isset($this->roomRates[$index]);
    }

    /**
     * unset roomRates
     *
     * A collection of Room Rates associated with a particular reservation.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomRates($index)
    {
        unset($this->roomRates[$index]);
    }

    /**
     * Gets as roomRates
     *
     * A collection of Room Rates associated with a particular reservation.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     */
    public function getRoomRates()
    {
        return $this->roomRates;
    }

    /**
     * Sets a new roomRates
     *
     * A collection of Room Rates associated with a particular reservation.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     * $roomRates
     * @return self
     */
    public function setRoomRates(array $roomRates)
    {
        $this->roomRates = $roomRates;

        return $this;
    }

    /**
     * Adds as guestCount
     *
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the reservation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCounts(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\GuestCountsAType\GuestCountAType $guestCount
    ) {
        $this->guestCounts[] = $guestCount;

        return $this;
    }

    /**
     * isset guestCounts
     *
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestCounts($index)
    {
        return isset($this->guestCounts[$index]);
    }

    /**
     * unset guestCounts
     *
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestCounts($index)
    {
        unset($this->guestCounts[$index]);
    }

    /**
     * Gets as guestCounts
     *
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     * @return self
     */
    public function setGuestCounts(array $guestCounts)
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }

    /**
     * Gets as basicPropertyInfo
     *
     * BasicPropertyInfo MUST identify the property for this reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\BasicPropertyInfoAType
     */
    public function getBasicPropertyInfo()
    {
        return $this->basicPropertyInfo;
    }

    /**
     * Sets a new basicPropertyInfo
     *
     * BasicPropertyInfo MUST identify the property for this reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\BasicPropertyInfoAType
     * $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\BasicPropertyInfoAType $basicPropertyInfo
    ) {
        $this->basicPropertyInfo = $basicPropertyInfo;

        return $this;
    }


}


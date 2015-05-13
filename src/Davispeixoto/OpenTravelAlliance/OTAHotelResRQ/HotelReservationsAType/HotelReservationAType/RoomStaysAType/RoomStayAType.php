<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType;

/**
 * Class representing RoomStayAType
 */
class RoomStayAType
{

    /**
     * The RoomTypes container allows for future expansion of the message. RoomType MAY
     * be sent to specify bed type and smoking preference for the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType
     * $roomTypes
     */
    private $roomTypes = null;

    /**
     * A collection of Room Rates associated with a particular Room Stay. The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     * $roomRates
     */
    private $roomRates = null;

    /**
     * GuestCounts contains a collection of GuestCount elements that MUST identify the
     * number of guests for the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     */
    private $guestCounts = null;

    /**
     * BasicPropertyInfo MUST identify the property for this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\BasicPropertyInfoAType
     * $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Gets as roomTypes
     *
     * The RoomTypes container allows for future expansion of the message. RoomType MAY
     * be sent to specify bed type and smoking preference for the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * The RoomTypes container allows for future expansion of the message. RoomType MAY
     * be sent to specify bed type and smoking preference for the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType
     * $roomTypes
     * @return self
     */
    public function setRoomTypes(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType $roomTypes
    ) {
        $this->roomTypes = $roomTypes;

        return $this;
    }

    /**
     * Adds as roomRate
     *
     * A collection of Room Rates associated with a particular Room Stay. The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType
     * $roomRate
     */
    public function addToRoomRates(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType $roomRate
    ) {
        $this->roomRates[] = $roomRate;

        return $this;
    }

    /**
     * isset roomRates
     *
     * A collection of Room Rates associated with a particular Room Stay. The
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
     * A collection of Room Rates associated with a particular Room Stay. The
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
     * A collection of Room Rates associated with a particular Room Stay. The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     */
    public function getRoomRates()
    {
        return $this->roomRates;
    }

    /**
     * Sets a new roomRates
     *
     * A collection of Room Rates associated with a particular Room Stay. The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCounts(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\GuestCountsAType\GuestCountAType $guestCount
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\GuestCountsAType\GuestCountAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\GuestCountsAType\GuestCountAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\BasicPropertyInfoAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\BasicPropertyInfoAType
     * $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\BasicPropertyInfoAType $basicPropertyInfo
    ) {
        $this->basicPropertyInfo = $basicPropertyInfo;

        return $this;
    }


}


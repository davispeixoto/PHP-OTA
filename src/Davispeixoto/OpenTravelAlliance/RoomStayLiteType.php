<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RoomStayLiteType
 *
 * Summary version of the RoomStayType, initially created for the Travel Itinerary
 * Message set.
 * XSD Type: RoomStayLiteType
 */
class RoomStayLiteType
{

    /**
     * Room type for reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomTypeLiteType[] $roomTypes
     */
    private $roomTypes = null;

    /**
     * Rate Plan info.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RatePlanLiteType[] $ratePlans
     */
    private $ratePlans = null;

    /**
     * Reservation rate(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomRateLiteType[] $roomRates
     */
    private $roomRates = null;

    /**
     * Number of guests associated with this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * Date and time of check-in and check-out.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $timeSpan
     */
    private $timeSpan = null;

    /**
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances
     * are available for use depending on the context.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuaranteeType[] $guarantee
     */
    private $guarantee = null;

    /**
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5
     * occurances are available for use depending on the context.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RequiredPaymentLiteType[]
     * $depositPayment
     */
    private $depositPayment = null;

    /**
     * Basic hotel property information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomStayLiteType\BasicPropertyInfoAType
     * $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Adds as roomType
     *
     * Room type for reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomTypeLiteType $roomType
     */
    public function addToRoomTypes(\Davispeixoto\OpenTravelAlliance\RoomTypeLiteType $roomType)
    {
        $this->roomTypes[] = $roomType;

        return $this;
    }

    /**
     * isset roomTypes
     *
     * Room type for reservation.
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
     * Room type for reservation.
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
     * Room type for reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomTypeLiteType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * Room type for reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomTypeLiteType[] $roomTypes
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
     * Rate Plan info.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RatePlanLiteType $ratePlan
     */
    public function addToRatePlans(\Davispeixoto\OpenTravelAlliance\RatePlanLiteType $ratePlan)
    {
        $this->ratePlans[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlans
     *
     * Rate Plan info.
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
     * Rate Plan info.
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
     * Rate Plan info.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RatePlanLiteType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * Rate Plan info.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RatePlanLiteType[] $ratePlans
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
     * Reservation rate(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomRateLiteType $roomRate
     */
    public function addToRoomRates(\Davispeixoto\OpenTravelAlliance\RoomRateLiteType $roomRate)
    {
        $this->roomRates[] = $roomRate;

        return $this;
    }

    /**
     * isset roomRates
     *
     * Reservation rate(s).
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
     * Reservation rate(s).
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
     * Reservation rate(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomRateLiteType[]
     */
    public function getRoomRates()
    {
        return $this->roomRates;
    }

    /**
     * Sets a new roomRates
     *
     * Reservation rate(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomRateLiteType[] $roomRates
     * @return self
     */
    public function setRoomRates(array $roomRates)
    {
        $this->roomRates = $roomRates;

        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * Number of guests associated with this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * Number of guests associated with this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(\Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts)
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }

    /**
     * Gets as timeSpan
     *
     * Date and time of check-in and check-out.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * Sets a new timeSpan
     *
     * Date and time of check-in and check-out.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $timeSpan
     * @return self
     */
    public function setTimeSpan(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $timeSpan)
    {
        $this->timeSpan = $timeSpan;

        return $this;
    }

    /**
     * Adds as guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances
     * are available for use depending on the context.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GuaranteeType $guarantee
     */
    public function addToGuarantee(\Davispeixoto\OpenTravelAlliance\GuaranteeType $guarantee)
    {
        $this->guarantee[] = $guarantee;

        return $this;
    }

    /**
     * isset guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances
     * are available for use depending on the context.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuarantee($index)
    {
        return isset($this->guarantee[$index]);
    }

    /**
     * unset guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances
     * are available for use depending on the context.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuarantee($index)
    {
        unset($this->guarantee[$index]);
    }

    /**
     * Gets as guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances
     * are available for use depending on the context.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuaranteeType[]
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * The guarantee information associated to the Room Stay. A maximum of 5 occurances
     * are available for use depending on the context.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuaranteeType[] $guarantee
     * @return self
     */
    public function setGuarantee(array $guarantee)
    {
        $this->guarantee = $guarantee;

        return $this;
    }

    /**
     * Adds as depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5
     * occurances are available for use depending on the context.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RequiredPaymentLiteType $depositPayment
     */
    public function addToDepositPayment(\Davispeixoto\OpenTravelAlliance\RequiredPaymentLiteType $depositPayment)
    {
        $this->depositPayment[] = $depositPayment;

        return $this;
    }

    /**
     * isset depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5
     * occurances are available for use depending on the context.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDepositPayment($index)
    {
        return isset($this->depositPayment[$index]);
    }

    /**
     * unset depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5
     * occurances are available for use depending on the context.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDepositPayment($index)
    {
        unset($this->depositPayment[$index]);
    }

    /**
     * Gets as depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5
     * occurances are available for use depending on the context.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RequiredPaymentLiteType[]
     */
    public function getDepositPayment()
    {
        return $this->depositPayment;
    }

    /**
     * Sets a new depositPayment
     *
     * A collection of deposit and/or payments for the Room Stay. A maximum of 5
     * occurances are available for use depending on the context.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RequiredPaymentLiteType[]
     * $depositPayment
     * @return self
     */
    public function setDepositPayment(array $depositPayment)
    {
        $this->depositPayment = $depositPayment;

        return $this;
    }

    /**
     * Gets as basicPropertyInfo
     *
     * Basic hotel property information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomStayLiteType\BasicPropertyInfoAType
     */
    public function getBasicPropertyInfo()
    {
        return $this->basicPropertyInfo;
    }

    /**
     * Sets a new basicPropertyInfo
     *
     * Basic hotel property information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomStayLiteType\BasicPropertyInfoAType
     * $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(
        \Davispeixoto\OpenTravelAlliance\RoomStayLiteType\BasicPropertyInfoAType $basicPropertyInfo
    ) {
        $this->basicPropertyInfo = $basicPropertyInfo;

        return $this;
    }


}


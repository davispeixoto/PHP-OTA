<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType;

use Davispeixoto\OpenTravelAlliance\RoomRateType;

/**
 * Class representing RoomRateAType
 */
class RoomRateAType extends RoomRateType
{

    /**
     * The period during which the booking must be made.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\AdvanceBookingRestrictionAType
     * $advanceBookingRestriction
     */
    private $advanceBookingRestriction = null;

    /**
     * A collections of restrictions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[]
     * $restrictions
     */
    private $restrictions = null;

    /**
     * A container for the unique references to the services for the room stay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ServiceRPHsType\ServiceRPHAType[]
     * $serviceRPHs
     */
    private $serviceRPHs = null;

    /**
     * A collection of Guest Counts associated with the room rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     */
    private $guestCounts = null;

    /**
     * Gets as advanceBookingRestriction
     *
     * The period during which the booking must be made.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\AdvanceBookingRestrictionAType
     */
    public function getAdvanceBookingRestriction()
    {
        return $this->advanceBookingRestriction;
    }

    /**
     * Sets a new advanceBookingRestriction
     *
     * The period during which the booking must be made.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\AdvanceBookingRestrictionAType
     * $advanceBookingRestriction
     * @return self
     */
    public function setAdvanceBookingRestriction(
        \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\AdvanceBookingRestrictionAType $advanceBookingRestriction
    ) {
        $this->advanceBookingRestriction = $advanceBookingRestriction;

        return $this;
    }

    /**
     * Adds as restriction
     *
     * A collections of restrictions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType
     * $restriction
     */
    public function addToRestrictions(
        \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType $restriction
    ) {
        $this->restrictions[] = $restriction;

        return $this;
    }

    /**
     * isset restrictions
     *
     * A collections of restrictions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRestrictions($index)
    {
        return isset($this->restrictions[$index]);
    }

    /**
     * unset restrictions
     *
     * A collections of restrictions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRestrictions($index)
    {
        unset($this->restrictions[$index]);
    }

    /**
     * Gets as restrictions
     *
     * A collections of restrictions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[]
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * Sets a new restrictions
     *
     * A collections of restrictions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[]
     * $restrictions
     * @return self
     */
    public function setRestrictions(array $restrictions)
    {
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * Adds as serviceRPH
     *
     * A container for the unique references to the services for the room stay.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ServiceRPHsType\ServiceRPHAType
     * $serviceRPH
     */
    public function addToServiceRPHs(\Davispeixoto\OpenTravelAlliance\ServiceRPHsType\ServiceRPHAType $serviceRPH)
    {
        $this->serviceRPHs[] = $serviceRPH;

        return $this;
    }

    /**
     * isset serviceRPHs
     *
     * A container for the unique references to the services for the room stay.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServiceRPHs($index)
    {
        return isset($this->serviceRPHs[$index]);
    }

    /**
     * unset serviceRPHs
     *
     * A container for the unique references to the services for the room stay.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServiceRPHs($index)
    {
        unset($this->serviceRPHs[$index]);
    }

    /**
     * Gets as serviceRPHs
     *
     * A container for the unique references to the services for the room stay.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ServiceRPHsType\ServiceRPHAType[]
     */
    public function getServiceRPHs()
    {
        return $this->serviceRPHs;
    }

    /**
     * Sets a new serviceRPHs
     *
     * A container for the unique references to the services for the room stay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ServiceRPHsType\ServiceRPHAType[]
     * $serviceRPHs
     * @return self
     */
    public function setServiceRPHs(array $serviceRPHs)
    {
        $this->serviceRPHs = $serviceRPHs;

        return $this;
    }

    /**
     * Adds as guestCount
     *
     * A collection of Guest Counts associated with the room rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCounts(
        \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType $guestCount
    ) {
        $this->guestCounts[] = $guestCount;

        return $this;
    }

    /**
     * isset guestCounts
     *
     * A collection of Guest Counts associated with the room rate.
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
     * A collection of Guest Counts associated with the room rate.
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
     * A collection of Guest Counts associated with the room rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * A collection of Guest Counts associated with the room rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     * @return self
     */
    public function setGuestCounts(array $guestCounts)
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }


}


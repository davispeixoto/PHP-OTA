<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ResGlobalInfoType
 *
 * ResGlobalInfo is a container for various information that affects the
 * Reservation as a whole. These include global comments, counts, reservation IDs,
 * loyalty programs, and payment methods.
 * XSD Type: ResGlobalInfoType
 */
class ResGlobalInfoType extends ResCommonDetailType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     * $hotelReservationIDs
     */
    private $hotelReservationIDs = null;

    /**
     * A collection of RoutingHop objects. This details the path that the original
     * request or notification traveled.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType[]
     * $routingHops
     */
    private $routingHops = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     * $profiles
     */
    private $profiles = null;

    /**
     * Provides booking rules for the global reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType[]
     * $bookingRules
     */
    private $bookingRules = null;

    /**
     * Description: The total commission for all rate segments in the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType $totalCommissions
     */
    private $totalCommissions = null;

    /**
     * Adds as hotelReservationID
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType
     * $hotelReservationID
     */
    public function addToHotelReservationIDs(
        \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID
    ) {
        $this->hotelReservationIDs[] = $hotelReservationID;

        return $this;
    }

    /**
     * isset hotelReservationIDs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelReservationIDs($index)
    {
        return isset($this->hotelReservationIDs[$index]);
    }

    /**
     * unset hotelReservationIDs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelReservationIDs($index)
    {
        unset($this->hotelReservationIDs[$index]);
    }

    /**
     * Gets as hotelReservationIDs
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     * $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(array $hotelReservationIDs)
    {
        $this->hotelReservationIDs = $hotelReservationIDs;

        return $this;
    }

    /**
     * Adds as routingHop
     *
     * A collection of RoutingHop objects. This details the path that the original
     * request or notification traveled.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType
     * $routingHop
     */
    public function addToRoutingHops(\Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType $routingHop)
    {
        $this->routingHops[] = $routingHop;

        return $this;
    }

    /**
     * isset routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original
     * request or notification traveled.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoutingHops($index)
    {
        return isset($this->routingHops[$index]);
    }

    /**
     * unset routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original
     * request or notification traveled.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoutingHops($index)
    {
        unset($this->routingHops[$index]);
    }

    /**
     * Gets as routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original
     * request or notification traveled.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType[]
     */
    public function getRoutingHops()
    {
        return $this->routingHops;
    }

    /**
     * Sets a new routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original
     * request or notification traveled.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType[]
     * $routingHops
     * @return self
     */
    public function setRoutingHops(array $routingHops)
    {
        $this->routingHops = $routingHops;

        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType
     * $profileInfo
     */
    public function addToProfiles(\Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;

        return $this;
    }

    /**
     * isset profiles
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     * $profiles
     * @return self
     */
    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;

        return $this;
    }

    /**
     * Adds as bookingRule
     *
     * Provides booking rules for the global reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType
     * $bookingRule
     */
    public function addToBookingRules(\Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType $bookingRule)
    {
        $this->bookingRules[] = $bookingRule;

        return $this;
    }

    /**
     * isset bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingRules($index)
    {
        return isset($this->bookingRules[$index]);
    }

    /**
     * unset bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingRules($index)
    {
        unset($this->bookingRules[$index]);
    }

    /**
     * Gets as bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType[]
     */
    public function getBookingRules()
    {
        return $this->bookingRules;
    }

    /**
     * Sets a new bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType[]
     * $bookingRules
     * @return self
     */
    public function setBookingRules(array $bookingRules)
    {
        $this->bookingRules = $bookingRules;

        return $this;
    }

    /**
     * Gets as totalCommissions
     *
     * Description: The total commission for all rate segments in the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionType
     */
    public function getTotalCommissions()
    {
        return $this->totalCommissions;
    }

    /**
     * Sets a new totalCommissions
     *
     * Description: The total commission for all rate segments in the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType $totalCommissions
     * @return self
     */
    public function setTotalCommissions(\Davispeixoto\OpenTravelAlliance\CommissionType $totalCommissions)
    {
        $this->totalCommissions = $totalCommissions;

        return $this;
    }


}


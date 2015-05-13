<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStaysType;

use Davispeixoto\OpenTravelAlliance\RoomStayType;

/**
 * Class representing RoomStayAType
 */
class RoomStayAType extends RoomStayType
{

    /**
     * A unique number (e.g. segment number or index number) used to further identify a
     * booked item within a list of booked items.
     *
     * @property integer $indexNumber
     */
    private $indexNumber = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ResGuestRPHsType $resGuestRPHs
     */
    private $resGuestRPHs = null;

    /**
     * A collection of Membership objects. Memberships provides a list of reward
     * programs which may be credited with points accrued from the guest's activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MembershipType\MembershipAType[]
     * $memberships
     */
    private $memberships = null;

    /**
     * A collection of Comment objects. Comments which apply to the whole Reservation
     * or a particular Room Stay or Service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommentType\CommentAType[] $comments
     */
    private $comments = null;

    /**
     * The SpecialRequest object indicates special requests for the whole Reservation,
     * or a particular Room Stay or Service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType[]
     * $specialRequests
     */
    private $specialRequests = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ServiceRPHsType\ServiceRPHAType[]
     * $serviceRPHs
     */
    private $serviceRPHs = null;

    /**
     * Information identifying an earlier availability quote.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomStaysType\RoomStayAType\ReferenceAType
     * $reference
     */
    private $reference = null;

    /**
     * Provides booking rule information for the room stay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType[]
     * $bookingRules
     */
    private $bookingRules = null;

    /**
     * Gets as indexNumber
     *
     * A unique number (e.g. segment number or index number) used to further identify a
     * booked item within a list of booked items.
     *
     * @return integer
     */
    public function getIndexNumber()
    {
        return $this->indexNumber;
    }

    /**
     * Sets a new indexNumber
     *
     * A unique number (e.g. segment number or index number) used to further identify a
     * booked item within a list of booked items.
     *
     * @param integer $indexNumber
     * @return self
     */
    public function setIndexNumber($indexNumber)
    {
        $this->indexNumber = $indexNumber;

        return $this;
    }

    /**
     * Gets as resGuestRPHs
     *
     * @return \Davispeixoto\OpenTravelAlliance\ResGuestRPHsType
     */
    public function getResGuestRPHs()
    {
        return $this->resGuestRPHs;
    }

    /**
     * Sets a new resGuestRPHs
     *
     * @param \Davispeixoto\OpenTravelAlliance\ResGuestRPHsType $resGuestRPHs
     * @return self
     */
    public function setResGuestRPHs(\Davispeixoto\OpenTravelAlliance\ResGuestRPHsType $resGuestRPHs)
    {
        $this->resGuestRPHs = $resGuestRPHs;

        return $this;
    }

    /**
     * Adds as membership
     *
     * A collection of Membership objects. Memberships provides a list of reward
     * programs which may be credited with points accrued from the guest's activity.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MembershipType\MembershipAType
     * $membership
     */
    public function addToMemberships(\Davispeixoto\OpenTravelAlliance\MembershipType\MembershipAType $membership)
    {
        $this->memberships[] = $membership;

        return $this;
    }

    /**
     * isset memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward
     * programs which may be credited with points accrued from the guest's activity.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMemberships($index)
    {
        return isset($this->memberships[$index]);
    }

    /**
     * unset memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward
     * programs which may be credited with points accrued from the guest's activity.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMemberships($index)
    {
        unset($this->memberships[$index]);
    }

    /**
     * Gets as memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward
     * programs which may be credited with points accrued from the guest's activity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MembershipType\MembershipAType[]
     */
    public function getMemberships()
    {
        return $this->memberships;
    }

    /**
     * Sets a new memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward
     * programs which may be credited with points accrued from the guest's activity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MembershipType\MembershipAType[]
     * $memberships
     * @return self
     */
    public function setMemberships(array $memberships)
    {
        $this->memberships = $memberships;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation
     * or a particular Room Stay or Service.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommentType\CommentAType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\CommentType\CommentAType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation
     * or a particular Room Stay or Service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation
     * or a particular Room Stay or Service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation
     * or a particular Room Stay or Service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommentType\CommentAType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation
     * or a particular Room Stay or Service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommentType\CommentAType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Adds as specialRequest
     *
     * The SpecialRequest object indicates special requests for the whole Reservation,
     * or a particular Room Stay or Service.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType
     * $specialRequest
     */
    public function addToSpecialRequests(
        \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType $specialRequest
    ) {
        $this->specialRequests[] = $specialRequest;

        return $this;
    }

    /**
     * isset specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation,
     * or a particular Room Stay or Service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialRequests($index)
    {
        return isset($this->specialRequests[$index]);
    }

    /**
     * unset specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation,
     * or a particular Room Stay or Service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialRequests($index)
    {
        unset($this->specialRequests[$index]);
    }

    /**
     * Gets as specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation,
     * or a particular Room Stay or Service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType[]
     */
    public function getSpecialRequests()
    {
        return $this->specialRequests;
    }

    /**
     * Sets a new specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation,
     * or a particular Room Stay or Service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecialRequestType\SpecialRequestAType[]
     * $specialRequests
     * @return self
     */
    public function setSpecialRequests(array $specialRequests)
    {
        $this->specialRequests = $specialRequests;

        return $this;
    }

    /**
     * Adds as serviceRPH
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
     * @return \Davispeixoto\OpenTravelAlliance\ServiceRPHsType\ServiceRPHAType[]
     */
    public function getServiceRPHs()
    {
        return $this->serviceRPHs;
    }

    /**
     * Sets a new serviceRPHs
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
     * Gets as reference
     *
     * Information identifying an earlier availability quote.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RoomStaysType\RoomStayAType\ReferenceAType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Information identifying an earlier availability quote.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStaysType\RoomStayAType\ReferenceAType
     * $reference
     * @return self
     */
    public function setReference(\Davispeixoto\OpenTravelAlliance\RoomStaysType\RoomStayAType\ReferenceAType $reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Adds as bookingRule
     *
     * Provides booking rule information for the room stay.
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
     * Provides booking rule information for the room stay.
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
     * Provides booking rule information for the room stay.
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
     * Provides booking rule information for the room stay.
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
     * Provides booking rule information for the room stay.
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


}


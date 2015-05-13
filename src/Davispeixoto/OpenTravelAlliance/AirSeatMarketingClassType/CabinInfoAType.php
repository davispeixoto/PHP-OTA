<?php

namespace Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType;

/**
 * Class representing CabinInfoAType
 */
class CabinInfoAType
{

    /**
     * The quantity of requested seats for this cabin type.
     *
     * @property integer $reqSeatQty
     */
    private $reqSeatQty = null;

    /**
     * Reservation booking designator for the fare.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * The cabin class. Use a value from the enumerated list or enter a string value
     * that is known to your trading partners.
     *
     * @property string $classCode
     */
    private $classCode = null;

    /**
     * A seat preference type. Use a value from the OpenTravel Seat Type Preference
     * (STP) code list or enter a string value that is known to your trading partners.
     *
     * @property string $seatType
     */
    private $seatType = null;

    /**
     * A reference to a unique traveler ID (defined elsewhere in this message) that
     * associates the traveler to this cabin class and seat information.
     *
     * @property string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * A reference to a unique O/D pair ID (defined elsewhere in this message) that
     * associates the O/D portion of a trip to this cabin class and seat information.
     *
     * @property string $origDestSequenceRPH
     */
    private $origDestSequenceRPH = null;

    /**
     * A reference to a unique O/D flight segment ID (defined elsewhere in this
     * message) that associates the O/D flight segment to this cabin class and seat
     * inforamtion.
     *
     * @property string $itinerarySegmentRPH
     */
    private $itinerarySegmentRPH = null;

    /**
     * A unique ID for this cabin and seat information that may be referenced elsewhere
     * in this message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Cabin sub-type information. This is typically used to describe virtual marketing
     * cabin information associated with the cabin.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType\SubTypeAType[]
     * $subType
     */
    private $subType = null;

    /**
     * Gets as reqSeatQty
     *
     * The quantity of requested seats for this cabin type.
     *
     * @return integer
     */
    public function getReqSeatQty()
    {
        return $this->reqSeatQty;
    }

    /**
     * Sets a new reqSeatQty
     *
     * The quantity of requested seats for this cabin type.
     *
     * @param integer $reqSeatQty
     * @return self
     */
    public function setReqSeatQty($reqSeatQty)
    {
        $this->reqSeatQty = $reqSeatQty;

        return $this;
    }

    /**
     * Gets as resBookDesigCode
     *
     * Reservation booking designator for the fare.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * Reservation booking designator for the fare.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * Gets as classCode
     *
     * The cabin class. Use a value from the enumerated list or enter a string value
     * that is known to your trading partners.
     *
     * @return string
     */
    public function getClassCode()
    {
        return $this->classCode;
    }

    /**
     * Sets a new classCode
     *
     * The cabin class. Use a value from the enumerated list or enter a string value
     * that is known to your trading partners.
     *
     * @param string $classCode
     * @return self
     */
    public function setClassCode($classCode)
    {
        $this->classCode = $classCode;

        return $this;
    }

    /**
     * Gets as seatType
     *
     * A seat preference type. Use a value from the OpenTravel Seat Type Preference
     * (STP) code list or enter a string value that is known to your trading partners.
     *
     * @return string
     */
    public function getSeatType()
    {
        return $this->seatType;
    }

    /**
     * Sets a new seatType
     *
     * A seat preference type. Use a value from the OpenTravel Seat Type Preference
     * (STP) code list or enter a string value that is known to your trading partners.
     *
     * @param string $seatType
     * @return self
     */
    public function setSeatType($seatType)
    {
        $this->seatType = $seatType;

        return $this;
    }

    /**
     * Gets as travelerRPH
     *
     * A reference to a unique traveler ID (defined elsewhere in this message) that
     * associates the traveler to this cabin class and seat information.
     *
     * @return string
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * A reference to a unique traveler ID (defined elsewhere in this message) that
     * associates the traveler to this cabin class and seat information.
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }

    /**
     * Gets as origDestSequenceRPH
     *
     * A reference to a unique O/D pair ID (defined elsewhere in this message) that
     * associates the O/D portion of a trip to this cabin class and seat information.
     *
     * @return string
     */
    public function getOrigDestSequenceRPH()
    {
        return $this->origDestSequenceRPH;
    }

    /**
     * Sets a new origDestSequenceRPH
     *
     * A reference to a unique O/D pair ID (defined elsewhere in this message) that
     * associates the O/D portion of a trip to this cabin class and seat information.
     *
     * @param string $origDestSequenceRPH
     * @return self
     */
    public function setOrigDestSequenceRPH($origDestSequenceRPH)
    {
        $this->origDestSequenceRPH = $origDestSequenceRPH;

        return $this;
    }

    /**
     * Gets as itinerarySegmentRPH
     *
     * A reference to a unique O/D flight segment ID (defined elsewhere in this
     * message) that associates the O/D flight segment to this cabin class and seat
     * inforamtion.
     *
     * @return string
     */
    public function getItinerarySegmentRPH()
    {
        return $this->itinerarySegmentRPH;
    }

    /**
     * Sets a new itinerarySegmentRPH
     *
     * A reference to a unique O/D flight segment ID (defined elsewhere in this
     * message) that associates the O/D flight segment to this cabin class and seat
     * inforamtion.
     *
     * @param string $itinerarySegmentRPH
     * @return self
     */
    public function setItinerarySegmentRPH($itinerarySegmentRPH)
    {
        $this->itinerarySegmentRPH = $itinerarySegmentRPH;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique ID for this cabin and seat information that may be referenced elsewhere
     * in this message.
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
     * A unique ID for this cabin and seat information that may be referenced elsewhere
     * in this message.
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
     * Adds as subType
     *
     * Cabin sub-type information. This is typically used to describe virtual marketing
     * cabin information associated with the cabin.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType\SubTypeAType
     * $subType
     */
    public function addToSubType(
        \Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType\SubTypeAType $subType
    ) {
        $this->subType[] = $subType;

        return $this;
    }

    /**
     * isset subType
     *
     * Cabin sub-type information. This is typically used to describe virtual marketing
     * cabin information associated with the cabin.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubType($index)
    {
        return isset($this->subType[$index]);
    }

    /**
     * unset subType
     *
     * Cabin sub-type information. This is typically used to describe virtual marketing
     * cabin information associated with the cabin.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubType($index)
    {
        unset($this->subType[$index]);
    }

    /**
     * Gets as subType
     *
     * Cabin sub-type information. This is typically used to describe virtual marketing
     * cabin information associated with the cabin.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType\SubTypeAType[]
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Sets a new subType
     *
     * Cabin sub-type information. This is typically used to describe virtual marketing
     * cabin information associated with the cabin.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirSeatMarketingClassType\CabinInfoAType\SubTypeAType[]
     * $subType
     * @return self
     */
    public function setSubType(array $subType)
    {
        $this->subType = $subType;

        return $this;
    }


}


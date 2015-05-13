<?php

namespace Davispeixoto\OpenTravelAlliance\ReservationItemsType;

use Davispeixoto\OpenTravelAlliance\TravelSegmentType;

/**
 * Class representing ItemAType
 */
class ItemAType extends TravelSegmentType
{

    /**
     * Number identifying position of reservation item in itinerary.
     *
     * @property integer $itinSeqNumber
     */
    private $itinSeqNumber = null;

    /**
     * When true, indicates that the reservation was completed externally and the
     * information is for reference only.
     *  false
     *
     * @property boolean $isPassive
     */
    private $isPassive = null;

    /**
     * Can a boarding pass(es) be issued for this Itinerary? True=yes, False=no.
     *
     * @property boolean $issueBoardingPass
     */
    private $issueBoardingPass = null;

    /**
     * Has a boarding pass(es) been issued for this Itinerary? True=yes, False=no.
     *
     * @property boolean $boardingPassIssued
     */
    private $boardingPassIssued = null;

    /**
     * Gets as itinSeqNumber
     *
     * Number identifying position of reservation item in itinerary.
     *
     * @return integer
     */
    public function getItinSeqNumber()
    {
        return $this->itinSeqNumber;
    }

    /**
     * Sets a new itinSeqNumber
     *
     * Number identifying position of reservation item in itinerary.
     *
     * @param integer $itinSeqNumber
     * @return self
     */
    public function setItinSeqNumber($itinSeqNumber)
    {
        $this->itinSeqNumber = $itinSeqNumber;

        return $this;
    }

    /**
     * Gets as isPassive
     *
     * When true, indicates that the reservation was completed externally and the
     * information is for reference only.
     *  false
     *
     * @return boolean
     */
    public function getIsPassive()
    {
        return $this->isPassive;
    }

    /**
     * Sets a new isPassive
     *
     * When true, indicates that the reservation was completed externally and the
     * information is for reference only.
     *  false
     *
     * @param boolean $isPassive
     * @return self
     */
    public function setIsPassive($isPassive)
    {
        $this->isPassive = $isPassive;

        return $this;
    }

    /**
     * Gets as issueBoardingPass
     *
     * Can a boarding pass(es) be issued for this Itinerary? True=yes, False=no.
     *
     * @return boolean
     */
    public function getIssueBoardingPass()
    {
        return $this->issueBoardingPass;
    }

    /**
     * Sets a new issueBoardingPass
     *
     * Can a boarding pass(es) be issued for this Itinerary? True=yes, False=no.
     *
     * @param boolean $issueBoardingPass
     * @return self
     */
    public function setIssueBoardingPass($issueBoardingPass)
    {
        $this->issueBoardingPass = $issueBoardingPass;

        return $this;
    }

    /**
     * Gets as boardingPassIssued
     *
     * Has a boarding pass(es) been issued for this Itinerary? True=yes, False=no.
     *
     * @return boolean
     */
    public function getBoardingPassIssued()
    {
        return $this->boardingPassIssued;
    }

    /**
     * Sets a new boardingPassIssued
     *
     * Has a boarding pass(es) been issued for this Itinerary? True=yes, False=no.
     *
     * @param boolean $boardingPassIssued
     * @return self
     */
    public function setBoardingPassIssued($boardingPassIssued)
    {
        $this->boardingPassIssued = $boardingPassIssued;

        return $this;
    }


}


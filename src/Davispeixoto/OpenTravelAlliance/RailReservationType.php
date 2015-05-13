<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailReservationType
 *
 * Defines the information used to fully describe a rail reservation.
 * XSD Type: RailReservationType
 */
class RailReservationType
{

    /**
     * The last date a reservation will be held.
     *
     * @property \DateTime $lastHoldDate
     */
    private $lastHoldDate = null;

    /**
     * A confirmation number by which this reservation can be uniquely identified.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Full details on the itinerary referenced by this reservation. An itinerary
     * represents all inventory booked and associated with this specific reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailReservationType\ItineraryAType
     * $itinerary
     */
    private $itinerary = null;

    /**
     * Passenger information for a reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     * $passengerInfo
     */
    private $passengerInfo = null;

    /**
     * A collection of payment rules associated with this rail reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * Information on the fulfillment of the ticket, that is, e.g. the party that will
     * be issuing the ticket, or has already issued the ticket.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $fulfillment
     */
    private $fulfillment = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as lastHoldDate
     *
     * The last date a reservation will be held.
     *
     * @return \DateTime
     */
    public function getLastHoldDate()
    {
        return $this->lastHoldDate;
    }

    /**
     * Sets a new lastHoldDate
     *
     * The last date a reservation will be held.
     *
     * @param \DateTime $lastHoldDate
     * @return self
     */
    public function setLastHoldDate(\DateTime $lastHoldDate)
    {
        $this->lastHoldDate = $lastHoldDate;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * A confirmation number by which this reservation can be uniquely identified.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * A confirmation number by which this reservation can be uniquely identified.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as itinerary
     *
     * Full details on the itinerary referenced by this reservation. An itinerary
     * represents all inventory booked and associated with this specific reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailReservationType\ItineraryAType
     */
    public function getItinerary()
    {
        return $this->itinerary;
    }

    /**
     * Sets a new itinerary
     *
     * Full details on the itinerary referenced by this reservation. An itinerary
     * represents all inventory booked and associated with this specific reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailReservationType\ItineraryAType
     * $itinerary
     * @return self
     */
    public function setItinerary(\Davispeixoto\OpenTravelAlliance\RailReservationType\ItineraryAType $itinerary)
    {
        $this->itinerary = $itinerary;

        return $this;
    }

    /**
     * Adds as passengerInfo
     *
     * Passenger information for a reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType
     * $passengerInfo
     */
    public function addToPassengerInfo(\Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType $passengerInfo)
    {
        $this->passengerInfo[] = $passengerInfo;

        return $this;
    }

    /**
     * isset passengerInfo
     *
     * Passenger information for a reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerInfo($index)
    {
        return isset($this->passengerInfo[$index]);
    }

    /**
     * unset passengerInfo
     *
     * Passenger information for a reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerInfo($index)
    {
        unset($this->passengerInfo[$index]);
    }

    /**
     * Gets as passengerInfo
     *
     * Passenger information for a reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     */
    public function getPassengerInfo()
    {
        return $this->passengerInfo;
    }

    /**
     * Sets a new passengerInfo
     *
     * Passenger information for a reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     * $passengerInfo
     * @return self
     */
    public function setPassengerInfo(array $passengerInfo)
    {
        $this->passengerInfo = $passengerInfo;

        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this rail reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;

        return $this;
    }

    /**
     * isset paymentRules
     *
     * A collection of payment rules associated with this rail reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * A collection of payment rules associated with this rail reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this rail reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this rail reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules)
    {
        $this->paymentRules = $paymentRules;

        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * Information on the fulfillment of the ticket, that is, e.g. the party that will
     * be issuing the ticket, or has already issued the ticket.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Sets a new fulfillment
     *
     * Information on the fulfillment of the ticket, that is, e.g. the party that will
     * be issuing the ticket, or has already issued the ticket.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $fulfillment
     * @return self
     */
    public function setFulfillment(\Davispeixoto\OpenTravelAlliance\CompanyNameType $fulfillment)
    {
        $this->fulfillment = $fulfillment;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}


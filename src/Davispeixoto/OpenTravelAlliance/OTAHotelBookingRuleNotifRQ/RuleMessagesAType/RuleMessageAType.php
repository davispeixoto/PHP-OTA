<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleNotifRQ\RuleMessagesAType;

/**
 * Class representing RuleMessageAType
 */
class RuleMessageAType
{

    /**
     * Information on what the BookingRule Message applies to (i.e. the combination of
     * inventory and rate codes) and the period of application.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType
     * $statusApplicationControl
     */
    private $statusApplicationControl = null;

    /**
     * Container for the collection of Booking Rules which apply for the information
     * indicated in the StatusApplicationControl element.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType[]
     * $bookingRules
     */
    private $bookingRules = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify
     * each BookingRuleMessage, for tracing of transactions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as statusApplicationControl
     *
     * Information on what the BookingRule Message applies to (i.e. the combination of
     * inventory and rate codes) and the period of application.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType
     */
    public function getStatusApplicationControl()
    {
        return $this->statusApplicationControl;
    }

    /**
     * Sets a new statusApplicationControl
     *
     * Information on what the BookingRule Message applies to (i.e. the combination of
     * inventory and rate codes) and the period of application.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType
     * $statusApplicationControl
     * @return self
     */
    public function setStatusApplicationControl(
        \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType $statusApplicationControl
    ) {
        $this->statusApplicationControl = $statusApplicationControl;

        return $this;
    }

    /**
     * Adds as bookingRule
     *
     * Container for the collection of Booking Rules which apply for the information
     * indicated in the StatusApplicationControl element.
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
     * Container for the collection of Booking Rules which apply for the information
     * indicated in the StatusApplicationControl element.
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
     * Container for the collection of Booking Rules which apply for the information
     * indicated in the StatusApplicationControl element.
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
     * Container for the collection of Booking Rules which apply for the information
     * indicated in the StatusApplicationControl element.
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
     * Container for the collection of Booking Rules which apply for the information
     * indicated in the StatusApplicationControl element.
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
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify
     * each BookingRuleMessage, for tracing of transactions.
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
     * The unique identifier element allows the trading partners to uniquely identify
     * each BookingRuleMessage, for tracing of transactions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }


}


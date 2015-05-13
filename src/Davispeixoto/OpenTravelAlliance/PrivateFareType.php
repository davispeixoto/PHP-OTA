<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PrivateFareType
 *
 * Rules and other information associated with private fares.
 * XSD Type: PrivateFareType
 */
class PrivateFareType
{

    /**
     * Corporate account ID.Example: IBM123Note: This is a code that uniquely
     * identifies a corporate account number.
     *
     * @property string $accountCode
     */
    private $accountCode = null;

    /**
     * Private fare code.Example: SKY123
     *
     * @property string $privateFareCode
     */
    private $privateFareCode = null;

    /**
     * Fare rule currency.Example: USDOpenTravel Best Practice: Unless otherwise noted,
     * all currency designations are three alpha characters and follow ISO 4217
     * prescribed format.
     *  OpenTravel Best Practice: All currency amounts should have the currency code
     * type and decimal places specified.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * City quantity.Example: 2Note: This is the number of cities applicable to this
     * fare.
     *
     * @property integer $nbrOfCities
     */
    private $nbrOfCities = null;

    /**
     * Reservation booking designator (RBD).Example: FNote: This identifies the class
     * of service for the specified fare basis code.Definition: The code used in
     * reservations transactions to identify a compartment on an aircraft and/or a
     * special inventory control. It is the booking class usually determined by the
     * fare basis. The RBDs are typically represented by alphabetic characters.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * Fare routing number.Example: 0209
     *
     * @property integer $routingNumber
     */
    private $routingNumber = null;

    /**
     * Tariff rule number.Example: F2H
     *
     * @property string $tariffRuleNmbr
     */
    private $tariffRuleNmbr = null;

    /**
     * Tarriff rule description.Example: From/To Within USA
     *
     * @property string $tarriffRuleDes
     */
    private $tarriffRuleDes = null;

    /**
     * Ticket designator code.Example: SWP30Note: This is the discount code applicable
     * to the fare that is associated with this fare basis code.
     *
     * @property string $ticketDesignatorCode
     */
    private $ticketDesignatorCode = null;

    /**
     * Ticket designator code extension.Example: HK4Note: This is an extension that a
     * carrier may apply to a ticket designator.
     *
     * @property string $ticketDesignatorExtension
     */
    private $ticketDesignatorExtension = null;

    /**
     * Flight reference ID.Example: 1Note: This is the flight to which this ticket
     * designator applies. This ID was set elsewhere in the message.
     *
     * @property string $flightRefRPH
     */
    private $flightRefRPH = null;

    /**
     * Fare associated airport(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\PrivateFareType\AirportAType[]
     * $airport
     */
    private $airport = null;

    /**
     * Fares and related information for this fare rule.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType[]
     * $fareDetails
     */
    private $fareDetails = null;

    /**
     * Filing airline.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $filingAirline
     */
    private $filingAirline = null;

    /**
     * Marketing airline.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $marketingAirline
     */
    private $marketingAirline = null;

    /**
     * Information regarding restrictions governing use of the fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PrivateFareType\RuleInfoAType
     * $ruleInfo
     */
    private $ruleInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as accountCode
     *
     * Corporate account ID.Example: IBM123Note: This is a code that uniquely
     * identifies a corporate account number.
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->accountCode;
    }

    /**
     * Sets a new accountCode
     *
     * Corporate account ID.Example: IBM123Note: This is a code that uniquely
     * identifies a corporate account number.
     *
     * @param string $accountCode
     * @return self
     */
    public function setAccountCode($accountCode)
    {
        $this->accountCode = $accountCode;

        return $this;
    }

    /**
     * Gets as privateFareCode
     *
     * Private fare code.Example: SKY123
     *
     * @return string
     */
    public function getPrivateFareCode()
    {
        return $this->privateFareCode;
    }

    /**
     * Sets a new privateFareCode
     *
     * Private fare code.Example: SKY123
     *
     * @param string $privateFareCode
     * @return self
     */
    public function setPrivateFareCode($privateFareCode)
    {
        $this->privateFareCode = $privateFareCode;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * Fare rule currency.Example: USDOpenTravel Best Practice: Unless otherwise noted,
     * all currency designations are three alpha characters and follow ISO 4217
     * prescribed format.
     *  OpenTravel Best Practice: All currency amounts should have the currency code
     * type and decimal places specified.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * Fare rule currency.Example: USDOpenTravel Best Practice: Unless otherwise noted,
     * all currency designations are three alpha characters and follow ISO 4217
     * prescribed format.
     *  OpenTravel Best Practice: All currency amounts should have the currency code
     * type and decimal places specified.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as nbrOfCities
     *
     * City quantity.Example: 2Note: This is the number of cities applicable to this
     * fare.
     *
     * @return integer
     */
    public function getNbrOfCities()
    {
        return $this->nbrOfCities;
    }

    /**
     * Sets a new nbrOfCities
     *
     * City quantity.Example: 2Note: This is the number of cities applicable to this
     * fare.
     *
     * @param integer $nbrOfCities
     * @return self
     */
    public function setNbrOfCities($nbrOfCities)
    {
        $this->nbrOfCities = $nbrOfCities;

        return $this;
    }

    /**
     * Gets as resBookDesigCode
     *
     * Reservation booking designator (RBD).Example: FNote: This identifies the class
     * of service for the specified fare basis code.Definition: The code used in
     * reservations transactions to identify a compartment on an aircraft and/or a
     * special inventory control. It is the booking class usually determined by the
     * fare basis. The RBDs are typically represented by alphabetic characters.
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
     * Reservation booking designator (RBD).Example: FNote: This identifies the class
     * of service for the specified fare basis code.Definition: The code used in
     * reservations transactions to identify a compartment on an aircraft and/or a
     * special inventory control. It is the booking class usually determined by the
     * fare basis. The RBDs are typically represented by alphabetic characters.
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
     * Gets as routingNumber
     *
     * Fare routing number.Example: 0209
     *
     * @return integer
     */
    public function getRoutingNumber()
    {
        return $this->routingNumber;
    }

    /**
     * Sets a new routingNumber
     *
     * Fare routing number.Example: 0209
     *
     * @param integer $routingNumber
     * @return self
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->routingNumber = $routingNumber;

        return $this;
    }

    /**
     * Gets as tariffRuleNmbr
     *
     * Tariff rule number.Example: F2H
     *
     * @return string
     */
    public function getTariffRuleNmbr()
    {
        return $this->tariffRuleNmbr;
    }

    /**
     * Sets a new tariffRuleNmbr
     *
     * Tariff rule number.Example: F2H
     *
     * @param string $tariffRuleNmbr
     * @return self
     */
    public function setTariffRuleNmbr($tariffRuleNmbr)
    {
        $this->tariffRuleNmbr = $tariffRuleNmbr;

        return $this;
    }

    /**
     * Gets as tarriffRuleDes
     *
     * Tarriff rule description.Example: From/To Within USA
     *
     * @return string
     */
    public function getTarriffRuleDes()
    {
        return $this->tarriffRuleDes;
    }

    /**
     * Sets a new tarriffRuleDes
     *
     * Tarriff rule description.Example: From/To Within USA
     *
     * @param string $tarriffRuleDes
     * @return self
     */
    public function setTarriffRuleDes($tarriffRuleDes)
    {
        $this->tarriffRuleDes = $tarriffRuleDes;

        return $this;
    }

    /**
     * Gets as ticketDesignatorCode
     *
     * Ticket designator code.Example: SWP30Note: This is the discount code applicable
     * to the fare that is associated with this fare basis code.
     *
     * @return string
     */
    public function getTicketDesignatorCode()
    {
        return $this->ticketDesignatorCode;
    }

    /**
     * Sets a new ticketDesignatorCode
     *
     * Ticket designator code.Example: SWP30Note: This is the discount code applicable
     * to the fare that is associated with this fare basis code.
     *
     * @param string $ticketDesignatorCode
     * @return self
     */
    public function setTicketDesignatorCode($ticketDesignatorCode)
    {
        $this->ticketDesignatorCode = $ticketDesignatorCode;

        return $this;
    }

    /**
     * Gets as ticketDesignatorExtension
     *
     * Ticket designator code extension.Example: HK4Note: This is an extension that a
     * carrier may apply to a ticket designator.
     *
     * @return string
     */
    public function getTicketDesignatorExtension()
    {
        return $this->ticketDesignatorExtension;
    }

    /**
     * Sets a new ticketDesignatorExtension
     *
     * Ticket designator code extension.Example: HK4Note: This is an extension that a
     * carrier may apply to a ticket designator.
     *
     * @param string $ticketDesignatorExtension
     * @return self
     */
    public function setTicketDesignatorExtension($ticketDesignatorExtension)
    {
        $this->ticketDesignatorExtension = $ticketDesignatorExtension;

        return $this;
    }

    /**
     * Gets as flightRefRPH
     *
     * Flight reference ID.Example: 1Note: This is the flight to which this ticket
     * designator applies. This ID was set elsewhere in the message.
     *
     * @return string
     */
    public function getFlightRefRPH()
    {
        return $this->flightRefRPH;
    }

    /**
     * Sets a new flightRefRPH
     *
     * Flight reference ID.Example: 1Note: This is the flight to which this ticket
     * designator applies. This ID was set elsewhere in the message.
     *
     * @param string $flightRefRPH
     * @return self
     */
    public function setFlightRefRPH($flightRefRPH)
    {
        $this->flightRefRPH = $flightRefRPH;

        return $this;
    }

    /**
     * Adds as airport
     *
     * Fare associated airport(s).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PrivateFareType\AirportAType $airport
     */
    public function addToAirport(\Davispeixoto\OpenTravelAlliance\PrivateFareType\AirportAType $airport)
    {
        $this->airport[] = $airport;

        return $this;
    }

    /**
     * isset airport
     *
     * Fare associated airport(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirport($index)
    {
        return isset($this->airport[$index]);
    }

    /**
     * unset airport
     *
     * Fare associated airport(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirport($index)
    {
        unset($this->airport[$index]);
    }

    /**
     * Gets as airport
     *
     * Fare associated airport(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\PrivateFareType\AirportAType[]
     */
    public function getAirport()
    {
        return $this->airport;
    }

    /**
     * Sets a new airport
     *
     * Fare associated airport(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\PrivateFareType\AirportAType[] $airport
     * @return self
     */
    public function setAirport(array $airport)
    {
        $this->airport = $airport;

        return $this;
    }

    /**
     * Adds as fareDetails
     *
     * Fares and related information for this fare rule.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType
     * $fareDetails
     */
    public function addToFareDetails(\Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType $fareDetails)
    {
        $this->fareDetails[] = $fareDetails;

        return $this;
    }

    /**
     * isset fareDetails
     *
     * Fares and related information for this fare rule.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareDetails($index)
    {
        return isset($this->fareDetails[$index]);
    }

    /**
     * unset fareDetails
     *
     * Fares and related information for this fare rule.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareDetails($index)
    {
        unset($this->fareDetails[$index]);
    }

    /**
     * Gets as fareDetails
     *
     * Fares and related information for this fare rule.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType[]
     */
    public function getFareDetails()
    {
        return $this->fareDetails;
    }

    /**
     * Sets a new fareDetails
     *
     * Fares and related information for this fare rule.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType[]
     * $fareDetails
     * @return self
     */
    public function setFareDetails(array $fareDetails)
    {
        $this->fareDetails = $fareDetails;

        return $this;
    }

    /**
     * Gets as filingAirline
     *
     * Filing airline.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getFilingAirline()
    {
        return $this->filingAirline;
    }

    /**
     * Sets a new filingAirline
     *
     * Filing airline.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $filingAirline
     * @return self
     */
    public function setFilingAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $filingAirline)
    {
        $this->filingAirline = $filingAirline;

        return $this;
    }

    /**
     * Adds as marketingAirline
     *
     * Marketing airline.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingAirline
     */
    public function addToMarketingAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingAirline)
    {
        $this->marketingAirline[] = $marketingAirline;

        return $this;
    }

    /**
     * isset marketingAirline
     *
     * Marketing airline.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMarketingAirline($index)
    {
        return isset($this->marketingAirline[$index]);
    }

    /**
     * unset marketingAirline
     *
     * Marketing airline.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMarketingAirline($index)
    {
        unset($this->marketingAirline[$index]);
    }

    /**
     * Gets as marketingAirline
     *
     * Marketing airline.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getMarketingAirline()
    {
        return $this->marketingAirline;
    }

    /**
     * Sets a new marketingAirline
     *
     * Marketing airline.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $marketingAirline
     * @return self
     */
    public function setMarketingAirline(array $marketingAirline)
    {
        $this->marketingAirline = $marketingAirline;

        return $this;
    }

    /**
     * Gets as ruleInfo
     *
     * Information regarding restrictions governing use of the fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PrivateFareType\RuleInfoAType
     */
    public function getRuleInfo()
    {
        return $this->ruleInfo;
    }

    /**
     * Sets a new ruleInfo
     *
     * Information regarding restrictions governing use of the fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PrivateFareType\RuleInfoAType $ruleInfo
     * @return self
     */
    public function setRuleInfo(\Davispeixoto\OpenTravelAlliance\PrivateFareType\RuleInfoAType $ruleInfo)
    {
        $this->ruleInfo = $ruleInfo;

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


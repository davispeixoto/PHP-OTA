<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ;

/**
 * Class representing PricingInfoAType
 */
class PricingInfoAType
{

    /**
     * Carrier or Service Record Owner code.Example: RES = all reservation centers
     *
     * @property string $displayToCode
     */
    private $displayToCode = null;

    /**
     * Optional charge code.Example: C = Catalog only, S = Service charge detailsNote:
     * This is a code that indicates if catalog of charges or services are requested
     * along with allowance.
     *
     * @property string $optionalChargeCode
     */
    private $optionalChargeCode = null;

    /**
     * Pricing Reference ID.Example: 1Note: This is a unique reference ID for one set
     * of pricing information that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @property string $pricingRPH
     */
    private $pricingRPH = null;

    /**
     * Country of sale code.Example: usNote: This is the country in which the booking
     * will be made (sold).OpenTravel Best Practice: Country Code Designation: Unless
     * otherwise noted, all country code designations are two characters and WILL
     * follow ISO 3166 prescribed format.
     *
     * @property string $saleCountry
     */
    private $saleCountry = null;

    /**
     * City or airport of ticketing code.Example: TYONote: This is the city or airport
     * code where the ticket will be/ has been issued in IATA encoding.OpenTravel Best
     * Practice: Airport Code Designation: Unless otherwise noted, all airport code
     * designations WILL be three characters and WILL follow IATA airport code
     * prescribed format.OpenTravel Best Practice: City Code Designation: Unless
     * otherwise noted, all city code designations WILL be three characters and WILL
     * follow IATA city code prescribed format.
     *
     * @property string $ticketingCityCode
     */
    private $ticketingCityCode = null;

    /**
     * Country of ticketing code.Example: USNote: This is the country where the ticket
     * will be issued.OpenTravel Best Practice: Country Code Designation: Unless
     * otherwise noted, all country code designations are two characters and WILL
     * follow ISO 3166 prescribed format.
     *
     * @property string $ticketingCountry
     */
    private $ticketingCountry = null;

    /**
     * Information for negotiated fares and services.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType\NegotiatedFareAType
     * $negotiatedFare
     */
    private $negotiatedFare = null;

    /**
     * The original ticket/document issue information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType\TicketingInformationAType
     * $ticketingInformation
     */
    private $ticketingInformation = null;

    /**
     * Information for private fares and services.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PrivateFareType $privateFare
     */
    private $privateFare = null;

    /**
     * Gets as displayToCode
     *
     * Carrier or Service Record Owner code.Example: RES = all reservation centers
     *
     * @return string
     */
    public function getDisplayToCode()
    {
        return $this->displayToCode;
    }

    /**
     * Sets a new displayToCode
     *
     * Carrier or Service Record Owner code.Example: RES = all reservation centers
     *
     * @param string $displayToCode
     * @return self
     */
    public function setDisplayToCode($displayToCode)
    {
        $this->displayToCode = $displayToCode;

        return $this;
    }

    /**
     * Gets as optionalChargeCode
     *
     * Optional charge code.Example: C = Catalog only, S = Service charge detailsNote:
     * This is a code that indicates if catalog of charges or services are requested
     * along with allowance.
     *
     * @return string
     */
    public function getOptionalChargeCode()
    {
        return $this->optionalChargeCode;
    }

    /**
     * Sets a new optionalChargeCode
     *
     * Optional charge code.Example: C = Catalog only, S = Service charge detailsNote:
     * This is a code that indicates if catalog of charges or services are requested
     * along with allowance.
     *
     * @param string $optionalChargeCode
     * @return self
     */
    public function setOptionalChargeCode($optionalChargeCode)
    {
        $this->optionalChargeCode = $optionalChargeCode;

        return $this;
    }

    /**
     * Gets as pricingRPH
     *
     * Pricing Reference ID.Example: 1Note: This is a unique reference ID for one set
     * of pricing information that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @return string
     */
    public function getPricingRPH()
    {
        return $this->pricingRPH;
    }

    /**
     * Sets a new pricingRPH
     *
     * Pricing Reference ID.Example: 1Note: This is a unique reference ID for one set
     * of pricing information that is set here and may be referenced elsewhere in this
     * message.OpenTravel Best Practice: Using Reference Place Holders: The reference
     * place holder (RPH) is a unique ID assigned to an instance in a collection of
     * like items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @param string $pricingRPH
     * @return self
     */
    public function setPricingRPH($pricingRPH)
    {
        $this->pricingRPH = $pricingRPH;

        return $this;
    }

    /**
     * Gets as saleCountry
     *
     * Country of sale code.Example: usNote: This is the country in which the booking
     * will be made (sold).OpenTravel Best Practice: Country Code Designation: Unless
     * otherwise noted, all country code designations are two characters and WILL
     * follow ISO 3166 prescribed format.
     *
     * @return string
     */
    public function getSaleCountry()
    {
        return $this->saleCountry;
    }

    /**
     * Sets a new saleCountry
     *
     * Country of sale code.Example: usNote: This is the country in which the booking
     * will be made (sold).OpenTravel Best Practice: Country Code Designation: Unless
     * otherwise noted, all country code designations are two characters and WILL
     * follow ISO 3166 prescribed format.
     *
     * @param string $saleCountry
     * @return self
     */
    public function setSaleCountry($saleCountry)
    {
        $this->saleCountry = $saleCountry;

        return $this;
    }

    /**
     * Gets as ticketingCityCode
     *
     * City or airport of ticketing code.Example: TYONote: This is the city or airport
     * code where the ticket will be/ has been issued in IATA encoding.OpenTravel Best
     * Practice: Airport Code Designation: Unless otherwise noted, all airport code
     * designations WILL be three characters and WILL follow IATA airport code
     * prescribed format.OpenTravel Best Practice: City Code Designation: Unless
     * otherwise noted, all city code designations WILL be three characters and WILL
     * follow IATA city code prescribed format.
     *
     * @return string
     */
    public function getTicketingCityCode()
    {
        return $this->ticketingCityCode;
    }

    /**
     * Sets a new ticketingCityCode
     *
     * City or airport of ticketing code.Example: TYONote: This is the city or airport
     * code where the ticket will be/ has been issued in IATA encoding.OpenTravel Best
     * Practice: Airport Code Designation: Unless otherwise noted, all airport code
     * designations WILL be three characters and WILL follow IATA airport code
     * prescribed format.OpenTravel Best Practice: City Code Designation: Unless
     * otherwise noted, all city code designations WILL be three characters and WILL
     * follow IATA city code prescribed format.
     *
     * @param string $ticketingCityCode
     * @return self
     */
    public function setTicketingCityCode($ticketingCityCode)
    {
        $this->ticketingCityCode = $ticketingCityCode;

        return $this;
    }

    /**
     * Gets as ticketingCountry
     *
     * Country of ticketing code.Example: USNote: This is the country where the ticket
     * will be issued.OpenTravel Best Practice: Country Code Designation: Unless
     * otherwise noted, all country code designations are two characters and WILL
     * follow ISO 3166 prescribed format.
     *
     * @return string
     */
    public function getTicketingCountry()
    {
        return $this->ticketingCountry;
    }

    /**
     * Sets a new ticketingCountry
     *
     * Country of ticketing code.Example: USNote: This is the country where the ticket
     * will be issued.OpenTravel Best Practice: Country Code Designation: Unless
     * otherwise noted, all country code designations are two characters and WILL
     * follow ISO 3166 prescribed format.
     *
     * @param string $ticketingCountry
     * @return self
     */
    public function setTicketingCountry($ticketingCountry)
    {
        $this->ticketingCountry = $ticketingCountry;

        return $this;
    }

    /**
     * Gets as negotiatedFare
     *
     * Information for negotiated fares and services.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType\NegotiatedFareAType
     */
    public function getNegotiatedFare()
    {
        return $this->negotiatedFare;
    }

    /**
     * Sets a new negotiatedFare
     *
     * Information for negotiated fares and services.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType\NegotiatedFareAType
     * $negotiatedFare
     * @return self
     */
    public function setNegotiatedFare(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType\NegotiatedFareAType $negotiatedFare
    ) {
        $this->negotiatedFare = $negotiatedFare;

        return $this;
    }

    /**
     * Gets as ticketingInformation
     *
     * The original ticket/document issue information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType\TicketingInformationAType
     */
    public function getTicketingInformation()
    {
        return $this->ticketingInformation;
    }

    /**
     * Sets a new ticketingInformation
     *
     * The original ticket/document issue information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType\TicketingInformationAType
     * $ticketingInformation
     * @return self
     */
    public function setTicketingInformation(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType\TicketingInformationAType $ticketingInformation
    ) {
        $this->ticketingInformation = $ticketingInformation;

        return $this;
    }

    /**
     * Gets as privateFare
     *
     * Information for private fares and services.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PrivateFareType
     */
    public function getPrivateFare()
    {
        return $this->privateFare;
    }

    /**
     * Sets a new privateFare
     *
     * Information for private fares and services.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PrivateFareType $privateFare
     * @return self
     */
    public function setPrivateFare(\Davispeixoto\OpenTravelAlliance\PrivateFareType $privateFare)
    {
        $this->privateFare = $privateFare;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType;

/**
 * Class representing TicketingInfoAType
 */
class TicketingInfoAType
{

    /**
     * This is the IATA airline accounting code for passenger travel.
     *
     * @property string $airlineAccountingCode
     */
    private $airlineAccountingCode = null;

    /**
     * This is the 4 digit form number plus the 6 digit serial number.
     *
     * @property string $formAndSerialNumber
     */
    private $formAndSerialNumber = null;

    /**
     * This is the numeric code assigned by IATA or alpha-numeric pseudo code assigned
     * by the ticketing system.
     *
     * @property string $agencyCode
     */
    private $agencyCode = null;

    /**
     * The country from which the ticket was issued.
     *
     * @property string $countryCodeOfIssue
     */
    private $countryCodeOfIssue = null;

    /**
     * The name of the issuing office (e.g., American Express)
     *
     * @property string $issuingCompanyName
     */
    private $issuingCompanyName = null;

    /**
     * Specifies endorsements or restrictions (e.g., a restriction would read "valid UA
     * only")
     *
     * @property string $endorsementInfo
     */
    private $endorsementInfo = null;

    /**
     * The date the ticket was issued. This date could be the original date of issue
     * (if not reissued) or the reissue date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateOfIssue
     */
    private $dateOfIssue = null;

    /**
     * The original date the ticket was issued.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $originalDateofIssue
     */
    private $originalDateofIssue = null;

    /**
     * ID of the agent that issued the ticket.
     *
     * @property string $issuingAgentID
     */
    private $issuingAgentID = null;

    /**
     * Book number, relative to total number of books (e.g., 1 of 4)
     *
     * @property string $ticketBookReference
     */
    private $ticketBookReference = null;

    /**
     * Used to provide the company common name.
     *
     * @property string $companyShortName
     */
    private $companyShortName = null;

    /**
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @property string $travelSector
     */
    private $travelSector = null;

    /**
     * Identifies a company by the company code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * The country location of the company headquarters.Example: us
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Identifies the coupon to be used to check-in for a flight segment or segments.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType\CouponInfoAType[]
     * $couponInfo
     */
    private $couponInfo = null;

    /**
     * Details pertaining to this ticket.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareType $pricingInfo
     */
    private $pricingInfo = null;

    /**
     * The total amount paid for this ticket (including all forms of payment).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType\PaymentTotalAType
     * $paymentTotal
     */
    private $paymentTotal = null;

    /**
     * The city from which the ticket was issued.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $cityCodeOfIssue
     */
    private $cityCodeOfIssue = null;

    /**
     * The airline confirmation number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $aCNNumber
     */
    private $aCNNumber = null;

    /**
     * Gets as airlineAccountingCode
     *
     * This is the IATA airline accounting code for passenger travel.
     *
     * @return string
     */
    public function getAirlineAccountingCode()
    {
        return $this->airlineAccountingCode;
    }

    /**
     * Sets a new airlineAccountingCode
     *
     * This is the IATA airline accounting code for passenger travel.
     *
     * @param string $airlineAccountingCode
     * @return self
     */
    public function setAirlineAccountingCode($airlineAccountingCode)
    {
        $this->airlineAccountingCode = $airlineAccountingCode;

        return $this;
    }

    /**
     * Gets as formAndSerialNumber
     *
     * This is the 4 digit form number plus the 6 digit serial number.
     *
     * @return string
     */
    public function getFormAndSerialNumber()
    {
        return $this->formAndSerialNumber;
    }

    /**
     * Sets a new formAndSerialNumber
     *
     * This is the 4 digit form number plus the 6 digit serial number.
     *
     * @param string $formAndSerialNumber
     * @return self
     */
    public function setFormAndSerialNumber($formAndSerialNumber)
    {
        $this->formAndSerialNumber = $formAndSerialNumber;

        return $this;
    }

    /**
     * Gets as agencyCode
     *
     * This is the numeric code assigned by IATA or alpha-numeric pseudo code assigned
     * by the ticketing system.
     *
     * @return string
     */
    public function getAgencyCode()
    {
        return $this->agencyCode;
    }

    /**
     * Sets a new agencyCode
     *
     * This is the numeric code assigned by IATA or alpha-numeric pseudo code assigned
     * by the ticketing system.
     *
     * @param string $agencyCode
     * @return self
     */
    public function setAgencyCode($agencyCode)
    {
        $this->agencyCode = $agencyCode;

        return $this;
    }

    /**
     * Gets as countryCodeOfIssue
     *
     * The country from which the ticket was issued.
     *
     * @return string
     */
    public function getCountryCodeOfIssue()
    {
        return $this->countryCodeOfIssue;
    }

    /**
     * Sets a new countryCodeOfIssue
     *
     * The country from which the ticket was issued.
     *
     * @param string $countryCodeOfIssue
     * @return self
     */
    public function setCountryCodeOfIssue($countryCodeOfIssue)
    {
        $this->countryCodeOfIssue = $countryCodeOfIssue;

        return $this;
    }

    /**
     * Gets as issuingCompanyName
     *
     * The name of the issuing office (e.g., American Express)
     *
     * @return string
     */
    public function getIssuingCompanyName()
    {
        return $this->issuingCompanyName;
    }

    /**
     * Sets a new issuingCompanyName
     *
     * The name of the issuing office (e.g., American Express)
     *
     * @param string $issuingCompanyName
     * @return self
     */
    public function setIssuingCompanyName($issuingCompanyName)
    {
        $this->issuingCompanyName = $issuingCompanyName;

        return $this;
    }

    /**
     * Gets as endorsementInfo
     *
     * Specifies endorsements or restrictions (e.g., a restriction would read "valid UA
     * only")
     *
     * @return string
     */
    public function getEndorsementInfo()
    {
        return $this->endorsementInfo;
    }

    /**
     * Sets a new endorsementInfo
     *
     * Specifies endorsements or restrictions (e.g., a restriction would read "valid UA
     * only")
     *
     * @param string $endorsementInfo
     * @return self
     */
    public function setEndorsementInfo($endorsementInfo)
    {
        $this->endorsementInfo = $endorsementInfo;

        return $this;
    }

    /**
     * Gets as dateOfIssue
     *
     * The date the ticket was issued. This date could be the original date of issue
     * (if not reissued) or the reissue date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDateOfIssue()
    {
        return $this->dateOfIssue;
    }

    /**
     * Sets a new dateOfIssue
     *
     * The date the ticket was issued. This date could be the original date of issue
     * (if not reissued) or the reissue date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateOfIssue
     * @return self
     */
    public function setDateOfIssue(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateOfIssue)
    {
        $this->dateOfIssue = $dateOfIssue;

        return $this;
    }

    /**
     * Gets as originalDateofIssue
     *
     * The original date the ticket was issued.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getOriginalDateofIssue()
    {
        return $this->originalDateofIssue;
    }

    /**
     * Sets a new originalDateofIssue
     *
     * The original date the ticket was issued.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $originalDateofIssue
     * @return self
     */
    public function setOriginalDateofIssue(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $originalDateofIssue)
    {
        $this->originalDateofIssue = $originalDateofIssue;

        return $this;
    }

    /**
     * Gets as issuingAgentID
     *
     * ID of the agent that issued the ticket.
     *
     * @return string
     */
    public function getIssuingAgentID()
    {
        return $this->issuingAgentID;
    }

    /**
     * Sets a new issuingAgentID
     *
     * ID of the agent that issued the ticket.
     *
     * @param string $issuingAgentID
     * @return self
     */
    public function setIssuingAgentID($issuingAgentID)
    {
        $this->issuingAgentID = $issuingAgentID;

        return $this;
    }

    /**
     * Gets as ticketBookReference
     *
     * Book number, relative to total number of books (e.g., 1 of 4)
     *
     * @return string
     */
    public function getTicketBookReference()
    {
        return $this->ticketBookReference;
    }

    /**
     * Sets a new ticketBookReference
     *
     * Book number, relative to total number of books (e.g., 1 of 4)
     *
     * @param string $ticketBookReference
     * @return self
     */
    public function setTicketBookReference($ticketBookReference)
    {
        $this->ticketBookReference = $ticketBookReference;

        return $this;
    }

    /**
     * Gets as companyShortName
     *
     * Used to provide the company common name.
     *
     * @return string
     */
    public function getCompanyShortName()
    {
        return $this->companyShortName;
    }

    /**
     * Sets a new companyShortName
     *
     * Used to provide the company common name.
     *
     * @param string $companyShortName
     * @return self
     */
    public function setCompanyShortName($companyShortName)
    {
        $this->companyShortName = $companyShortName;

        return $this;
    }

    /**
     * Gets as travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;

        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies a company by the company code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identifies a company by the company code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as countryCode
     *
     * The country location of the company headquarters.Example: us
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The country location of the company headquarters.Example: us
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Adds as couponInfo
     *
     * Identifies the coupon to be used to check-in for a flight segment or segments.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType\CouponInfoAType
     * $couponInfo
     */
    public function addToCouponInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType\CouponInfoAType $couponInfo
    ) {
        $this->couponInfo[] = $couponInfo;

        return $this;
    }

    /**
     * isset couponInfo
     *
     * Identifies the coupon to be used to check-in for a flight segment or segments.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCouponInfo($index)
    {
        return isset($this->couponInfo[$index]);
    }

    /**
     * unset couponInfo
     *
     * Identifies the coupon to be used to check-in for a flight segment or segments.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCouponInfo($index)
    {
        unset($this->couponInfo[$index]);
    }

    /**
     * Gets as couponInfo
     *
     * Identifies the coupon to be used to check-in for a flight segment or segments.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType\CouponInfoAType[]
     */
    public function getCouponInfo()
    {
        return $this->couponInfo;
    }

    /**
     * Sets a new couponInfo
     *
     * Identifies the coupon to be used to check-in for a flight segment or segments.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType\CouponInfoAType[]
     * $couponInfo
     * @return self
     */
    public function setCouponInfo(array $couponInfo)
    {
        $this->couponInfo = $couponInfo;

        return $this;
    }

    /**
     * Gets as pricingInfo
     *
     * Details pertaining to this ticket.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareType
     */
    public function getPricingInfo()
    {
        return $this->pricingInfo;
    }

    /**
     * Sets a new pricingInfo
     *
     * Details pertaining to this ticket.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareType $pricingInfo
     * @return self
     */
    public function setPricingInfo(\Davispeixoto\OpenTravelAlliance\FareType $pricingInfo)
    {
        $this->pricingInfo = $pricingInfo;

        return $this;
    }

    /**
     * Gets as paymentTotal
     *
     * The total amount paid for this ticket (including all forms of payment).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType\PaymentTotalAType
     */
    public function getPaymentTotal()
    {
        return $this->paymentTotal;
    }

    /**
     * Sets a new paymentTotal
     *
     * The total amount paid for this ticket (including all forms of payment).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType\PaymentTotalAType
     * $paymentTotal
     * @return self
     */
    public function setPaymentTotal(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType\PaymentTotalAType $paymentTotal
    ) {
        $this->paymentTotal = $paymentTotal;

        return $this;
    }

    /**
     * Gets as cityCodeOfIssue
     *
     * The city from which the ticket was issued.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getCityCodeOfIssue()
    {
        return $this->cityCodeOfIssue;
    }

    /**
     * Sets a new cityCodeOfIssue
     *
     * The city from which the ticket was issued.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $cityCodeOfIssue
     * @return self
     */
    public function setCityCodeOfIssue(\Davispeixoto\OpenTravelAlliance\LocationType $cityCodeOfIssue)
    {
        $this->cityCodeOfIssue = $cityCodeOfIssue;

        return $this;
    }

    /**
     * Gets as aCNNumber
     *
     * The airline confirmation number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getACNNumber()
    {
        return $this->aCNNumber;
    }

    /**
     * Sets a new aCNNumber
     *
     * The airline confirmation number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $aCNNumber
     * @return self
     */
    public function setACNNumber(\Davispeixoto\OpenTravelAlliance\UniqueIDType $aCNNumber)
    {
        $this->aCNNumber = $aCNNumber;

        return $this;
    }


}


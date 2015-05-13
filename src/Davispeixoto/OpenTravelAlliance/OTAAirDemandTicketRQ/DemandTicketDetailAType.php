<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ;

/**
 * Class representing DemandTicketDetailAType
 *
 * Specifies the plating carrier code.
 */
class DemandTicketDetailAType
{

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
     * When true, a bulk ticket applies.
     *
     * @property boolean $bulkTicketInd
     */
    private $bulkTicketInd = null;

    /**
     * A tour number that may be printed on the ticket or override an existing tour
     * number in the PNR.
     *
     * @property string $tourCode
     */
    private $tourCode = null;

    /**
     * The agency information to be printed on the printed itinerary and/or invoice.
     *
     * @property string $issuingAgentInfo
     */
    private $issuingAgentInfo = null;

    /**
     * Specifies the purpose of the trip, i.e., business, personal. Refer to OpenTravel
     * Code List Travel Purpose (TVP).
     *
     * @property string $travelPurposeCode
     */
    private $travelPurposeCode = null;

    /**
     * The destination code for the itinerary. Required for Canada and Bermuda BSP's.
     *
     * @property integer $destRegion
     */
    private $destRegion = null;

    /**
     * Used to specify the carrier agreement code, also known as a contract code.
     *
     * @property string $carrierAgreementRef
     */
    private $carrierAgreementRef = null;

    /**
     * Encoded data relating to the fare agreement with the airline.
     *
     * @property string $valueCode
     */
    private $valueCode = null;

    /**
     * Provides a ticketing record number to be used in the ticketing of the itinerary.
     *
     * @property integer $ticketingRecordNbr
     */
    private $ticketingRecordNbr = null;

    /**
     * When true, all ticket numbers should be returned.
     *
     * @property boolean $returnAllTktNbrsInd
     */
    private $returnAllTktNbrsInd = null;

    /**
     * When true, the ticket fee information should not be printed on the
     * itinerary/invoice.
     *
     * @property boolean $suppressTktFeeInd
     */
    private $suppressTktFeeInd = null;

    /**
     * Specifies the ticketing function to be done - an ET, itinerary invoice, EMD,
     * automated MCO or a combination of functions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\MessageFunctionAType[]
     * $messageFunction
     */
    private $messageFunction = null;

    /**
     * The PNR record locator for which a ticket is requested.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * The information needed when a passenger presents a discount/promotional coupon
     * for a dollar/percentage of the fare or when a passenger qualifies for a
     * percentage discount such as a senior discount.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\CustomDiscountPricingAType
     * $customDiscountPricing
     */
    private $customDiscountPricing = null;

    /**
     * The form of payment information for the ticket to be issued.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType[]
     * $paymentInfo
     */
    private $paymentInfo = null;

    /**
     * Remark provided to ensure common understanding between the passenger and the
     * airline concerning any restrictions that may apply.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\EndorsementAType[]
     * $endorsement
     */
    private $endorsement = null;

    /**
     * Information specifying the commission to be paid.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\CommissionAType[]
     * $commission
     */
    private $commission = null;

    /**
     * A reference to the passenger name number to be ticketed. A range of name numbers
     * may also be requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PassengerNameReferenceAType[]
     * $passengerNameReference
     */
    private $passengerNameReference = null;

    /**
     * The name of the passenger as in the PNR.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PassengerNameAType[]
     * $passengerName
     */
    private $passengerName = null;

    /**
     * A reference to a flight segment in a passenger name record.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\FlightReferenceAType[]
     * $flightReference
     */
    private $flightReference = null;

    /**
     * The service fee information for an associated document, such as a miscellaneous
     * charge order or TASF. This may be a fee the travel agent charges for a booking
     * or for delivering an itinerary.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\TravelAgencyServiceFeeAType[]
     * $travelAgencyServiceFee
     */
    private $travelAgencyServiceFee = null;

    /**
     * Information to specify the queue on which a PNR should be placed after the
     * ticket is isssued.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\QueuePNRAType
     * $queuePNR
     */
    private $queuePNR = null;

    /**
     * A container of document instructions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\DocumentInstructionsAType
     * $documentInstructions
     */
    private $documentInstructions = null;

    /**
     * An instruction for pricing the itinerary at the time of issuing a ticket.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PricingInstructionAType
     * $pricingInstruction
     */
    private $pricingInstruction = null;

    /**
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType $eMDInfo
     */
    private $eMDInfo = null;

    /**
     * Merchandising offers associated with the fare or traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer
     */
    private $offer = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Gets as bulkTicketInd
     *
     * When true, a bulk ticket applies.
     *
     * @return boolean
     */
    public function getBulkTicketInd()
    {
        return $this->bulkTicketInd;
    }

    /**
     * Sets a new bulkTicketInd
     *
     * When true, a bulk ticket applies.
     *
     * @param boolean $bulkTicketInd
     * @return self
     */
    public function setBulkTicketInd($bulkTicketInd)
    {
        $this->bulkTicketInd = $bulkTicketInd;

        return $this;
    }

    /**
     * Gets as tourCode
     *
     * A tour number that may be printed on the ticket or override an existing tour
     * number in the PNR.
     *
     * @return string
     */
    public function getTourCode()
    {
        return $this->tourCode;
    }

    /**
     * Sets a new tourCode
     *
     * A tour number that may be printed on the ticket or override an existing tour
     * number in the PNR.
     *
     * @param string $tourCode
     * @return self
     */
    public function setTourCode($tourCode)
    {
        $this->tourCode = $tourCode;

        return $this;
    }

    /**
     * Gets as issuingAgentInfo
     *
     * The agency information to be printed on the printed itinerary and/or invoice.
     *
     * @return string
     */
    public function getIssuingAgentInfo()
    {
        return $this->issuingAgentInfo;
    }

    /**
     * Sets a new issuingAgentInfo
     *
     * The agency information to be printed on the printed itinerary and/or invoice.
     *
     * @param string $issuingAgentInfo
     * @return self
     */
    public function setIssuingAgentInfo($issuingAgentInfo)
    {
        $this->issuingAgentInfo = $issuingAgentInfo;

        return $this;
    }

    /**
     * Gets as travelPurposeCode
     *
     * Specifies the purpose of the trip, i.e., business, personal. Refer to OpenTravel
     * Code List Travel Purpose (TVP).
     *
     * @return string
     */
    public function getTravelPurposeCode()
    {
        return $this->travelPurposeCode;
    }

    /**
     * Sets a new travelPurposeCode
     *
     * Specifies the purpose of the trip, i.e., business, personal. Refer to OpenTravel
     * Code List Travel Purpose (TVP).
     *
     * @param string $travelPurposeCode
     * @return self
     */
    public function setTravelPurposeCode($travelPurposeCode)
    {
        $this->travelPurposeCode = $travelPurposeCode;

        return $this;
    }

    /**
     * Gets as destRegion
     *
     * The destination code for the itinerary. Required for Canada and Bermuda BSP's.
     *
     * @return integer
     */
    public function getDestRegion()
    {
        return $this->destRegion;
    }

    /**
     * Sets a new destRegion
     *
     * The destination code for the itinerary. Required for Canada and Bermuda BSP's.
     *
     * @param integer $destRegion
     * @return self
     */
    public function setDestRegion($destRegion)
    {
        $this->destRegion = $destRegion;

        return $this;
    }

    /**
     * Gets as carrierAgreementRef
     *
     * Used to specify the carrier agreement code, also known as a contract code.
     *
     * @return string
     */
    public function getCarrierAgreementRef()
    {
        return $this->carrierAgreementRef;
    }

    /**
     * Sets a new carrierAgreementRef
     *
     * Used to specify the carrier agreement code, also known as a contract code.
     *
     * @param string $carrierAgreementRef
     * @return self
     */
    public function setCarrierAgreementRef($carrierAgreementRef)
    {
        $this->carrierAgreementRef = $carrierAgreementRef;

        return $this;
    }

    /**
     * Gets as valueCode
     *
     * Encoded data relating to the fare agreement with the airline.
     *
     * @return string
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * Sets a new valueCode
     *
     * Encoded data relating to the fare agreement with the airline.
     *
     * @param string $valueCode
     * @return self
     */
    public function setValueCode($valueCode)
    {
        $this->valueCode = $valueCode;

        return $this;
    }

    /**
     * Gets as ticketingRecordNbr
     *
     * Provides a ticketing record number to be used in the ticketing of the itinerary.
     *
     * @return integer
     */
    public function getTicketingRecordNbr()
    {
        return $this->ticketingRecordNbr;
    }

    /**
     * Sets a new ticketingRecordNbr
     *
     * Provides a ticketing record number to be used in the ticketing of the itinerary.
     *
     * @param integer $ticketingRecordNbr
     * @return self
     */
    public function setTicketingRecordNbr($ticketingRecordNbr)
    {
        $this->ticketingRecordNbr = $ticketingRecordNbr;

        return $this;
    }

    /**
     * Gets as returnAllTktNbrsInd
     *
     * When true, all ticket numbers should be returned.
     *
     * @return boolean
     */
    public function getReturnAllTktNbrsInd()
    {
        return $this->returnAllTktNbrsInd;
    }

    /**
     * Sets a new returnAllTktNbrsInd
     *
     * When true, all ticket numbers should be returned.
     *
     * @param boolean $returnAllTktNbrsInd
     * @return self
     */
    public function setReturnAllTktNbrsInd($returnAllTktNbrsInd)
    {
        $this->returnAllTktNbrsInd = $returnAllTktNbrsInd;

        return $this;
    }

    /**
     * Gets as suppressTktFeeInd
     *
     * When true, the ticket fee information should not be printed on the
     * itinerary/invoice.
     *
     * @return boolean
     */
    public function getSuppressTktFeeInd()
    {
        return $this->suppressTktFeeInd;
    }

    /**
     * Sets a new suppressTktFeeInd
     *
     * When true, the ticket fee information should not be printed on the
     * itinerary/invoice.
     *
     * @param boolean $suppressTktFeeInd
     * @return self
     */
    public function setSuppressTktFeeInd($suppressTktFeeInd)
    {
        $this->suppressTktFeeInd = $suppressTktFeeInd;

        return $this;
    }

    /**
     * Adds as messageFunction
     *
     * Specifies the ticketing function to be done - an ET, itinerary invoice, EMD,
     * automated MCO or a combination of functions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\MessageFunctionAType
     * $messageFunction
     */
    public function addToMessageFunction(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\MessageFunctionAType $messageFunction
    ) {
        $this->messageFunction[] = $messageFunction;

        return $this;
    }

    /**
     * isset messageFunction
     *
     * Specifies the ticketing function to be done - an ET, itinerary invoice, EMD,
     * automated MCO or a combination of functions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessageFunction($index)
    {
        return isset($this->messageFunction[$index]);
    }

    /**
     * unset messageFunction
     *
     * Specifies the ticketing function to be done - an ET, itinerary invoice, EMD,
     * automated MCO or a combination of functions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessageFunction($index)
    {
        unset($this->messageFunction[$index]);
    }

    /**
     * Gets as messageFunction
     *
     * Specifies the ticketing function to be done - an ET, itinerary invoice, EMD,
     * automated MCO or a combination of functions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\MessageFunctionAType[]
     */
    public function getMessageFunction()
    {
        return $this->messageFunction;
    }

    /**
     * Sets a new messageFunction
     *
     * Specifies the ticketing function to be done - an ET, itinerary invoice, EMD,
     * automated MCO or a combination of functions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\MessageFunctionAType[]
     * $messageFunction
     * @return self
     */
    public function setMessageFunction(array $messageFunction)
    {
        $this->messageFunction = $messageFunction;

        return $this;
    }

    /**
     * Gets as bookingReferenceID
     *
     * The PNR record locator for which a ticket is requested.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The PNR record locator for which a ticket is requested.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }

    /**
     * Gets as customDiscountPricing
     *
     * The information needed when a passenger presents a discount/promotional coupon
     * for a dollar/percentage of the fare or when a passenger qualifies for a
     * percentage discount such as a senior discount.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\CustomDiscountPricingAType
     */
    public function getCustomDiscountPricing()
    {
        return $this->customDiscountPricing;
    }

    /**
     * Sets a new customDiscountPricing
     *
     * The information needed when a passenger presents a discount/promotional coupon
     * for a dollar/percentage of the fare or when a passenger qualifies for a
     * percentage discount such as a senior discount.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\CustomDiscountPricingAType
     * $customDiscountPricing
     * @return self
     */
    public function setCustomDiscountPricing(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\CustomDiscountPricingAType $customDiscountPricing
    ) {
        $this->customDiscountPricing = $customDiscountPricing;

        return $this;
    }

    /**
     * Adds as paymentInfo
     *
     * The form of payment information for the ticket to be issued.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType
     * $paymentInfo
     */
    public function addToPaymentInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType $paymentInfo
    ) {
        $this->paymentInfo[] = $paymentInfo;

        return $this;
    }

    /**
     * isset paymentInfo
     *
     * The form of payment information for the ticket to be issued.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentInfo($index)
    {
        return isset($this->paymentInfo[$index]);
    }

    /**
     * unset paymentInfo
     *
     * The form of payment information for the ticket to be issued.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentInfo($index)
    {
        unset($this->paymentInfo[$index]);
    }

    /**
     * Gets as paymentInfo
     *
     * The form of payment information for the ticket to be issued.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType[]
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo;
    }

    /**
     * Sets a new paymentInfo
     *
     * The form of payment information for the ticket to be issued.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType[]
     * $paymentInfo
     * @return self
     */
    public function setPaymentInfo(array $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * Adds as endorsement
     *
     * Remark provided to ensure common understanding between the passenger and the
     * airline concerning any restrictions that may apply.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\EndorsementAType
     * $endorsement
     */
    public function addToEndorsement(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\EndorsementAType $endorsement
    ) {
        $this->endorsement[] = $endorsement;

        return $this;
    }

    /**
     * isset endorsement
     *
     * Remark provided to ensure common understanding between the passenger and the
     * airline concerning any restrictions that may apply.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEndorsement($index)
    {
        return isset($this->endorsement[$index]);
    }

    /**
     * unset endorsement
     *
     * Remark provided to ensure common understanding between the passenger and the
     * airline concerning any restrictions that may apply.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEndorsement($index)
    {
        unset($this->endorsement[$index]);
    }

    /**
     * Gets as endorsement
     *
     * Remark provided to ensure common understanding between the passenger and the
     * airline concerning any restrictions that may apply.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\EndorsementAType[]
     */
    public function getEndorsement()
    {
        return $this->endorsement;
    }

    /**
     * Sets a new endorsement
     *
     * Remark provided to ensure common understanding between the passenger and the
     * airline concerning any restrictions that may apply.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\EndorsementAType[]
     * $endorsement
     * @return self
     */
    public function setEndorsement(array $endorsement)
    {
        $this->endorsement = $endorsement;

        return $this;
    }

    /**
     * Adds as commission
     *
     * Information specifying the commission to be paid.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\CommissionAType
     * $commission
     */
    public function addToCommission(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\CommissionAType $commission
    ) {
        $this->commission[] = $commission;

        return $this;
    }

    /**
     * isset commission
     *
     * Information specifying the commission to be paid.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommission($index)
    {
        return isset($this->commission[$index]);
    }

    /**
     * unset commission
     *
     * Information specifying the commission to be paid.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommission($index)
    {
        unset($this->commission[$index]);
    }

    /**
     * Gets as commission
     *
     * Information specifying the commission to be paid.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\CommissionAType[]
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Information specifying the commission to be paid.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\CommissionAType[]
     * $commission
     * @return self
     */
    public function setCommission(array $commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Adds as passengerNameReference
     *
     * A reference to the passenger name number to be ticketed. A range of name numbers
     * may also be requested.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PassengerNameReferenceAType
     * $passengerNameReference
     */
    public function addToPassengerNameReference(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PassengerNameReferenceAType $passengerNameReference
    ) {
        $this->passengerNameReference[] = $passengerNameReference;

        return $this;
    }

    /**
     * isset passengerNameReference
     *
     * A reference to the passenger name number to be ticketed. A range of name numbers
     * may also be requested.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerNameReference($index)
    {
        return isset($this->passengerNameReference[$index]);
    }

    /**
     * unset passengerNameReference
     *
     * A reference to the passenger name number to be ticketed. A range of name numbers
     * may also be requested.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerNameReference($index)
    {
        unset($this->passengerNameReference[$index]);
    }

    /**
     * Gets as passengerNameReference
     *
     * A reference to the passenger name number to be ticketed. A range of name numbers
     * may also be requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PassengerNameReferenceAType[]
     */
    public function getPassengerNameReference()
    {
        return $this->passengerNameReference;
    }

    /**
     * Sets a new passengerNameReference
     *
     * A reference to the passenger name number to be ticketed. A range of name numbers
     * may also be requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PassengerNameReferenceAType[]
     * $passengerNameReference
     * @return self
     */
    public function setPassengerNameReference(array $passengerNameReference)
    {
        $this->passengerNameReference = $passengerNameReference;

        return $this;
    }

    /**
     * Adds as passengerName
     *
     * The name of the passenger as in the PNR.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PassengerNameAType
     * $passengerName
     */
    public function addToPassengerName(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PassengerNameAType $passengerName
    ) {
        $this->passengerName[] = $passengerName;

        return $this;
    }

    /**
     * isset passengerName
     *
     * The name of the passenger as in the PNR.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerName($index)
    {
        return isset($this->passengerName[$index]);
    }

    /**
     * unset passengerName
     *
     * The name of the passenger as in the PNR.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerName($index)
    {
        unset($this->passengerName[$index]);
    }

    /**
     * Gets as passengerName
     *
     * The name of the passenger as in the PNR.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PassengerNameAType[]
     */
    public function getPassengerName()
    {
        return $this->passengerName;
    }

    /**
     * Sets a new passengerName
     *
     * The name of the passenger as in the PNR.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PassengerNameAType[]
     * $passengerName
     * @return self
     */
    public function setPassengerName(array $passengerName)
    {
        $this->passengerName = $passengerName;

        return $this;
    }

    /**
     * Adds as flightReference
     *
     * A reference to a flight segment in a passenger name record.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\FlightReferenceAType
     * $flightReference
     */
    public function addToFlightReference(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\FlightReferenceAType $flightReference
    ) {
        $this->flightReference[] = $flightReference;

        return $this;
    }

    /**
     * isset flightReference
     *
     * A reference to a flight segment in a passenger name record.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightReference($index)
    {
        return isset($this->flightReference[$index]);
    }

    /**
     * unset flightReference
     *
     * A reference to a flight segment in a passenger name record.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightReference($index)
    {
        unset($this->flightReference[$index]);
    }

    /**
     * Gets as flightReference
     *
     * A reference to a flight segment in a passenger name record.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\FlightReferenceAType[]
     */
    public function getFlightReference()
    {
        return $this->flightReference;
    }

    /**
     * Sets a new flightReference
     *
     * A reference to a flight segment in a passenger name record.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\FlightReferenceAType[]
     * $flightReference
     * @return self
     */
    public function setFlightReference(array $flightReference)
    {
        $this->flightReference = $flightReference;

        return $this;
    }

    /**
     * Adds as travelAgencyServiceFee
     *
     * The service fee information for an associated document, such as a miscellaneous
     * charge order or TASF. This may be a fee the travel agent charges for a booking
     * or for delivering an itinerary.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\TravelAgencyServiceFeeAType
     * $travelAgencyServiceFee
     */
    public function addToTravelAgencyServiceFee(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\TravelAgencyServiceFeeAType $travelAgencyServiceFee
    ) {
        $this->travelAgencyServiceFee[] = $travelAgencyServiceFee;

        return $this;
    }

    /**
     * isset travelAgencyServiceFee
     *
     * The service fee information for an associated document, such as a miscellaneous
     * charge order or TASF. This may be a fee the travel agent charges for a booking
     * or for delivering an itinerary.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelAgencyServiceFee($index)
    {
        return isset($this->travelAgencyServiceFee[$index]);
    }

    /**
     * unset travelAgencyServiceFee
     *
     * The service fee information for an associated document, such as a miscellaneous
     * charge order or TASF. This may be a fee the travel agent charges for a booking
     * or for delivering an itinerary.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelAgencyServiceFee($index)
    {
        unset($this->travelAgencyServiceFee[$index]);
    }

    /**
     * Gets as travelAgencyServiceFee
     *
     * The service fee information for an associated document, such as a miscellaneous
     * charge order or TASF. This may be a fee the travel agent charges for a booking
     * or for delivering an itinerary.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\TravelAgencyServiceFeeAType[]
     */
    public function getTravelAgencyServiceFee()
    {
        return $this->travelAgencyServiceFee;
    }

    /**
     * Sets a new travelAgencyServiceFee
     *
     * The service fee information for an associated document, such as a miscellaneous
     * charge order or TASF. This may be a fee the travel agent charges for a booking
     * or for delivering an itinerary.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\TravelAgencyServiceFeeAType[]
     * $travelAgencyServiceFee
     * @return self
     */
    public function setTravelAgencyServiceFee(array $travelAgencyServiceFee)
    {
        $this->travelAgencyServiceFee = $travelAgencyServiceFee;

        return $this;
    }

    /**
     * Gets as queuePNR
     *
     * Information to specify the queue on which a PNR should be placed after the
     * ticket is isssued.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\QueuePNRAType
     */
    public function getQueuePNR()
    {
        return $this->queuePNR;
    }

    /**
     * Sets a new queuePNR
     *
     * Information to specify the queue on which a PNR should be placed after the
     * ticket is isssued.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\QueuePNRAType
     * $queuePNR
     * @return self
     */
    public function setQueuePNR(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\QueuePNRAType $queuePNR
    ) {
        $this->queuePNR = $queuePNR;

        return $this;
    }

    /**
     * Gets as documentInstructions
     *
     * A container of document instructions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\DocumentInstructionsAType
     */
    public function getDocumentInstructions()
    {
        return $this->documentInstructions;
    }

    /**
     * Sets a new documentInstructions
     *
     * A container of document instructions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\DocumentInstructionsAType
     * $documentInstructions
     * @return self
     */
    public function setDocumentInstructions(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\DocumentInstructionsAType $documentInstructions
    ) {
        $this->documentInstructions = $documentInstructions;

        return $this;
    }

    /**
     * Gets as pricingInstruction
     *
     * An instruction for pricing the itinerary at the time of issuing a ticket.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PricingInstructionAType
     */
    public function getPricingInstruction()
    {
        return $this->pricingInstruction;
    }

    /**
     * Sets a new pricingInstruction
     *
     * An instruction for pricing the itinerary at the time of issuing a ticket.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PricingInstructionAType
     * $pricingInstruction
     * @return self
     */
    public function setPricingInstruction(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PricingInstructionAType $pricingInstruction
    ) {
        $this->pricingInstruction = $pricingInstruction;

        return $this;
    }

    /**
     * Gets as eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType
     */
    public function getEMDInfo()
    {
        return $this->eMDInfo;
    }

    /**
     * Sets a new eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType $eMDInfo
     * @return self
     */
    public function setEMDInfo(\Davispeixoto\OpenTravelAlliance\EMDType $eMDInfo)
    {
        $this->eMDInfo = $eMDInfo;

        return $this;
    }

    /**
     * Gets as offer
     *
     * Merchandising offers associated with the fare or traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * Merchandising offers associated with the fare or traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer
     * @return self
     */
    public function setOffer(\Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer)
    {
        $this->offer = $offer;

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


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing EMDType
 *
 * A container for electronic miscellaneous document information
 * XSD Type: EMD_Type
 */
class EMDType
{

    /**
     * Total number of flight segments.
     *
     * @property integer $totalFltSegQty
     */
    private $totalFltSegQty = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Passenger specific data.
     *
     * @property string $specificData
     */
    private $specificData = null;

    /**
     * When true, a tax is to be calculated by the BSP Processing Centre.
     *
     * @property boolean $taxOnCommissionInd
     */
    private $taxOnCommissionInd = null;

    /**
     * An indication of the method of ticket generation. Refer to OpenTravel Code List
     * EMD Ticketing Mode Code-5387 (ETM).
     *
     * @property string $ticketingModeCode
     */
    private $ticketingModeCode = null;

    /**
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an
     * eticket.)
     *
     * @property string $eMDType
     */
    private $eMDType = null;

    /**
     * When true, indicates that it is a quote type EMD or if false is an issued EMD.
     *
     * @property boolean $quoteInd
     */
    private $quoteInd = null;

    /**
     * Indicates the required modification to the element.
     *
     * @property string $operation
     */
    private $operation = null;

    /**
     * Provides a reference to a specific EMD.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Direct reference of traveler assigned by requesting system. Used as a cross
     * reference between data segments.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\TravelerRefNumberAType
     * $travelerRefNumber
     */
    private $travelerRefNumber = null;

    /**
     * The agent numeric code, booking agent id, issuing agent id and/or servicing
     * airline/system provider ID.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $agentID
     */
    private $agentID = null;

    /**
     * The payment information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentDetailType[] $paymentDetail
     */
    private $paymentDetail = null;

    /**
     * The true origin and destination.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\OriginDestinationAType
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\CustLoyaltyAType[]
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Endorsement/ restriction remarks.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\EndorsementAType $endorsement
     */
    private $endorsement = null;

    /**
     * ID contains the actual identifier (e.g. invoice, airline confirmation number,
     * customer id or airline indexing field.)
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $addReferenceID
     */
    private $addReferenceID = null;

    /**
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\BaseFareAType[] $baseFare
     */
    private $baseFare = null;

    /**
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\EquivFareAType[] $equivFare
     */
    private $equivFare = null;

    /**
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\TotalFareAType[] $totalFare
     */
    private $totalFare = null;

    /**
     * A collection of taxes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\TaxesAType\TaxAType[] $taxes
     */
    private $taxes = null;

    /**
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\UnstructuredFareCalcAType[]
     * $unstructuredFareCalc
     */
    private $unstructuredFareCalc = null;

    /**
     * Nonendorsable and nonrefundable indicators, penalty restriction indicator,
     * pricing system, tour code, ISO country code, around the world fare indicator and
     * non-reissuable/non-exchangeable indicator.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\FareInfoAType $fareInfo
     */
    private $fareInfo = null;

    /**
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\TicketDocumentAType[]
     * $ticketDocument
     */
    private $ticketDocument = null;

    /**
     * Commission information for this ticket/document.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\CommissionAType $commission
     */
    private $commission = null;

    /**
     * Price quote date, account code, input designator, component count and bank
     * exchange rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareComponentType $fareComponent
     */
    private $fareComponent = null;

    /**
     * Data for the collection of non-airport/ government fees.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType
     * $carrierFeeInfo
     */
    private $carrierFeeInfo = null;

    /**
     * The exchanged residual fare component information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType[]
     * $exchResidualFareComponent
     */
    private $exchResidualFareComponent = null;

    /**
     * The original ticket/document issue information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\OriginalIssueInfoAType
     * $originalIssueInfo
     */
    private $originalIssueInfo = null;

    /**
     * The reissued flown flight coupon information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\ReissuedFlownAType[]
     * $reissuedFlown
     */
    private $reissuedFlown = null;

    /**
     * A response message from the controlling carrier.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType $responseComment
     */
    private $responseComment = null;

    /**
     * The present to and at information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\PresentInfoAType $presentInfo
     */
    private $presentInfo = null;

    /**
     * The reason for issuance information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\ReasonForIssuanceAType
     * $reasonForIssuance
     */
    private $reasonForIssuance = null;

    /**
     * The validating airline for all EMD's for this passenger.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\ValidatingAirlineAType
     * $validatingAirline
     */
    private $validatingAirline = null;

    /**
     * Used to specify tax coupon information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType
     * $taxCouponInformation
     */
    private $taxCouponInformation = null;

    /**
     * Gets as totalFltSegQty
     *
     * Total number of flight segments.
     *
     * @return integer
     */
    public function getTotalFltSegQty()
    {
        return $this->totalFltSegQty;
    }

    /**
     * Sets a new totalFltSegQty
     *
     * Total number of flight segments.
     *
     * @param integer $totalFltSegQty
     * @return self
     */
    public function setTotalFltSegQty($totalFltSegQty)
    {
        $this->totalFltSegQty = $totalFltSegQty;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as specificData
     *
     * Passenger specific data.
     *
     * @return string
     */
    public function getSpecificData()
    {
        return $this->specificData;
    }

    /**
     * Sets a new specificData
     *
     * Passenger specific data.
     *
     * @param string $specificData
     * @return self
     */
    public function setSpecificData($specificData)
    {
        $this->specificData = $specificData;

        return $this;
    }

    /**
     * Gets as taxOnCommissionInd
     *
     * When true, a tax is to be calculated by the BSP Processing Centre.
     *
     * @return boolean
     */
    public function getTaxOnCommissionInd()
    {
        return $this->taxOnCommissionInd;
    }

    /**
     * Sets a new taxOnCommissionInd
     *
     * When true, a tax is to be calculated by the BSP Processing Centre.
     *
     * @param boolean $taxOnCommissionInd
     * @return self
     */
    public function setTaxOnCommissionInd($taxOnCommissionInd)
    {
        $this->taxOnCommissionInd = $taxOnCommissionInd;

        return $this;
    }

    /**
     * Gets as ticketingModeCode
     *
     * An indication of the method of ticket generation. Refer to OpenTravel Code List
     * EMD Ticketing Mode Code-5387 (ETM).
     *
     * @return string
     */
    public function getTicketingModeCode()
    {
        return $this->ticketingModeCode;
    }

    /**
     * Sets a new ticketingModeCode
     *
     * An indication of the method of ticket generation. Refer to OpenTravel Code List
     * EMD Ticketing Mode Code-5387 (ETM).
     *
     * @param string $ticketingModeCode
     * @return self
     */
    public function setTicketingModeCode($ticketingModeCode)
    {
        $this->ticketingModeCode = $ticketingModeCode;

        return $this;
    }

    /**
     * Gets as eMDType
     *
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an
     * eticket.)
     *
     * @return string
     */
    public function getEMDType()
    {
        return $this->eMDType;
    }

    /**
     * Sets a new eMDType
     *
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an
     * eticket.)
     *
     * @param string $eMDType
     * @return self
     */
    public function setEMDType($eMDType)
    {
        $this->eMDType = $eMDType;

        return $this;
    }

    /**
     * Gets as quoteInd
     *
     * When true, indicates that it is a quote type EMD or if false is an issued EMD.
     *
     * @return boolean
     */
    public function getQuoteInd()
    {
        return $this->quoteInd;
    }

    /**
     * Sets a new quoteInd
     *
     * When true, indicates that it is a quote type EMD or if false is an issued EMD.
     *
     * @param boolean $quoteInd
     * @return self
     */
    public function setQuoteInd($quoteInd)
    {
        $this->quoteInd = $quoteInd;

        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * Provides a reference to a specific EMD.
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
     * Provides a reference to a specific EMD.
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
     * Gets as travelerRefNumber
     *
     * Direct reference of traveler assigned by requesting system. Used as a cross
     * reference between data segments.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\TravelerRefNumberAType
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * Direct reference of traveler assigned by requesting system. Used as a cross
     * reference between data segments.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\TravelerRefNumberAType
     * $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(
        \Davispeixoto\OpenTravelAlliance\EMDType\TravelerRefNumberAType $travelerRefNumber
    ) {
        $this->travelerRefNumber = $travelerRefNumber;

        return $this;
    }

    /**
     * Adds as agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing
     * airline/system provider ID.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $agentID
     */
    public function addToAgentID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $agentID)
    {
        $this->agentID[] = $agentID;

        return $this;
    }

    /**
     * isset agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing
     * airline/system provider ID.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAgentID($index)
    {
        return isset($this->agentID[$index]);
    }

    /**
     * unset agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing
     * airline/system provider ID.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAgentID($index)
    {
        unset($this->agentID[$index]);
    }

    /**
     * Gets as agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing
     * airline/system provider ID.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getAgentID()
    {
        return $this->agentID;
    }

    /**
     * Sets a new agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing
     * airline/system provider ID.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $agentID
     * @return self
     */
    public function setAgentID(array $agentID)
    {
        $this->agentID = $agentID;

        return $this;
    }

    /**
     * Adds as paymentDetail
     *
     * The payment information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentDetail
     */
    public function addToPaymentDetail(\Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentDetail)
    {
        $this->paymentDetail[] = $paymentDetail;

        return $this;
    }

    /**
     * isset paymentDetail
     *
     * The payment information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentDetail($index)
    {
        return isset($this->paymentDetail[$index]);
    }

    /**
     * unset paymentDetail
     *
     * The payment information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentDetail($index)
    {
        unset($this->paymentDetail[$index]);
    }

    /**
     * Gets as paymentDetail
     *
     * The payment information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentDetailType[]
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Sets a new paymentDetail
     *
     * The payment information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType[] $paymentDetail
     * @return self
     */
    public function setPaymentDetail(array $paymentDetail)
    {
        $this->paymentDetail = $paymentDetail;

        return $this;
    }

    /**
     * Gets as originDestination
     *
     * The true origin and destination.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\OriginDestinationAType
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * The true origin and destination.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\OriginDestinationAType
     * $originDestination
     * @return self
     */
    public function setOriginDestination(
        \Davispeixoto\OpenTravelAlliance\EMDType\OriginDestinationAType $originDestination
    ) {
        $this->originDestination = $originDestination;

        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\CustLoyaltyAType $custLoyalty
     */
    public function addToCustLoyalty(\Davispeixoto\OpenTravelAlliance\EMDType\CustLoyaltyAType $custLoyalty)
    {
        $this->custLoyalty[] = $custLoyalty;

        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustLoyalty($index)
    {
        return isset($this->custLoyalty[$index]);
    }

    /**
     * unset custLoyalty
     *
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustLoyalty($index)
    {
        unset($this->custLoyalty[$index]);
    }

    /**
     * Gets as custLoyalty
     *
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\CustLoyaltyAType[] $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty)
    {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }

    /**
     * Gets as endorsement
     *
     * Endorsement/ restriction remarks.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\EndorsementAType
     */
    public function getEndorsement()
    {
        return $this->endorsement;
    }

    /**
     * Sets a new endorsement
     *
     * Endorsement/ restriction remarks.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\EndorsementAType $endorsement
     * @return self
     */
    public function setEndorsement(\Davispeixoto\OpenTravelAlliance\EMDType\EndorsementAType $endorsement)
    {
        $this->endorsement = $endorsement;

        return $this;
    }

    /**
     * Adds as addReferenceID
     *
     * ID contains the actual identifier (e.g. invoice, airline confirmation number,
     * customer id or airline indexing field.)
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $addReferenceID
     */
    public function addToAddReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $addReferenceID)
    {
        $this->addReferenceID[] = $addReferenceID;

        return $this;
    }

    /**
     * isset addReferenceID
     *
     * ID contains the actual identifier (e.g. invoice, airline confirmation number,
     * customer id or airline indexing field.)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddReferenceID($index)
    {
        return isset($this->addReferenceID[$index]);
    }

    /**
     * unset addReferenceID
     *
     * ID contains the actual identifier (e.g. invoice, airline confirmation number,
     * customer id or airline indexing field.)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddReferenceID($index)
    {
        unset($this->addReferenceID[$index]);
    }

    /**
     * Gets as addReferenceID
     *
     * ID contains the actual identifier (e.g. invoice, airline confirmation number,
     * customer id or airline indexing field.)
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getAddReferenceID()
    {
        return $this->addReferenceID;
    }

    /**
     * Sets a new addReferenceID
     *
     * ID contains the actual identifier (e.g. invoice, airline confirmation number,
     * customer id or airline indexing field.)
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $addReferenceID
     * @return self
     */
    public function setAddReferenceID(array $addReferenceID)
    {
        $this->addReferenceID = $addReferenceID;

        return $this;
    }

    /**
     * Adds as baseFare
     *
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\BaseFareAType $baseFare
     */
    public function addToBaseFare(\Davispeixoto\OpenTravelAlliance\EMDType\BaseFareAType $baseFare)
    {
        $this->baseFare[] = $baseFare;

        return $this;
    }

    /**
     * isset baseFare
     *
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBaseFare($index)
    {
        return isset($this->baseFare[$index]);
    }

    /**
     * unset baseFare
     *
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBaseFare($index)
    {
        unset($this->baseFare[$index]);
    }

    /**
     * Gets as baseFare
     *
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\BaseFareAType[]
     */
    public function getBaseFare()
    {
        return $this->baseFare;
    }

    /**
     * Sets a new baseFare
     *
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\BaseFareAType[] $baseFare
     * @return self
     */
    public function setBaseFare(array $baseFare)
    {
        $this->baseFare = $baseFare;

        return $this;
    }

    /**
     * Adds as equivFare
     *
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\EquivFareAType $equivFare
     */
    public function addToEquivFare(\Davispeixoto\OpenTravelAlliance\EMDType\EquivFareAType $equivFare)
    {
        $this->equivFare[] = $equivFare;

        return $this;
    }

    /**
     * isset equivFare
     *
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEquivFare($index)
    {
        return isset($this->equivFare[$index]);
    }

    /**
     * unset equivFare
     *
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEquivFare($index)
    {
        unset($this->equivFare[$index]);
    }

    /**
     * Gets as equivFare
     *
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\EquivFareAType[]
     */
    public function getEquivFare()
    {
        return $this->equivFare;
    }

    /**
     * Sets a new equivFare
     *
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\EquivFareAType[] $equivFare
     * @return self
     */
    public function setEquivFare(array $equivFare)
    {
        $this->equivFare = $equivFare;

        return $this;
    }

    /**
     * Adds as totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\TotalFareAType $totalFare
     */
    public function addToTotalFare(\Davispeixoto\OpenTravelAlliance\EMDType\TotalFareAType $totalFare)
    {
        $this->totalFare[] = $totalFare;

        return $this;
    }

    /**
     * isset totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTotalFare($index)
    {
        return isset($this->totalFare[$index]);
    }

    /**
     * unset totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTotalFare($index)
    {
        unset($this->totalFare[$index]);
    }

    /**
     * Gets as totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\TotalFareAType[]
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * Sets a new totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\TotalFareAType[] $totalFare
     * @return self
     */
    public function setTotalFare(array $totalFare)
    {
        $this->totalFare = $totalFare;

        return $this;
    }

    /**
     * Adds as tax
     *
     * A collection of taxes.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\TaxesAType\TaxAType $tax
     */
    public function addToTaxes(\Davispeixoto\OpenTravelAlliance\EMDType\TaxesAType\TaxAType $tax)
    {
        $this->taxes[] = $tax;

        return $this;
    }

    /**
     * isset taxes
     *
     * A collection of taxes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxes($index)
    {
        return isset($this->taxes[$index]);
    }

    /**
     * unset taxes
     *
     * A collection of taxes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * A collection of taxes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\TaxesAType\TaxAType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * A collection of taxes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\TaxesAType\TaxAType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Adds as unstructuredFareCalc
     *
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\UnstructuredFareCalcAType
     * $unstructuredFareCalc
     */
    public function addToUnstructuredFareCalc(
        \Davispeixoto\OpenTravelAlliance\EMDType\UnstructuredFareCalcAType $unstructuredFareCalc
    ) {
        $this->unstructuredFareCalc[] = $unstructuredFareCalc;

        return $this;
    }

    /**
     * isset unstructuredFareCalc
     *
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUnstructuredFareCalc($index)
    {
        return isset($this->unstructuredFareCalc[$index]);
    }

    /**
     * unset unstructuredFareCalc
     *
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUnstructuredFareCalc($index)
    {
        unset($this->unstructuredFareCalc[$index]);
    }

    /**
     * Gets as unstructuredFareCalc
     *
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\UnstructuredFareCalcAType[]
     */
    public function getUnstructuredFareCalc()
    {
        return $this->unstructuredFareCalc;
    }

    /**
     * Sets a new unstructuredFareCalc
     *
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\UnstructuredFareCalcAType[]
     * $unstructuredFareCalc
     * @return self
     */
    public function setUnstructuredFareCalc(array $unstructuredFareCalc)
    {
        $this->unstructuredFareCalc = $unstructuredFareCalc;

        return $this;
    }

    /**
     * Gets as fareInfo
     *
     * Nonendorsable and nonrefundable indicators, penalty restriction indicator,
     * pricing system, tour code, ISO country code, around the world fare indicator and
     * non-reissuable/non-exchangeable indicator.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\FareInfoAType
     */
    public function getFareInfo()
    {
        return $this->fareInfo;
    }

    /**
     * Sets a new fareInfo
     *
     * Nonendorsable and nonrefundable indicators, penalty restriction indicator,
     * pricing system, tour code, ISO country code, around the world fare indicator and
     * non-reissuable/non-exchangeable indicator.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\FareInfoAType $fareInfo
     * @return self
     */
    public function setFareInfo(\Davispeixoto\OpenTravelAlliance\EMDType\FareInfoAType $fareInfo)
    {
        $this->fareInfo = $fareInfo;

        return $this;
    }

    /**
     * Adds as ticketDocument
     *
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\TicketDocumentAType
     * $ticketDocument
     */
    public function addToTicketDocument(\Davispeixoto\OpenTravelAlliance\EMDType\TicketDocumentAType $ticketDocument)
    {
        $this->ticketDocument[] = $ticketDocument;

        return $this;
    }

    /**
     * isset ticketDocument
     *
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketDocument($index)
    {
        return isset($this->ticketDocument[$index]);
    }

    /**
     * unset ticketDocument
     *
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketDocument($index)
    {
        unset($this->ticketDocument[$index]);
    }

    /**
     * Gets as ticketDocument
     *
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\TicketDocumentAType[]
     */
    public function getTicketDocument()
    {
        return $this->ticketDocument;
    }

    /**
     * Sets a new ticketDocument
     *
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\TicketDocumentAType[]
     * $ticketDocument
     * @return self
     */
    public function setTicketDocument(array $ticketDocument)
    {
        $this->ticketDocument = $ticketDocument;

        return $this;
    }

    /**
     * Gets as commission
     *
     * Commission information for this ticket/document.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\CommissionAType
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Commission information for this ticket/document.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\CommissionAType $commission
     * @return self
     */
    public function setCommission(\Davispeixoto\OpenTravelAlliance\EMDType\CommissionAType $commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Gets as fareComponent
     *
     * Price quote date, account code, input designator, component count and bank
     * exchange rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareComponentType
     */
    public function getFareComponent()
    {
        return $this->fareComponent;
    }

    /**
     * Sets a new fareComponent
     *
     * Price quote date, account code, input designator, component count and bank
     * exchange rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareComponentType $fareComponent
     * @return self
     */
    public function setFareComponent(\Davispeixoto\OpenTravelAlliance\FareComponentType $fareComponent)
    {
        $this->fareComponent = $fareComponent;

        return $this;
    }

    /**
     * Gets as carrierFeeInfo
     *
     * Data for the collection of non-airport/ government fees.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType
     */
    public function getCarrierFeeInfo()
    {
        return $this->carrierFeeInfo;
    }

    /**
     * Sets a new carrierFeeInfo
     *
     * Data for the collection of non-airport/ government fees.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType
     * $carrierFeeInfo
     * @return self
     */
    public function setCarrierFeeInfo(\Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType $carrierFeeInfo)
    {
        $this->carrierFeeInfo = $carrierFeeInfo;

        return $this;
    }

    /**
     * Adds as exchResidualFareComponent
     *
     * The exchanged residual fare component information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType
     * $exchResidualFareComponent
     */
    public function addToExchResidualFareComponent(
        \Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType $exchResidualFareComponent
    ) {
        $this->exchResidualFareComponent[] = $exchResidualFareComponent;

        return $this;
    }

    /**
     * isset exchResidualFareComponent
     *
     * The exchanged residual fare component information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExchResidualFareComponent($index)
    {
        return isset($this->exchResidualFareComponent[$index]);
    }

    /**
     * unset exchResidualFareComponent
     *
     * The exchanged residual fare component information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExchResidualFareComponent($index)
    {
        unset($this->exchResidualFareComponent[$index]);
    }

    /**
     * Gets as exchResidualFareComponent
     *
     * The exchanged residual fare component information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType[]
     */
    public function getExchResidualFareComponent()
    {
        return $this->exchResidualFareComponent;
    }

    /**
     * Sets a new exchResidualFareComponent
     *
     * The exchanged residual fare component information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType[]
     * $exchResidualFareComponent
     * @return self
     */
    public function setExchResidualFareComponent(array $exchResidualFareComponent)
    {
        $this->exchResidualFareComponent = $exchResidualFareComponent;

        return $this;
    }

    /**
     * Gets as originalIssueInfo
     *
     * The original ticket/document issue information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\OriginalIssueInfoAType
     */
    public function getOriginalIssueInfo()
    {
        return $this->originalIssueInfo;
    }

    /**
     * Sets a new originalIssueInfo
     *
     * The original ticket/document issue information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\OriginalIssueInfoAType
     * $originalIssueInfo
     * @return self
     */
    public function setOriginalIssueInfo(
        \Davispeixoto\OpenTravelAlliance\EMDType\OriginalIssueInfoAType $originalIssueInfo
    ) {
        $this->originalIssueInfo = $originalIssueInfo;

        return $this;
    }

    /**
     * Adds as reissuedFlown
     *
     * The reissued flown flight coupon information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\ReissuedFlownAType
     * $reissuedFlown
     */
    public function addToReissuedFlown(\Davispeixoto\OpenTravelAlliance\EMDType\ReissuedFlownAType $reissuedFlown)
    {
        $this->reissuedFlown[] = $reissuedFlown;

        return $this;
    }

    /**
     * isset reissuedFlown
     *
     * The reissued flown flight coupon information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReissuedFlown($index)
    {
        return isset($this->reissuedFlown[$index]);
    }

    /**
     * unset reissuedFlown
     *
     * The reissued flown flight coupon information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReissuedFlown($index)
    {
        unset($this->reissuedFlown[$index]);
    }

    /**
     * Gets as reissuedFlown
     *
     * The reissued flown flight coupon information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\ReissuedFlownAType[]
     */
    public function getReissuedFlown()
    {
        return $this->reissuedFlown;
    }

    /**
     * Sets a new reissuedFlown
     *
     * The reissued flown flight coupon information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\ReissuedFlownAType[]
     * $reissuedFlown
     * @return self
     */
    public function setReissuedFlown(array $reissuedFlown)
    {
        $this->reissuedFlown = $reissuedFlown;

        return $this;
    }

    /**
     * Gets as responseComment
     *
     * A response message from the controlling carrier.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType
     */
    public function getResponseComment()
    {
        return $this->responseComment;
    }

    /**
     * Sets a new responseComment
     *
     * A response message from the controlling carrier.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $responseComment
     * @return self
     */
    public function setResponseComment(\Davispeixoto\OpenTravelAlliance\FreeTextType $responseComment)
    {
        $this->responseComment = $responseComment;

        return $this;
    }

    /**
     * Gets as presentInfo
     *
     * The present to and at information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\PresentInfoAType
     */
    public function getPresentInfo()
    {
        return $this->presentInfo;
    }

    /**
     * Sets a new presentInfo
     *
     * The present to and at information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\PresentInfoAType $presentInfo
     * @return self
     */
    public function setPresentInfo(\Davispeixoto\OpenTravelAlliance\EMDType\PresentInfoAType $presentInfo)
    {
        $this->presentInfo = $presentInfo;

        return $this;
    }

    /**
     * Gets as reasonForIssuance
     *
     * The reason for issuance information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\ReasonForIssuanceAType
     */
    public function getReasonForIssuance()
    {
        return $this->reasonForIssuance;
    }

    /**
     * Sets a new reasonForIssuance
     *
     * The reason for issuance information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\ReasonForIssuanceAType
     * $reasonForIssuance
     * @return self
     */
    public function setReasonForIssuance(
        \Davispeixoto\OpenTravelAlliance\EMDType\ReasonForIssuanceAType $reasonForIssuance
    ) {
        $this->reasonForIssuance = $reasonForIssuance;

        return $this;
    }

    /**
     * Gets as validatingAirline
     *
     * The validating airline for all EMD's for this passenger.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\ValidatingAirlineAType
     */
    public function getValidatingAirline()
    {
        return $this->validatingAirline;
    }

    /**
     * Sets a new validatingAirline
     *
     * The validating airline for all EMD's for this passenger.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\ValidatingAirlineAType
     * $validatingAirline
     * @return self
     */
    public function setValidatingAirline(
        \Davispeixoto\OpenTravelAlliance\EMDType\ValidatingAirlineAType $validatingAirline
    ) {
        $this->validatingAirline = $validatingAirline;

        return $this;
    }

    /**
     * Gets as taxCouponInformation
     *
     * Used to specify tax coupon information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType
     */
    public function getTaxCouponInformation()
    {
        return $this->taxCouponInformation;
    }

    /**
     * Sets a new taxCouponInformation
     *
     * Used to specify tax coupon information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType
     * $taxCouponInformation
     * @return self
     */
    public function setTaxCouponInformation(
        \Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType $taxCouponInformation
    ) {
        $this->taxCouponInformation = $taxCouponInformation;

        return $this;
    }


}


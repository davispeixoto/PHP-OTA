<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing EMDLiteType
 *
 * A container for summarized electronic miscellaneous document information
 * XSD Type: EMD_LiteType
 */
class EMDLiteType
{

    /**
     * Total number of flight segments.
     *
     * @property integer $totalFltSegQty
     */
    private $totalFltSegQty = null;

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
     * The agent numeric code, booking agent id, issuing agent id and/or servicing
     * airline/system provider ID.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $agentID
     */
    private $agentID = null;

    /**
     * Endorsement/ restriction remarks.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDLiteType\EndorsementAType
     * $endorsement
     */
    private $endorsement = null;

    /**
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDLiteType\TotalFareAType[]
     * $totalFare
     */
    private $totalFare = null;

    /**
     * A collection of taxes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDLiteType\TaxesAType\TaxAType[]
     * $taxes
     */
    private $taxes = null;

    /**
     * Nonendorsable and nonrefundable indicators, penalty restriction indicator,
     * pricing system, tour code, ISO country code, around the world fare indicator and
     * non-reissuable/non-exchangeable indicator.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDLiteType\FareInfoAType $fareInfo
     */
    private $fareInfo = null;

    /**
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDLiteType\TicketDocumentAType[]
     * $ticketDocument
     */
    private $ticketDocument = null;

    /**
     * The original ticket/document issue information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDLiteType\OriginalIssueInfoAType
     * $originalIssueInfo
     */
    private $originalIssueInfo = null;

    /**
     * The reason for issuance information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDLiteType\ReasonForIssuanceAType
     * $reasonForIssuance
     */
    private $reasonForIssuance = null;

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
     * Gets as endorsement
     *
     * Endorsement/ restriction remarks.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDLiteType\EndorsementAType
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
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\EndorsementAType
     * $endorsement
     * @return self
     */
    public function setEndorsement(\Davispeixoto\OpenTravelAlliance\EMDLiteType\EndorsementAType $endorsement)
    {
        $this->endorsement = $endorsement;

        return $this;
    }

    /**
     * Adds as totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\TotalFareAType $totalFare
     */
    public function addToTotalFare(\Davispeixoto\OpenTravelAlliance\EMDLiteType\TotalFareAType $totalFare)
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
     * @return \Davispeixoto\OpenTravelAlliance\EMDLiteType\TotalFareAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\TotalFareAType[] $totalFare
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
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\TaxesAType\TaxAType $tax
     */
    public function addToTaxes(\Davispeixoto\OpenTravelAlliance\EMDLiteType\TaxesAType\TaxAType $tax)
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
     * @return \Davispeixoto\OpenTravelAlliance\EMDLiteType\TaxesAType\TaxAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\TaxesAType\TaxAType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Gets as fareInfo
     *
     * Nonendorsable and nonrefundable indicators, penalty restriction indicator,
     * pricing system, tour code, ISO country code, around the world fare indicator and
     * non-reissuable/non-exchangeable indicator.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDLiteType\FareInfoAType
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
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\FareInfoAType $fareInfo
     * @return self
     */
    public function setFareInfo(\Davispeixoto\OpenTravelAlliance\EMDLiteType\FareInfoAType $fareInfo)
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
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\TicketDocumentAType
     * $ticketDocument
     */
    public function addToTicketDocument(
        \Davispeixoto\OpenTravelAlliance\EMDLiteType\TicketDocumentAType $ticketDocument
    ) {
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
     * @return \Davispeixoto\OpenTravelAlliance\EMDLiteType\TicketDocumentAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\TicketDocumentAType[]
     * $ticketDocument
     * @return self
     */
    public function setTicketDocument(array $ticketDocument)
    {
        $this->ticketDocument = $ticketDocument;

        return $this;
    }

    /**
     * Gets as originalIssueInfo
     *
     * The original ticket/document issue information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDLiteType\OriginalIssueInfoAType
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
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\OriginalIssueInfoAType
     * $originalIssueInfo
     * @return self
     */
    public function setOriginalIssueInfo(
        \Davispeixoto\OpenTravelAlliance\EMDLiteType\OriginalIssueInfoAType $originalIssueInfo
    ) {
        $this->originalIssueInfo = $originalIssueInfo;

        return $this;
    }

    /**
     * Gets as reasonForIssuance
     *
     * The reason for issuance information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDLiteType\ReasonForIssuanceAType
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
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\ReasonForIssuanceAType
     * $reasonForIssuance
     * @return self
     */
    public function setReasonForIssuance(
        \Davispeixoto\OpenTravelAlliance\EMDLiteType\ReasonForIssuanceAType $reasonForIssuance
    ) {
        $this->reasonForIssuance = $reasonForIssuance;

        return $this;
    }


}


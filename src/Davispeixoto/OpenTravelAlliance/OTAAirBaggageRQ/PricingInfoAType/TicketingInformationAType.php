<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType;

/**
 * Class representing TicketingInformationAType
 */
class TicketingInformationAType
{

    /**
     * Ticket/ document number,Example: BWA42317Note: This is the original
     * ticket/document number.
     *
     * @property string $ticketDocumentNbr
     */
    private $ticketDocumentNbr = null;

    /**
     * Issuing agent ID.Example: 91256690Note: This is the ID of the original issuer of
     * the ticket/document.
     *
     * @property string $issuingAgentID
     */
    private $issuingAgentID = null;

    /**
     * Date of issue.Example: 2013-01-13Note: This is the date the ticket/document was
     * originally issued.
     *
     * @property \DateTime $dateOfIssue
     */
    private $dateOfIssue = null;

    /**
     * Original issue location.Example: NYC14
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Original issuing airline code.Example: BWA
     *
     * @property string $issuingAirlineCode
     */
    private $issuingAirlineCode = null;

    /**
     * Gets as ticketDocumentNbr
     *
     * Ticket/ document number,Example: BWA42317Note: This is the original
     * ticket/document number.
     *
     * @return string
     */
    public function getTicketDocumentNbr()
    {
        return $this->ticketDocumentNbr;
    }

    /**
     * Sets a new ticketDocumentNbr
     *
     * Ticket/ document number,Example: BWA42317Note: This is the original
     * ticket/document number.
     *
     * @param string $ticketDocumentNbr
     * @return self
     */
    public function setTicketDocumentNbr($ticketDocumentNbr)
    {
        $this->ticketDocumentNbr = $ticketDocumentNbr;

        return $this;
    }

    /**
     * Gets as issuingAgentID
     *
     * Issuing agent ID.Example: 91256690Note: This is the ID of the original issuer of
     * the ticket/document.
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
     * Issuing agent ID.Example: 91256690Note: This is the ID of the original issuer of
     * the ticket/document.
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
     * Gets as dateOfIssue
     *
     * Date of issue.Example: 2013-01-13Note: This is the date the ticket/document was
     * originally issued.
     *
     * @return \DateTime
     */
    public function getDateOfIssue()
    {
        return $this->dateOfIssue;
    }

    /**
     * Sets a new dateOfIssue
     *
     * Date of issue.Example: 2013-01-13Note: This is the date the ticket/document was
     * originally issued.
     *
     * @param \DateTime $dateOfIssue
     * @return self
     */
    public function setDateOfIssue(\DateTime $dateOfIssue)
    {
        $this->dateOfIssue = $dateOfIssue;

        return $this;
    }

    /**
     * Gets as locationCode
     *
     * Original issue location.Example: NYC14
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * Original issue location.Example: NYC14
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Gets as issuingAirlineCode
     *
     * Original issuing airline code.Example: BWA
     *
     * @return string
     */
    public function getIssuingAirlineCode()
    {
        return $this->issuingAirlineCode;
    }

    /**
     * Sets a new issuingAirlineCode
     *
     * Original issuing airline code.Example: BWA
     *
     * @param string $issuingAirlineCode
     * @return self
     */
    public function setIssuingAirlineCode($issuingAirlineCode)
    {
        $this->issuingAirlineCode = $issuingAirlineCode;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType;

/**
 * Class representing OriginalIssueInfoAType
 */
class OriginalIssueInfoAType
{

    /**
     * The original ticket/document number.
     *
     * @property string $ticketDocumentNbr
     */
    private $ticketDocumentNbr = null;

    /**
     * ID of the original issuer of the ticket/document.
     *
     * @property string $issuingAgentID
     */
    private $issuingAgentID = null;

    /**
     * Date the ticket/document was originally issued.
     *
     * @property \DateTime $dateOfIssue
     */
    private $dateOfIssue = null;

    /**
     * Location of original issue.
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * The code of the original issuing airline.
     *
     * @property string $issuingAirlineCode
     */
    private $issuingAirlineCode = null;

    /**
     * Gets as ticketDocumentNbr
     *
     * The original ticket/document number.
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
     * The original ticket/document number.
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
     * ID of the original issuer of the ticket/document.
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
     * ID of the original issuer of the ticket/document.
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
     * Date the ticket/document was originally issued.
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
     * Date the ticket/document was originally issued.
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
     * Location of original issue.
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
     * Location of original issue.
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
     * The code of the original issuing airline.
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
     * The code of the original issuing airline.
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


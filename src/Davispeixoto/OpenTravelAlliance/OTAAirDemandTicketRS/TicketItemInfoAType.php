<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS;

/**
 * Class representing TicketItemInfoAType
 */
class TicketItemInfoAType
{

    /**
     * The number of the document that was issued.
     *
     * @property string $ticketNumber
     */
    private $ticketNumber = null;

    /**
     * The type of document that was issued (e.g., electronic ticket, MCO).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The number associated with the document for back office accounting purposes.
     *
     * @property string $itemNumber
     */
    private $itemNumber = null;

    /**
     * The invoice number associated with the document that was issued.
     *
     * @property string $invoiceNumber
     */
    private $invoiceNumber = null;

    /**
     * The gross total amount of the ticket.
     *
     * @property float $totalAmount
     */
    private $totalAmount = null;

    /**
     * The amount of commission that will be paid.
     *
     * @property float $commissionAmount
     */
    private $commissionAmount = null;

    /**
     * The form of payment for the ticket. Refer to OpenTravel Code list Payment Type
     * (PMT).
     *
     * @property string $paymentType
     */
    private $paymentType = null;

    /**
     * The monetary value of the ticket after any applicable deductions have been made
     * to the total (i.e., gross) amount.
     *
     * @property float $netAmount
     */
    private $netAmount = null;

    /**
     * The status of the ticket. Refer to OpenTravel Code List Ticketing Status (TST).
     *
     * @property string $ticketingStatus
     */
    private $ticketingStatus = null;

    /**
     * The name of the person for whom the ticket was issued.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType\PassengerNameAType
     * $passengerName
     */
    private $passengerName = null;

    /**
     * Used to specify conjunctive ticket/document numbers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType\ConjunctiveTicketAType[]
     * $conjunctiveTicket
     */
    private $conjunctiveTicket = null;

    /**
     * Gets as ticketNumber
     *
     * The number of the document that was issued.
     *
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Sets a new ticketNumber
     *
     * The number of the document that was issued.
     *
     * @param string $ticketNumber
     * @return self
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    /**
     * Gets as type
     *
     * The type of document that was issued (e.g., electronic ticket, MCO).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of document that was issued (e.g., electronic ticket, MCO).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as itemNumber
     *
     * The number associated with the document for back office accounting purposes.
     *
     * @return string
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * Sets a new itemNumber
     *
     * The number associated with the document for back office accounting purposes.
     *
     * @param string $itemNumber
     * @return self
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }

    /**
     * Gets as invoiceNumber
     *
     * The invoice number associated with the document that was issued.
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Sets a new invoiceNumber
     *
     * The invoice number associated with the document that was issued.
     *
     * @param string $invoiceNumber
     * @return self
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * The gross total amount of the ticket.
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * The gross total amount of the ticket.
     *
     * @param float $totalAmount
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Gets as commissionAmount
     *
     * The amount of commission that will be paid.
     *
     * @return float
     */
    public function getCommissionAmount()
    {
        return $this->commissionAmount;
    }

    /**
     * Sets a new commissionAmount
     *
     * The amount of commission that will be paid.
     *
     * @param float $commissionAmount
     * @return self
     */
    public function setCommissionAmount($commissionAmount)
    {
        $this->commissionAmount = $commissionAmount;

        return $this;
    }

    /**
     * Gets as paymentType
     *
     * The form of payment for the ticket. Refer to OpenTravel Code list Payment Type
     * (PMT).
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * The form of payment for the ticket. Refer to OpenTravel Code list Payment Type
     * (PMT).
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Gets as netAmount
     *
     * The monetary value of the ticket after any applicable deductions have been made
     * to the total (i.e., gross) amount.
     *
     * @return float
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * Sets a new netAmount
     *
     * The monetary value of the ticket after any applicable deductions have been made
     * to the total (i.e., gross) amount.
     *
     * @param float $netAmount
     * @return self
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;

        return $this;
    }

    /**
     * Gets as ticketingStatus
     *
     * The status of the ticket. Refer to OpenTravel Code List Ticketing Status (TST).
     *
     * @return string
     */
    public function getTicketingStatus()
    {
        return $this->ticketingStatus;
    }

    /**
     * Sets a new ticketingStatus
     *
     * The status of the ticket. Refer to OpenTravel Code List Ticketing Status (TST).
     *
     * @param string $ticketingStatus
     * @return self
     */
    public function setTicketingStatus($ticketingStatus)
    {
        $this->ticketingStatus = $ticketingStatus;

        return $this;
    }

    /**
     * Gets as passengerName
     *
     * The name of the person for whom the ticket was issued.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType\PassengerNameAType
     */
    public function getPassengerName()
    {
        return $this->passengerName;
    }

    /**
     * Sets a new passengerName
     *
     * The name of the person for whom the ticket was issued.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType\PassengerNameAType
     * $passengerName
     * @return self
     */
    public function setPassengerName(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType\PassengerNameAType $passengerName
    ) {
        $this->passengerName = $passengerName;

        return $this;
    }

    /**
     * Adds as conjunctiveTicket
     *
     * Used to specify conjunctive ticket/document numbers.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType\ConjunctiveTicketAType
     * $conjunctiveTicket
     */
    public function addToConjunctiveTicket(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType\ConjunctiveTicketAType $conjunctiveTicket
    ) {
        $this->conjunctiveTicket[] = $conjunctiveTicket;

        return $this;
    }

    /**
     * isset conjunctiveTicket
     *
     * Used to specify conjunctive ticket/document numbers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConjunctiveTicket($index)
    {
        return isset($this->conjunctiveTicket[$index]);
    }

    /**
     * unset conjunctiveTicket
     *
     * Used to specify conjunctive ticket/document numbers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConjunctiveTicket($index)
    {
        unset($this->conjunctiveTicket[$index]);
    }

    /**
     * Gets as conjunctiveTicket
     *
     * Used to specify conjunctive ticket/document numbers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType\ConjunctiveTicketAType[]
     */
    public function getConjunctiveTicket()
    {
        return $this->conjunctiveTicket;
    }

    /**
     * Sets a new conjunctiveTicket
     *
     * Used to specify conjunctive ticket/document numbers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRS\TicketItemInfoAType\ConjunctiveTicketAType[]
     * $conjunctiveTicket
     * @return self
     */
    public function setConjunctiveTicket(array $conjunctiveTicket)
    {
        $this->conjunctiveTicket = $conjunctiveTicket;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\PaymentFormType;

/**
 * Class representing MiscChargeOrderAType
 */
class MiscChargeOrderAType
{

    /**
     * The ticket number of the miscellaneous charge order (MCO).
     *
     * @property string $ticketNumber
     */
    private $ticketNumber = null;

    /**
     * The original ticket number in a series if reissuances.
     *
     * @property string $originalTicketNumber
     */
    private $originalTicketNumber = null;

    /**
     * Place where the original ticket was issued.
     *
     * @property string $originalIssuePlace
     */
    private $originalIssuePlace = null;

    /**
     * Date when the original ticket was issued.
     *
     * @property \DateTime $originalIssueDate
     */
    private $originalIssueDate = null;

    /**
     * IATA office number, which issued original ticket.
     *
     * @property string $originalIssueIATA
     */
    private $originalIssueIATA = null;

    /**
     * Payment type for the original ticket.
     *
     * @property string $originalPaymentForm
     */
    private $originalPaymentForm = null;

    /**
     * Indicates if the check digit of the ticket number or the interline agreement has
     * to be checked or not.
     *
     * @property string $checkInhibitorType
     */
    private $checkInhibitorType = null;

    /**
     * Gives a list of references to coupon numbers of the ticket which will be taken
     * for payment.
     *
     * @property string[] $couponRPHs
     */
    private $couponRPHs = null;

    /**
     * Indicates if a paper or electronic MCO exists.
     *
     * @property boolean $paperMCOExistInd
     */
    private $paperMCOExistInd = null;

    /**
     * Gets as ticketNumber
     *
     * The ticket number of the miscellaneous charge order (MCO).
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
     * The ticket number of the miscellaneous charge order (MCO).
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
     * Gets as originalTicketNumber
     *
     * The original ticket number in a series if reissuances.
     *
     * @return string
     */
    public function getOriginalTicketNumber()
    {
        return $this->originalTicketNumber;
    }

    /**
     * Sets a new originalTicketNumber
     *
     * The original ticket number in a series if reissuances.
     *
     * @param string $originalTicketNumber
     * @return self
     */
    public function setOriginalTicketNumber($originalTicketNumber)
    {
        $this->originalTicketNumber = $originalTicketNumber;

        return $this;
    }

    /**
     * Gets as originalIssuePlace
     *
     * Place where the original ticket was issued.
     *
     * @return string
     */
    public function getOriginalIssuePlace()
    {
        return $this->originalIssuePlace;
    }

    /**
     * Sets a new originalIssuePlace
     *
     * Place where the original ticket was issued.
     *
     * @param string $originalIssuePlace
     * @return self
     */
    public function setOriginalIssuePlace($originalIssuePlace)
    {
        $this->originalIssuePlace = $originalIssuePlace;

        return $this;
    }

    /**
     * Gets as originalIssueDate
     *
     * Date when the original ticket was issued.
     *
     * @return \DateTime
     */
    public function getOriginalIssueDate()
    {
        return $this->originalIssueDate;
    }

    /**
     * Sets a new originalIssueDate
     *
     * Date when the original ticket was issued.
     *
     * @param \DateTime $originalIssueDate
     * @return self
     */
    public function setOriginalIssueDate(\DateTime $originalIssueDate)
    {
        $this->originalIssueDate = $originalIssueDate;

        return $this;
    }

    /**
     * Gets as originalIssueIATA
     *
     * IATA office number, which issued original ticket.
     *
     * @return string
     */
    public function getOriginalIssueIATA()
    {
        return $this->originalIssueIATA;
    }

    /**
     * Sets a new originalIssueIATA
     *
     * IATA office number, which issued original ticket.
     *
     * @param string $originalIssueIATA
     * @return self
     */
    public function setOriginalIssueIATA($originalIssueIATA)
    {
        $this->originalIssueIATA = $originalIssueIATA;

        return $this;
    }

    /**
     * Gets as originalPaymentForm
     *
     * Payment type for the original ticket.
     *
     * @return string
     */
    public function getOriginalPaymentForm()
    {
        return $this->originalPaymentForm;
    }

    /**
     * Sets a new originalPaymentForm
     *
     * Payment type for the original ticket.
     *
     * @param string $originalPaymentForm
     * @return self
     */
    public function setOriginalPaymentForm($originalPaymentForm)
    {
        $this->originalPaymentForm = $originalPaymentForm;

        return $this;
    }

    /**
     * Gets as checkInhibitorType
     *
     * Indicates if the check digit of the ticket number or the interline agreement has
     * to be checked or not.
     *
     * @return string
     */
    public function getCheckInhibitorType()
    {
        return $this->checkInhibitorType;
    }

    /**
     * Sets a new checkInhibitorType
     *
     * Indicates if the check digit of the ticket number or the interline agreement has
     * to be checked or not.
     *
     * @param string $checkInhibitorType
     * @return self
     */
    public function setCheckInhibitorType($checkInhibitorType)
    {
        $this->checkInhibitorType = $checkInhibitorType;

        return $this;
    }

    /**
     * Adds as couponRPHs
     *
     * Gives a list of references to coupon numbers of the ticket which will be taken
     * for payment.
     *
     * @return self
     * @param string $couponRPHs
     */
    public function addToCouponRPHs($couponRPHs)
    {
        $this->couponRPHs[] = $couponRPHs;

        return $this;
    }

    /**
     * isset couponRPHs
     *
     * Gives a list of references to coupon numbers of the ticket which will be taken
     * for payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCouponRPHs($index)
    {
        return isset($this->couponRPHs[$index]);
    }

    /**
     * unset couponRPHs
     *
     * Gives a list of references to coupon numbers of the ticket which will be taken
     * for payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCouponRPHs($index)
    {
        unset($this->couponRPHs[$index]);
    }

    /**
     * Gets as couponRPHs
     *
     * Gives a list of references to coupon numbers of the ticket which will be taken
     * for payment.
     *
     * @return string[]
     */
    public function getCouponRPHs()
    {
        return $this->couponRPHs;
    }

    /**
     * Sets a new couponRPHs
     *
     * Gives a list of references to coupon numbers of the ticket which will be taken
     * for payment.
     *
     * @param string $couponRPHs
     * @return self
     */
    public function setCouponRPHs(array $couponRPHs)
    {
        $this->couponRPHs = $couponRPHs;

        return $this;
    }

    /**
     * Gets as paperMCOExistInd
     *
     * Indicates if a paper or electronic MCO exists.
     *
     * @return boolean
     */
    public function getPaperMCOExistInd()
    {
        return $this->paperMCOExistInd;
    }

    /**
     * Sets a new paperMCOExistInd
     *
     * Indicates if a paper or electronic MCO exists.
     *
     * @param boolean $paperMCOExistInd
     * @return self
     */
    public function setPaperMCOExistInd($paperMCOExistInd)
    {
        $this->paperMCOExistInd = $paperMCOExistInd;

        return $this;
    }


}


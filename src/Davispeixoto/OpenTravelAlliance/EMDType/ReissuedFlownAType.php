<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

/**
 * Class representing ReissuedFlownAType
 */
class ReissuedFlownAType
{

    /**
     * Coupon number.
     *
     * @property integer $number
     */
    private $number = null;

    /**
     * The number representing the order in which this coupon was used or is to be
     * used.
     *
     * @property integer $couponItinerarySeqNbr
     */
    private $couponItinerarySeqNbr = null;

    /**
     * The applicable fare basis code.
     *
     * @property string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Document number comprised of the airline code, form code, and serial number.
     *
     * @property string $ticketDocumentNbr
     */
    private $ticketDocumentNbr = null;

    /**
     * The date the ticket was issued.
     *
     * @property \DateTime $dateOfIssue
     */
    private $dateOfIssue = null;

    /**
     * A validating carrier assigned code allowing a fare rule modification or override
     * applied to a flown coupon from the ticket being reissued.
     *
     * @property string $waiverCode
     */
    private $waiverCode = null;

    /**
     * The applicable code as provided for in ATA SIPP Reso 110.16 or IATA Reso 728,
     * for each flown coupon from the ticket being reissued.
     *
     * @property string $ticketDesignatorCode
     */
    private $ticketDesignatorCode = null;

    /**
     * Reference to the flight segments for this coupon.
     *
     * @property string $flightSegmentRPH
     */
    private $flightSegmentRPH = null;

    /**
     * Gets as number
     *
     * Coupon number.
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Coupon number.
     *
     * @param integer $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as couponItinerarySeqNbr
     *
     * The number representing the order in which this coupon was used or is to be
     * used.
     *
     * @return integer
     */
    public function getCouponItinerarySeqNbr()
    {
        return $this->couponItinerarySeqNbr;
    }

    /**
     * Sets a new couponItinerarySeqNbr
     *
     * The number representing the order in which this coupon was used or is to be
     * used.
     *
     * @param integer $couponItinerarySeqNbr
     * @return self
     */
    public function setCouponItinerarySeqNbr($couponItinerarySeqNbr)
    {
        $this->couponItinerarySeqNbr = $couponItinerarySeqNbr;

        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * The applicable fare basis code.
     *
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * The applicable fare basis code.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * Gets as ticketDocumentNbr
     *
     * Document number comprised of the airline code, form code, and serial number.
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
     * Document number comprised of the airline code, form code, and serial number.
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
     * Gets as dateOfIssue
     *
     * The date the ticket was issued.
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
     * The date the ticket was issued.
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
     * Gets as waiverCode
     *
     * A validating carrier assigned code allowing a fare rule modification or override
     * applied to a flown coupon from the ticket being reissued.
     *
     * @return string
     */
    public function getWaiverCode()
    {
        return $this->waiverCode;
    }

    /**
     * Sets a new waiverCode
     *
     * A validating carrier assigned code allowing a fare rule modification or override
     * applied to a flown coupon from the ticket being reissued.
     *
     * @param string $waiverCode
     * @return self
     */
    public function setWaiverCode($waiverCode)
    {
        $this->waiverCode = $waiverCode;

        return $this;
    }

    /**
     * Gets as ticketDesignatorCode
     *
     * The applicable code as provided for in ATA SIPP Reso 110.16 or IATA Reso 728,
     * for each flown coupon from the ticket being reissued.
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
     * The applicable code as provided for in ATA SIPP Reso 110.16 or IATA Reso 728,
     * for each flown coupon from the ticket being reissued.
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
     * Gets as flightSegmentRPH
     *
     * Reference to the flight segments for this coupon.
     *
     * @return string
     */
    public function getFlightSegmentRPH()
    {
        return $this->flightSegmentRPH;
    }

    /**
     * Sets a new flightSegmentRPH
     *
     * Reference to the flight segments for this coupon.
     *
     * @param string $flightSegmentRPH
     * @return self
     */
    public function setFlightSegmentRPH($flightSegmentRPH)
    {
        $this->flightSegmentRPH = $flightSegmentRPH;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\GroundReservationRequestType;

/**
 * Class representing RestrictionsAType
 */
class RestrictionsAType
{

    /**
     * When true, this rate requires advanced booking.
     *
     * @property boolean $advancedBookingInd
     */
    private $advancedBookingInd = null;

    /**
     * When true, this is a negotiated corporate rate.
     *
     * @property boolean $corporateRateInd
     */
    private $corporateRateInd = null;

    /**
     * When true, a guarantee is required.
     *
     * @property boolean $guaranteeReqInd
     */
    private $guaranteeReqInd = null;

    /**
     * When true indicates a fee applies if a cancellation is requested.
     *
     * @property boolean $cancellationPenaltyInd
     */
    private $cancellationPenaltyInd = null;

    /**
     * When true indicates a fee applies if a modification is requested.
     *
     * @property boolean $modificationPenaltyInd
     */
    private $modificationPenaltyInd = null;

    /**
     * Indicates whether or not advance booking is required for this rate and if so,
     * what the advance booking requirements are.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\RestrictionsAType\AdvanceBookingAType
     * $advanceBooking
     */
    private $advanceBooking = null;

    /**
     * Gets as advancedBookingInd
     *
     * When true, this rate requires advanced booking.
     *
     * @return boolean
     */
    public function getAdvancedBookingInd()
    {
        return $this->advancedBookingInd;
    }

    /**
     * Sets a new advancedBookingInd
     *
     * When true, this rate requires advanced booking.
     *
     * @param boolean $advancedBookingInd
     * @return self
     */
    public function setAdvancedBookingInd($advancedBookingInd)
    {
        $this->advancedBookingInd = $advancedBookingInd;

        return $this;
    }

    /**
     * Gets as corporateRateInd
     *
     * When true, this is a negotiated corporate rate.
     *
     * @return boolean
     */
    public function getCorporateRateInd()
    {
        return $this->corporateRateInd;
    }

    /**
     * Sets a new corporateRateInd
     *
     * When true, this is a negotiated corporate rate.
     *
     * @param boolean $corporateRateInd
     * @return self
     */
    public function setCorporateRateInd($corporateRateInd)
    {
        $this->corporateRateInd = $corporateRateInd;

        return $this;
    }

    /**
     * Gets as guaranteeReqInd
     *
     * When true, a guarantee is required.
     *
     * @return boolean
     */
    public function getGuaranteeReqInd()
    {
        return $this->guaranteeReqInd;
    }

    /**
     * Sets a new guaranteeReqInd
     *
     * When true, a guarantee is required.
     *
     * @param boolean $guaranteeReqInd
     * @return self
     */
    public function setGuaranteeReqInd($guaranteeReqInd)
    {
        $this->guaranteeReqInd = $guaranteeReqInd;

        return $this;
    }

    /**
     * Gets as cancellationPenaltyInd
     *
     * When true indicates a fee applies if a cancellation is requested.
     *
     * @return boolean
     */
    public function getCancellationPenaltyInd()
    {
        return $this->cancellationPenaltyInd;
    }

    /**
     * Sets a new cancellationPenaltyInd
     *
     * When true indicates a fee applies if a cancellation is requested.
     *
     * @param boolean $cancellationPenaltyInd
     * @return self
     */
    public function setCancellationPenaltyInd($cancellationPenaltyInd)
    {
        $this->cancellationPenaltyInd = $cancellationPenaltyInd;

        return $this;
    }

    /**
     * Gets as modificationPenaltyInd
     *
     * When true indicates a fee applies if a modification is requested.
     *
     * @return boolean
     */
    public function getModificationPenaltyInd()
    {
        return $this->modificationPenaltyInd;
    }

    /**
     * Sets a new modificationPenaltyInd
     *
     * When true indicates a fee applies if a modification is requested.
     *
     * @param boolean $modificationPenaltyInd
     * @return self
     */
    public function setModificationPenaltyInd($modificationPenaltyInd)
    {
        $this->modificationPenaltyInd = $modificationPenaltyInd;

        return $this;
    }

    /**
     * Gets as advanceBooking
     *
     * Indicates whether or not advance booking is required for this rate and if so,
     * what the advance booking requirements are.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\RestrictionsAType\AdvanceBookingAType
     */
    public function getAdvanceBooking()
    {
        return $this->advanceBooking;
    }

    /**
     * Sets a new advanceBooking
     *
     * Indicates whether or not advance booking is required for this rate and if so,
     * what the advance booking requirements are.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\RestrictionsAType\AdvanceBookingAType
     * $advanceBooking
     * @return self
     */
    public function setAdvanceBooking(
        \Davispeixoto\OpenTravelAlliance\GroundReservationRequestType\RestrictionsAType\AdvanceBookingAType $advanceBooking
    ) {
        $this->advanceBooking = $advanceBooking;

        return $this;
    }


}


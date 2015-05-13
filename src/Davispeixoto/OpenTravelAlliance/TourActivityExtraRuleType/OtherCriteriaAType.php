<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType;

/**
 * Class representing OtherCriteriaAType
 */
class OtherCriteriaAType
{

    /**
     * The maximum number of participants permitted for this extra (e.g. golf cart
     * occupancy).
     *
     * @property integer $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * If true, a start and end date/time must be associated with the extra request.
     *
     * @property boolean $dateTimeReqInd
     */
    private $dateTimeReqInd = null;

    /**
     * If true, the availabilty of this extra needs to be checked.
     *
     * @property boolean $stockControlledInd
     */
    private $stockControlledInd = null;

    /**
     * If true, a time duration must be supplied for the extra request.
     *
     * @property boolean $durationReqInd
     */
    private $durationReqInd = null;

    /**
     * If true, a deposit is required to secure the extra.
     *
     * @property boolean $depositInd
     */
    private $depositInd = null;

    /**
     * Accepted deposit payment types.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     * $depositPaymentTypes
     */
    private $depositPaymentTypes = null;

    /**
     * Gets as maxOccupancy
     *
     * The maximum number of participants permitted for this extra (e.g. golf cart
     * occupancy).
     *
     * @return integer
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * The maximum number of participants permitted for this extra (e.g. golf cart
     * occupancy).
     *
     * @param integer $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;

        return $this;
    }

    /**
     * Gets as dateTimeReqInd
     *
     * If true, a start and end date/time must be associated with the extra request.
     *
     * @return boolean
     */
    public function getDateTimeReqInd()
    {
        return $this->dateTimeReqInd;
    }

    /**
     * Sets a new dateTimeReqInd
     *
     * If true, a start and end date/time must be associated with the extra request.
     *
     * @param boolean $dateTimeReqInd
     * @return self
     */
    public function setDateTimeReqInd($dateTimeReqInd)
    {
        $this->dateTimeReqInd = $dateTimeReqInd;

        return $this;
    }

    /**
     * Gets as stockControlledInd
     *
     * If true, the availabilty of this extra needs to be checked.
     *
     * @return boolean
     */
    public function getStockControlledInd()
    {
        return $this->stockControlledInd;
    }

    /**
     * Sets a new stockControlledInd
     *
     * If true, the availabilty of this extra needs to be checked.
     *
     * @param boolean $stockControlledInd
     * @return self
     */
    public function setStockControlledInd($stockControlledInd)
    {
        $this->stockControlledInd = $stockControlledInd;

        return $this;
    }

    /**
     * Gets as durationReqInd
     *
     * If true, a time duration must be supplied for the extra request.
     *
     * @return boolean
     */
    public function getDurationReqInd()
    {
        return $this->durationReqInd;
    }

    /**
     * Sets a new durationReqInd
     *
     * If true, a time duration must be supplied for the extra request.
     *
     * @param boolean $durationReqInd
     * @return self
     */
    public function setDurationReqInd($durationReqInd)
    {
        $this->durationReqInd = $durationReqInd;

        return $this;
    }

    /**
     * Gets as depositInd
     *
     * If true, a deposit is required to secure the extra.
     *
     * @return boolean
     */
    public function getDepositInd()
    {
        return $this->depositInd;
    }

    /**
     * Sets a new depositInd
     *
     * If true, a deposit is required to secure the extra.
     *
     * @param boolean $depositInd
     * @return self
     */
    public function setDepositInd($depositInd)
    {
        $this->depositInd = $depositInd;

        return $this;
    }

    /**
     * Adds as acceptedPayment
     *
     * Accepted deposit payment types.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType
     * $acceptedPayment
     */
    public function addToDepositPaymentTypes(
        \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType $acceptedPayment
    ) {
        $this->depositPaymentTypes[] = $acceptedPayment;

        return $this;
    }

    /**
     * isset depositPaymentTypes
     *
     * Accepted deposit payment types.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDepositPaymentTypes($index)
    {
        return isset($this->depositPaymentTypes[$index]);
    }

    /**
     * unset depositPaymentTypes
     *
     * Accepted deposit payment types.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDepositPaymentTypes($index)
    {
        unset($this->depositPaymentTypes[$index]);
    }

    /**
     * Gets as depositPaymentTypes
     *
     * Accepted deposit payment types.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     */
    public function getDepositPaymentTypes()
    {
        return $this->depositPaymentTypes;
    }

    /**
     * Sets a new depositPaymentTypes
     *
     * Accepted deposit payment types.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AcceptedPaymentsType\AcceptedPaymentAType[]
     * $depositPaymentTypes
     * @return self
     */
    public function setDepositPaymentTypes(array $depositPaymentTypes)
    {
        $this->depositPaymentTypes = $depositPaymentTypes;

        return $this;
    }


}


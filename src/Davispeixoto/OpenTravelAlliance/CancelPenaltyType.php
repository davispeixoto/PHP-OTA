<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CancelPenaltyType
 *
 * The CancelPenalty class defines the cancellation policy of the hotel facility.
 * XSD Type: CancelPenaltyType
 */
class CancelPenaltyType
{

    /**
     * Confirm Class.
     *
     * @property string $confirmClassCode
     */
    private $confirmClassCode = null;

    /**
     * Policy Class.
     *
     * @property string $policyCode
     */
    private $policyCode = null;

    /**
     * Indicates that any prepayment for the reservation is non refundable, therefore a
     * 100% penalty on the prepayment is applied, irrespective of deadline.
     *
     * @property boolean $nonRefundable
     */
    private $nonRefundable = null;

    /**
     * When true, apply to Monday.
     *
     * @property boolean $mon
     */
    private $mon = null;

    /**
     * When true, apply to Tuesday.
     *
     * @property boolean $tue
     */
    private $tue = null;

    /**
     * When true, apply to Wednesday.
     *
     * @property boolean $weds
     */
    private $weds = null;

    /**
     * When true, apply to Thursday.
     *
     * @property boolean $thur
     */
    private $thur = null;

    /**
     * When true, apply to Friday.
     *
     * @property boolean $fri
     */
    private $fri = null;

    /**
     * When true, apply to Saturday.
     *
     * @property boolean $sat
     */
    private $sat = null;

    /**
     * When true, apply to Sunday.
     *
     * @property boolean $sun
     */
    private $sun = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * A system specific room type to which this cancellation penalty applies.
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * If true, the reservation may not be cancelled once the cancellation deadline has
     * expired.Example: falseNote: This will typically be set to false indicating that
     * a reservation may be cancelled.
     *
     * @property boolean $noCancelInd
     */
    private $noCancelInd = null;

    /**
     * Cancellation deadline, absolute or relative.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelPenaltyType\DeadlineAType
     * $deadline
     */
    private $deadline = null;

    /**
     * Cancellation fee expressed as a fixed amount, or percentage of/or room nights.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AmountPercentType $amountPercent
     */
    private $amountPercent = null;

    /**
     * Text description of the Penalty in a given language.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $penaltyDescription
     */
    private $penaltyDescription = null;

    /**
     * Gets as confirmClassCode
     *
     * Confirm Class.
     *
     * @return string
     */
    public function getConfirmClassCode()
    {
        return $this->confirmClassCode;
    }

    /**
     * Sets a new confirmClassCode
     *
     * Confirm Class.
     *
     * @param string $confirmClassCode
     * @return self
     */
    public function setConfirmClassCode($confirmClassCode)
    {
        $this->confirmClassCode = $confirmClassCode;

        return $this;
    }

    /**
     * Gets as policyCode
     *
     * Policy Class.
     *
     * @return string
     */
    public function getPolicyCode()
    {
        return $this->policyCode;
    }

    /**
     * Sets a new policyCode
     *
     * Policy Class.
     *
     * @param string $policyCode
     * @return self
     */
    public function setPolicyCode($policyCode)
    {
        $this->policyCode = $policyCode;

        return $this;
    }

    /**
     * Gets as nonRefundable
     *
     * Indicates that any prepayment for the reservation is non refundable, therefore a
     * 100% penalty on the prepayment is applied, irrespective of deadline.
     *
     * @return boolean
     */
    public function getNonRefundable()
    {
        return $this->nonRefundable;
    }

    /**
     * Sets a new nonRefundable
     *
     * Indicates that any prepayment for the reservation is non refundable, therefore a
     * 100% penalty on the prepayment is applied, irrespective of deadline.
     *
     * @param boolean $nonRefundable
     * @return self
     */
    public function setNonRefundable($nonRefundable)
    {
        $this->nonRefundable = $nonRefundable;

        return $this;
    }

    /**
     * Gets as mon
     *
     * When true, apply to Monday.
     *
     * @return boolean
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * When true, apply to Monday.
     *
     * @param boolean $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;

        return $this;
    }

    /**
     * Gets as tue
     *
     * When true, apply to Tuesday.
     *
     * @return boolean
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * When true, apply to Tuesday.
     *
     * @param boolean $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;

        return $this;
    }

    /**
     * Gets as weds
     *
     * When true, apply to Wednesday.
     *
     * @return boolean
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * When true, apply to Wednesday.
     *
     * @param boolean $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;

        return $this;
    }

    /**
     * Gets as thur
     *
     * When true, apply to Thursday.
     *
     * @return boolean
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * When true, apply to Thursday.
     *
     * @param boolean $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;

        return $this;
    }

    /**
     * Gets as fri
     *
     * When true, apply to Friday.
     *
     * @return boolean
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * When true, apply to Friday.
     *
     * @param boolean $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;

        return $this;
    }

    /**
     * Gets as sat
     *
     * When true, apply to Saturday.
     *
     * @return boolean
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * When true, apply to Saturday.
     *
     * @param boolean $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;

        return $this;
    }

    /**
     * Gets as sun
     *
     * When true, apply to Sunday.
     *
     * @return boolean
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * When true, apply to Sunday.
     *
     * @param boolean $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as roomTypeCode
     *
     * A system specific room type to which this cancellation penalty applies.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * A system specific room type to which this cancellation penalty applies.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;

        return $this;
    }

    /**
     * Gets as noCancelInd
     *
     * If true, the reservation may not be cancelled once the cancellation deadline has
     * expired.Example: falseNote: This will typically be set to false indicating that
     * a reservation may be cancelled.
     *
     * @return boolean
     */
    public function getNoCancelInd()
    {
        return $this->noCancelInd;
    }

    /**
     * Sets a new noCancelInd
     *
     * If true, the reservation may not be cancelled once the cancellation deadline has
     * expired.Example: falseNote: This will typically be set to false indicating that
     * a reservation may be cancelled.
     *
     * @param boolean $noCancelInd
     * @return self
     */
    public function setNoCancelInd($noCancelInd)
    {
        $this->noCancelInd = $noCancelInd;

        return $this;
    }

    /**
     * Gets as deadline
     *
     * Cancellation deadline, absolute or relative.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CancelPenaltyType\DeadlineAType
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Sets a new deadline
     *
     * Cancellation deadline, absolute or relative.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CancelPenaltyType\DeadlineAType
     * $deadline
     * @return self
     */
    public function setDeadline(\Davispeixoto\OpenTravelAlliance\CancelPenaltyType\DeadlineAType $deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Gets as amountPercent
     *
     * Cancellation fee expressed as a fixed amount, or percentage of/or room nights.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AmountPercentType
     */
    public function getAmountPercent()
    {
        return $this->amountPercent;
    }

    /**
     * Sets a new amountPercent
     *
     * Cancellation fee expressed as a fixed amount, or percentage of/or room nights.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AmountPercentType $amountPercent
     * @return self
     */
    public function setAmountPercent(\Davispeixoto\OpenTravelAlliance\AmountPercentType $amountPercent)
    {
        $this->amountPercent = $amountPercent;

        return $this;
    }

    /**
     * Adds as penaltyDescription
     *
     * Text description of the Penalty in a given language.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $penaltyDescription
     */
    public function addToPenaltyDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $penaltyDescription)
    {
        $this->penaltyDescription[] = $penaltyDescription;

        return $this;
    }

    /**
     * isset penaltyDescription
     *
     * Text description of the Penalty in a given language.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPenaltyDescription($index)
    {
        return isset($this->penaltyDescription[$index]);
    }

    /**
     * unset penaltyDescription
     *
     * Text description of the Penalty in a given language.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPenaltyDescription($index)
    {
        unset($this->penaltyDescription[$index]);
    }

    /**
     * Gets as penaltyDescription
     *
     * Text description of the Penalty in a given language.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getPenaltyDescription()
    {
        return $this->penaltyDescription;
    }

    /**
     * Sets a new penaltyDescription
     *
     * Text description of the Penalty in a given language.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $penaltyDescription
     * @return self
     */
    public function setPenaltyDescription(array $penaltyDescription)
    {
        $this->penaltyDescription = $penaltyDescription;

        return $this;
    }


}


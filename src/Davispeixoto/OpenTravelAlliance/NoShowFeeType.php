<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing NoShowFeeType
 *
 * Information regarding the no show fee policy for a vehicle type.
 * XSD Type: NoShowFeeType
 */
class NoShowFeeType
{

    /**
     * The time by which a cancellation must be made to avoid the no show fee.
     *
     * @property \Davispeixoto\OpenTravelAlliance\NoShowFeeType\DeadlineAType $deadline
     */
    private $deadline = null;

    /**
     * The period of time between scheduled pickup time and no show fee.
     *
     * @property \Davispeixoto\OpenTravelAlliance\NoShowFeeType\GracePeriodAType
     * $gracePeriod
     */
    private $gracePeriod = null;

    /**
     * The amount of the no show fee if a reservation is not cancelled before the
     * specified deadline and the renter does not show up for the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\NoShowFeeType\FeeAmountAType
     * $feeAmount
     */
    private $feeAmount = null;

    /**
     * A general text description of the no show fee policy that is suitable for
     * display to the customer during the booking process.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     */
    private $description = null;

    /**
     * Gets as deadline
     *
     * The time by which a cancellation must be made to avoid the no show fee.
     *
     * @return \Davispeixoto\OpenTravelAlliance\NoShowFeeType\DeadlineAType
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Sets a new deadline
     *
     * The time by which a cancellation must be made to avoid the no show fee.
     *
     * @param \Davispeixoto\OpenTravelAlliance\NoShowFeeType\DeadlineAType $deadline
     * @return self
     */
    public function setDeadline(\Davispeixoto\OpenTravelAlliance\NoShowFeeType\DeadlineAType $deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Gets as gracePeriod
     *
     * The period of time between scheduled pickup time and no show fee.
     *
     * @return \Davispeixoto\OpenTravelAlliance\NoShowFeeType\GracePeriodAType
     */
    public function getGracePeriod()
    {
        return $this->gracePeriod;
    }

    /**
     * Sets a new gracePeriod
     *
     * The period of time between scheduled pickup time and no show fee.
     *
     * @param \Davispeixoto\OpenTravelAlliance\NoShowFeeType\GracePeriodAType
     * $gracePeriod
     * @return self
     */
    public function setGracePeriod(\Davispeixoto\OpenTravelAlliance\NoShowFeeType\GracePeriodAType $gracePeriod)
    {
        $this->gracePeriod = $gracePeriod;

        return $this;
    }

    /**
     * Gets as feeAmount
     *
     * The amount of the no show fee if a reservation is not cancelled before the
     * specified deadline and the renter does not show up for the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\NoShowFeeType\FeeAmountAType
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Sets a new feeAmount
     *
     * The amount of the no show fee if a reservation is not cancelled before the
     * specified deadline and the renter does not show up for the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\NoShowFeeType\FeeAmountAType $feeAmount
     * @return self
     */
    public function setFeeAmount(\Davispeixoto\OpenTravelAlliance\NoShowFeeType\FeeAmountAType $feeAmount)
    {
        $this->feeAmount = $feeAmount;

        return $this;
    }

    /**
     * Gets as description
     *
     * A general text description of the no show fee policy that is suitable for
     * display to the customer during the booking process.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A general text description of the no show fee policy that is suitable for
     * display to the customer during the booking process.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description)
    {
        $this->description = $description;

        return $this;
    }


}


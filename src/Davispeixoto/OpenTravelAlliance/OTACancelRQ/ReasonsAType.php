<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRQ;

/**
 * Class representing ReasonsAType
 */
class ReasonsAType
{

    /**
     * Cancellation reason.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACancelRQ\ReasonsAType\ReasonAType[] $reason
     */
    private $reason = null;

    /**
     * Adds as reason
     *
     * Cancellation reason.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTACancelRQ\ReasonsAType\ReasonAType
     * $reason
     */
    public function addToReason(\Davispeixoto\OpenTravelAlliance\OTACancelRQ\ReasonsAType\ReasonAType $reason)
    {
        $this->reason[] = $reason;

        return $this;
    }

    /**
     * isset reason
     *
     * Cancellation reason.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * Cancellation reason.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * Cancellation reason.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTACancelRQ\ReasonsAType\ReasonAType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Cancellation reason.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTACancelRQ\ReasonsAType\ReasonAType[]
     * $reason
     * @return self
     */
    public function setReason(array $reason)
    {
        $this->reason = $reason;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing EventChargeType
 *
 * Provides details for specific event charges.
 * XSD Type: EventChargeType
 */
class EventChargeType
{

    /**
     * A specific charge associated to an event.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EventChargeType\EventChargeAType[]
     * $eventCharge
     */
    private $eventCharge = null;

    /**
     * Comments related to this specific event charge.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * Adds as eventCharge
     *
     * A specific charge associated to an event.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EventChargeType\EventChargeAType
     * $eventCharge
     */
    public function addToEventCharge(\Davispeixoto\OpenTravelAlliance\EventChargeType\EventChargeAType $eventCharge)
    {
        $this->eventCharge[] = $eventCharge;

        return $this;
    }

    /**
     * isset eventCharge
     *
     * A specific charge associated to an event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventCharge($index)
    {
        return isset($this->eventCharge[$index]);
    }

    /**
     * unset eventCharge
     *
     * A specific charge associated to an event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventCharge($index)
    {
        unset($this->eventCharge[$index]);
    }

    /**
     * Gets as eventCharge
     *
     * A specific charge associated to an event.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EventChargeType\EventChargeAType[]
     */
    public function getEventCharge()
    {
        return $this->eventCharge;
    }

    /**
     * Sets a new eventCharge
     *
     * A specific charge associated to an event.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EventChargeType\EventChargeAType[]
     * $eventCharge
     * @return self
     */
    public function setEventCharge(array $eventCharge)
    {
        $this->eventCharge = $eventCharge;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Comments related to this specific event charge.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * Comments related to this specific event charge.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Comments related to this specific event charge.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Comments related to this specific event charge.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments related to this specific event charge.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelGetMsgRQ;

/**
 * Class representing MessagesAType
 */
class MessagesAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\MessageType[] $message
     */
    private $message = null;

    /**
     * Adds as message
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MessageType $message
     */
    public function addToMessage(\Davispeixoto\OpenTravelAlliance\MessageType $message)
    {
        $this->message[] = $message;

        return $this;
    }

    /**
     * isset message
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessage($index)
    {
        return isset($this->message[$index]);
    }

    /**
     * unset message
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessage($index)
    {
        unset($this->message[$index]);
    }

    /**
     * Gets as message
     *
     * @return \Davispeixoto\OpenTravelAlliance\MessageType[]
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param \Davispeixoto\OpenTravelAlliance\MessageType[] $message
     * @return self
     */
    public function setMessage(array $message)
    {
        $this->message = $message;

        return $this;
    }


}


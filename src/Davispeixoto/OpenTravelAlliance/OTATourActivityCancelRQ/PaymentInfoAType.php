<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ;

/**
 * Class representing PaymentInfoAType
 */
class PaymentInfoAType
{

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @property string $participantID
     */
    private $participantID = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @property string $groupID
     */
    private $groupID = null;

    /**
     * Detailed information for the payment form.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType $detail
     */
    private $detail = null;

    /**
     * Gets as participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @return string
     */
    public function getParticipantID()
    {
        return $this->participantID;
    }

    /**
     * Sets a new participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @param string $participantID
     * @return self
     */
    public function setParticipantID($participantID)
    {
        $this->participantID = $participantID;

        return $this;
    }

    /**
     * Gets as groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @return string
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Sets a new groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @param string $groupID
     * @return self
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;

        return $this;
    }

    /**
     * Gets as detail
     *
     * Detailed information for the payment form.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Detailed information for the payment form.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $detail
     * @return self
     */
    public function setDetail(\Davispeixoto\OpenTravelAlliance\PaymentFormType $detail)
    {
        $this->detail = $detail;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RFPTransientDetailsType
 *
 * This is used by OTA_HotelRFP_TransientNotifRQ schema. This accommodates detailed
 * transient RFP information.
 * XSD Type: RFP_TransientDetailsType
 */
class RFPTransientDetailsType
{

    /**
     * A collection of RFP Transient Responses
     *
     * @property \Davispeixoto\OpenTravelAlliance\RFPTransientResponseType[]
     * $rFPTransientResponses
     */
    private $rFPTransientResponses = null;

    /**
     * The ID is used to identify the original request. The instance attribute is used
     * to indicate subsequent transmissions of new or updated information (e.g. an
     * initial message will be instance 1 and an update to this message will be
     * reflected with instance 2).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPTransientDetailsType\MessageIDAType
     * $messageID
     */
    private $messageID = null;

    /**
     * Adds as rFPTransientResponse
     *
     * A collection of RFP Transient Responses
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RFPTransientResponseType
     * $rFPTransientResponse
     */
    public function addToRFPTransientResponses(
        \Davispeixoto\OpenTravelAlliance\RFPTransientResponseType $rFPTransientResponse
    ) {
        $this->rFPTransientResponses[] = $rFPTransientResponse;

        return $this;
    }

    /**
     * isset rFPTransientResponses
     *
     * A collection of RFP Transient Responses
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRFPTransientResponses($index)
    {
        return isset($this->rFPTransientResponses[$index]);
    }

    /**
     * unset rFPTransientResponses
     *
     * A collection of RFP Transient Responses
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRFPTransientResponses($index)
    {
        unset($this->rFPTransientResponses[$index]);
    }

    /**
     * Gets as rFPTransientResponses
     *
     * A collection of RFP Transient Responses
     *
     * @return \Davispeixoto\OpenTravelAlliance\RFPTransientResponseType[]
     */
    public function getRFPTransientResponses()
    {
        return $this->rFPTransientResponses;
    }

    /**
     * Sets a new rFPTransientResponses
     *
     * A collection of RFP Transient Responses
     *
     * @param \Davispeixoto\OpenTravelAlliance\RFPTransientResponseType[]
     * $rFPTransientResponses
     * @return self
     */
    public function setRFPTransientResponses(array $rFPTransientResponses)
    {
        $this->rFPTransientResponses = $rFPTransientResponses;

        return $this;
    }

    /**
     * Gets as messageID
     *
     * The ID is used to identify the original request. The instance attribute is used
     * to indicate subsequent transmissions of new or updated information (e.g. an
     * initial message will be instance 1 and an update to this message will be
     * reflected with instance 2).
     *
     * @return \Davispeixoto\OpenTravelAlliance\RFPTransientDetailsType\MessageIDAType
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * The ID is used to identify the original request. The instance attribute is used
     * to indicate subsequent transmissions of new or updated information (e.g. an
     * initial message will be instance 1 and an update to this message will be
     * reflected with instance 2).
     *
     * @param \Davispeixoto\OpenTravelAlliance\RFPTransientDetailsType\MessageIDAType
     * $messageID
     * @return self
     */
    public function setMessageID(\Davispeixoto\OpenTravelAlliance\RFPTransientDetailsType\MessageIDAType $messageID)
    {
        $this->messageID = $messageID;

        return $this;
    }


}


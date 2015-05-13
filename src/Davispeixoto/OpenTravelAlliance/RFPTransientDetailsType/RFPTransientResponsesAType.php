<?php

namespace Davispeixoto\OpenTravelAlliance\RFPTransientDetailsType;

/**
 * Class representing RFPTransientResponsesAType
 */
class RFPTransientResponsesAType
{

    /**
     * This is the Response data. The response element can repeat for each hotel that
     * is providing a response to the RFP. Each hotel is defined in the HotelRefGroup
     * attributes of this element.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RFPTransientResponseType[]
     * $rFPTransientResponse
     */
    private $rFPTransientResponse = null;

    /**
     * Adds as rFPTransientResponse
     *
     * This is the Response data. The response element can repeat for each hotel that
     * is providing a response to the RFP. Each hotel is defined in the HotelRefGroup
     * attributes of this element.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RFPTransientResponseType
     * $rFPTransientResponse
     */
    public function addToRFPTransientResponse(
        \Davispeixoto\OpenTravelAlliance\RFPTransientResponseType $rFPTransientResponse
    ) {
        $this->rFPTransientResponse[] = $rFPTransientResponse;

        return $this;
    }

    /**
     * isset rFPTransientResponse
     *
     * This is the Response data. The response element can repeat for each hotel that
     * is providing a response to the RFP. Each hotel is defined in the HotelRefGroup
     * attributes of this element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRFPTransientResponse($index)
    {
        return isset($this->rFPTransientResponse[$index]);
    }

    /**
     * unset rFPTransientResponse
     *
     * This is the Response data. The response element can repeat for each hotel that
     * is providing a response to the RFP. Each hotel is defined in the HotelRefGroup
     * attributes of this element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRFPTransientResponse($index)
    {
        unset($this->rFPTransientResponse[$index]);
    }

    /**
     * Gets as rFPTransientResponse
     *
     * This is the Response data. The response element can repeat for each hotel that
     * is providing a response to the RFP. Each hotel is defined in the HotelRefGroup
     * attributes of this element.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RFPTransientResponseType[]
     */
    public function getRFPTransientResponse()
    {
        return $this->rFPTransientResponse;
    }

    /**
     * Sets a new rFPTransientResponse
     *
     * This is the Response data. The response element can repeat for each hotel that
     * is providing a response to the RFP. Each hotel is defined in the HotelRefGroup
     * attributes of this element.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RFPTransientResponseType[]
     * $rFPTransientResponse
     * @return self
     */
    public function setRFPTransientResponse(array $rFPTransientResponse)
    {
        $this->rFPTransientResponse = $rFPTransientResponse;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleSegmentAdditionalInfoType;

/**
 * Class representing VendorMessagesAType
 */
class VendorMessagesAType
{

    /**
     * A specific vendor message associated with this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType[] $vendorMessage
     */
    private $vendorMessage = null;

    /**
     * Adds as vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $vendorMessage
     */
    public function addToVendorMessage(\Davispeixoto\OpenTravelAlliance\FormattedTextType $vendorMessage)
    {
        $this->vendorMessage[] = $vendorMessage;

        return $this;
    }

    /**
     * isset vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorMessage($index)
    {
        return isset($this->vendorMessage[$index]);
    }

    /**
     * unset vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorMessage($index)
    {
        unset($this->vendorMessage[$index]);
    }

    /**
     * Gets as vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType[]
     */
    public function getVendorMessage()
    {
        return $this->vendorMessage;
    }

    /**
     * Sets a new vendorMessage
     *
     * A specific vendor message associated with this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType[] $vendorMessage
     * @return self
     */
    public function setVendorMessage(array $vendorMessage)
    {
        $this->vendorMessage = $vendorMessage;

        return $this;
    }


}


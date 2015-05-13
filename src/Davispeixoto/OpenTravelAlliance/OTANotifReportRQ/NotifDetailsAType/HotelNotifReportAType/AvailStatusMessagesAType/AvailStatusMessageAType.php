<?php

namespace Davispeixoto\OpenTravelAlliance\OTANotifReportRQ\NotifDetailsAType\HotelNotifReportAType\AvailStatusMessagesAType;

use Davispeixoto\OpenTravelAlliance\AvailStatusMessageType;

/**
 * Class representing AvailStatusMessageAType
 */
class AvailStatusMessageAType extends AvailStatusMessageType
{

    /**
     * Refers to one or more warning elements giving details of one or more processing
     * problems.
     *
     * @property string[] $warningRPH
     */
    private $warningRPH = null;

    /**
     * Adds as warningRPH
     *
     * Refers to one or more warning elements giving details of one or more processing
     * problems.
     *
     * @return self
     * @param string $warningRPH
     */
    public function addToWarningRPH($warningRPH)
    {
        $this->warningRPH[] = $warningRPH;

        return $this;
    }

    /**
     * isset warningRPH
     *
     * Refers to one or more warning elements giving details of one or more processing
     * problems.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarningRPH($index)
    {
        return isset($this->warningRPH[$index]);
    }

    /**
     * unset warningRPH
     *
     * Refers to one or more warning elements giving details of one or more processing
     * problems.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarningRPH($index)
    {
        unset($this->warningRPH[$index]);
    }

    /**
     * Gets as warningRPH
     *
     * Refers to one or more warning elements giving details of one or more processing
     * problems.
     *
     * @return string[]
     */
    public function getWarningRPH()
    {
        return $this->warningRPH;
    }

    /**
     * Sets a new warningRPH
     *
     * Refers to one or more warning elements giving details of one or more processing
     * problems.
     *
     * @param string $warningRPH
     * @return self
     */
    public function setWarningRPH(array $warningRPH)
    {
        $this->warningRPH = $warningRPH;

        return $this;
    }


}


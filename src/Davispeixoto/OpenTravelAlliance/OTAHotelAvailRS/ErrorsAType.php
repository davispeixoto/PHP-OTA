<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS;

/**
 * Class representing ErrorsAType
 */
class ErrorsAType
{

    /**
     * Error MUST identify an error that occurred during the processing of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\ErrorsAType\ErrorAType[] $error
     */
    private $error = null;

    /**
     * Adds as error
     *
     * Error MUST identify an error that occurred during the processing of the message.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\ErrorsAType\ErrorAType
     * $error
     */
    public function addToError(\Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\ErrorsAType\ErrorAType $error)
    {
        $this->error[] = $error;

        return $this;
    }

    /**
     * isset error
     *
     * Error MUST identify an error that occurred during the processing of the message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * Error MUST identify an error that occurred during the processing of the message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * Error MUST identify an error that occurred during the processing of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\ErrorsAType\ErrorAType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * Error MUST identify an error that occurred during the processing of the message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\ErrorsAType\ErrorAType[]
     * $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;

        return $this;
    }


}


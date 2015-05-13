<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS;

/**
 * Class representing ErrorsAType
 */
class ErrorsAType
{

    /**
     * Error MUST identify an error that occurred during the processing of a message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType\ErrorAType[] $error
     */
    private $error = null;

    /**
     * Adds as error
     *
     * Error MUST identify an error that occurred during the processing of a message.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType\ErrorAType
     * $error
     */
    public function addToError(\Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType\ErrorAType $error)
    {
        $this->error[] = $error;

        return $this;
    }

    /**
     * isset error
     *
     * Error MUST identify an error that occurred during the processing of a message.
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
     * Error MUST identify an error that occurred during the processing of a message.
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
     * Error MUST identify an error that occurred during the processing of a message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType\ErrorAType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * Error MUST identify an error that occurred during the processing of a message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\ErrorsAType\ErrorAType[]
     * $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;

        return $this;
    }


}


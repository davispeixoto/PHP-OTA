<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ErrorsType
 *
 * A collection of errors that occurred during the processing of a message.
 * XSD Type: ErrorsType
 */
class ErrorsType
{

    /**
     * An error that occurred during the processing of a message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ErrorType[] $error
     */
    private $error = null;

    /**
     * Adds as error
     *
     * An error that occurred during the processing of a message.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ErrorType $error
     */
    public function addToError(\Davispeixoto\OpenTravelAlliance\ErrorType $error)
    {
        $this->error[] = $error;

        return $this;
    }

    /**
     * isset error
     *
     * An error that occurred during the processing of a message.
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
     * An error that occurred during the processing of a message.
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
     * An error that occurred during the processing of a message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * An error that occurred during the processing of a message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ErrorType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\ResponseGroupType;

/**
 * Class representing ResponseAType
 */
class ResponseAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Text associated with a question. Allows the reviewer to explain a response.
     *
     * @property string $comments
     */
    private $comments = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as comments
     *
     * Text associated with a question. Allows the reviewer to explain a response.
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Text associated with a question. Allows the reviewer to explain a response.
     *
     * @param string $comments
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }


}


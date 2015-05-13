<?php

namespace Davispeixoto\OpenTravelAlliance\PropertyValueMatchType;

/**
 * Class representing SearchValueMatchAType
 */
class SearchValueMatchAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Indication of whether a match was found. The datatype is Boolean (true | false).
     *
     * @property boolean $match
     */
    private $match = null;

    /**
     * An optional attribute, expressed as a decimal value, representing a percentage
     * of 100%, used to indicate the degree to which the property identified meets the
     * search criteria.
     *
     * @property float $relevance
     */
    private $relevance = null;

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
     * Gets as match
     *
     * Indication of whether a match was found. The datatype is Boolean (true | false).
     *
     * @return boolean
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Sets a new match
     *
     * Indication of whether a match was found. The datatype is Boolean (true | false).
     *
     * @param boolean $match
     * @return self
     */
    public function setMatch($match)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Gets as relevance
     *
     * An optional attribute, expressed as a decimal value, representing a percentage
     * of 100%, used to indicate the degree to which the property identified meets the
     * search criteria.
     *
     * @return float
     */
    public function getRelevance()
    {
        return $this->relevance;
    }

    /**
     * Sets a new relevance
     *
     * An optional attribute, expressed as a decimal value, representing a percentage
     * of 100%, used to indicate the degree to which the property identified meets the
     * search criteria.
     *
     * @param float $relevance
     * @return self
     */
    public function setRelevance($relevance)
    {
        $this->relevance = $relevance;

        return $this;
    }


}


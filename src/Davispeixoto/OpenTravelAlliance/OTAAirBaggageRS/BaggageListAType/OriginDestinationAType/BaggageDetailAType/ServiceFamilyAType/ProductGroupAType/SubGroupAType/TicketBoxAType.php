<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType;

/**
 * Class representing TicketBoxAType
 */
class TicketBoxAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The value type.
     *
     * @property string $concept
     */
    private $concept = null;

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
     * Gets as concept
     *
     * The value type.
     *
     * @return string
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Sets a new concept
     *
     * The value type.
     *
     * @param string $concept
     * @return self
     */
    public function setConcept($concept)
    {
        $this->concept = $concept;

        return $this;
    }


}


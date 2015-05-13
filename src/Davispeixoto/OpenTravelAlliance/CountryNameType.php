<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CountryNameType
 *
 * The name or code of a country (e.g. as used in an address or to specify
 * citizenship of a traveller).
 * XSD Type: CountryNameType
 */
class CountryNameType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * ISO 3166 code for a country.
     *
     * @property string $code
     */
    private $code = null;

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
     * Gets as code
     *
     * ISO 3166 code for a country.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * ISO 3166 code for a country.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}


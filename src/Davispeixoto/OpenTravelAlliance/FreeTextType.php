<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FreeTextType
 *
 * Textual information to provide descriptions and/or additional information.
 * XSD Type: FreeTextType
 */
class FreeTextType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Language identification.
     *
     * @property string $language
     */
    private $language = null;

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
     * Gets as language
     *
     * Language identification.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language identification.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }


}


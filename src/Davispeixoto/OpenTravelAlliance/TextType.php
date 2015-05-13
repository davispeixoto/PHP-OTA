<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TextType
 *
 * Textual information with an optional language code that describes the language
 * of the content.
 * XSD Type: TextType
 */
class TextType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Language MAY be used to specify the language of this text item if it differs
     * from the language identified in the PrimaryLangID on the root element. Language
     * MUST conform to ISO 639 language codes.
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
     * Language MAY be used to specify the language of this text item if it differs
     * from the language identified in the PrimaryLangID on the root element. Language
     * MUST conform to ISO 639 language codes.
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
     * Language MAY be used to specify the language of this text item if it differs
     * from the language identified in the PrimaryLangID on the root element. Language
     * MUST conform to ISO 639 language codes.
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


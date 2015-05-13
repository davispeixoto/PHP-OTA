<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType;

/**
 * Class representing QuestionTextAType
 */
class QuestionTextAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Language of the questions.
     *
     * @property string $languageCode
     */
    private $languageCode = null;

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
     * Gets as languageCode
     *
     * Language of the questions.
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * Language of the questions.
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

        return $this;
    }


}


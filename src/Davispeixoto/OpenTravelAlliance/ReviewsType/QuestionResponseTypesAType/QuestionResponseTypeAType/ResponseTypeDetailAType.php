<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType;

/**
 * Class representing ResponseTypeDetailAType
 */
class ResponseTypeDetailAType
{

    /**
     * Used to identify a numerical value for a rating. May also be used to identify an
     * Internal ID associated with this response for non-rating type responses.
     *
     * @property integer $responseValue
     */
    private $responseValue = null;

    /**
     * Identifies the meaning of the ResponseValue in textual format (Very Poor, True,
     * etc.)
     *
     * @property string $responseValueDescription
     */
    private $responseValueDescription = null;

    /**
     * The language in which the response detail is being sent.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Gets as responseValue
     *
     * Used to identify a numerical value for a rating. May also be used to identify an
     * Internal ID associated with this response for non-rating type responses.
     *
     * @return integer
     */
    public function getResponseValue()
    {
        return $this->responseValue;
    }

    /**
     * Sets a new responseValue
     *
     * Used to identify a numerical value for a rating. May also be used to identify an
     * Internal ID associated with this response for non-rating type responses.
     *
     * @param integer $responseValue
     * @return self
     */
    public function setResponseValue($responseValue)
    {
        $this->responseValue = $responseValue;

        return $this;
    }

    /**
     * Gets as responseValueDescription
     *
     * Identifies the meaning of the ResponseValue in textual format (Very Poor, True,
     * etc.)
     *
     * @return string
     */
    public function getResponseValueDescription()
    {
        return $this->responseValueDescription;
    }

    /**
     * Sets a new responseValueDescription
     *
     * Identifies the meaning of the ResponseValue in textual format (Very Poor, True,
     * etc.)
     *
     * @param string $responseValueDescription
     * @return self
     */
    public function setResponseValueDescription($responseValueDescription)
    {
        $this->responseValueDescription = $responseValueDescription;

        return $this;
    }

    /**
     * Gets as language
     *
     * The language in which the response detail is being sent.
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
     * The language in which the response detail is being sent.
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


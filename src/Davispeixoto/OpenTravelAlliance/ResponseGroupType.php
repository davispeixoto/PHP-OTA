<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ResponseGroupType
 *
 * Question regarding the travel.
 * XSD Type: ResponseGroupType
 */
class ResponseGroupType
{

    /**
     * A reference to the question that this answer applies to.
     *
     * @property string $questionRPH
     */
    private $questionRPH = null;

    /**
     * Reference to one or more multimedia descriptions related to this response.
     *
     * @property string[] $multimediaDescriptionRPH
     */
    private $multimediaDescriptionRPH = null;

    /**
     * The language in which the response and comments are expressed.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Response provided by the reviewer. In the case of a rating, directly relates to
     * the ResponseValue attribute located in the ResponseTypeDetail element. If the
     * ResponseCategoryName is Text, then this is the text response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ResponseGroupType\ResponseAType[]
     * $response
     */
    private $response = null;

    /**
     * Gets as questionRPH
     *
     * A reference to the question that this answer applies to.
     *
     * @return string
     */
    public function getQuestionRPH()
    {
        return $this->questionRPH;
    }

    /**
     * Sets a new questionRPH
     *
     * A reference to the question that this answer applies to.
     *
     * @param string $questionRPH
     * @return self
     */
    public function setQuestionRPH($questionRPH)
    {
        $this->questionRPH = $questionRPH;

        return $this;
    }

    /**
     * Adds as multimediaDescriptionRPH
     *
     * Reference to one or more multimedia descriptions related to this response.
     *
     * @return self
     * @param string $multimediaDescriptionRPH
     */
    public function addToMultimediaDescriptionRPH($multimediaDescriptionRPH)
    {
        $this->multimediaDescriptionRPH[] = $multimediaDescriptionRPH;

        return $this;
    }

    /**
     * isset multimediaDescriptionRPH
     *
     * Reference to one or more multimedia descriptions related to this response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMultimediaDescriptionRPH($index)
    {
        return isset($this->multimediaDescriptionRPH[$index]);
    }

    /**
     * unset multimediaDescriptionRPH
     *
     * Reference to one or more multimedia descriptions related to this response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMultimediaDescriptionRPH($index)
    {
        unset($this->multimediaDescriptionRPH[$index]);
    }

    /**
     * Gets as multimediaDescriptionRPH
     *
     * Reference to one or more multimedia descriptions related to this response.
     *
     * @return string[]
     */
    public function getMultimediaDescriptionRPH()
    {
        return $this->multimediaDescriptionRPH;
    }

    /**
     * Sets a new multimediaDescriptionRPH
     *
     * Reference to one or more multimedia descriptions related to this response.
     *
     * @param string $multimediaDescriptionRPH
     * @return self
     */
    public function setMultimediaDescriptionRPH(array $multimediaDescriptionRPH)
    {
        $this->multimediaDescriptionRPH = $multimediaDescriptionRPH;

        return $this;
    }

    /**
     * Gets as language
     *
     * The language in which the response and comments are expressed.
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
     * The language in which the response and comments are expressed.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Adds as response
     *
     * Response provided by the reviewer. In the case of a rating, directly relates to
     * the ResponseValue attribute located in the ResponseTypeDetail element. If the
     * ResponseCategoryName is Text, then this is the text response.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ResponseGroupType\ResponseAType
     * $response
     */
    public function addToResponse(\Davispeixoto\OpenTravelAlliance\ResponseGroupType\ResponseAType $response)
    {
        $this->response[] = $response;

        return $this;
    }

    /**
     * isset response
     *
     * Response provided by the reviewer. In the case of a rating, directly relates to
     * the ResponseValue attribute located in the ResponseTypeDetail element. If the
     * ResponseCategoryName is Text, then this is the text response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResponse($index)
    {
        return isset($this->response[$index]);
    }

    /**
     * unset response
     *
     * Response provided by the reviewer. In the case of a rating, directly relates to
     * the ResponseValue attribute located in the ResponseTypeDetail element. If the
     * ResponseCategoryName is Text, then this is the text response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResponse($index)
    {
        unset($this->response[$index]);
    }

    /**
     * Gets as response
     *
     * Response provided by the reviewer. In the case of a rating, directly relates to
     * the ResponseValue attribute located in the ResponseTypeDetail element. If the
     * ResponseCategoryName is Text, then this is the text response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ResponseGroupType\ResponseAType[]
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * Response provided by the reviewer. In the case of a rating, directly relates to
     * the ResponseValue attribute located in the ResponseTypeDetail element. If the
     * ResponseCategoryName is Text, then this is the text response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ResponseGroupType\ResponseAType[]
     * $response
     * @return self
     */
    public function setResponse(array $response)
    {
        $this->response = $response;

        return $this;
    }


}


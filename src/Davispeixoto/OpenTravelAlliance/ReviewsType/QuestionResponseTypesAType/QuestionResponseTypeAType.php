<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType;

/**
 * Class representing QuestionResponseTypeAType
 */
class QuestionResponseTypeAType
{

    /**
     * Name of the response type (eg. Standard Rating, Text).
     *
     * @property string $responseType
     */
    private $responseType = null;

    /**
     * Used elsewhere in the message to reference this question response type.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Response details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType\ResponseTypeDetailAType[]
     * $responseTypeDetail
     */
    private $responseTypeDetail = null;

    /**
     * Gets as responseType
     *
     * Name of the response type (eg. Standard Rating, Text).
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * Name of the response type (eg. Standard Rating, Text).
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * Used elsewhere in the message to reference this question response type.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Used elsewhere in the message to reference this question response type.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Adds as responseTypeDetail
     *
     * Response details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType\ResponseTypeDetailAType
     * $responseTypeDetail
     */
    public function addToResponseTypeDetail(
        \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType\ResponseTypeDetailAType $responseTypeDetail
    ) {
        $this->responseTypeDetail[] = $responseTypeDetail;

        return $this;
    }

    /**
     * isset responseTypeDetail
     *
     * Response details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResponseTypeDetail($index)
    {
        return isset($this->responseTypeDetail[$index]);
    }

    /**
     * unset responseTypeDetail
     *
     * Response details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResponseTypeDetail($index)
    {
        unset($this->responseTypeDetail[$index]);
    }

    /**
     * Gets as responseTypeDetail
     *
     * Response details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType\ResponseTypeDetailAType[]
     */
    public function getResponseTypeDetail()
    {
        return $this->responseTypeDetail;
    }

    /**
     * Sets a new responseTypeDetail
     *
     * Response details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType\ResponseTypeDetailAType[]
     * $responseTypeDetail
     * @return self
     */
    public function setResponseTypeDetail(array $responseTypeDetail)
    {
        $this->responseTypeDetail = $responseTypeDetail;

        return $this;
    }


}


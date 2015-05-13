<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType;

use Davispeixoto\OpenTravelAlliance\AnswerGroupsType;

/**
 * Class representing ResponseGroupsAType
 */
class ResponseGroupsAType extends AnswerGroupsType
{

    /**
     * A response to a question.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\ResponseGroupsAType\ResponseGroupAType[]
     * $responseGroup
     */
    private $responseGroup = null;

    /**
     * Adds as responseGroup
     *
     * A response to a question.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\ResponseGroupsAType\ResponseGroupAType
     * $responseGroup
     */
    public function addToResponseGroup(
        \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\ResponseGroupsAType\ResponseGroupAType $responseGroup
    ) {
        $this->responseGroup[] = $responseGroup;

        return $this;
    }

    /**
     * isset responseGroup
     *
     * A response to a question.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResponseGroup($index)
    {
        return isset($this->responseGroup[$index]);
    }

    /**
     * unset responseGroup
     *
     * A response to a question.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResponseGroup($index)
    {
        unset($this->responseGroup[$index]);
    }

    /**
     * Gets as responseGroup
     *
     * A response to a question.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\ResponseGroupsAType\ResponseGroupAType[]
     */
    public function getResponseGroup()
    {
        return $this->responseGroup;
    }

    /**
     * Sets a new responseGroup
     *
     * A response to a question.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\ResponseGroupsAType\ResponseGroupAType[]
     * $responseGroup
     * @return self
     */
    public function setResponseGroup(array $responseGroup)
    {
        $this->responseGroup = $responseGroup;

        return $this;
    }


}


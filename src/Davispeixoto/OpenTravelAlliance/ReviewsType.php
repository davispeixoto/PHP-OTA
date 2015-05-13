<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ReviewsType
 *
 * A collection of hotel reviews made by travelers.
 * XSD Type: ReviewsType
 */
class ReviewsType
{

    /**
     * A collection of questions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType $questions
     */
    private $questions = null;

    /**
     * A collection of response types.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType[]
     * $questionResponseTypes
     */
    private $questionResponseTypes = null;

    /**
     * Review subject information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType[]
     * $reviewSubject
     */
    private $reviewSubject = null;

    /**
     * Identifies the Aggregate Information as found in the request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AggregateInfoType\AggregateInfoAType[]
     * $aggregateInfos
     */
    private $aggregateInfos = null;

    /**
     * Gets as questions
     *
     * A collection of questions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Sets a new questions
     *
     * A collection of questions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType $questions
     * @return self
     */
    public function setQuestions(\Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType $questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Adds as questionResponseType
     *
     * A collection of response types.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType
     * $questionResponseType
     */
    public function addToQuestionResponseTypes(
        \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType $questionResponseType
    ) {
        $this->questionResponseTypes[] = $questionResponseType;

        return $this;
    }

    /**
     * isset questionResponseTypes
     *
     * A collection of response types.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQuestionResponseTypes($index)
    {
        return isset($this->questionResponseTypes[$index]);
    }

    /**
     * unset questionResponseTypes
     *
     * A collection of response types.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQuestionResponseTypes($index)
    {
        unset($this->questionResponseTypes[$index]);
    }

    /**
     * Gets as questionResponseTypes
     *
     * A collection of response types.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType[]
     */
    public function getQuestionResponseTypes()
    {
        return $this->questionResponseTypes;
    }

    /**
     * Sets a new questionResponseTypes
     *
     * A collection of response types.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType[]
     * $questionResponseTypes
     * @return self
     */
    public function setQuestionResponseTypes(array $questionResponseTypes)
    {
        $this->questionResponseTypes = $questionResponseTypes;

        return $this;
    }

    /**
     * Adds as reviewSubject
     *
     * Review subject information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType
     * $reviewSubject
     */
    public function addToReviewSubject(\Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType $reviewSubject)
    {
        $this->reviewSubject[] = $reviewSubject;

        return $this;
    }

    /**
     * isset reviewSubject
     *
     * Review subject information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReviewSubject($index)
    {
        return isset($this->reviewSubject[$index]);
    }

    /**
     * unset reviewSubject
     *
     * Review subject information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReviewSubject($index)
    {
        unset($this->reviewSubject[$index]);
    }

    /**
     * Gets as reviewSubject
     *
     * Review subject information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType[]
     */
    public function getReviewSubject()
    {
        return $this->reviewSubject;
    }

    /**
     * Sets a new reviewSubject
     *
     * Review subject information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType[]
     * $reviewSubject
     * @return self
     */
    public function setReviewSubject(array $reviewSubject)
    {
        $this->reviewSubject = $reviewSubject;

        return $this;
    }

    /**
     * Adds as aggregateInfo
     *
     * Identifies the Aggregate Information as found in the request.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AggregateInfoType\AggregateInfoAType
     * $aggregateInfo
     */
    public function addToAggregateInfos(
        \Davispeixoto\OpenTravelAlliance\AggregateInfoType\AggregateInfoAType $aggregateInfo
    ) {
        $this->aggregateInfos[] = $aggregateInfo;

        return $this;
    }

    /**
     * isset aggregateInfos
     *
     * Identifies the Aggregate Information as found in the request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAggregateInfos($index)
    {
        return isset($this->aggregateInfos[$index]);
    }

    /**
     * unset aggregateInfos
     *
     * Identifies the Aggregate Information as found in the request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAggregateInfos($index)
    {
        unset($this->aggregateInfos[$index]);
    }

    /**
     * Gets as aggregateInfos
     *
     * Identifies the Aggregate Information as found in the request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AggregateInfoType\AggregateInfoAType[]
     */
    public function getAggregateInfos()
    {
        return $this->aggregateInfos;
    }

    /**
     * Sets a new aggregateInfos
     *
     * Identifies the Aggregate Information as found in the request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AggregateInfoType\AggregateInfoAType[]
     * $aggregateInfos
     * @return self
     */
    public function setAggregateInfos(array $aggregateInfos)
    {
        $this->aggregateInfos = $aggregateInfos;

        return $this;
    }


}


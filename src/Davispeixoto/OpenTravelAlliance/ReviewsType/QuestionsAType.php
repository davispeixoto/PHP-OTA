<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType;

/**
 * Class representing QuestionsAType
 */
class QuestionsAType
{

    /**
     * A grouping of questions based on the category of the question.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType[]
     * $questionCategory
     */
    private $questionCategory = null;

    /**
     * Aggregations across all categories and all questions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AggregationType\AggregationAType[]
     * $aggregations
     */
    private $aggregations = null;

    /**
     * Adds as questionCategory
     *
     * A grouping of questions based on the category of the question.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType
     * $questionCategory
     */
    public function addToQuestionCategory(
        \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType $questionCategory
    ) {
        $this->questionCategory[] = $questionCategory;

        return $this;
    }

    /**
     * isset questionCategory
     *
     * A grouping of questions based on the category of the question.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQuestionCategory($index)
    {
        return isset($this->questionCategory[$index]);
    }

    /**
     * unset questionCategory
     *
     * A grouping of questions based on the category of the question.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQuestionCategory($index)
    {
        unset($this->questionCategory[$index]);
    }

    /**
     * Gets as questionCategory
     *
     * A grouping of questions based on the category of the question.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType[]
     */
    public function getQuestionCategory()
    {
        return $this->questionCategory;
    }

    /**
     * Sets a new questionCategory
     *
     * A grouping of questions based on the category of the question.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType[]
     * $questionCategory
     * @return self
     */
    public function setQuestionCategory(array $questionCategory)
    {
        $this->questionCategory = $questionCategory;

        return $this;
    }

    /**
     * Adds as aggregation
     *
     * Aggregations across all categories and all questions.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AggregationType\AggregationAType
     * $aggregation
     */
    public function addToAggregations(\Davispeixoto\OpenTravelAlliance\AggregationType\AggregationAType $aggregation)
    {
        $this->aggregations[] = $aggregation;

        return $this;
    }

    /**
     * isset aggregations
     *
     * Aggregations across all categories and all questions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAggregations($index)
    {
        return isset($this->aggregations[$index]);
    }

    /**
     * unset aggregations
     *
     * Aggregations across all categories and all questions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAggregations($index)
    {
        unset($this->aggregations[$index]);
    }

    /**
     * Gets as aggregations
     *
     * Aggregations across all categories and all questions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AggregationType\AggregationAType[]
     */
    public function getAggregations()
    {
        return $this->aggregations;
    }

    /**
     * Sets a new aggregations
     *
     * Aggregations across all categories and all questions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AggregationType\AggregationAType[]
     * $aggregations
     * @return self
     */
    public function setAggregations(array $aggregations)
    {
        $this->aggregations = $aggregations;

        return $this;
    }


}


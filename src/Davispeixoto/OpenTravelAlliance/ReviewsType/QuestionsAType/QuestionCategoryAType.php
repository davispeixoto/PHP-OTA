<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType;

/**
 * Class representing QuestionCategoryAType
 */
class QuestionCategoryAType
{

    /**
     * Used elsewhere in the message to reference this specific question category.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Category of the questions (e.g. Room, Facilities). The OverallRating enumeration
     * value is used to identify the overall rating for the entire review. If Other_ is
     * selected from the list, then the category is passed in the Code attribute.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType $categories
     */
    private $categories = null;

    /**
     * A specific question.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType[]
     * $question
     */
    private $question = null;

    /**
     * Aggregations across all questions within each category.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AggregationType\AggregationAType[]
     * $aggregations
     */
    private $aggregations = null;

    /**
     * Gets as rPH
     *
     * Used elsewhere in the message to reference this specific question category.
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
     * Used elsewhere in the message to reference this specific question category.
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
     * Gets as categories
     *
     * Category of the questions (e.g. Room, Facilities). The OverallRating enumeration
     * value is used to identify the overall rating for the entire review. If Other_ is
     * selected from the list, then the category is passed in the Code attribute.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * Category of the questions (e.g. Room, Facilities). The OverallRating enumeration
     * value is used to identify the overall rating for the entire review. If Other_ is
     * selected from the list, then the category is passed in the Code attribute.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType $categories
     * @return self
     */
    public function setCategories(\Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Adds as question
     *
     * A specific question.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType
     * $question
     */
    public function addToQuestion(
        \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType $question
    ) {
        $this->question[] = $question;

        return $this;
    }

    /**
     * isset question
     *
     * A specific question.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQuestion($index)
    {
        return isset($this->question[$index]);
    }

    /**
     * unset question
     *
     * A specific question.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQuestion($index)
    {
        unset($this->question[$index]);
    }

    /**
     * Gets as question
     *
     * A specific question.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType[]
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Sets a new question
     *
     * A specific question.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType[]
     * $question
     * @return self
     */
    public function setQuestion(array $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Adds as aggregation
     *
     * Aggregations across all questions within each category.
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
     * Aggregations across all questions within each category.
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
     * Aggregations across all questions within each category.
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
     * Aggregations across all questions within each category.
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
     * Aggregations across all questions within each category.
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


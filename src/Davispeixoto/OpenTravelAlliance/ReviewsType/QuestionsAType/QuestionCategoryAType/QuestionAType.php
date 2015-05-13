<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType;

/**
 * Class representing QuestionAType
 */
class QuestionAType
{

    /**
     * Used elsewhere in the message to reference this specific question.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Internal question ID.
     *
     * @property string $questionID
     */
    private $questionID = null;

    /**
     * Internal question ID used in case of multiple choices possible in the question.
     *
     * @property string $additionalQuestionID
     */
    private $additionalQuestionID = null;

    /**
     * A reference to the question response type that is valid for this question.
     *
     * @property string $questionResponseRPH
     */
    private $questionResponseRPH = null;

    /**
     * When true, the question is the main question of this category.
     *
     * @property boolean $mainQuestionInd
     */
    private $mainQuestionInd = null;

    /**
     * A specific question expressed in free form text.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType\QuestionTextAType[]
     * $questionText
     */
    private $questionText = null;

    /**
     * Aggregation by individual question.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AggregationType\AggregationAType[]
     * $aggregations
     */
    private $aggregations = null;

    /**
     * Gets as rPH
     *
     * Used elsewhere in the message to reference this specific question.
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
     * Used elsewhere in the message to reference this specific question.
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
     * Gets as questionID
     *
     * Internal question ID.
     *
     * @return string
     */
    public function getQuestionID()
    {
        return $this->questionID;
    }

    /**
     * Sets a new questionID
     *
     * Internal question ID.
     *
     * @param string $questionID
     * @return self
     */
    public function setQuestionID($questionID)
    {
        $this->questionID = $questionID;

        return $this;
    }

    /**
     * Gets as additionalQuestionID
     *
     * Internal question ID used in case of multiple choices possible in the question.
     *
     * @return string
     */
    public function getAdditionalQuestionID()
    {
        return $this->additionalQuestionID;
    }

    /**
     * Sets a new additionalQuestionID
     *
     * Internal question ID used in case of multiple choices possible in the question.
     *
     * @param string $additionalQuestionID
     * @return self
     */
    public function setAdditionalQuestionID($additionalQuestionID)
    {
        $this->additionalQuestionID = $additionalQuestionID;

        return $this;
    }

    /**
     * Gets as questionResponseRPH
     *
     * A reference to the question response type that is valid for this question.
     *
     * @return string
     */
    public function getQuestionResponseRPH()
    {
        return $this->questionResponseRPH;
    }

    /**
     * Sets a new questionResponseRPH
     *
     * A reference to the question response type that is valid for this question.
     *
     * @param string $questionResponseRPH
     * @return self
     */
    public function setQuestionResponseRPH($questionResponseRPH)
    {
        $this->questionResponseRPH = $questionResponseRPH;

        return $this;
    }

    /**
     * Gets as mainQuestionInd
     *
     * When true, the question is the main question of this category.
     *
     * @return boolean
     */
    public function getMainQuestionInd()
    {
        return $this->mainQuestionInd;
    }

    /**
     * Sets a new mainQuestionInd
     *
     * When true, the question is the main question of this category.
     *
     * @param boolean $mainQuestionInd
     * @return self
     */
    public function setMainQuestionInd($mainQuestionInd)
    {
        $this->mainQuestionInd = $mainQuestionInd;

        return $this;
    }

    /**
     * Adds as questionText
     *
     * A specific question expressed in free form text.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType\QuestionTextAType
     * $questionText
     */
    public function addToQuestionText(
        \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType\QuestionTextAType $questionText
    ) {
        $this->questionText[] = $questionText;

        return $this;
    }

    /**
     * isset questionText
     *
     * A specific question expressed in free form text.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQuestionText($index)
    {
        return isset($this->questionText[$index]);
    }

    /**
     * unset questionText
     *
     * A specific question expressed in free form text.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQuestionText($index)
    {
        unset($this->questionText[$index]);
    }

    /**
     * Gets as questionText
     *
     * A specific question expressed in free form text.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType\QuestionTextAType[]
     */
    public function getQuestionText()
    {
        return $this->questionText;
    }

    /**
     * Sets a new questionText
     *
     * A specific question expressed in free form text.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionsAType\QuestionCategoryAType\QuestionAType\QuestionTextAType[]
     * $questionText
     * @return self
     */
    public function setQuestionText(array $questionText)
    {
        $this->questionText = $questionText;

        return $this;
    }

    /**
     * Adds as aggregation
     *
     * Aggregation by individual question.
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
     * Aggregation by individual question.
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
     * Aggregation by individual question.
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
     * Aggregation by individual question.
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
     * Aggregation by individual question.
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


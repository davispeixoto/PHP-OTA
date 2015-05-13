<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReviewsRQ\ReviewRequestAType;

/**
 * Class representing QuestionsAType
 */
class QuestionsAType
{

    /**
     * A grouping of questions based on the category of the question.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType[]
     * $questionCategory
     */
    private $questionCategory = null;

    /**
     * Adds as questionCategory
     *
     * A grouping of questions based on the category of the question.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType
     * $questionCategory
     */
    public function addToQuestionCategory(\Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType $questionCategory)
    {
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
     * @return \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType[]
     * $questionCategory
     * @return self
     */
    public function setQuestionCategory(array $questionCategory)
    {
        $this->questionCategory = $questionCategory;

        return $this;
    }


}


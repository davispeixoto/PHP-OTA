<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType;

/**
 * Class representing CategoryAggregationAType
 */
class CategoryAggregationAType
{

    /**
     * A reference to the QuestionCategory.
     *
     * @property string $questionCategoryRPH
     */
    private $questionCategoryRPH = null;

    /**
     * The aggregate rating for the referenced category.
     *
     * @property float $aggregateRating
     */
    private $aggregateRating = null;

    /**
     * Gets as questionCategoryRPH
     *
     * A reference to the QuestionCategory.
     *
     * @return string
     */
    public function getQuestionCategoryRPH()
    {
        return $this->questionCategoryRPH;
    }

    /**
     * Sets a new questionCategoryRPH
     *
     * A reference to the QuestionCategory.
     *
     * @param string $questionCategoryRPH
     * @return self
     */
    public function setQuestionCategoryRPH($questionCategoryRPH)
    {
        $this->questionCategoryRPH = $questionCategoryRPH;

        return $this;
    }

    /**
     * Gets as aggregateRating
     *
     * The aggregate rating for the referenced category.
     *
     * @return float
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * Sets a new aggregateRating
     *
     * The aggregate rating for the referenced category.
     *
     * @param float $aggregateRating
     * @return self
     */
    public function setAggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;

        return $this;
    }


}


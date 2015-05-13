<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType;

/**
 * Class representing CategoryAggregationsAType
 */
class CategoryAggregationsAType
{

    /**
     * The aggregation of all questions for one category in this review.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType\CategoryAggregationAType[]
     * $categoryAggregation
     */
    private $categoryAggregation = null;

    /**
     * Adds as categoryAggregation
     *
     * The aggregation of all questions for one category in this review.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType\CategoryAggregationAType
     * $categoryAggregation
     */
    public function addToCategoryAggregation(
        \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType\CategoryAggregationAType $categoryAggregation
    ) {
        $this->categoryAggregation[] = $categoryAggregation;

        return $this;
    }

    /**
     * isset categoryAggregation
     *
     * The aggregation of all questions for one category in this review.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCategoryAggregation($index)
    {
        return isset($this->categoryAggregation[$index]);
    }

    /**
     * unset categoryAggregation
     *
     * The aggregation of all questions for one category in this review.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCategoryAggregation($index)
    {
        unset($this->categoryAggregation[$index]);
    }

    /**
     * Gets as categoryAggregation
     *
     * The aggregation of all questions for one category in this review.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType\CategoryAggregationAType[]
     */
    public function getCategoryAggregation()
    {
        return $this->categoryAggregation;
    }

    /**
     * Sets a new categoryAggregation
     *
     * The aggregation of all questions for one category in this review.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType\CategoryAggregationAType[]
     * $categoryAggregation
     * @return self
     */
    public function setCategoryAggregation(array $categoryAggregation)
    {
        $this->categoryAggregation = $categoryAggregation;

        return $this;
    }


}


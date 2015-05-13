<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReviewsRQ;

/**
 * Class representing ReviewRequestAType
 */
class ReviewRequestAType
{

    /**
     * Hotel criteria.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReviewsRQ\ReviewRequestAType\HotelAType
     * $hotel
     */
    private $hotel = null;

    /**
     * Date and time period criteria.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReviewsRQ\ReviewRequestAType\PeriodAType
     * $period
     */
    private $period = null;

    /**
     * A collection of questions. The absence of this element indicates that the data
     * for all question categories should be returned.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType[] $questions
     */
    private $questions = null;

    /**
     * Specifies the levels at which aggregate data should be returned. Aggregate data
     * only applies to rating type questions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AggregateInfoType\AggregateInfoAType[]
     * $aggregateInfos
     */
    private $aggregateInfos = null;

    /**
     * Gets as hotel
     *
     * Hotel criteria.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReviewsRQ\ReviewRequestAType\HotelAType
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Sets a new hotel
     *
     * Hotel criteria.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReviewsRQ\ReviewRequestAType\HotelAType
     * $hotel
     * @return self
     */
    public function setHotel(\Davispeixoto\OpenTravelAlliance\OTAReviewsRQ\ReviewRequestAType\HotelAType $hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Gets as period
     *
     * Date and time period criteria.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReviewsRQ\ReviewRequestAType\PeriodAType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Date and time period criteria.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReviewsRQ\ReviewRequestAType\PeriodAType
     * $period
     * @return self
     */
    public function setPeriod(\Davispeixoto\OpenTravelAlliance\OTAReviewsRQ\ReviewRequestAType\PeriodAType $period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Adds as questionCategory
     *
     * A collection of questions. The absence of this element indicates that the data
     * for all question categories should be returned.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType
     * $questionCategory
     */
    public function addToQuestions(\Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType $questionCategory)
    {
        $this->questions[] = $questionCategory;

        return $this;
    }

    /**
     * isset questions
     *
     * A collection of questions. The absence of this element indicates that the data
     * for all question categories should be returned.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQuestions($index)
    {
        return isset($this->questions[$index]);
    }

    /**
     * unset questions
     *
     * A collection of questions. The absence of this element indicates that the data
     * for all question categories should be returned.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQuestions($index)
    {
        unset($this->questions[$index]);
    }

    /**
     * Gets as questions
     *
     * A collection of questions. The absence of this element indicates that the data
     * for all question categories should be returned.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType[]
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Sets a new questions
     *
     * A collection of questions. The absence of this element indicates that the data
     * for all question categories should be returned.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListQuestionCategoryType[] $questions
     * @return self
     */
    public function setQuestions(array $questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Adds as aggregateInfo
     *
     * Specifies the levels at which aggregate data should be returned. Aggregate data
     * only applies to rating type questions.
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
     * Specifies the levels at which aggregate data should be returned. Aggregate data
     * only applies to rating type questions.
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
     * Specifies the levels at which aggregate data should be returned. Aggregate data
     * only applies to rating type questions.
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
     * Specifies the levels at which aggregate data should be returned. Aggregate data
     * only applies to rating type questions.
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
     * Specifies the levels at which aggregate data should be returned. Aggregate data
     * only applies to rating type questions.
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


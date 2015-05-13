<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType;

/**
 * Class representing ReviewAType
 */
class ReviewAType
{

    /**
     * ID of the review.
     *
     * @property string $reviewID
     */
    private $reviewID = null;

    /**
     * Language of the response to the questions.
     *
     * @property string $responseLanguageCode
     */
    private $responseLanguageCode = null;

    /**
     * Month and year of travel. Usually, either MonthYearOfTravel OR the Start and End
     * dates would be used.
     *
     * @property \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType
     * $monthYearOfTravel
     */
    private $monthYearOfTravel = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * Date at which the traveler has made the review.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $reviewDate
     */
    private $reviewDate = null;

    /**
     * Traveler's company.
     *
     * @property string $reviewerCompany
     */
    private $reviewerCompany = null;

    /**
     * Duration of the entire trip.
     *
     * @property \DateInterval $tripDuration
     */
    private $tripDuration = null;

    /**
     * The average rating of all the questions with a response type of rating.
     *
     * @property float $aggregateRating
     */
    private $aggregateRating = null;

    /**
     * Information about the traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelerType $reviewerInfo
     */
    private $reviewerInfo = null;

    /**
     * A collection of responses
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\ResponseGroupsAType
     * $responseGroups
     */
    private $responseGroups = null;

    /**
     * A collection of category aggregations.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType\CategoryAggregationAType[]
     * $categoryAggregations
     */
    private $categoryAggregations = null;

    /**
     * Multimedia information about the hotel
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * This is a response to the review provided by the supplier (e.g. hotelier, tour
     * operator, etc.) The element is unbounded to support multiple languages.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $supplierResponse
     */
    private $supplierResponse = null;

    /**
     * Gets as reviewID
     *
     * ID of the review.
     *
     * @return string
     */
    public function getReviewID()
    {
        return $this->reviewID;
    }

    /**
     * Sets a new reviewID
     *
     * ID of the review.
     *
     * @param string $reviewID
     * @return self
     */
    public function setReviewID($reviewID)
    {
        $this->reviewID = $reviewID;

        return $this;
    }

    /**
     * Gets as responseLanguageCode
     *
     * Language of the response to the questions.
     *
     * @return string
     */
    public function getResponseLanguageCode()
    {
        return $this->responseLanguageCode;
    }

    /**
     * Sets a new responseLanguageCode
     *
     * Language of the response to the questions.
     *
     * @param string $responseLanguageCode
     * @return self
     */
    public function setResponseLanguageCode($responseLanguageCode)
    {
        $this->responseLanguageCode = $responseLanguageCode;

        return $this;
    }

    /**
     * Gets as monthYearOfTravel
     *
     * Month and year of travel. Usually, either MonthYearOfTravel OR the Start and End
     * dates would be used.
     *
     * @return \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType
     */
    public function getMonthYearOfTravel()
    {
        return $this->monthYearOfTravel;
    }

    /**
     * Sets a new monthYearOfTravel
     *
     * Month and year of travel. Usually, either MonthYearOfTravel OR the Start and End
     * dates would be used.
     *
     * @param \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType $monthYearOfTravel
     * @return self
     */
    public function setMonthYearOfTravel(\Davispeixoto\OpenTravelAlliance\YearOrYearMonthType $monthYearOfTravel)
    {
        $this->monthYearOfTravel = $monthYearOfTravel;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as reviewDate
     *
     * Date at which the traveler has made the review.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getReviewDate()
    {
        return $this->reviewDate;
    }

    /**
     * Sets a new reviewDate
     *
     * Date at which the traveler has made the review.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $reviewDate
     * @return self
     */
    public function setReviewDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $reviewDate)
    {
        $this->reviewDate = $reviewDate;

        return $this;
    }

    /**
     * Gets as reviewerCompany
     *
     * Traveler's company.
     *
     * @return string
     */
    public function getReviewerCompany()
    {
        return $this->reviewerCompany;
    }

    /**
     * Sets a new reviewerCompany
     *
     * Traveler's company.
     *
     * @param string $reviewerCompany
     * @return self
     */
    public function setReviewerCompany($reviewerCompany)
    {
        $this->reviewerCompany = $reviewerCompany;

        return $this;
    }

    /**
     * Gets as tripDuration
     *
     * Duration of the entire trip.
     *
     * @return \DateInterval
     */
    public function getTripDuration()
    {
        return $this->tripDuration;
    }

    /**
     * Sets a new tripDuration
     *
     * Duration of the entire trip.
     *
     * @param \DateInterval $tripDuration
     * @return self
     */
    public function setTripDuration(\DateInterval $tripDuration)
    {
        $this->tripDuration = $tripDuration;

        return $this;
    }

    /**
     * Gets as aggregateRating
     *
     * The average rating of all the questions with a response type of rating.
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
     * The average rating of all the questions with a response type of rating.
     *
     * @param float $aggregateRating
     * @return self
     */
    public function setAggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;

        return $this;
    }

    /**
     * Gets as reviewerInfo
     *
     * Information about the traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelerType
     */
    public function getReviewerInfo()
    {
        return $this->reviewerInfo;
    }

    /**
     * Sets a new reviewerInfo
     *
     * Information about the traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelerType $reviewerInfo
     * @return self
     */
    public function setReviewerInfo(\Davispeixoto\OpenTravelAlliance\TravelerType $reviewerInfo)
    {
        $this->reviewerInfo = $reviewerInfo;

        return $this;
    }

    /**
     * Gets as responseGroups
     *
     * A collection of responses
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\ResponseGroupsAType
     */
    public function getResponseGroups()
    {
        return $this->responseGroups;
    }

    /**
     * Sets a new responseGroups
     *
     * A collection of responses
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\ResponseGroupsAType
     * $responseGroups
     * @return self
     */
    public function setResponseGroups(
        \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\ResponseGroupsAType $responseGroups
    ) {
        $this->responseGroups = $responseGroups;

        return $this;
    }

    /**
     * Adds as categoryAggregation
     *
     * A collection of category aggregations.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType\CategoryAggregationAType
     * $categoryAggregation
     */
    public function addToCategoryAggregations(
        \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType\CategoryAggregationAType $categoryAggregation
    ) {
        $this->categoryAggregations[] = $categoryAggregation;

        return $this;
    }

    /**
     * isset categoryAggregations
     *
     * A collection of category aggregations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCategoryAggregations($index)
    {
        return isset($this->categoryAggregations[$index]);
    }

    /**
     * unset categoryAggregations
     *
     * A collection of category aggregations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCategoryAggregations($index)
    {
        unset($this->categoryAggregations[$index]);
    }

    /**
     * Gets as categoryAggregations
     *
     * A collection of category aggregations.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType\CategoryAggregationAType[]
     */
    public function getCategoryAggregations()
    {
        return $this->categoryAggregations;
    }

    /**
     * Sets a new categoryAggregations
     *
     * A collection of category aggregations.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType\CategoryAggregationsAType\CategoryAggregationAType[]
     * $categoryAggregations
     * @return self
     */
    public function setCategoryAggregations(array $categoryAggregations)
    {
        $this->categoryAggregations = $categoryAggregations;

        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the hotel
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the hotel
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(
        \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType $multimediaDescriptions
    ) {
        $this->multimediaDescriptions = $multimediaDescriptions;

        return $this;
    }

    /**
     * Adds as supplierResponse
     *
     * This is a response to the review provided by the supplier (e.g. hotelier, tour
     * operator, etc.) The element is unbounded to support multiple languages.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $supplierResponse
     */
    public function addToSupplierResponse(\Davispeixoto\OpenTravelAlliance\ParagraphType $supplierResponse)
    {
        $this->supplierResponse[] = $supplierResponse;

        return $this;
    }

    /**
     * isset supplierResponse
     *
     * This is a response to the review provided by the supplier (e.g. hotelier, tour
     * operator, etc.) The element is unbounded to support multiple languages.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplierResponse($index)
    {
        return isset($this->supplierResponse[$index]);
    }

    /**
     * unset supplierResponse
     *
     * This is a response to the review provided by the supplier (e.g. hotelier, tour
     * operator, etc.) The element is unbounded to support multiple languages.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplierResponse($index)
    {
        unset($this->supplierResponse[$index]);
    }

    /**
     * Gets as supplierResponse
     *
     * This is a response to the review provided by the supplier (e.g. hotelier, tour
     * operator, etc.) The element is unbounded to support multiple languages.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getSupplierResponse()
    {
        return $this->supplierResponse;
    }

    /**
     * Sets a new supplierResponse
     *
     * This is a response to the review provided by the supplier (e.g. hotelier, tour
     * operator, etc.) The element is unbounded to support multiple languages.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $supplierResponse
     * @return self
     */
    public function setSupplierResponse(array $supplierResponse)
    {
        $this->supplierResponse = $supplierResponse;

        return $this;
    }


}


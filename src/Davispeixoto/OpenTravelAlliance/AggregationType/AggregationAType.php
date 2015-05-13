<?php

namespace Davispeixoto\OpenTravelAlliance\AggregationType;

/**
 * Class representing AggregationAType
 */
class AggregationAType
{

    /**
     * Identifies the type of traveler whose reviews should be included (e.g. Leisure,
     * Business, etc.).
     *
     * @property string $travelerType
     */
    private $travelerType = null;

    /**
     * Month and year of travel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType
     * $monthYearOfTravel
     */
    private $monthYearOfTravel = null;

    /**
     * The quarter for which the travel occurred.NEED EXAMPLE.
     *
     * @property string $quarterOfTravel
     */
    private $quarterOfTravel = null;

    /**
     * Allows a reference to be assigned by a requestor to be used when matching the
     * responses to the requests.
     *
     * @property string $aggregationRef
     */
    private $aggregationRef = null;

    /**
     * The aggregate rating for the reviews requested.
     *
     * @property float $aggregateRating
     */
    private $aggregateRating = null;

    /**
     * The total number of questions of reponse type rating that were used to calculate
     * the aggregate rating.
     *
     * @property integer $ratingCount
     */
    private $ratingCount = null;

    /**
     * Total number of reviews used to calculate the aggregate rating.
     *
     * @property integer $reviewCount
     */
    private $reviewCount = null;

    /**
     * Gets as travelerType
     *
     * Identifies the type of traveler whose reviews should be included (e.g. Leisure,
     * Business, etc.).
     *
     * @return string
     */
    public function getTravelerType()
    {
        return $this->travelerType;
    }

    /**
     * Sets a new travelerType
     *
     * Identifies the type of traveler whose reviews should be included (e.g. Leisure,
     * Business, etc.).
     *
     * @param string $travelerType
     * @return self
     */
    public function setTravelerType($travelerType)
    {
        $this->travelerType = $travelerType;

        return $this;
    }

    /**
     * Gets as monthYearOfTravel
     *
     * Month and year of travel.
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
     * Month and year of travel.
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
     * Gets as quarterOfTravel
     *
     * The quarter for which the travel occurred.NEED EXAMPLE.
     *
     * @return string
     */
    public function getQuarterOfTravel()
    {
        return $this->quarterOfTravel;
    }

    /**
     * Sets a new quarterOfTravel
     *
     * The quarter for which the travel occurred.NEED EXAMPLE.
     *
     * @param string $quarterOfTravel
     * @return self
     */
    public function setQuarterOfTravel($quarterOfTravel)
    {
        $this->quarterOfTravel = $quarterOfTravel;

        return $this;
    }

    /**
     * Gets as aggregationRef
     *
     * Allows a reference to be assigned by a requestor to be used when matching the
     * responses to the requests.
     *
     * @return string
     */
    public function getAggregationRef()
    {
        return $this->aggregationRef;
    }

    /**
     * Sets a new aggregationRef
     *
     * Allows a reference to be assigned by a requestor to be used when matching the
     * responses to the requests.
     *
     * @param string $aggregationRef
     * @return self
     */
    public function setAggregationRef($aggregationRef)
    {
        $this->aggregationRef = $aggregationRef;

        return $this;
    }

    /**
     * Gets as aggregateRating
     *
     * The aggregate rating for the reviews requested.
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
     * The aggregate rating for the reviews requested.
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
     * Gets as ratingCount
     *
     * The total number of questions of reponse type rating that were used to calculate
     * the aggregate rating.
     *
     * @return integer
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * Sets a new ratingCount
     *
     * The total number of questions of reponse type rating that were used to calculate
     * the aggregate rating.
     *
     * @param integer $ratingCount
     * @return self
     */
    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;

        return $this;
    }

    /**
     * Gets as reviewCount
     *
     * Total number of reviews used to calculate the aggregate rating.
     *
     * @return integer
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * Sets a new reviewCount
     *
     * Total number of reviews used to calculate the aggregate rating.
     *
     * @param integer $reviewCount
     * @return self
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;

        return $this;
    }


}


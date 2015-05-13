<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

/**
 * Class representing UserGeneratedContentAType
 */
class UserGeneratedContentAType
{

    /**
     * Identifies the parameters around the rating search.
     *
     * @property string $typeOfRating
     */
    private $typeOfRating = null;

    /**
     * User rating for the property on which the search is made.
     *
     * @property integer $rating
     */
    private $rating = null;

    /**
     * Gets as typeOfRating
     *
     * Identifies the parameters around the rating search.
     *
     * @return string
     */
    public function getTypeOfRating()
    {
        return $this->typeOfRating;
    }

    /**
     * Sets a new typeOfRating
     *
     * Identifies the parameters around the rating search.
     *
     * @param string $typeOfRating
     * @return self
     */
    public function setTypeOfRating($typeOfRating)
    {
        $this->typeOfRating = $typeOfRating;

        return $this;
    }

    /**
     * Gets as rating
     *
     * User rating for the property on which the search is made.
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * User rating for the property on which the search is made.
     *
     * @param integer $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }


}


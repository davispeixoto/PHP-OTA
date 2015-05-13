<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayType\BasicPropertyInfoAType;

/**
 * Class representing UserGeneratedContentAType
 */
class UserGeneratedContentAType
{

    /**
     * User rating for the property on which the search is made.
     *
     * @property integer $rating
     */
    private $rating = null;

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


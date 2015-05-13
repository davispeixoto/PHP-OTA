<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType;

/**
 * Class representing ReviewSubjectAType
 */
class ReviewSubjectAType
{

    /**
     * Hotel information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\HotelAType
     * $hotel
     */
    private $hotel = null;

    /**
     * Review made by a traveler.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType[]
     * $review
     */
    private $review = null;

    /**
     * Gets as hotel
     *
     * Hotel information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\HotelAType
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Sets a new hotel
     *
     * Hotel information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\HotelAType
     * $hotel
     * @return self
     */
    public function setHotel(\Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\HotelAType $hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Adds as review
     *
     * Review made by a traveler.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType
     * $review
     */
    public function addToReview(\Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType $review)
    {
        $this->review[] = $review;

        return $this;
    }

    /**
     * isset review
     *
     * Review made by a traveler.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReview($index)
    {
        return isset($this->review[$index]);
    }

    /**
     * unset review
     *
     * Review made by a traveler.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReview($index)
    {
        unset($this->review[$index]);
    }

    /**
     * Gets as review
     *
     * Review made by a traveler.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType[]
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Sets a new review
     *
     * Review made by a traveler.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\ReviewSubjectAType\ReviewAType[]
     * $review
     * @return self
     */
    public function setReview(array $review)
    {
        $this->review = $review;

        return $this;
    }


}


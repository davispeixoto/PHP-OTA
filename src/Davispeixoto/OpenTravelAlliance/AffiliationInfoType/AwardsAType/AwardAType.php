<?php

namespace Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType;

/**
 * Class representing AwardAType
 */
class AwardAType
{

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * The date the award was received.
     *
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * The name of the award or ratings provider (e.g., Michelin, American Automobile
     * Association (AAA)).
     *
     * @property string $provider
     */
    private $provider = null;

    /**
     * The actual award or rating received by the hotel facility (e.g. 4 stars, 3
     * diamonds). If used in conjunction with RatingSymbol only the numeric rating
     * would be passed here.
     *
     * @property string $rating
     */
    private $rating = null;

    /**
     * When true indicates the property has received official permission from the award
     * provider to use the rating in publications and marketing materials; when false
     * this permission has not been granted.
     *
     * @property boolean $officialAppointmentInd
     */
    private $officialAppointmentInd = null;

    /**
     * Provides the symbol used in the rating. Used in conjunction with the Rating.
     *
     * @property string $ratingSymbol
     */
    private $ratingSymbol = null;

    /**
     * A reference ID for this award that may be used elsewhere in this message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as date
     *
     * The date the award was received.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date the award was received.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as provider
     *
     * The name of the award or ratings provider (e.g., Michelin, American Automobile
     * Association (AAA)).
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * The name of the award or ratings provider (e.g., Michelin, American Automobile
     * Association (AAA)).
     *
     * @param string $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Gets as rating
     *
     * The actual award or rating received by the hotel facility (e.g. 4 stars, 3
     * diamonds). If used in conjunction with RatingSymbol only the numeric rating
     * would be passed here.
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * The actual award or rating received by the hotel facility (e.g. 4 stars, 3
     * diamonds). If used in conjunction with RatingSymbol only the numeric rating
     * would be passed here.
     *
     * @param string $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Gets as officialAppointmentInd
     *
     * When true indicates the property has received official permission from the award
     * provider to use the rating in publications and marketing materials; when false
     * this permission has not been granted.
     *
     * @return boolean
     */
    public function getOfficialAppointmentInd()
    {
        return $this->officialAppointmentInd;
    }

    /**
     * Sets a new officialAppointmentInd
     *
     * When true indicates the property has received official permission from the award
     * provider to use the rating in publications and marketing materials; when false
     * this permission has not been granted.
     *
     * @param boolean $officialAppointmentInd
     * @return self
     */
    public function setOfficialAppointmentInd($officialAppointmentInd)
    {
        $this->officialAppointmentInd = $officialAppointmentInd;

        return $this;
    }

    /**
     * Gets as ratingSymbol
     *
     * Provides the symbol used in the rating. Used in conjunction with the Rating.
     *
     * @return string
     */
    public function getRatingSymbol()
    {
        return $this->ratingSymbol;
    }

    /**
     * Sets a new ratingSymbol
     *
     * Provides the symbol used in the rating. Used in conjunction with the Rating.
     *
     * @param string $ratingSymbol
     * @return self
     */
    public function setRatingSymbol($ratingSymbol)
    {
        $this->ratingSymbol = $ratingSymbol;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A reference ID for this award that may be used elsewhere in this message.
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
     * A reference ID for this award that may be used elsewhere in this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}


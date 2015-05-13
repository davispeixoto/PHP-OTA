<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType;

/**
 * Class representing SeasonalInfoAType
 */
class SeasonalInfoAType
{

    /**
     * Seasonal comment information associated with the fare.
     *
     * @property string $comment
     */
    private $comment = null;

    /**
     * If true, there is a variation in the fare by the seasonal dates.
     *
     * @property boolean $variationByDatesExistInd
     */
    private $variationByDatesExistInd = null;

    /**
     * The date range for the season.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType\SeasonalInfoAType\SeasonalRangeAType[]
     * $seasonalRange
     */
    private $seasonalRange = null;

    /**
     * Gets as comment
     *
     * Seasonal comment information associated with the fare.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Seasonal comment information associated with the fare.
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Gets as variationByDatesExistInd
     *
     * If true, there is a variation in the fare by the seasonal dates.
     *
     * @return boolean
     */
    public function getVariationByDatesExistInd()
    {
        return $this->variationByDatesExistInd;
    }

    /**
     * Sets a new variationByDatesExistInd
     *
     * If true, there is a variation in the fare by the seasonal dates.
     *
     * @param boolean $variationByDatesExistInd
     * @return self
     */
    public function setVariationByDatesExistInd($variationByDatesExistInd)
    {
        $this->variationByDatesExistInd = $variationByDatesExistInd;

        return $this;
    }

    /**
     * Adds as seasonalRange
     *
     * The date range for the season.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType\SeasonalInfoAType\SeasonalRangeAType
     * $seasonalRange
     */
    public function addToSeasonalRange(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType\SeasonalInfoAType\SeasonalRangeAType $seasonalRange
    ) {
        $this->seasonalRange[] = $seasonalRange;

        return $this;
    }

    /**
     * isset seasonalRange
     *
     * The date range for the season.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeasonalRange($index)
    {
        return isset($this->seasonalRange[$index]);
    }

    /**
     * unset seasonalRange
     *
     * The date range for the season.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeasonalRange($index)
    {
        unset($this->seasonalRange[$index]);
    }

    /**
     * Gets as seasonalRange
     *
     * The date range for the season.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType\SeasonalInfoAType\SeasonalRangeAType[]
     */
    public function getSeasonalRange()
    {
        return $this->seasonalRange;
    }

    /**
     * Sets a new seasonalRange
     *
     * The date range for the season.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\PricingInfoAType\SeasonalInfoAType\SeasonalRangeAType[]
     * $seasonalRange
     * @return self
     */
    public function setSeasonalRange(array $seasonalRange)
    {
        $this->seasonalRange = $seasonalRange;

        return $this;
    }


}


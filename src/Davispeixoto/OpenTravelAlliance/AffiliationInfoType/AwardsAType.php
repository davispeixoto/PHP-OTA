<?php

namespace Davispeixoto\OpenTravelAlliance\AffiliationInfoType;

/**
 * Class representing AwardsAType
 */
class AwardsAType
{

    /**
     * Provides detailed information regarding each award for this hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType\AwardAType[]
     * $award
     */
    private $award = null;

    /**
     * Adds as award
     *
     * Provides detailed information regarding each award for this hotel.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType\AwardAType
     * $award
     */
    public function addToAward(\Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType\AwardAType $award)
    {
        $this->award[] = $award;

        return $this;
    }

    /**
     * isset award
     *
     * Provides detailed information regarding each award for this hotel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAward($index)
    {
        return isset($this->award[$index]);
    }

    /**
     * unset award
     *
     * Provides detailed information regarding each award for this hotel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAward($index)
    {
        unset($this->award[$index]);
    }

    /**
     * Gets as award
     *
     * Provides detailed information regarding each award for this hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType\AwardAType[]
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Sets a new award
     *
     * Provides detailed information regarding each award for this hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\AwardsAType\AwardAType[]
     * $award
     * @return self
     */
    public function setAward(array $award)
    {
        $this->award = $award;

        return $this;
    }


}


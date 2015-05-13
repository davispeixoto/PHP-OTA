<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType;

/**
 * Class representing KeywordsAType
 */
class KeywordsAType
{

    /**
     * Unformatted keyword information with the effective and discontinue dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType\KeywordAType[]
     * $keyword
     */
    private $keyword = null;

    /**
     * Adds as keyword
     *
     * Unformatted keyword information with the effective and discontinue dates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType\KeywordAType
     * $keyword
     */
    public function addToKeyword(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType\KeywordAType $keyword
    ) {
        $this->keyword[] = $keyword;

        return $this;
    }

    /**
     * isset keyword
     *
     * Unformatted keyword information with the effective and discontinue dates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetKeyword($index)
    {
        return isset($this->keyword[$index]);
    }

    /**
     * unset keyword
     *
     * Unformatted keyword information with the effective and discontinue dates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetKeyword($index)
    {
        unset($this->keyword[$index]);
    }

    /**
     * Gets as keyword
     *
     * Unformatted keyword information with the effective and discontinue dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType\KeywordAType[]
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Sets a new keyword
     *
     * Unformatted keyword information with the effective and discontinue dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType\KeywordAType[]
     * $keyword
     * @return self
     */
    public function setKeyword(array $keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }


}


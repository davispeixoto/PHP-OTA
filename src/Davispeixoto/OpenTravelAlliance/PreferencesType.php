<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PreferencesType
 *
 * Needs of the traveler related to travel experiences.
 * XSD Type: PreferencesType
 */
class PreferencesType
{

    /**
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Aggregation of customer travel needs.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PreferencesType\PrefCollectionAType[]
     * $prefCollection
     */
    private $prefCollection = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * Adds as prefCollection
     *
     * Aggregation of customer travel needs.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PreferencesType\PrefCollectionAType
     * $prefCollection
     */
    public function addToPrefCollection(
        \Davispeixoto\OpenTravelAlliance\PreferencesType\PrefCollectionAType $prefCollection
    ) {
        $this->prefCollection[] = $prefCollection;

        return $this;
    }

    /**
     * isset prefCollection
     *
     * Aggregation of customer travel needs.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPrefCollection($index)
    {
        return isset($this->prefCollection[$index]);
    }

    /**
     * unset prefCollection
     *
     * Aggregation of customer travel needs.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPrefCollection($index)
    {
        unset($this->prefCollection[$index]);
    }

    /**
     * Gets as prefCollection
     *
     * Aggregation of customer travel needs.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PreferencesType\PrefCollectionAType[]
     */
    public function getPrefCollection()
    {
        return $this->prefCollection;
    }

    /**
     * Sets a new prefCollection
     *
     * Aggregation of customer travel needs.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PreferencesType\PrefCollectionAType[]
     * $prefCollection
     * @return self
     */
    public function setPrefCollection(array $prefCollection)
    {
        $this->prefCollection = $prefCollection;

        return $this;
    }


}


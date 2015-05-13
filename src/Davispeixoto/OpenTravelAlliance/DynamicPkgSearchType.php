<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DynamicPkgSearchType
 *
 * Basis for all component search types.
 * XSD Type: DynamicPkgSearchType
 */
class DynamicPkgSearchType
{

    /**
     * Used to specify the maximum number of responses for one request to trading
     * partners.
     *
     * @property integer $maxResponses
     */
    private $maxResponses = null;

    /**
     * Used to match up search critieria with component results.
     *
     * @property integer $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * Promotion code pertaining to this portion of the search.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgSearchType\PromotionInfoAType[]
     * $promotionInfo
     */
    private $promotionInfo = null;

    /**
     * Gets as maxResponses
     *
     * Used to specify the maximum number of responses for one request to trading
     * partners.
     *
     * @return integer
     */
    public function getMaxResponses()
    {
        return $this->maxResponses;
    }

    /**
     * Sets a new maxResponses
     *
     * Used to specify the maximum number of responses for one request to trading
     * partners.
     *
     * @param integer $maxResponses
     * @return self
     */
    public function setMaxResponses($maxResponses)
    {
        $this->maxResponses = $maxResponses;

        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * Used to match up search critieria with component results.
     *
     * @return integer
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * Used to match up search critieria with component results.
     *
     * @param integer $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * Adds as promotionInfo
     *
     * Promotion code pertaining to this portion of the search.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgSearchType\PromotionInfoAType
     * $promotionInfo
     */
    public function addToPromotionInfo(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgSearchType\PromotionInfoAType $promotionInfo
    ) {
        $this->promotionInfo[] = $promotionInfo;

        return $this;
    }

    /**
     * isset promotionInfo
     *
     * Promotion code pertaining to this portion of the search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotionInfo($index)
    {
        return isset($this->promotionInfo[$index]);
    }

    /**
     * unset promotionInfo
     *
     * Promotion code pertaining to this portion of the search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotionInfo($index)
    {
        unset($this->promotionInfo[$index]);
    }

    /**
     * Gets as promotionInfo
     *
     * Promotion code pertaining to this portion of the search.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgSearchType\PromotionInfoAType[]
     */
    public function getPromotionInfo()
    {
        return $this->promotionInfo;
    }

    /**
     * Sets a new promotionInfo
     *
     * Promotion code pertaining to this portion of the search.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgSearchType\PromotionInfoAType[]
     * $promotionInfo
     * @return self
     */
    public function setPromotionInfo(array $promotionInfo)
    {
        $this->promotionInfo = $promotionInfo;

        return $this;
    }


}


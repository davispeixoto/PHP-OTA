<?php

namespace Davispeixoto\OpenTravelAlliance\IndCoverageReqsType;

/**
 * Class representing CoveredLuggageAType
 */
class CoveredLuggageAType
{

    /**
     * Contains a description and estimated value for a specific piece of
     * luggage/equipment for which the traveler would like additional insurance.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType[]
     * $luggageItem
     */
    private $luggageItem = null;

    /**
     * Adds as luggageItem
     *
     * Contains a description and estimated value for a specific piece of
     * luggage/equipment for which the traveler would like additional insurance.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType
     * $luggageItem
     */
    public function addToLuggageItem(
        \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType $luggageItem
    ) {
        $this->luggageItem[] = $luggageItem;

        return $this;
    }

    /**
     * isset luggageItem
     *
     * Contains a description and estimated value for a specific piece of
     * luggage/equipment for which the traveler would like additional insurance.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLuggageItem($index)
    {
        return isset($this->luggageItem[$index]);
    }

    /**
     * unset luggageItem
     *
     * Contains a description and estimated value for a specific piece of
     * luggage/equipment for which the traveler would like additional insurance.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLuggageItem($index)
    {
        unset($this->luggageItem[$index]);
    }

    /**
     * Gets as luggageItem
     *
     * Contains a description and estimated value for a specific piece of
     * luggage/equipment for which the traveler would like additional insurance.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType[]
     */
    public function getLuggageItem()
    {
        return $this->luggageItem;
    }

    /**
     * Sets a new luggageItem
     *
     * Contains a description and estimated value for a specific piece of
     * luggage/equipment for which the traveler would like additional insurance.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType[]
     * $luggageItem
     * @return self
     */
    public function setLuggageItem(array $luggageItem)
    {
        $this->luggageItem = $luggageItem;

        return $this;
    }


}


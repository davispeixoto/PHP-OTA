<?php

namespace Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType;

/**
 * Class representing LuggageItemAType
 */
class LuggageItemAType
{

    /**
     * Category to describe the type of luggage e.g. Scuba, camera, computer.
     *
     * @property string $luggageType
     */
    private $luggageType = null;

    /**
     * A detailed description of what the piece of luggage/equipment contains.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType $luggageDescription
     */
    private $luggageDescription = null;

    /**
     * Estimated value of the piece of luggage/equipment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\ItemDeclaredValueAType
     * $itemDeclaredValue
     */
    private $itemDeclaredValue = null;

    /**
     * Additional cost to insure luggage/equipment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\LuggagePremiumAType
     * $luggagePremium
     */
    private $luggagePremium = null;

    /**
     * Gets as luggageType
     *
     * Category to describe the type of luggage e.g. Scuba, camera, computer.
     *
     * @return string
     */
    public function getLuggageType()
    {
        return $this->luggageType;
    }

    /**
     * Sets a new luggageType
     *
     * Category to describe the type of luggage e.g. Scuba, camera, computer.
     *
     * @param string $luggageType
     * @return self
     */
    public function setLuggageType($luggageType)
    {
        $this->luggageType = $luggageType;

        return $this;
    }

    /**
     * Gets as luggageDescription
     *
     * A detailed description of what the piece of luggage/equipment contains.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType
     */
    public function getLuggageDescription()
    {
        return $this->luggageDescription;
    }

    /**
     * Sets a new luggageDescription
     *
     * A detailed description of what the piece of luggage/equipment contains.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $luggageDescription
     * @return self
     */
    public function setLuggageDescription(\Davispeixoto\OpenTravelAlliance\FreeTextType $luggageDescription)
    {
        $this->luggageDescription = $luggageDescription;

        return $this;
    }

    /**
     * Gets as itemDeclaredValue
     *
     * Estimated value of the piece of luggage/equipment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\ItemDeclaredValueAType
     */
    public function getItemDeclaredValue()
    {
        return $this->itemDeclaredValue;
    }

    /**
     * Sets a new itemDeclaredValue
     *
     * Estimated value of the piece of luggage/equipment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\ItemDeclaredValueAType
     * $itemDeclaredValue
     * @return self
     */
    public function setItemDeclaredValue(
        \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\ItemDeclaredValueAType $itemDeclaredValue
    ) {
        $this->itemDeclaredValue = $itemDeclaredValue;

        return $this;
    }

    /**
     * Gets as luggagePremium
     *
     * Additional cost to insure luggage/equipment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\LuggagePremiumAType
     */
    public function getLuggagePremium()
    {
        return $this->luggagePremium;
    }

    /**
     * Sets a new luggagePremium
     *
     * Additional cost to insure luggage/equipment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\LuggagePremiumAType
     * $luggagePremium
     * @return self
     */
    public function setLuggagePremium(
        \Davispeixoto\OpenTravelAlliance\IndCoverageReqsType\CoveredLuggageAType\LuggageItemAType\LuggagePremiumAType $luggagePremium
    ) {
        $this->luggagePremium = $luggagePremium;

        return $this;
    }


}


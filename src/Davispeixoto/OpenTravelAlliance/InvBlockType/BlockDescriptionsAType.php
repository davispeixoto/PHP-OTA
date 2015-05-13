<?php

namespace Davispeixoto\OpenTravelAlliance\InvBlockType;

/**
 * Class representing BlockDescriptionsAType
 */
class BlockDescriptionsAType
{

    /**
     * Used for free form descriptive information about the inventory block.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[]
     * $blockDescription
     */
    private $blockDescription = null;

    /**
     * Adds as blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType
     * $blockDescription
     */
    public function addToBlockDescription(
        \Davispeixoto\OpenTravelAlliance\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType $blockDescription
    ) {
        $this->blockDescription[] = $blockDescription;

        return $this;
    }

    /**
     * isset blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBlockDescription($index)
    {
        return isset($this->blockDescription[$index]);
    }

    /**
     * unset blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBlockDescription($index)
    {
        unset($this->blockDescription[$index]);
    }

    /**
     * Gets as blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[]
     */
    public function getBlockDescription()
    {
        return $this->blockDescription;
    }

    /**
     * Sets a new blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[]
     * $blockDescription
     * @return self
     */
    public function setBlockDescription(array $blockDescription)
    {
        $this->blockDescription = $blockDescription;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRS\FareOptionAType;

/**
 * Class representing CategoryOptionsAType
 */
class CategoryOptionsAType
{

    /**
     * Contains available category information. Information relates to occupancy,
     * category location on the ship, the proposed price and upgrade if available.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CategoryOptionType[] $categoryOption
     */
    private $categoryOption = null;

    /**
     * Adds as categoryOption
     *
     * Contains available category information. Information relates to occupancy,
     * category location on the ship, the proposed price and upgrade if available.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CategoryOptionType $categoryOption
     */
    public function addToCategoryOption(\Davispeixoto\OpenTravelAlliance\CategoryOptionType $categoryOption)
    {
        $this->categoryOption[] = $categoryOption;

        return $this;
    }

    /**
     * isset categoryOption
     *
     * Contains available category information. Information relates to occupancy,
     * category location on the ship, the proposed price and upgrade if available.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCategoryOption($index)
    {
        return isset($this->categoryOption[$index]);
    }

    /**
     * unset categoryOption
     *
     * Contains available category information. Information relates to occupancy,
     * category location on the ship, the proposed price and upgrade if available.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCategoryOption($index)
    {
        unset($this->categoryOption[$index]);
    }

    /**
     * Gets as categoryOption
     *
     * Contains available category information. Information relates to occupancy,
     * category location on the ship, the proposed price and upgrade if available.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CategoryOptionType[]
     */
    public function getCategoryOption()
    {
        return $this->categoryOption;
    }

    /**
     * Sets a new categoryOption
     *
     * Contains available category information. Information relates to occupancy,
     * category location on the ship, the proposed price and upgrade if available.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CategoryOptionType[] $categoryOption
     * @return self
     */
    public function setCategoryOption(array $categoryOption)
    {
        $this->categoryOption = $categoryOption;

        return $this;
    }


}


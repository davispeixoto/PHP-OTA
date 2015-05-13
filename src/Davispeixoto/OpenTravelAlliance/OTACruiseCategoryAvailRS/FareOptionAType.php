<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRS;

/**
 * Class representing FareOptionAType
 */
class FareOptionAType
{

    /**
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @property string $fareCode
     */
    private $fareCode = null;

    /**
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @property string $groupCode
     */
    private $groupCode = null;

    /**
     * Contains the different categories associated to the fare code which is part of
     * the fare option.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CategoryOptionType[] $categoryOptions
     */
    private $categoryOptions = null;

    /**
     * Gets as fareCode
     *
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @return string
     */
    public function getFareCode()
    {
        return $this->fareCode;
    }

    /**
     * Sets a new fareCode
     *
     * Specifies the fare code. Fare codes are specific to individual cruise lines.
     *
     * @param string $fareCode
     * @return self
     */
    public function setFareCode($fareCode)
    {
        $this->fareCode = $fareCode;

        return $this;
    }

    /**
     * Gets as groupCode
     *
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * Specifies the group code. Group codes are specific to individual cruise lines.
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }

    /**
     * Adds as categoryOption
     *
     * Contains the different categories associated to the fare code which is part of
     * the fare option.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CategoryOptionType $categoryOption
     */
    public function addToCategoryOptions(\Davispeixoto\OpenTravelAlliance\CategoryOptionType $categoryOption)
    {
        $this->categoryOptions[] = $categoryOption;

        return $this;
    }

    /**
     * isset categoryOptions
     *
     * Contains the different categories associated to the fare code which is part of
     * the fare option.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCategoryOptions($index)
    {
        return isset($this->categoryOptions[$index]);
    }

    /**
     * unset categoryOptions
     *
     * Contains the different categories associated to the fare code which is part of
     * the fare option.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCategoryOptions($index)
    {
        unset($this->categoryOptions[$index]);
    }

    /**
     * Gets as categoryOptions
     *
     * Contains the different categories associated to the fare code which is part of
     * the fare option.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CategoryOptionType[]
     */
    public function getCategoryOptions()
    {
        return $this->categoryOptions;
    }

    /**
     * Sets a new categoryOptions
     *
     * Contains the different categories associated to the fare code which is part of
     * the fare option.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CategoryOptionType[] $categoryOptions
     * @return self
     */
    public function setCategoryOptions(array $categoryOptions)
    {
        $this->categoryOptions = $categoryOptions;

        return $this;
    }


}


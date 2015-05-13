<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SailingCategoryInfoType
 *
 * Provides category information for the specified sailing.
 * XSD Type: SailingCategoryInfoType
 */
class SailingCategoryInfoType extends SailingInfoType
{

    /**
     * Specifies a selected cabin category.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType[]
     * $selectedCategory
     */
    private $selectedCategory = null;

    /**
     * Adds as selectedCategory
     *
     * Specifies a selected cabin category.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType
     * $selectedCategory
     */
    public function addToSelectedCategory(
        \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType $selectedCategory
    ) {
        $this->selectedCategory[] = $selectedCategory;

        return $this;
    }

    /**
     * isset selectedCategory
     *
     * Specifies a selected cabin category.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedCategory($index)
    {
        return isset($this->selectedCategory[$index]);
    }

    /**
     * unset selectedCategory
     *
     * Specifies a selected cabin category.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedCategory($index)
    {
        unset($this->selectedCategory[$index]);
    }

    /**
     * Gets as selectedCategory
     *
     * Specifies a selected cabin category.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType[]
     */
    public function getSelectedCategory()
    {
        return $this->selectedCategory;
    }

    /**
     * Sets a new selectedCategory
     *
     * Specifies a selected cabin category.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType[]
     * $selectedCategory
     * @return self
     */
    public function setSelectedCategory(array $selectedCategory)
    {
        $this->selectedCategory = $selectedCategory;

        return $this;
    }


}


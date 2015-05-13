<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityCategoryPrefType
 *
 * Tour/ activity category and type definitions with preference designators.
 * XSD Type: TourActivityCategoryPrefType
 */
class TourActivityCategoryPrefType
{

    /**
     * Identifies a high level category and preference level. Select pre-defined
     * category from the list or select the "Other_" value and enter a category name in
     * the @Extension field.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityCategoryPrefType\CategoryAType
     * $category
     */
    private $category = null;

    /**
     * A granular tour/activity type with a preference level. Note that this may be
     * associated with a specified category. Select a pre-defined type from the list or
     * select the "Other_" value and enter a type name in the @Extension field.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityCategoryPrefType\TypeAType[] $type
     */
    private $type = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as category
     *
     * Identifies a high level category and preference level. Select pre-defined
     * category from the list or select the "Other_" value and enter a category name in
     * the @Extension field.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityCategoryPrefType\CategoryAType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Identifies a high level category and preference level. Select pre-defined
     * category from the list or select the "Other_" value and enter a category name in
     * the @Extension field.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityCategoryPrefType\CategoryAType
     * $category
     * @return self
     */
    public function setCategory(\Davispeixoto\OpenTravelAlliance\TourActivityCategoryPrefType\CategoryAType $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Adds as type
     *
     * A granular tour/activity type with a preference level. Note that this may be
     * associated with a specified category. Select a pre-defined type from the list or
     * select the "Other_" value and enter a type name in the @Extension field.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityCategoryPrefType\TypeAType
     * $type
     */
    public function addToType(\Davispeixoto\OpenTravelAlliance\TourActivityCategoryPrefType\TypeAType $type)
    {
        $this->type[] = $type;

        return $this;
    }

    /**
     * isset type
     *
     * A granular tour/activity type with a preference level. Note that this may be
     * associated with a specified category. Select a pre-defined type from the list or
     * select the "Other_" value and enter a type name in the @Extension field.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * A granular tour/activity type with a preference level. Note that this may be
     * associated with a specified category. Select a pre-defined type from the list or
     * select the "Other_" value and enter a type name in the @Extension field.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * A granular tour/activity type with a preference level. Note that this may be
     * associated with a specified category. Select a pre-defined type from the list or
     * select the "Other_" value and enter a type name in the @Extension field.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityCategoryPrefType\TypeAType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A granular tour/activity type with a preference level. Note that this may be
     * associated with a specified category. Select a pre-defined type from the list or
     * select the "Other_" value and enter a type name in the @Extension field.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityCategoryPrefType\TypeAType[]
     * $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}


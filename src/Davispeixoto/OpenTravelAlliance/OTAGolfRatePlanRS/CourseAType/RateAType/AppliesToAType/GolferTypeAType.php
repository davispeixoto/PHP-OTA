<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType;

/**
 * Class representing GolferTypeAType
 */
class GolferTypeAType
{

    /**
     * The quantity of this type of golfer.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * An extensible list of golfer categories.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListGolferType $category
     */
    private $category = null;

    /**
     * An extensible list of age qualifiers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListAgeCategoryType $ageQualifier
     */
    private $ageQualifier = null;

    /**
     * Gets as quantity
     *
     * The quantity of this type of golfer.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of this type of golfer.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as category
     *
     * An extensible list of golfer categories.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListGolferType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * An extensible list of golfer categories.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListGolferType $category
     * @return self
     */
    public function setCategory(\Davispeixoto\OpenTravelAlliance\ListGolferType $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets as ageQualifier
     *
     * An extensible list of age qualifiers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListAgeCategoryType
     */
    public function getAgeQualifier()
    {
        return $this->ageQualifier;
    }

    /**
     * Sets a new ageQualifier
     *
     * An extensible list of age qualifiers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListAgeCategoryType $ageQualifier
     * @return self
     */
    public function setAgeQualifier(\Davispeixoto\OpenTravelAlliance\ListAgeCategoryType $ageQualifier)
    {
        $this->ageQualifier = $ageQualifier;

        return $this;
    }


}


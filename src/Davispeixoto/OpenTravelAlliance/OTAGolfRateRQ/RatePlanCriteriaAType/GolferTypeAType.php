<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType;

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
     * Age qualifiers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListAgeCategoryType $ageQualifier
     */
    private $ageQualifier = null;

    /**
     * Golfer type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListGolferType $category
     */
    private $category = null;

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
     * Gets as ageQualifier
     *
     * Age qualifiers.
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
     * Age qualifiers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListAgeCategoryType $ageQualifier
     * @return self
     */
    public function setAgeQualifier(\Davispeixoto\OpenTravelAlliance\ListAgeCategoryType $ageQualifier)
    {
        $this->ageQualifier = $ageQualifier;

        return $this;
    }

    /**
     * Gets as category
     *
     * Golfer type.
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
     * Golfer type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListGolferType $category
     * @return self
     */
    public function setCategory(\Davispeixoto\OpenTravelAlliance\ListGolferType $category)
    {
        $this->category = $category;

        return $this;
    }


}


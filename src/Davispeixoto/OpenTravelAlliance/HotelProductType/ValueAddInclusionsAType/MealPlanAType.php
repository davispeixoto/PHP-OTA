<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\ValueAddInclusionsAType;

/**
 * Class representing MealPlanAType
 */
class MealPlanAType
{

    /**
     * Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @property string $mealPlanCode
     */
    private $mealPlanCode = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * The maximum number provided subject to guests in the room.
     *
     * @property integer $maxNumberProvided
     */
    private $maxNumberProvided = null;

    /**
     * Descriptive infomation for the meal plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as mealPlanCode
     *
     * Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @return string
     */
    public function getMealPlanCode()
    {
        return $this->mealPlanCode;
    }

    /**
     * Sets a new mealPlanCode
     *
     * Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @param string $mealPlanCode
     * @return self
     */
    public function setMealPlanCode($mealPlanCode)
    {
        $this->mealPlanCode = $mealPlanCode;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as maxNumberProvided
     *
     * The maximum number provided subject to guests in the room.
     *
     * @return integer
     */
    public function getMaxNumberProvided()
    {
        return $this->maxNumberProvided;
    }

    /**
     * Sets a new maxNumberProvided
     *
     * The maximum number provided subject to guests in the room.
     *
     * @param integer $maxNumberProvided
     * @return self
     */
    public function setMaxNumberProvided($maxNumberProvided)
    {
        $this->maxNumberProvided = $maxNumberProvided;

        return $this;
    }

    /**
     * Gets as description
     *
     * Descriptive infomation for the meal plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Descriptive infomation for the meal plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description = $description;

        return $this;
    }


}


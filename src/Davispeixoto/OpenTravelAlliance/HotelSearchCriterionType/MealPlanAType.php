<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

/**
 * Class representing MealPlanAType
 */
class MealPlanAType
{

    /**
     * Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @property string[] $code
     */
    private $code = null;

    /**
     * Adds as code
     *
     * Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @return self
     * @param string $code
     */
    public function addToCode($code)
    {
        $this->code[] = $code;

        return $this;
    }

    /**
     * isset code
     *
     * Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @return string[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @param string $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;

        return $this;
    }


}


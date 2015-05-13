<?php

namespace Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\CountCategorySummariesAType;

/**
 * Class representing CountCategorySummaryAType
 */
class CountCategorySummaryAType
{

    /**
     * The total count for the category in CountCategoryCode.
     *
     * @property integer $summaryCount
     */
    private $summaryCount = null;

    /**
     * The representation of a count category such as Guests : Number of guests,
     * RoomsOcc : Rooms occupied. Refer to OpenTravel Code List Count Category Code
     * (CNT).
     *
     * @property string $countCategoryCode
     */
    private $countCategoryCode = null;

    /**
     * Gets as summaryCount
     *
     * The total count for the category in CountCategoryCode.
     *
     * @return integer
     */
    public function getSummaryCount()
    {
        return $this->summaryCount;
    }

    /**
     * Sets a new summaryCount
     *
     * The total count for the category in CountCategoryCode.
     *
     * @param integer $summaryCount
     * @return self
     */
    public function setSummaryCount($summaryCount)
    {
        $this->summaryCount = $summaryCount;

        return $this;
    }

    /**
     * Gets as countCategoryCode
     *
     * The representation of a count category such as Guests : Number of guests,
     * RoomsOcc : Rooms occupied. Refer to OpenTravel Code List Count Category Code
     * (CNT).
     *
     * @return string
     */
    public function getCountCategoryCode()
    {
        return $this->countCategoryCode;
    }

    /**
     * Sets a new countCategoryCode
     *
     * The representation of a count category such as Guests : Number of guests,
     * RoomsOcc : Rooms occupied. Refer to OpenTravel Code List Count Category Code
     * (CNT).
     *
     * @param string $countCategoryCode
     * @return self
     */
    public function setCountCategoryCode($countCategoryCode)
    {
        $this->countCategoryCode = $countCategoryCode;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType;

/**
 * Class representing DiscountAType
 */
class DiscountAType
{

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @property string $participantCategoryID
     */
    private $participantCategoryID = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @property string $groupID
     */
    private $groupID = null;

    /**
     * One or more descriptions, codes and effective dates for active promotions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType\PromotionAType[]
     * $promotion
     */
    private $promotion = null;

    /**
     * Supported discount program information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType\ProgramAType
     * $program
     */
    private $program = null;

    /**
     * Gets as participantCategoryID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @return string
     */
    public function getParticipantCategoryID()
    {
        return $this->participantCategoryID;
    }

    /**
     * Sets a new participantCategoryID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @param string $participantCategoryID
     * @return self
     */
    public function setParticipantCategoryID($participantCategoryID)
    {
        $this->participantCategoryID = $participantCategoryID;

        return $this;
    }

    /**
     * Gets as groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @return string
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Sets a new groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @param string $groupID
     * @return self
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;

        return $this;
    }

    /**
     * Adds as promotion
     *
     * One or more descriptions, codes and effective dates for active promotions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType\PromotionAType
     * $promotion
     */
    public function addToPromotion(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType\PromotionAType $promotion
    ) {
        $this->promotion[] = $promotion;

        return $this;
    }

    /**
     * isset promotion
     *
     * One or more descriptions, codes and effective dates for active promotions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotion($index)
    {
        return isset($this->promotion[$index]);
    }

    /**
     * unset promotion
     *
     * One or more descriptions, codes and effective dates for active promotions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotion($index)
    {
        unset($this->promotion[$index]);
    }

    /**
     * Gets as promotion
     *
     * One or more descriptions, codes and effective dates for active promotions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType\PromotionAType[]
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Sets a new promotion
     *
     * One or more descriptions, codes and effective dates for active promotions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType\PromotionAType[]
     * $promotion
     * @return self
     */
    public function setPromotion(array $promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Gets as program
     *
     * Supported discount program information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType\ProgramAType
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Sets a new program
     *
     * Supported discount program information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType\ProgramAType
     * $program
     * @return self
     */
    public function setProgram(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType\ProgramAType $program
    ) {
        $this->program = $program;

        return $this;
    }


}


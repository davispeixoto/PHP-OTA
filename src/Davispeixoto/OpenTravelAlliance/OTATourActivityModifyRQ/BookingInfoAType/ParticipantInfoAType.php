<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType;

/**
 * Class representing ParticipantInfoAType
 */
class ParticipantInfoAType
{

    /**
     * The number of free child places required.
     *
     * @property integer $freeChildrenQty
     */
    private $freeChildrenQty = null;

    /**
     * Information for a participant category.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\CategoryAType
     * $category
     */
    private $category = null;

    /**
     * Group details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\GroupAType
     * $group
     */
    private $group = null;

    /**
     * Name and other information for known participants.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\IndividualAType
     * $individual
     */
    private $individual = null;

    /**
     * Lodging information for the participant and/or group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\LodgingInfoAType
     * $lodgingInfo
     */
    private $lodgingInfo = null;

    /**
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\SpecialNeedAType[]
     * $specialNeed
     */
    private $specialNeed = null;

    /**
     * Gets as freeChildrenQty
     *
     * The number of free child places required.
     *
     * @return integer
     */
    public function getFreeChildrenQty()
    {
        return $this->freeChildrenQty;
    }

    /**
     * Sets a new freeChildrenQty
     *
     * The number of free child places required.
     *
     * @param integer $freeChildrenQty
     * @return self
     */
    public function setFreeChildrenQty($freeChildrenQty)
    {
        $this->freeChildrenQty = $freeChildrenQty;

        return $this;
    }

    /**
     * Gets as category
     *
     * Information for a participant category.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\CategoryAType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Information for a participant category.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\CategoryAType
     * $category
     * @return self
     */
    public function setCategory(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\CategoryAType $category
    ) {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets as group
     *
     * Group details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\GroupAType
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * Group details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\GroupAType
     * $group
     * @return self
     */
    public function setGroup(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\GroupAType $group
    ) {
        $this->group = $group;

        return $this;
    }

    /**
     * Gets as individual
     *
     * Name and other information for known participants.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\IndividualAType
     */
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * Sets a new individual
     *
     * Name and other information for known participants.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\IndividualAType
     * $individual
     * @return self
     */
    public function setIndividual(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\IndividualAType $individual
    ) {
        $this->individual = $individual;

        return $this;
    }

    /**
     * Gets as lodgingInfo
     *
     * Lodging information for the participant and/or group.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\LodgingInfoAType
     */
    public function getLodgingInfo()
    {
        return $this->lodgingInfo;
    }

    /**
     * Sets a new lodgingInfo
     *
     * Lodging information for the participant and/or group.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\LodgingInfoAType
     * $lodgingInfo
     * @return self
     */
    public function setLodgingInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\LodgingInfoAType $lodgingInfo
    ) {
        $this->lodgingInfo = $lodgingInfo;

        return $this;
    }

    /**
     * Adds as specialNeed
     *
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\SpecialNeedAType
     * $specialNeed
     */
    public function addToSpecialNeed(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\SpecialNeedAType $specialNeed
    ) {
        $this->specialNeed[] = $specialNeed;

        return $this;
    }

    /**
     * isset specialNeed
     *
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialNeed($index)
    {
        return isset($this->specialNeed[$index]);
    }

    /**
     * unset specialNeed
     *
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialNeed($index)
    {
        unset($this->specialNeed[$index]);
    }

    /**
     * Gets as specialNeed
     *
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\SpecialNeedAType[]
     */
    public function getSpecialNeed()
    {
        return $this->specialNeed;
    }

    /**
     * Sets a new specialNeed
     *
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\SpecialNeedAType[]
     * $specialNeed
     * @return self
     */
    public function setSpecialNeed(array $specialNeed)
    {
        $this->specialNeed = $specialNeed;

        return $this;
    }


}


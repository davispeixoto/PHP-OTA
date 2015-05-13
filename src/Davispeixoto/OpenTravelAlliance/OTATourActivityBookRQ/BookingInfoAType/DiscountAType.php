<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType;

/**
 * Class representing DiscountAType
 */
class DiscountAType
{

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @property string $participantID
     */
    private $participantID = null;

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
     * One or more promotion codes for promotional pricing.
     *
     * Up to 9 may be specified for each individual participant, participant category
     * and/ or group.
     *
     * @property string[] $promotionCode
     */
    private $promotionCode = null;

    /**
     * Participation information, including card number and valid dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\DiscountAType\ParticipationInfoAType
     * $participationInfo
     */
    private $participationInfo = null;

    /**
     * Gets as participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @return string
     */
    public function getParticipantID()
    {
        return $this->participantID;
    }

    /**
     * Sets a new participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @param string $participantID
     * @return self
     */
    public function setParticipantID($participantID)
    {
        $this->participantID = $participantID;

        return $this;
    }

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
     * Adds as promotionCode
     *
     * One or more promotion codes for promotional pricing.
     *
     * Up to 9 may be specified for each individual participant, participant category
     * and/ or group.
     *
     * @return self
     * @param string $promotionCode
     */
    public function addToPromotionCode($promotionCode)
    {
        $this->promotionCode[] = $promotionCode;

        return $this;
    }

    /**
     * isset promotionCode
     *
     * One or more promotion codes for promotional pricing.
     *
     * Up to 9 may be specified for each individual participant, participant category
     * and/ or group.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotionCode($index)
    {
        return isset($this->promotionCode[$index]);
    }

    /**
     * unset promotionCode
     *
     * One or more promotion codes for promotional pricing.
     *
     * Up to 9 may be specified for each individual participant, participant category
     * and/ or group.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotionCode($index)
    {
        unset($this->promotionCode[$index]);
    }

    /**
     * Gets as promotionCode
     *
     * One or more promotion codes for promotional pricing.
     *
     * Up to 9 may be specified for each individual participant, participant category
     * and/ or group.
     *
     * @return string[]
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * One or more promotion codes for promotional pricing.
     *
     * Up to 9 may be specified for each individual participant, participant category
     * and/ or group.
     *
     * @param string[] $promotionCode
     * @return self
     */
    public function setPromotionCode(array $promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Gets as participationInfo
     *
     * Participation information, including card number and valid dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\DiscountAType\ParticipationInfoAType
     */
    public function getParticipationInfo()
    {
        return $this->participationInfo;
    }

    /**
     * Sets a new participationInfo
     *
     * Participation information, including card number and valid dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\DiscountAType\ParticipationInfoAType
     * $participationInfo
     * @return self
     */
    public function setParticipationInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\DiscountAType\ParticipationInfoAType $participationInfo
    ) {
        $this->participationInfo = $participationInfo;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityParticipantType
 *
 * Participant information, which may be age, birth date and/or an age qualifier
 * and name information.
 * XSD Type: TourActivityParticipantType
 */
class TourActivityParticipantType
{

    /**
     * This is used to specify a participant age in years.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * Used to define the quantity of participants for the specified information.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * A specific type of age and/or group qualifier, such as "Adult". Select a value
     * from the pre-defined list or select "Other_" and enter a value known between
     * trading partners in the @Extension attribute.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\CategoryInfoAType
     * $categoryInfo
     */
    private $categoryInfo = null;

    /**
     * Name information for participants.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\ParticipantNameInfoAType
     * $participantNameInfo
     */
    private $participantNameInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as age
     *
     * This is used to specify a participant age in years.
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * This is used to specify a participant age in years.
     *
     * @param integer $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets as birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity of participants for the specified information.
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
     * Used to define the quantity of participants for the specified information.
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
     * Gets as categoryInfo
     *
     * A specific type of age and/or group qualifier, such as "Adult". Select a value
     * from the pre-defined list or select "Other_" and enter a value known between
     * trading partners in the @Extension attribute.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\CategoryInfoAType
     */
    public function getCategoryInfo()
    {
        return $this->categoryInfo;
    }

    /**
     * Sets a new categoryInfo
     *
     * A specific type of age and/or group qualifier, such as "Adult". Select a value
     * from the pre-defined list or select "Other_" and enter a value known between
     * trading partners in the @Extension attribute.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\CategoryInfoAType
     * $categoryInfo
     * @return self
     */
    public function setCategoryInfo(
        \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\CategoryInfoAType $categoryInfo
    ) {
        $this->categoryInfo = $categoryInfo;

        return $this;
    }

    /**
     * Gets as participantNameInfo
     *
     * Name information for participants.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\ParticipantNameInfoAType
     */
    public function getParticipantNameInfo()
    {
        return $this->participantNameInfo;
    }

    /**
     * Sets a new participantNameInfo
     *
     * Name information for participants.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\ParticipantNameInfoAType
     * $participantNameInfo
     * @return self
     */
    public function setParticipantNameInfo(
        \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\ParticipantNameInfoAType $participantNameInfo
    ) {
        $this->participantNameInfo = $participantNameInfo;

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


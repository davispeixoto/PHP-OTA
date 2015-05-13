<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityParticipantCategoryType
 *
 * Participant category information, which may be age, birth date and/or an age
 * qualifier.
 * XSD Type: TourActivityParticipantCategoryType
 */
class TourActivityParticipantCategoryType
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
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantCategoryType\QualifierInfoAType
     * $qualifierInfo
     */
    private $qualifierInfo = null;

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
     * Gets as qualifierInfo
     *
     * A specific type of age and/or group qualifier, such as "Adult". Select a value
     * from the pre-defined list or select "Other_" and enter a value known between
     * trading partners in the @Extension attribute.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantCategoryType\QualifierInfoAType
     */
    public function getQualifierInfo()
    {
        return $this->qualifierInfo;
    }

    /**
     * Sets a new qualifierInfo
     *
     * A specific type of age and/or group qualifier, such as "Adult". Select a value
     * from the pre-defined list or select "Other_" and enter a value known between
     * trading partners in the @Extension attribute.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantCategoryType\QualifierInfoAType
     * $qualifierInfo
     * @return self
     */
    public function setQualifierInfo(
        \Davispeixoto\OpenTravelAlliance\TourActivityParticipantCategoryType\QualifierInfoAType $qualifierInfo
    ) {
        $this->qualifierInfo = $qualifierInfo;

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


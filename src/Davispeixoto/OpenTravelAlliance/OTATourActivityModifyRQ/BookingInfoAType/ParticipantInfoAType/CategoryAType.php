<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType;

/**
 * Class representing CategoryAType
 */
class CategoryAType
{

    /**
     * This is used to specify a participant age in years.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Used to define the quantity of participants for the specified information.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * A unique identifier for a participant category.
     *
     * @property string $participantCategoryID
     */
    private $participantCategoryID = null;

    /**
     * A specific type of age and/or group qualifier, such as "Adult". Select a value
     * from the pre-defined list or select "Other_" and enter a value known between
     * trading partners in the @Extension attribute.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\CategoryAType\QualifierInfoAType
     * $qualifierInfo
     */
    private $qualifierInfo = null;

    /**
     * The primary contact.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    private $contact = null;

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
     * Gets as participantCategoryID
     *
     * A unique identifier for a participant category.
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
     * A unique identifier for a participant category.
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
     * Gets as qualifierInfo
     *
     * A specific type of age and/or group qualifier, such as "Adult". Select a value
     * from the pre-defined list or select "Other_" and enter a value known between
     * trading partners in the @Extension attribute.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\CategoryAType\QualifierInfoAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\CategoryAType\QualifierInfoAType
     * $qualifierInfo
     * @return self
     */
    public function setQualifierInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\CategoryAType\QualifierInfoAType $qualifierInfo
    ) {
        $this->qualifierInfo = $qualifierInfo;

        return $this;
    }

    /**
     * Gets as contact
     *
     * The primary contact.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * The primary contact.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     * @return self
     */
    public function setContact(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contact)
    {
        $this->contact = $contact;

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


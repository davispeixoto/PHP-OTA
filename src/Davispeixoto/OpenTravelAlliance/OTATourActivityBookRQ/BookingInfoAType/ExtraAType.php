<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType;

/**
 * Class representing ExtraAType
 */
class ExtraAType
{

    /**
     * The supplier code that uniquely identifies the extra.
     *
     * @property string $supplierCode
     */
    private $supplierCode = null;

    /**
     * The trading partner code that uniquely identifies the extra and is associated
     * with the supplier code.
     *
     * @property string $otherCode
     */
    private $otherCode = null;

    /**
     * The extra amenity name.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * A description of the extra.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Identifies additional information for an extra. E.g. "Large", "Medium" or
     * "Small" frame for a mountain bike.
     *
     * @property string $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * The quantity of extras being requested.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * If true, a reservation for this this extra is requested.
     *
     * @property boolean $reserveInd
     */
    private $reserveInd = null;

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
     * Deposit payment information if a deposit is required for the extra.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ExtraAType\DepositAType
     * $deposit
     */
    private $deposit = null;

    /**
     * Gets as supplierCode
     *
     * The supplier code that uniquely identifies the extra.
     *
     * @return string
     */
    public function getSupplierCode()
    {
        return $this->supplierCode;
    }

    /**
     * Sets a new supplierCode
     *
     * The supplier code that uniquely identifies the extra.
     *
     * @param string $supplierCode
     * @return self
     */
    public function setSupplierCode($supplierCode)
    {
        $this->supplierCode = $supplierCode;

        return $this;
    }

    /**
     * Gets as otherCode
     *
     * The trading partner code that uniquely identifies the extra and is associated
     * with the supplier code.
     *
     * @return string
     */
    public function getOtherCode()
    {
        return $this->otherCode;
    }

    /**
     * Sets a new otherCode
     *
     * The trading partner code that uniquely identifies the extra and is associated
     * with the supplier code.
     *
     * @param string $otherCode
     * @return self
     */
    public function setOtherCode($otherCode)
    {
        $this->otherCode = $otherCode;

        return $this;
    }

    /**
     * Gets as name
     *
     * The extra amenity name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The extra amenity name.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the extra.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the extra.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as additionalInfo
     *
     * Identifies additional information for an extra. E.g. "Large", "Medium" or
     * "Small" frame for a mountain bike.
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * Identifies additional information for an extra. E.g. "Large", "Medium" or
     * "Small" frame for a mountain bike.
     *
     * @param string $additionalInfo
     * @return self
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of extras being requested.
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
     * The quantity of extras being requested.
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
     * Gets as reserveInd
     *
     * If true, a reservation for this this extra is requested.
     *
     * @return boolean
     */
    public function getReserveInd()
    {
        return $this->reserveInd;
    }

    /**
     * Sets a new reserveInd
     *
     * If true, a reservation for this this extra is requested.
     *
     * @param boolean $reserveInd
     * @return self
     */
    public function setReserveInd($reserveInd)
    {
        $this->reserveInd = $reserveInd;

        return $this;
    }

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
     * Gets as deposit
     *
     * Deposit payment information if a deposit is required for the extra.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ExtraAType\DepositAType
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Sets a new deposit
     *
     * Deposit payment information if a deposit is required for the extra.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ExtraAType\DepositAType
     * $deposit
     * @return self
     */
    public function setDeposit(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType\ExtraAType\DepositAType $deposit
    ) {
        $this->deposit = $deposit;

        return $this;
    }


}


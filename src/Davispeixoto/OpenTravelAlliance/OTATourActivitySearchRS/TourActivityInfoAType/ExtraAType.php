<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType;

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
     * If true, this extra is required to participate in the tour/ activity.
     *
     * @property boolean $requiredInd
     */
    private $requiredInd = null;

    /**
     * If true, this extra may be reserved.
     *
     * @property boolean $reserveInd
     */
    private $reserveInd = null;

    /**
     * Deposit information if a deposit is required for the extra.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ExtraAType\DepositAType
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
     * Gets as requiredInd
     *
     * If true, this extra is required to participate in the tour/ activity.
     *
     * @return boolean
     */
    public function getRequiredInd()
    {
        return $this->requiredInd;
    }

    /**
     * Sets a new requiredInd
     *
     * If true, this extra is required to participate in the tour/ activity.
     *
     * @param boolean $requiredInd
     * @return self
     */
    public function setRequiredInd($requiredInd)
    {
        $this->requiredInd = $requiredInd;

        return $this;
    }

    /**
     * Gets as reserveInd
     *
     * If true, this extra may be reserved.
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
     * If true, this extra may be reserved.
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
     * Gets as deposit
     *
     * Deposit information if a deposit is required for the extra.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ExtraAType\DepositAType
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Sets a new deposit
     *
     * Deposit information if a deposit is required for the extra.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ExtraAType\DepositAType
     * $deposit
     * @return self
     */
    public function setDeposit(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ExtraAType\DepositAType $deposit
    ) {
        $this->deposit = $deposit;

        return $this;
    }


}


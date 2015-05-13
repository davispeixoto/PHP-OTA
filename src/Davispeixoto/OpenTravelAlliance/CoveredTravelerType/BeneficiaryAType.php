<?php

namespace Davispeixoto\OpenTravelAlliance\CoveredTravelerType;

/**
 * Class representing BeneficiaryAType
 */
class BeneficiaryAType
{

    /**
     * @property string $relation
     */
    private $relation = null;

    /**
     * @property float $benefitPercent
     */
    private $benefitPercent = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\BeneficiaryAType\NameAType
     * $name
     */
    private $name = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AddressInfoType $address
     */
    private $address = null;

    /**
     * Gets as relation
     *
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Sets a new relation
     *
     * @param string $relation
     * @return self
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * Gets as benefitPercent
     *
     * @return float
     */
    public function getBenefitPercent()
    {
        return $this->benefitPercent;
    }

    /**
     * Sets a new benefitPercent
     *
     * @param float $benefitPercent
     * @return self
     */
    public function setBenefitPercent($benefitPercent)
    {
        $this->benefitPercent = $benefitPercent;

        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as name
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\BeneficiaryAType\NameAType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CoveredTravelerType\BeneficiaryAType\NameAType
     * $name
     * @return self
     */
    public function setName(\Davispeixoto\OpenTravelAlliance\CoveredTravelerType\BeneficiaryAType\NameAType $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as address
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressInfoType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\AddressInfoType $address)
    {
        $this->address = $address;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\GroupPoliciesAType;

/**
 * Class representing GroupPolicyAType
 */
class GroupPolicyAType
{

    /**
     * Currency used for contracts.Example: usd
     *
     * @property string $contractCurrency
     */
    private $contractCurrency = null;

    /**
     * Language used for contract.Example: en
     *
     * @property string $contractLanguage
     */
    private $contractLanguage = null;

    /**
     * Local Destination Management Company Role (e.g. suggested or required).Example:
     * Required
     *
     * @property string $localDMCRole
     */
    private $localDMCRole = null;

    /**
     * Maximum number of people that the property will accept as a group.Example: 500
     *
     * @property integer $maxGroupSize
     */
    private $maxGroupSize = null;

    /**
     * Gets as contractCurrency
     *
     * Currency used for contracts.Example: usd
     *
     * @return string
     */
    public function getContractCurrency()
    {
        return $this->contractCurrency;
    }

    /**
     * Sets a new contractCurrency
     *
     * Currency used for contracts.Example: usd
     *
     * @param string $contractCurrency
     * @return self
     */
    public function setContractCurrency($contractCurrency)
    {
        $this->contractCurrency = $contractCurrency;

        return $this;
    }

    /**
     * Gets as contractLanguage
     *
     * Language used for contract.Example: en
     *
     * @return string
     */
    public function getContractLanguage()
    {
        return $this->contractLanguage;
    }

    /**
     * Sets a new contractLanguage
     *
     * Language used for contract.Example: en
     *
     * @param string $contractLanguage
     * @return self
     */
    public function setContractLanguage($contractLanguage)
    {
        $this->contractLanguage = $contractLanguage;

        return $this;
    }

    /**
     * Gets as localDMCRole
     *
     * Local Destination Management Company Role (e.g. suggested or required).Example:
     * Required
     *
     * @return string
     */
    public function getLocalDMCRole()
    {
        return $this->localDMCRole;
    }

    /**
     * Sets a new localDMCRole
     *
     * Local Destination Management Company Role (e.g. suggested or required).Example:
     * Required
     *
     * @param string $localDMCRole
     * @return self
     */
    public function setLocalDMCRole($localDMCRole)
    {
        $this->localDMCRole = $localDMCRole;

        return $this;
    }

    /**
     * Gets as maxGroupSize
     *
     * Maximum number of people that the property will accept as a group.Example: 500
     *
     * @return integer
     */
    public function getMaxGroupSize()
    {
        return $this->maxGroupSize;
    }

    /**
     * Sets a new maxGroupSize
     *
     * Maximum number of people that the property will accept as a group.Example: 500
     *
     * @param integer $maxGroupSize
     * @return self
     */
    public function setMaxGroupSize($maxGroupSize)
    {
        $this->maxGroupSize = $maxGroupSize;

        return $this;
    }


}


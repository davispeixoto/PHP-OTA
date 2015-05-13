<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType;

/**
 * Class representing DistributorTypesAType
 */
class DistributorTypesAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType[]
     * $distributorType
     */
    private $distributorType = null;

    /**
     * Adds as distributorType
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType
     * $distributorType
     */
    public function addToDistributorType(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType $distributorType
    ) {
        $this->distributorType[] = $distributorType;

        return $this;
    }

    /**
     * isset distributorType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDistributorType($index)
    {
        return isset($this->distributorType[$index]);
    }

    /**
     * unset distributorType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDistributorType($index)
    {
        unset($this->distributorType[$index]);
    }

    /**
     * Gets as distributorType
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType[]
     */
    public function getDistributorType()
    {
        return $this->distributorType;
    }

    /**
     * Sets a new distributorType
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\DistributorTypesAType\DistributorTypeAType[]
     * $distributorType
     * @return self
     */
    public function setDistributorType(array $distributorType)
    {
        $this->distributorType = $distributorType;

        return $this;
    }


}


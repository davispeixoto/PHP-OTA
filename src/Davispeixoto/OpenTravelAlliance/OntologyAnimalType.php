<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyAnimalType
 *
 * Animal type, weight with ontology reference.
 * XSD Type: OntologyAnimalType
 */
class OntologyAnimalType
{

    /**
     * Animal quantity.Example: 1
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Service animal indicator.Example: trueImplementer: If true, one or more
     * travelers has a service animal.
     *
     * @property boolean $serviceAnimalInd
     */
    private $serviceAnimalInd = null;

    /**
     * Animal details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType[]
     * $detail
     */
    private $detail = null;

    /**
     * Gets as quantity
     *
     * Animal quantity.Example: 1
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
     * Animal quantity.Example: 1
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
     * Gets as serviceAnimalInd
     *
     * Service animal indicator.Example: trueImplementer: If true, one or more
     * travelers has a service animal.
     *
     * @return boolean
     */
    public function getServiceAnimalInd()
    {
        return $this->serviceAnimalInd;
    }

    /**
     * Sets a new serviceAnimalInd
     *
     * Service animal indicator.Example: trueImplementer: If true, one or more
     * travelers has a service animal.
     *
     * @param boolean $serviceAnimalInd
     * @return self
     */
    public function setServiceAnimalInd($serviceAnimalInd)
    {
        $this->serviceAnimalInd = $serviceAnimalInd;

        return $this;
    }

    /**
     * Adds as detail
     *
     * Animal details.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType $detail
     */
    public function addToDetail(\Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType $detail)
    {
        $this->detail[] = $detail;

        return $this;
    }

    /**
     * isset detail
     *
     * Animal details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Animal details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Animal details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Animal details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyAnimalType\DetailAType[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;

        return $this;
    }


}


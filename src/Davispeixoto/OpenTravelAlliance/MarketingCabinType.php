<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing MarketingCabinType
 *
 * Marketing name for the First, Business or Economy cabin.
 * XSD Type: MarketingCabinType
 */
class MarketingCabinType extends CabinAvailabilityType
{

    /**
     * The marketing name of the cabin that is specific to the supplier.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The reference place holder to link the marketing cabin information and the RBD.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as name
     *
     * The marketing name of the cabin that is specific to the supplier.
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
     * The marketing name of the cabin that is specific to the supplier.
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
     * Gets as rPH
     *
     * The reference place holder to link the marketing cabin information and the RBD.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * The reference place holder to link the marketing cabin information and the RBD.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OperationSchedulePlusChargeType
 *
 * This allows a charge to be associated with operating times (e.g. a golf tee time
 * may be more expensive during peak hours v. off peak hours).
 * XSD Type: OperationSchedulePlusChargeType
 */
class OperationSchedulePlusChargeType extends OperationScheduleType
{

    /**
     * Cost associated with an amenity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $charge
     */
    private $charge = null;

    /**
     * Adds as charge
     *
     * Cost associated with an amenity.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $charge
     */
    public function addToCharge(\Davispeixoto\OpenTravelAlliance\FeeType $charge)
    {
        $this->charge[] = $charge;

        return $this;
    }

    /**
     * isset charge
     *
     * Cost associated with an amenity.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCharge($index)
    {
        return isset($this->charge[$index]);
    }

    /**
     * unset charge
     *
     * Cost associated with an amenity.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCharge($index)
    {
        unset($this->charge[$index]);
    }

    /**
     * Gets as charge
     *
     * Cost associated with an amenity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Cost associated with an amenity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $charge
     * @return self
     */
    public function setCharge(array $charge)
    {
        $this->charge = $charge;

        return $this;
    }


}


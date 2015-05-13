<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailCoreType;

/**
 * Class representing FeesAType
 */
class FeesAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fee
     */
    private $fee = null;

    /**
     * Adds as fee
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee
     */
    public function addToFee(\Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee)
    {
        $this->fee[] = $fee;

        return $this;
    }

    /**
     * isset fee
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }


}


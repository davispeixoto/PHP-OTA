<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType;

/**
 * Class representing FeesAType
 */
class FeesAType
{

    /**
     * One specific fee associated with the vehicle reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fee
     */
    private $fee = null;

    /**
     * Adds as fee
     *
     * One specific fee associated with the vehicle reservation.
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
     * One specific fee associated with the vehicle reservation.
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
     * One specific fee associated with the vehicle reservation.
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
     * One specific fee associated with the vehicle reservation.
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
     * One specific fee associated with the vehicle reservation.
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


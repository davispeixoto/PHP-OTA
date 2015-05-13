<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS;

/**
 * Class representing FeesAType
 */
class FeesAType
{

    /**
     * A specific fee along with the corresponding charge, description and additional
     * information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fee
     */
    private $fee = null;

    /**
     * Adds as fee
     *
     * A specific fee along with the corresponding charge, description and additional
     * information.
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
     * A specific fee along with the corresponding charge, description and additional
     * information.
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
     * A specific fee along with the corresponding charge, description and additional
     * information.
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
     * A specific fee along with the corresponding charge, description and additional
     * information.
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
     * A specific fee along with the corresponding charge, description and additional
     * information.
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


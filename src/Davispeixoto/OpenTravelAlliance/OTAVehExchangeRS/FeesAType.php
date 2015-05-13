<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS;

/**
 * Class representing FeesAType
 */
class FeesAType
{

    /**
     * A fee associated with this rental (e.g., airport concession fee, vehicle license
     * fee, facility usage fee). This is not intended for information regarding rates,
     * priced equipment or coverages.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fee
     */
    private $fee = null;

    /**
     * Adds as fee
     *
     * A fee associated with this rental (e.g., airport concession fee, vehicle license
     * fee, facility usage fee). This is not intended for information regarding rates,
     * priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license
     * fee, facility usage fee). This is not intended for information regarding rates,
     * priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license
     * fee, facility usage fee). This is not intended for information regarding rates,
     * priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license
     * fee, facility usage fee). This is not intended for information regarding rates,
     * priced equipment or coverages.
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
     * A fee associated with this rental (e.g., airport concession fee, vehicle license
     * fee, facility usage fee). This is not intended for information regarding rates,
     * priced equipment or coverages.
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


<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType;

/**
 * Class representing SupplementChargesAType
 */
class SupplementChargesAType
{

    /**
     * A value representing a supplement for this journey (e.g., Aberdeen to Palma)
     * over the cost of the journey on which package basic price is calculated (e.g.,
     * Gatwick to Palma).
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $supplementCharge
     */
    private $supplementCharge = null;

    /**
     * Adds as supplementCharge
     *
     * A value representing a supplement for this journey (e.g., Aberdeen to Palma)
     * over the cost of the journey on which package basic price is calculated (e.g.,
     * Gatwick to Palma).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $supplementCharge
     */
    public function addToSupplementCharge(\Davispeixoto\OpenTravelAlliance\FeeType $supplementCharge)
    {
        $this->supplementCharge[] = $supplementCharge;

        return $this;
    }

    /**
     * isset supplementCharge
     *
     * A value representing a supplement for this journey (e.g., Aberdeen to Palma)
     * over the cost of the journey on which package basic price is calculated (e.g.,
     * Gatwick to Palma).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplementCharge($index)
    {
        return isset($this->supplementCharge[$index]);
    }

    /**
     * unset supplementCharge
     *
     * A value representing a supplement for this journey (e.g., Aberdeen to Palma)
     * over the cost of the journey on which package basic price is calculated (e.g.,
     * Gatwick to Palma).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplementCharge($index)
    {
        unset($this->supplementCharge[$index]);
    }

    /**
     * Gets as supplementCharge
     *
     * A value representing a supplement for this journey (e.g., Aberdeen to Palma)
     * over the cost of the journey on which package basic price is calculated (e.g.,
     * Gatwick to Palma).
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getSupplementCharge()
    {
        return $this->supplementCharge;
    }

    /**
     * Sets a new supplementCharge
     *
     * A value representing a supplement for this journey (e.g., Aberdeen to Palma)
     * over the cost of the journey on which package basic price is calculated (e.g.,
     * Gatwick to Palma).
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $supplementCharge
     * @return self
     */
    public function setSupplementCharge(array $supplementCharge)
    {
        $this->supplementCharge = $supplementCharge;

        return $this;
    }


}


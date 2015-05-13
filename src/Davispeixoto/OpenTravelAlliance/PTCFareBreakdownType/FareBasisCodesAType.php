<?php

namespace Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType;

/**
 * Class representing FareBasisCodesAType
 */
class FareBasisCodesAType
{

    /**
     * Fare basis code for the price for this PTC
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareBasisCodeType[] $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Adds as fareBasisCode
     *
     * Fare basis code for the price for this PTC
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode
     */
    public function addToFareBasisCode(\Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode)
    {
        $this->fareBasisCode[] = $fareBasisCode;

        return $this;
    }

    /**
     * isset fareBasisCode
     *
     * Fare basis code for the price for this PTC
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareBasisCode($index)
    {
        return isset($this->fareBasisCode[$index]);
    }

    /**
     * unset fareBasisCode
     *
     * Fare basis code for the price for this PTC
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareBasisCode($index)
    {
        unset($this->fareBasisCode[$index]);
    }

    /**
     * Gets as fareBasisCode
     *
     * Fare basis code for the price for this PTC
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareBasisCodeType[]
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Fare basis code for the price for this PTC
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareBasisCodeType[] $fareBasisCode
     * @return self
     */
    public function setFareBasisCode(array $fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }


}


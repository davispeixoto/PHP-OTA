<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType;

/**
 * Class representing FeesAType
 */
class FeesAType
{

    /**
     * This element is used to describe one specific fee that may apply.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\FeesAType\FeeAType[]
     * $fee
     */
    private $fee = null;

    /**
     * General information about the additional fees that may apply.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     */
    private $info = null;

    /**
     * Adds as fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\FeesAType\FeeAType
     * $fee
     */
    public function addToFee(\Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\FeesAType\FeeAType $fee)
    {
        $this->fee[] = $fee;

        return $this;
    }

    /**
     * isset fee
     *
     * This element is used to describe one specific fee that may apply.
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
     * This element is used to describe one specific fee that may apply.
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
     * This element is used to describe one specific fee that may apply.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\FeesAType\FeeAType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * This element is used to describe one specific fee that may apply.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\FeesAType\FeeAType[]
     * $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the additional fees that may apply.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * General information about the additional fees that may apply.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     * @return self
     */
    public function setInfo(\Davispeixoto\OpenTravelAlliance\FormattedTextType $info)
    {
        $this->info = $info;

        return $this;
    }


}


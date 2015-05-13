<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType;

/**
 * Class representing MiscellaneousChargesAType
 */
class MiscellaneousChargesAType
{

    /**
     * This element is used to describe one specific miscellaneous charge that may
     * apply.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType\MiscellaneousChargeAType[]
     * $miscellaneousCharge
     */
    private $miscellaneousCharge = null;

    /**
     * General information about the additional miscellaneous charges that may apply.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     */
    private $info = null;

    /**
     * Adds as miscellaneousCharge
     *
     * This element is used to describe one specific miscellaneous charge that may
     * apply.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType\MiscellaneousChargeAType
     * $miscellaneousCharge
     */
    public function addToMiscellaneousCharge(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType\MiscellaneousChargeAType $miscellaneousCharge
    ) {
        $this->miscellaneousCharge[] = $miscellaneousCharge;

        return $this;
    }

    /**
     * isset miscellaneousCharge
     *
     * This element is used to describe one specific miscellaneous charge that may
     * apply.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMiscellaneousCharge($index)
    {
        return isset($this->miscellaneousCharge[$index]);
    }

    /**
     * unset miscellaneousCharge
     *
     * This element is used to describe one specific miscellaneous charge that may
     * apply.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMiscellaneousCharge($index)
    {
        unset($this->miscellaneousCharge[$index]);
    }

    /**
     * Gets as miscellaneousCharge
     *
     * This element is used to describe one specific miscellaneous charge that may
     * apply.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType\MiscellaneousChargeAType[]
     */
    public function getMiscellaneousCharge()
    {
        return $this->miscellaneousCharge;
    }

    /**
     * Sets a new miscellaneousCharge
     *
     * This element is used to describe one specific miscellaneous charge that may
     * apply.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType\MiscellaneousChargeAType[]
     * $miscellaneousCharge
     * @return self
     */
    public function setMiscellaneousCharge(array $miscellaneousCharge)
    {
        $this->miscellaneousCharge = $miscellaneousCharge;

        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the additional miscellaneous charges that may apply.
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
     * General information about the additional miscellaneous charges that may apply.
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


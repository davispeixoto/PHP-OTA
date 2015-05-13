<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehCheckInRQ;

/**
 * Class representing AdjustmentDetailsAType
 */
class AdjustmentDetailsAType
{

    /**
     * Used to provide adjustment details. Amount attribute and Description attribute
     * will be the most commonly used fields.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType[] $adjustmentDetail
     */
    private $adjustmentDetail = null;

    /**
     * Adds as adjustmentDetail
     *
     * Used to provide adjustment details. Amount attribute and Description attribute
     * will be the most commonly used fields.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType $adjustmentDetail
     */
    public function addToAdjustmentDetail(\Davispeixoto\OpenTravelAlliance\VehicleChargeType $adjustmentDetail)
    {
        $this->adjustmentDetail[] = $adjustmentDetail;

        return $this;
    }

    /**
     * isset adjustmentDetail
     *
     * Used to provide adjustment details. Amount attribute and Description attribute
     * will be the most commonly used fields.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdjustmentDetail($index)
    {
        return isset($this->adjustmentDetail[$index]);
    }

    /**
     * unset adjustmentDetail
     *
     * Used to provide adjustment details. Amount attribute and Description attribute
     * will be the most commonly used fields.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdjustmentDetail($index)
    {
        unset($this->adjustmentDetail[$index]);
    }

    /**
     * Gets as adjustmentDetail
     *
     * Used to provide adjustment details. Amount attribute and Description attribute
     * will be the most commonly used fields.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargeType[]
     */
    public function getAdjustmentDetail()
    {
        return $this->adjustmentDetail;
    }

    /**
     * Sets a new adjustmentDetail
     *
     * Used to provide adjustment details. Amount attribute and Description attribute
     * will be the most commonly used fields.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType[] $adjustmentDetail
     * @return self
     */
    public function setAdjustmentDetail(array $adjustmentDetail)
    {
        $this->adjustmentDetail = $adjustmentDetail;

        return $this;
    }


}


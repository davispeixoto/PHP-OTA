<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType;

/**
 * Class representing RemarksAType
 */
class RemarksAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $remark
     */
    private $remark = null;

    /**
     * Adds as remark
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $remark
     */
    public function addToRemark(\Davispeixoto\OpenTravelAlliance\WarningType $remark)
    {
        $this->remark[] = $remark;

        return $this;
    }

    /**
     * isset remark
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRemark($index)
    {
        return isset($this->remark[$index]);
    }

    /**
     * unset remark
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRemark($index)
    {
        unset($this->remark[$index]);
    }

    /**
     * Gets as remark
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;

        return $this;
    }


}


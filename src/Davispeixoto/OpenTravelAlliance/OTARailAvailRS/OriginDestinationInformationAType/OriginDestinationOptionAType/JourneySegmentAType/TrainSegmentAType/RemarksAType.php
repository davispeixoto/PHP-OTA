<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType;

/**
 * Class representing RemarksAType
 */
class RemarksAType
{

    /**
     * A remark about the segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $remark
     */
    private $remark = null;

    /**
     * Adds as remark
     *
     * A remark about the segment.
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
     * A remark about the segment.
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
     * A remark about the segment.
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
     * A remark about the segment.
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
     * A remark about the segment.
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


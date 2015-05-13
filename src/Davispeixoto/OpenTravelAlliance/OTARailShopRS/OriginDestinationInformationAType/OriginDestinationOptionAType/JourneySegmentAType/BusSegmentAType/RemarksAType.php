<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailShopRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType;

use Davispeixoto\OpenTravelAlliance\WarningType;

/**
 * Class representing RemarksAType
 */
class RemarksAType
{

    /**
     * @property WarningType[] $remark
     */
    private $remark = null;

    /**
     * Adds as remark
     *
     * @return self
     * @param WarningType $remark
     */
    public function addToRemark(WarningType $remark)
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
     * @return WarningType[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * @param WarningType[] $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;

        return $this;
    }


}


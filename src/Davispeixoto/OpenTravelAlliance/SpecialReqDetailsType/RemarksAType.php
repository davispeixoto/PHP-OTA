<?php

namespace Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType;

/**
 * Class representing RemarksAType
 */
class RemarksAType
{

    /**
     * Supplementary information for this booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\RemarksAType\RemarkAType[]
     * $remark
     */
    private $remark = null;

    /**
     * Adds as remark
     *
     * Supplementary information for this booking.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\RemarksAType\RemarkAType
     * $remark
     */
    public function addToRemark(\Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\RemarksAType\RemarkAType $remark)
    {
        $this->remark[] = $remark;

        return $this;
    }

    /**
     * isset remark
     *
     * Supplementary information for this booking.
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
     * Supplementary information for this booking.
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
     * Supplementary information for this booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\RemarksAType\RemarkAType[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Supplementary information for this booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\RemarksAType\RemarkAType[]
     * $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;

        return $this;
    }


}


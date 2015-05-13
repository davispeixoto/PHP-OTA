<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS;

/**
 * Class representing RemarksAType
 */
class RemarksAType
{

    /**
     * Textual remarks that apply to the rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $remark
     */
    private $remark = null;

    /**
     * Adds as remark
     *
     * Textual remarks that apply to the rental.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $remark
     */
    public function addToRemark(\Davispeixoto\OpenTravelAlliance\ParagraphType $remark)
    {
        $this->remark[] = $remark;

        return $this;
    }

    /**
     * isset remark
     *
     * Textual remarks that apply to the rental.
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
     * Textual remarks that apply to the rental.
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
     * Textual remarks that apply to the rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Textual remarks that apply to the rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;

        return $this;
    }


}


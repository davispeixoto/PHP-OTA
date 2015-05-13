<?php

namespace Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS\TravelItineraryAType;

/**
 * Class representing RemarksAType
 */
class RemarksAType
{

    /**
     * @property string $remarkType
     */
    private $remarkType = null;

    /**
     * Free text.
     *
     * @property string[] $remark
     */
    private $remark = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as remarkType
     *
     * @return string
     */
    public function getRemarkType()
    {
        return $this->remarkType;
    }

    /**
     * Sets a new remarkType
     *
     * @param string $remarkType
     * @return self
     */
    public function setRemarkType($remarkType)
    {
        $this->remarkType = $remarkType;

        return $this;
    }

    /**
     * Adds as remark
     *
     * Free text.
     *
     * @return self
     * @param string $remark
     */
    public function addToRemark($remark)
    {
        $this->remark[] = $remark;

        return $this;
    }

    /**
     * isset remark
     *
     * Free text.
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
     * Free text.
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
     * Free text.
     *
     * @return string[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Free text.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}


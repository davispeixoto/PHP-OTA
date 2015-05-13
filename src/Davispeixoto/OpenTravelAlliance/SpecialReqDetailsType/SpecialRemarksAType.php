<?php

namespace Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType;

/**
 * Class representing SpecialRemarksAType
 */
class SpecialRemarksAType
{

    /**
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[]
     * $specialRemark
     */
    private $specialRemark = null;

    /**
     * Adds as specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType
     * $specialRemark
     */
    public function addToSpecialRemark(
        \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType $specialRemark
    ) {
        $this->specialRemark[] = $specialRemark;

        return $this;
    }

    /**
     * isset specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialRemark($index)
    {
        return isset($this->specialRemark[$index]);
    }

    /**
     * unset specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialRemark($index)
    {
        unset($this->specialRemark[$index]);
    }

    /**
     * Gets as specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[]
     */
    public function getSpecialRemark()
    {
        return $this->specialRemark;
    }

    /**
     * Sets a new specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[]
     * $specialRemark
     * @return self
     */
    public function setSpecialRemark(array $specialRemark)
    {
        $this->specialRemark = $specialRemark;

        return $this;
    }


}


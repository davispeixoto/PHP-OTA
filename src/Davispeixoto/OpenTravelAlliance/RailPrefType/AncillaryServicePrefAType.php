<?php

namespace Davispeixoto\OpenTravelAlliance\RailPrefType;

/**
 * Class representing AncillaryServicePrefAType
 */
class AncillaryServicePrefAType
{

    /**
     * An ancillary code list item from the OpenTravel Rail Ancillary Service Code(RAN)
     * code list.
     *
     * @property string $ancillaryServiceCode
     */
    private $ancillaryServiceCode = null;

    /**
     * Food allergies of passenger.
     *
     * @property string $foodAllergies
     */
    private $foodAllergies = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Remarks about ancillary services and products.
     *
     * @property string $remark
     */
    private $remark = null;

    /**
     * Gets as ancillaryServiceCode
     *
     * An ancillary code list item from the OpenTravel Rail Ancillary Service Code(RAN)
     * code list.
     *
     * @return string
     */
    public function getAncillaryServiceCode()
    {
        return $this->ancillaryServiceCode;
    }

    /**
     * Sets a new ancillaryServiceCode
     *
     * An ancillary code list item from the OpenTravel Rail Ancillary Service Code(RAN)
     * code list.
     *
     * @param string $ancillaryServiceCode
     * @return self
     */
    public function setAncillaryServiceCode($ancillaryServiceCode)
    {
        $this->ancillaryServiceCode = $ancillaryServiceCode;

        return $this;
    }

    /**
     * Gets as foodAllergies
     *
     * Food allergies of passenger.
     *
     * @return string
     */
    public function getFoodAllergies()
    {
        return $this->foodAllergies;
    }

    /**
     * Sets a new foodAllergies
     *
     * Food allergies of passenger.
     *
     * @param string $foodAllergies
     * @return self
     */
    public function setFoodAllergies($foodAllergies)
    {
        $this->foodAllergies = $foodAllergies;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as remark
     *
     * Remarks about ancillary services and products.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Remarks about ancillary services and products.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }


}


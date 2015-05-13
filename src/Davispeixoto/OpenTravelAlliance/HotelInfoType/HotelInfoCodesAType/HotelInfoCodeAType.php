<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType;

/**
 * Class representing HotelInfoCodeAType
 */
class HotelInfoCodeAType
{

    /**
     * Refer to OpenTravel Code List Hotel Information Code (HIC). Maybe used in
     * conjunction with the OptionCode. Code examples are 51% minority owned and 51%
     * non-minority woman owned.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Refer to OpenTravel Code List Option Type Code (OTC) (e.g., yes, no, not
     * applicable, not available).
     *
     * @property string $optionCode
     */
    private $optionCode = null;

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Hotel Information Code (HIC). Maybe used in
     * conjunction with the OptionCode. Code examples are 51% minority owned and 51%
     * non-minority woman owned.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Refer to OpenTravel Code List Hotel Information Code (HIC). Maybe used in
     * conjunction with the OptionCode. Code examples are 51% minority owned and 51%
     * non-minority woman owned.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as optionCode
     *
     * Refer to OpenTravel Code List Option Type Code (OTC) (e.g., yes, no, not
     * applicable, not available).
     *
     * @return string
     */
    public function getOptionCode()
    {
        return $this->optionCode;
    }

    /**
     * Sets a new optionCode
     *
     * Refer to OpenTravel Code List Option Type Code (OTC) (e.g., yes, no, not
     * applicable, not available).
     *
     * @param string $optionCode
     * @return self
     */
    public function setOptionCode($optionCode)
    {
        $this->optionCode = $optionCode;

        return $this;
    }


}


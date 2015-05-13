<?php

namespace Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType;

/**
 * Class representing BookingClassPrefAType
 */
class BookingClassPrefAType
{

    /**
     * Booking class code
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * To specify the types of RBD's (Res Book Desig Codes) that should be returned as
     * opposed to a specific RBD.
     *
     * @property string $resBookDesigCodeType
     */
    private $resBookDesigCodeType = null;

    /**
     * Gets as resBookDesigCode
     *
     * Booking class code
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * Booking class code
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

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
     * Gets as resBookDesigCodeType
     *
     * To specify the types of RBD's (Res Book Desig Codes) that should be returned as
     * opposed to a specific RBD.
     *
     * @return string
     */
    public function getResBookDesigCodeType()
    {
        return $this->resBookDesigCodeType;
    }

    /**
     * Sets a new resBookDesigCodeType
     *
     * To specify the types of RBD's (Res Book Desig Codes) that should be returned as
     * opposed to a specific RBD.
     *
     * @param string $resBookDesigCodeType
     * @return self
     */
    public function setResBookDesigCodeType($resBookDesigCodeType)
    {
        $this->resBookDesigCodeType = $resBookDesigCodeType;

        return $this;
    }


}


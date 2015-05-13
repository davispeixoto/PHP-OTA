<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseProfileType;

/**
 * Class representing CruiseProfileAType
 */
class CruiseProfileAType
{

    /**
     * Identifies the cruise options for which parameters are being set. Refer to
     * OpenTravel Code table Cruise Profile Type (CPT).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Specifies the maximum quantity allowed for the option identified by the
     * CruiseOption attribute. Typically only used when the
     * ApplicationProfileTypeIndentifier contains the value "MAX".
     *
     * @property string $maxQuantity
     */
    private $maxQuantity = null;

    /**
     * Gets as code
     *
     * Identifies the cruise options for which parameters are being set. Refer to
     * OpenTravel Code table Cruise Profile Type (CPT).
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
     * Identifies the cruise options for which parameters are being set. Refer to
     * OpenTravel Code table Cruise Profile Type (CPT).
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
     * Gets as maxQuantity
     *
     * Specifies the maximum quantity allowed for the option identified by the
     * CruiseOption attribute. Typically only used when the
     * ApplicationProfileTypeIndentifier contains the value "MAX".
     *
     * @return string
     */
    public function getMaxQuantity()
    {
        return $this->maxQuantity;
    }

    /**
     * Sets a new maxQuantity
     *
     * Specifies the maximum quantity allowed for the option identified by the
     * CruiseOption attribute. Typically only used when the
     * ApplicationProfileTypeIndentifier contains the value "MAX".
     *
     * @param string $maxQuantity
     * @return self
     */
    public function setMaxQuantity($maxQuantity)
    {
        $this->maxQuantity = $maxQuantity;

        return $this;
    }


}


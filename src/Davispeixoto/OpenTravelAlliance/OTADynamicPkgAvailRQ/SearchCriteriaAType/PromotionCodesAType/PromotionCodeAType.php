<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRQ\SearchCriteriaAType\PromotionCodesAType;

/**
 * Class representing PromotionCodeAType
 */
class PromotionCodeAType
{

    /**
     * This is a reference placeholder, used as a unique index for this promotion code
     * in this message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * The code identiying the tracking or discount promotion. Each code may be
     * referenced by one or more component specific search criteria.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as rPH
     *
     * This is a reference placeholder, used as a unique index for this promotion code
     * in this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * This is a reference placeholder, used as a unique index for this promotion code
     * in this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as code
     *
     * The code identiying the tracking or discount promotion. Each code may be
     * referenced by one or more component specific search criteria.
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
     * The code identiying the tracking or discount promotion. Each code may be
     * referenced by one or more component specific search criteria.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}


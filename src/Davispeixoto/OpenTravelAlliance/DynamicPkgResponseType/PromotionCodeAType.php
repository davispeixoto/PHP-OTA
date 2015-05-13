<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgResponseType;

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


}


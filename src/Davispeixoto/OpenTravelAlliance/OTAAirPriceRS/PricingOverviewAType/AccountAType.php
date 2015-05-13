<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType;

/**
 * Class representing AccountAType
 */
class AccountAType
{

    /**
     * The account code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * The account code.
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
     * The account code.
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


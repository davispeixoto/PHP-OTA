<?php

namespace Davispeixoto\OpenTravelAlliance\CustomerType;

/**
 * Class representing AdditionalLanguageAType
 */
class AdditionalLanguageAType
{

    /**
     * Code for the language spoken by the customer.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * Code for the language spoken by the customer.
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
     * Code for the language spoken by the customer.
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


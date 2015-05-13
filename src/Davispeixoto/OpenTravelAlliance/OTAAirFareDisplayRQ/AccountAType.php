<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ;

/**
 * Class representing AccountAType
 */
class AccountAType
{

    /**
     * If true, return only the fares for the specified account code. If false, also
     * return other fares.
     *
     * @property boolean $codeOnlyFaresInd
     */
    private $codeOnlyFaresInd = null;

    /**
     * The account code for which fares are requested.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as codeOnlyFaresInd
     *
     * If true, return only the fares for the specified account code. If false, also
     * return other fares.
     *
     * @return boolean
     */
    public function getCodeOnlyFaresInd()
    {
        return $this->codeOnlyFaresInd;
    }

    /**
     * Sets a new codeOnlyFaresInd
     *
     * If true, return only the fares for the specified account code. If false, also
     * return other fares.
     *
     * @param boolean $codeOnlyFaresInd
     * @return self
     */
    public function setCodeOnlyFaresInd($codeOnlyFaresInd)
    {
        $this->codeOnlyFaresInd = $codeOnlyFaresInd;

        return $this;
    }

    /**
     * Gets as code
     *
     * The account code for which fares are requested.
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
     * The account code for which fares are requested.
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


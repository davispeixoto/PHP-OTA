<?php

namespace Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType;

use Davispeixoto\OpenTravelAlliance\FreeTextType;

/**
 * Class representing AdvisoryInfoAType
 */
class AdvisoryInfoAType extends FreeTextType
{

    /**
     * Specifies the type of advisory information.
     *
     * @property string $advisoryCode
     */
    private $advisoryCode = null;

    /**
     * Gets as advisoryCode
     *
     * Specifies the type of advisory information.
     *
     * @return string
     */
    public function getAdvisoryCode()
    {
        return $this->advisoryCode;
    }

    /**
     * Sets a new advisoryCode
     *
     * Specifies the type of advisory information.
     *
     * @param string $advisoryCode
     * @return self
     */
    public function setAdvisoryCode($advisoryCode)
    {
        $this->advisoryCode = $advisoryCode;

        return $this;
    }


}


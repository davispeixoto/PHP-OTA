<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailRQ;

/**
 * Class representing KeywordAType
 */
class KeywordAType
{

    /**
     * A code that specifies the keyword for which information is requested.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * A code that specifies the keyword for which information is requested.
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
     * A code that specifies the keyword for which information is requested.
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


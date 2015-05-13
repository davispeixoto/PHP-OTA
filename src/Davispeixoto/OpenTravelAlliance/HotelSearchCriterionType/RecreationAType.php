<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

/**
 * Class representing RecreationAType
 */
class RecreationAType
{

    /**
     * Used to identify a specific recreation activity. Refer to OpenTravel Code list
     * Recreation Srvc Type (RST).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * Used to identify a specific recreation activity. Refer to OpenTravel Code list
     * Recreation Srvc Type (RST).
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
     * Used to identify a specific recreation activity. Refer to OpenTravel Code list
     * Recreation Srvc Type (RST).
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


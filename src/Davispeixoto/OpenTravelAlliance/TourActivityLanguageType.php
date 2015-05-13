<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityLanguageType
 *
 * Languages spoken by the supplier/operator staff.
 * XSD Type: TourActivityLanguageType
 */
class TourActivityLanguageType
{

    /**
     * The ISO 639 2 character language code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * The ISO 639 2 character language code.
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
     * The ISO 639 2 character language code.
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


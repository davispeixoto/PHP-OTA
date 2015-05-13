<?php

namespace Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType;

/**
 * Class representing OptionRefAType
 */
class OptionRefAType
{

    /**
     * The code that uniquely identifies a single package option.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * The code that uniquely identifies a single package option.
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
     * The code that uniquely identifies a single package option.
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


<?php

namespace Davispeixoto\OpenTravelAlliance\CompanyInfoType;

/**
 * Class representing TripPurposeAType
 */
class TripPurposeAType
{

    /**
     * A trip purpose code used by this company.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * A description of the trip purpose.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as code
     *
     * A trip purpose code used by this company.
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
     * A trip purpose code used by this company.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the trip purpose.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the trip purpose.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


}


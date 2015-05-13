<?php

namespace Davispeixoto\OpenTravelAlliance\ETFareInfoType;

/**
 * Class representing WaiverAType
 */
class WaiverAType
{

    /**
     * A code assigned by the validating carrier that allows fare rule modification or
     * override.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The waiver type.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as code
     *
     * A code assigned by the validating carrier that allows fare rule modification or
     * override.
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
     * A code assigned by the validating carrier that allows fare rule modification or
     * override.
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
     * Gets as type
     *
     * The waiver type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The waiver type.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}


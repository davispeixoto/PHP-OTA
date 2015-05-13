<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

/**
 * Class representing PresentInfoAType
 */
class PresentInfoAType
{

    /**
     * The name of the service provider.
     *
     * @property string $to
     */
    private $to = null;

    /**
     * The location of the service provider.
     *
     * @property string $at
     */
    private $at = null;

    /**
     * Gets as to
     *
     * The name of the service provider.
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * The name of the service provider.
     *
     * @param string $to
     * @return self
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Gets as at
     *
     * The location of the service provider.
     *
     * @return string
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * Sets a new at
     *
     * The location of the service provider.
     *
     * @param string $at
     * @return self
     */
    public function setAt($at)
    {
        $this->at = $at;

        return $this;
    }


}


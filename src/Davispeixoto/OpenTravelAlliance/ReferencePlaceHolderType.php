<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ReferencePlaceHolderType
 *
 * Used to provide a reference to an object that is stored elsewhere in a
 * collection of the same objects.
 * XSD Type: ReferencePlaceHolderType
 */
class ReferencePlaceHolderType
{

    /**
     * The unique reference for an object within this message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * The unique reference for an object within this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * The unique reference for an object within this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRQ\ReasonsAType;

use Davispeixoto\OpenTravelAlliance\FreeTextType;

/**
 * Class representing ReasonAType
 */
class ReasonAType extends FreeTextType
{

    /**
     * In many cases the description repeats, this will allow you to define the
     * information that is being sent, typically used when multiple occurrences of
     * FreeTextType/CancellationReason are being sent.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * In many cases the description repeats, this will allow you to define the
     * information that is being sent, typically used when multiple occurrences of
     * FreeTextType/CancellationReason are being sent.
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
     * In many cases the description repeats, this will allow you to define the
     * information that is being sent, typically used when multiple occurrences of
     * FreeTextType/CancellationReason are being sent.
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


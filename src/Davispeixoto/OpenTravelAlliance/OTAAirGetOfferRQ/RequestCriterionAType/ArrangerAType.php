<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType;

use Davispeixoto\OpenTravelAlliance\AirArrangerType;

/**
 * Class representing ArrangerAType
 */
class ArrangerAType extends AirArrangerType
{

    /**
     * A unique ID for this arranger that may be referenced elsewhere in this schema to
     * associate the arranger with other information.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A unique ID for this arranger that may be referenced elsewhere in this schema to
     * associate the arranger with other information.
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
     * A unique ID for this arranger that may be referenced elsewhere in this schema to
     * associate the arranger with other information.
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


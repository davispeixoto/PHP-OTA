<?php

namespace Davispeixoto\OpenTravelAlliance\OntologyBaggageType\DetailAType;

use Davispeixoto\OpenTravelAlliance\OntologyCodeType;

/**
 * Class representing ItemAType
 */
class ItemAType extends OntologyCodeType
{

    /**
     * Specialty baggage item indicator.Example: trueImplementer: If true, this is a
     * specialty baggage item.
     *
     * @property boolean $specialItemInd
     */
    private $specialItemInd = null;

    /**
     * Gets as specialItemInd
     *
     * Specialty baggage item indicator.Example: trueImplementer: If true, this is a
     * specialty baggage item.
     *
     * @return boolean
     */
    public function getSpecialItemInd()
    {
        return $this->specialItemInd;
    }

    /**
     * Sets a new specialItemInd
     *
     * Specialty baggage item indicator.Example: trueImplementer: If true, this is a
     * specialty baggage item.
     *
     * @param boolean $specialItemInd
     * @return self
     */
    public function setSpecialItemInd($specialItemInd)
    {
        $this->specialItemInd = $specialItemInd;

        return $this;
    }


}


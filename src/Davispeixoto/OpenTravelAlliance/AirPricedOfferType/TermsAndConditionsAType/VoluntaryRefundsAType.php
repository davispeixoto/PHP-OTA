<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricedOfferType\TermsAndConditionsAType;

use Davispeixoto\OpenTravelAlliance\VoluntaryChangesType;

/**
 * Class representing VoluntaryRefundsAType
 */
class VoluntaryRefundsAType extends VoluntaryChangesType
{

    /**
     * A description of the penalty.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as description
     *
     * A description of the penalty.
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
     * A description of the penalty.
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


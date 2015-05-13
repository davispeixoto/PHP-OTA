<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType;

use Davispeixoto\OpenTravelAlliance\FormattedTextTextType;

/**
 * Class representing ConditionReportAType
 */
class ConditionReportAType extends FormattedTextTextType
{

    /**
     * Provides an overview of the condition of the vehicle.
     *
     * @property string $condition
     */
    private $condition = null;

    /**
     * Gets as condition
     *
     * Provides an overview of the condition of the vehicle.
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * Provides an overview of the condition of the vehicle.
     *
     * @param string $condition
     * @return self
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }


}


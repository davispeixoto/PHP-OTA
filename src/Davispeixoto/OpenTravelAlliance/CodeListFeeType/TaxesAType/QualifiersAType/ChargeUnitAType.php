<?php

namespace Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType;

/**
 * Class representing ChargeUnitAType
 */
class ChargeUnitAType
{

    /**
     * Specific charge unit.Example: PerPerson
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType\ChargeUnitAType\UnitAType
     * $unit
     */
    private $unit = null;

    /**
     * Charge frequency.Example: DailyNote: This is the timeframe used to apply the
     * charge.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType\ChargeUnitAType\FrequencyAType
     * $frequency
     */
    private $frequency = null;

    /**
     * Gets as unit
     *
     * Specific charge unit.Example: PerPerson
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType\ChargeUnitAType\UnitAType
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Specific charge unit.Example: PerPerson
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType\ChargeUnitAType\UnitAType
     * $unit
     * @return self
     */
    public function setUnit(
        \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType\ChargeUnitAType\UnitAType $unit
    ) {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Gets as frequency
     *
     * Charge frequency.Example: DailyNote: This is the timeframe used to apply the
     * charge.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType\ChargeUnitAType\FrequencyAType
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * Charge frequency.Example: DailyNote: This is the timeframe used to apply the
     * charge.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType\ChargeUnitAType\FrequencyAType
     * $frequency
     * @return self
     */
    public function setFrequency(
        \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType\ChargeUnitAType\FrequencyAType $frequency
    ) {
        $this->frequency = $frequency;

        return $this;
    }


}


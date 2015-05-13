<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType;

/**
 * Class representing InsuranceAType
 */
class InsuranceAType
{

    /**
     * Third party insurance provided by a group and/or individual.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\ProvidedAType
     * $provided
     */
    private $provided = null;

    /**
     * Requirements for insurance that must be purchased from the tour and activity
     * supplier or operator, or may be provided by the participant.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\RequiredAType
     * $required
     */
    private $required = null;

    /**
     * Gets as provided
     *
     * Third party insurance provided by a group and/or individual.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\ProvidedAType
     */
    public function getProvided()
    {
        return $this->provided;
    }

    /**
     * Sets a new provided
     *
     * Third party insurance provided by a group and/or individual.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\ProvidedAType
     * $provided
     * @return self
     */
    public function setProvided(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\ProvidedAType $provided
    ) {
        $this->provided = $provided;

        return $this;
    }

    /**
     * Gets as required
     *
     * Requirements for insurance that must be purchased from the tour and activity
     * supplier or operator, or may be provided by the participant.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\RequiredAType
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * Requirements for insurance that must be purchased from the tour and activity
     * supplier or operator, or may be provided by the participant.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\RequiredAType
     * $required
     * @return self
     */
    public function setRequired(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\RequiredAType $required
    ) {
        $this->required = $required;

        return $this;
    }


}


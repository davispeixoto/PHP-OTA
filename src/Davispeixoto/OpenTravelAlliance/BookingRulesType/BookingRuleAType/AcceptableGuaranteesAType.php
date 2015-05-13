<?php

namespace Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType;

/**
 * Class representing AcceptableGuaranteesAType
 */
class AcceptableGuaranteesAType
{

    /**
     * The guarantee information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[]
     * $acceptableGuarantee
     */
    private $acceptableGuarantee = null;

    /**
     * Adds as acceptableGuarantee
     *
     * The guarantee information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType
     * $acceptableGuarantee
     */
    public function addToAcceptableGuarantee(
        \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType $acceptableGuarantee
    ) {
        $this->acceptableGuarantee[] = $acceptableGuarantee;

        return $this;
    }

    /**
     * isset acceptableGuarantee
     *
     * The guarantee information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAcceptableGuarantee($index)
    {
        return isset($this->acceptableGuarantee[$index]);
    }

    /**
     * unset acceptableGuarantee
     *
     * The guarantee information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAcceptableGuarantee($index)
    {
        unset($this->acceptableGuarantee[$index]);
    }

    /**
     * Gets as acceptableGuarantee
     *
     * The guarantee information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[]
     */
    public function getAcceptableGuarantee()
    {
        return $this->acceptableGuarantee;
    }

    /**
     * Sets a new acceptableGuarantee
     *
     * The guarantee information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[]
     * $acceptableGuarantee
     * @return self
     */
    public function setAcceptableGuarantee(array $acceptableGuarantee)
    {
        $this->acceptableGuarantee = $acceptableGuarantee;

        return $this;
    }


}


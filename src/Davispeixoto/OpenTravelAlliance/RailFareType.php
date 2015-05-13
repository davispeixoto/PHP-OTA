<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailFareType
 *
 * Rail fare and associated fare rules and terms and conditions.
 * XSD Type: RailFareType
 */
class RailFareType
{

    /**
     * A fare basis code and associated fare amount.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailFareType\BasicFareAType
     * $basicFare
     */
    private $basicFare = null;

    /**
     * Terms and conditions incuding fare rules.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType[]
     * $termAndCondition
     */
    private $termAndCondition = null;

    /**
     * Gets as basicFare
     *
     * A fare basis code and associated fare amount.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailFareType\BasicFareAType
     */
    public function getBasicFare()
    {
        return $this->basicFare;
    }

    /**
     * Sets a new basicFare
     *
     * A fare basis code and associated fare amount.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailFareType\BasicFareAType $basicFare
     * @return self
     */
    public function setBasicFare(\Davispeixoto\OpenTravelAlliance\RailFareType\BasicFareAType $basicFare)
    {
        $this->basicFare = $basicFare;

        return $this;
    }

    /**
     * Adds as termAndCondition
     *
     * Terms and conditions incuding fare rules.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType
     * $termAndCondition
     */
    public function addToTermAndCondition(
        \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType $termAndCondition
    ) {
        $this->termAndCondition[] = $termAndCondition;

        return $this;
    }

    /**
     * isset termAndCondition
     *
     * Terms and conditions incuding fare rules.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTermAndCondition($index)
    {
        return isset($this->termAndCondition[$index]);
    }

    /**
     * unset termAndCondition
     *
     * Terms and conditions incuding fare rules.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTermAndCondition($index)
    {
        unset($this->termAndCondition[$index]);
    }

    /**
     * Gets as termAndCondition
     *
     * Terms and conditions incuding fare rules.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType[]
     */
    public function getTermAndCondition()
    {
        return $this->termAndCondition;
    }

    /**
     * Sets a new termAndCondition
     *
     * Terms and conditions incuding fare rules.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailFareType\TermAndConditionAType[]
     * $termAndCondition
     * @return self
     */
    public function setTermAndCondition(array $termAndCondition)
    {
        $this->termAndCondition = $termAndCondition;

        return $this;
    }


}


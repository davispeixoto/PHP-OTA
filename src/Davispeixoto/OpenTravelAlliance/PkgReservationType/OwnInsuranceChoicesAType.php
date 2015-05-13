<?php

namespace Davispeixoto\OpenTravelAlliance\PkgReservationType;

/**
 * Class representing OwnInsuranceChoicesAType
 */
class OwnInsuranceChoicesAType
{

    /**
     * Details of the insurance company from whom the customer has purchased a policy
     * to cover the holiday
     *
     * @property \Davispeixoto\OpenTravelAlliance\OwnInsuranceChoiceType[]
     * $ownInsuranceChoice
     */
    private $ownInsuranceChoice = null;

    /**
     * Adds as ownInsuranceChoice
     *
     * Details of the insurance company from whom the customer has purchased a policy
     * to cover the holiday
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OwnInsuranceChoiceType
     * $ownInsuranceChoice
     */
    public function addToOwnInsuranceChoice(\Davispeixoto\OpenTravelAlliance\OwnInsuranceChoiceType $ownInsuranceChoice)
    {
        $this->ownInsuranceChoice[] = $ownInsuranceChoice;

        return $this;
    }

    /**
     * isset ownInsuranceChoice
     *
     * Details of the insurance company from whom the customer has purchased a policy
     * to cover the holiday
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOwnInsuranceChoice($index)
    {
        return isset($this->ownInsuranceChoice[$index]);
    }

    /**
     * unset ownInsuranceChoice
     *
     * Details of the insurance company from whom the customer has purchased a policy
     * to cover the holiday
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOwnInsuranceChoice($index)
    {
        unset($this->ownInsuranceChoice[$index]);
    }

    /**
     * Gets as ownInsuranceChoice
     *
     * Details of the insurance company from whom the customer has purchased a policy
     * to cover the holiday
     *
     * @return \Davispeixoto\OpenTravelAlliance\OwnInsuranceChoiceType[]
     */
    public function getOwnInsuranceChoice()
    {
        return $this->ownInsuranceChoice;
    }

    /**
     * Sets a new ownInsuranceChoice
     *
     * Details of the insurance company from whom the customer has purchased a policy
     * to cover the holiday
     *
     * @param \Davispeixoto\OpenTravelAlliance\OwnInsuranceChoiceType[]
     * $ownInsuranceChoice
     * @return self
     */
    public function setOwnInsuranceChoice(array $ownInsuranceChoice)
    {
        $this->ownInsuranceChoice = $ownInsuranceChoice;

        return $this;
    }


}


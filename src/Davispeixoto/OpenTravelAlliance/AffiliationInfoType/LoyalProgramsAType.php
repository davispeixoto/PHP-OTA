<?php

namespace Davispeixoto\OpenTravelAlliance\AffiliationInfoType;

/**
 * Class representing LoyalProgramsAType
 */
class LoyalProgramsAType
{

    /**
     * The LoyalProgram class defines the loyalty programs that this hotel participates
     * in.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[]
     * $loyalProgram
     */
    private $loyalProgram = null;

    /**
     * Adds as loyalProgram
     *
     * The LoyalProgram class defines the loyalty programs that this hotel participates
     * in.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType
     * $loyalProgram
     */
    public function addToLoyalProgram(
        \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType $loyalProgram
    ) {
        $this->loyalProgram[] = $loyalProgram;

        return $this;
    }

    /**
     * isset loyalProgram
     *
     * The LoyalProgram class defines the loyalty programs that this hotel participates
     * in.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyalProgram($index)
    {
        return isset($this->loyalProgram[$index]);
    }

    /**
     * unset loyalProgram
     *
     * The LoyalProgram class defines the loyalty programs that this hotel participates
     * in.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyalProgram($index)
    {
        unset($this->loyalProgram[$index]);
    }

    /**
     * Gets as loyalProgram
     *
     * The LoyalProgram class defines the loyalty programs that this hotel participates
     * in.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[]
     */
    public function getLoyalProgram()
    {
        return $this->loyalProgram;
    }

    /**
     * Sets a new loyalProgram
     *
     * The LoyalProgram class defines the loyalty programs that this hotel participates
     * in.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[]
     * $loyalProgram
     * @return self
     */
    public function setLoyalProgram(array $loyalProgram)
    {
        $this->loyalProgram = $loyalProgram;

        return $this;
    }


}


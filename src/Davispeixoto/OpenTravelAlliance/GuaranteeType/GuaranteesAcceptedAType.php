<?php

namespace Davispeixoto\OpenTravelAlliance\GuaranteeType;

/**
 * Class representing GuaranteesAcceptedAType
 */
class GuaranteesAcceptedAType
{

    /**
     * Guarantee Detail.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     * $guaranteeAccepted
     */
    private $guaranteeAccepted = null;

    /**
     * Adds as guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType
     * $guaranteeAccepted
     */
    public function addToGuaranteeAccepted(
        \Davispeixoto\OpenTravelAlliance\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted
    ) {
        $this->guaranteeAccepted[] = $guaranteeAccepted;

        return $this;
    }

    /**
     * isset guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuaranteeAccepted($index)
    {
        return isset($this->guaranteeAccepted[$index]);
    }

    /**
     * unset guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuaranteeAccepted($index)
    {
        unset($this->guaranteeAccepted[$index]);
    }

    /**
     * Gets as guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     */
    public function getGuaranteeAccepted()
    {
        return $this->guaranteeAccepted;
    }

    /**
     * Sets a new guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     * $guaranteeAccepted
     * @return self
     */
    public function setGuaranteeAccepted(array $guaranteeAccepted)
    {
        $this->guaranteeAccepted = $guaranteeAccepted;

        return $this;
    }


}


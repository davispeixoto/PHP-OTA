<?php

namespace Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType;

/**
 * Class representing EndorsementsAType
 */
class EndorsementsAType
{

    /**
     * Indicates whether the ticket is refundable. If true, the ticket is NOT
     * refundable.
     *
     * @property boolean $nonRefundableIndicator
     */
    private $nonRefundableIndicator = null;

    /**
     * Indicates whether the ticket is endorsable. If true, the ticket is NOT
     * endorsable.
     *
     * @property boolean $nonEndorsableIndicator
     */
    private $nonEndorsableIndicator = null;

    /**
     * Specifies ticket endorsement information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\EndorsementsAType\EndorsementAType[]
     * $endorsement
     */
    private $endorsement = null;

    /**
     * Gets as nonRefundableIndicator
     *
     * Indicates whether the ticket is refundable. If true, the ticket is NOT
     * refundable.
     *
     * @return boolean
     */
    public function getNonRefundableIndicator()
    {
        return $this->nonRefundableIndicator;
    }

    /**
     * Sets a new nonRefundableIndicator
     *
     * Indicates whether the ticket is refundable. If true, the ticket is NOT
     * refundable.
     *
     * @param boolean $nonRefundableIndicator
     * @return self
     */
    public function setNonRefundableIndicator($nonRefundableIndicator)
    {
        $this->nonRefundableIndicator = $nonRefundableIndicator;

        return $this;
    }

    /**
     * Gets as nonEndorsableIndicator
     *
     * Indicates whether the ticket is endorsable. If true, the ticket is NOT
     * endorsable.
     *
     * @return boolean
     */
    public function getNonEndorsableIndicator()
    {
        return $this->nonEndorsableIndicator;
    }

    /**
     * Sets a new nonEndorsableIndicator
     *
     * Indicates whether the ticket is endorsable. If true, the ticket is NOT
     * endorsable.
     *
     * @param boolean $nonEndorsableIndicator
     * @return self
     */
    public function setNonEndorsableIndicator($nonEndorsableIndicator)
    {
        $this->nonEndorsableIndicator = $nonEndorsableIndicator;

        return $this;
    }

    /**
     * Adds as endorsement
     *
     * Specifies ticket endorsement information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\EndorsementsAType\EndorsementAType
     * $endorsement
     */
    public function addToEndorsement(
        \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\EndorsementsAType\EndorsementAType $endorsement
    ) {
        $this->endorsement[] = $endorsement;

        return $this;
    }

    /**
     * isset endorsement
     *
     * Specifies ticket endorsement information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEndorsement($index)
    {
        return isset($this->endorsement[$index]);
    }

    /**
     * unset endorsement
     *
     * Specifies ticket endorsement information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEndorsement($index)
    {
        unset($this->endorsement[$index]);
    }

    /**
     * Gets as endorsement
     *
     * Specifies ticket endorsement information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\EndorsementsAType\EndorsementAType[]
     */
    public function getEndorsement()
    {
        return $this->endorsement;
    }

    /**
     * Sets a new endorsement
     *
     * Specifies ticket endorsement information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType\EndorsementsAType\EndorsementAType[]
     * $endorsement
     * @return self
     */
    public function setEndorsement(array $endorsement)
    {
        $this->endorsement = $endorsement;

        return $this;
    }


}


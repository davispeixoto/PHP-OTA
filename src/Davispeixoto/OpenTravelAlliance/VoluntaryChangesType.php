<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VoluntaryChangesType
 *
 * Specifies charges and/or penalties associated with making ticket changes after
 * purchase.
 * XSD Type: VoluntaryChangesType
 */
class VoluntaryChangesType
{

    /**
     * Indicator used to specify whether voluntary change and other penalties are
     * involved in the search or response.
     *
     * @property boolean $volChangeInd
     */
    private $volChangeInd = null;

    /**
     * Specifies penalty charges as either a currency amount or a percentage of the
     * fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType\PenaltyAType
     * $penalty
     */
    private $penalty = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as volChangeInd
     *
     * Indicator used to specify whether voluntary change and other penalties are
     * involved in the search or response.
     *
     * @return boolean
     */
    public function getVolChangeInd()
    {
        return $this->volChangeInd;
    }

    /**
     * Sets a new volChangeInd
     *
     * Indicator used to specify whether voluntary change and other penalties are
     * involved in the search or response.
     *
     * @param boolean $volChangeInd
     * @return self
     */
    public function setVolChangeInd($volChangeInd)
    {
        $this->volChangeInd = $volChangeInd;

        return $this;
    }

    /**
     * Gets as penalty
     *
     * Specifies penalty charges as either a currency amount or a percentage of the
     * fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType\PenaltyAType
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Sets a new penalty
     *
     * Specifies penalty charges as either a currency amount or a percentage of the
     * fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VoluntaryChangesType\PenaltyAType
     * $penalty
     * @return self
     */
    public function setPenalty(\Davispeixoto\OpenTravelAlliance\VoluntaryChangesType\PenaltyAType $penalty)
    {
        $this->penalty = $penalty;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}


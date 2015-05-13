<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing StayRestrictionsType
 *
 * Type defining Min and Max Stay Restrictions.
 * XSD Type: StayRestrictionsType
 */
class StayRestrictionsType
{

    /**
     * True indicates that Stay Restrictions exist.
     *
     * @property boolean $stayRestrictionsInd
     */
    private $stayRestrictionsInd = null;

    /**
     * Specifies restrictions for the shortest length/period of time or earliest day
     * return travel can commence or be completed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StayRestrictionsType\MinimumStayAType
     * $minimumStay
     */
    private $minimumStay = null;

    /**
     * Specifies restrictions for the longest length/period of time or last day to
     * begin or complete the return.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StayRestrictionsType\MaximumStayAType
     * $maximumStay
     */
    private $maximumStay = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as stayRestrictionsInd
     *
     * True indicates that Stay Restrictions exist.
     *
     * @return boolean
     */
    public function getStayRestrictionsInd()
    {
        return $this->stayRestrictionsInd;
    }

    /**
     * Sets a new stayRestrictionsInd
     *
     * True indicates that Stay Restrictions exist.
     *
     * @param boolean $stayRestrictionsInd
     * @return self
     */
    public function setStayRestrictionsInd($stayRestrictionsInd)
    {
        $this->stayRestrictionsInd = $stayRestrictionsInd;

        return $this;
    }

    /**
     * Gets as minimumStay
     *
     * Specifies restrictions for the shortest length/period of time or earliest day
     * return travel can commence or be completed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StayRestrictionsType\MinimumStayAType
     */
    public function getMinimumStay()
    {
        return $this->minimumStay;
    }

    /**
     * Sets a new minimumStay
     *
     * Specifies restrictions for the shortest length/period of time or earliest day
     * return travel can commence or be completed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StayRestrictionsType\MinimumStayAType
     * $minimumStay
     * @return self
     */
    public function setMinimumStay(\Davispeixoto\OpenTravelAlliance\StayRestrictionsType\MinimumStayAType $minimumStay)
    {
        $this->minimumStay = $minimumStay;

        return $this;
    }

    /**
     * Gets as maximumStay
     *
     * Specifies restrictions for the longest length/period of time or last day to
     * begin or complete the return.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StayRestrictionsType\MaximumStayAType
     */
    public function getMaximumStay()
    {
        return $this->maximumStay;
    }

    /**
     * Sets a new maximumStay
     *
     * Specifies restrictions for the longest length/period of time or last day to
     * begin or complete the return.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StayRestrictionsType\MaximumStayAType
     * $maximumStay
     * @return self
     */
    public function setMaximumStay(\Davispeixoto\OpenTravelAlliance\StayRestrictionsType\MaximumStayAType $maximumStay)
    {
        $this->maximumStay = $maximumStay;

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


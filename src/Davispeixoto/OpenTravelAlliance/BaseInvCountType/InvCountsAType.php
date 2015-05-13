<?php

namespace Davispeixoto\OpenTravelAlliance\BaseInvCountType;

/**
 * Class representing InvCountsAType
 */
class InvCountsAType
{

    /**
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType[]
     * $invCount
     */
    private $invCount = null;

    /**
     * Adds as invCount
     *
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType
     * $invCount
     */
    public function addToInvCount(
        \Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType $invCount
    ) {
        $this->invCount[] = $invCount;

        return $this;
    }

    /**
     * isset invCount
     *
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInvCount($index)
    {
        return isset($this->invCount[$index]);
    }

    /**
     * unset invCount
     *
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInvCount($index)
    {
        unset($this->invCount[$index]);
    }

    /**
     * Gets as invCount
     *
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType[]
     */
    public function getInvCount()
    {
        return $this->invCount;
    }

    /**
     * Sets a new invCount
     *
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType[]
     * $invCount
     * @return self
     */
    public function setInvCount(array $invCount)
    {
        $this->invCount = $invCount;

        return $this;
    }


}


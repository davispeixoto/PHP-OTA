<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType;

/**
 * Class representing DynamicPkgIDsAType
 */
class DynamicPkgIDsAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $dynamicPkgID
     */
    private $dynamicPkgID = null;

    /**
     * Adds as dynamicPkgID
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $dynamicPkgID
     */
    public function addToDynamicPkgID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $dynamicPkgID)
    {
        $this->dynamicPkgID[] = $dynamicPkgID;

        return $this;
    }

    /**
     * isset dynamicPkgID
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDynamicPkgID($index)
    {
        return isset($this->dynamicPkgID[$index]);
    }

    /**
     * unset dynamicPkgID
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDynamicPkgID($index)
    {
        unset($this->dynamicPkgID[$index]);
    }

    /**
     * Gets as dynamicPkgID
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getDynamicPkgID()
    {
        return $this->dynamicPkgID;
    }

    /**
     * Sets a new dynamicPkgID
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $dynamicPkgID
     * @return self
     */
    public function setDynamicPkgID(array $dynamicPkgID)
    {
        $this->dynamicPkgID = $dynamicPkgID;

        return $this;
    }


}


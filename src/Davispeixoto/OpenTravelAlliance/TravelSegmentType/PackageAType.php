<?php

namespace Davispeixoto\OpenTravelAlliance\TravelSegmentType;

/**
 * Class representing PackageAType
 */
class PackageAType
{

    /**
     * References to all itinerary items contained in this package.
     *
     * @property string[] $itemRPHList
     */
    private $itemRPHList = null;

    /**
     * References to all associated items contained in this package.
     *
     * @property string[] $assocItemRPHList
     */
    private $assocItemRPHList = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as itemRPHList
     *
     * References to all itinerary items contained in this package.
     *
     * @return self
     * @param string $itemRPHList
     */
    public function addToItemRPHList($itemRPHList)
    {
        $this->itemRPHList[] = $itemRPHList;

        return $this;
    }

    /**
     * isset itemRPHList
     *
     * References to all itinerary items contained in this package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemRPHList($index)
    {
        return isset($this->itemRPHList[$index]);
    }

    /**
     * unset itemRPHList
     *
     * References to all itinerary items contained in this package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemRPHList($index)
    {
        unset($this->itemRPHList[$index]);
    }

    /**
     * Gets as itemRPHList
     *
     * References to all itinerary items contained in this package.
     *
     * @return string[]
     */
    public function getItemRPHList()
    {
        return $this->itemRPHList;
    }

    /**
     * Sets a new itemRPHList
     *
     * References to all itinerary items contained in this package.
     *
     * @param string $itemRPHList
     * @return self
     */
    public function setItemRPHList(array $itemRPHList)
    {
        $this->itemRPHList = $itemRPHList;

        return $this;
    }

    /**
     * Adds as assocItemRPHList
     *
     * References to all associated items contained in this package.
     *
     * @return self
     * @param string $assocItemRPHList
     */
    public function addToAssocItemRPHList($assocItemRPHList)
    {
        $this->assocItemRPHList[] = $assocItemRPHList;

        return $this;
    }

    /**
     * isset assocItemRPHList
     *
     * References to all associated items contained in this package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssocItemRPHList($index)
    {
        return isset($this->assocItemRPHList[$index]);
    }

    /**
     * unset assocItemRPHList
     *
     * References to all associated items contained in this package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssocItemRPHList($index)
    {
        unset($this->assocItemRPHList[$index]);
    }

    /**
     * Gets as assocItemRPHList
     *
     * References to all associated items contained in this package.
     *
     * @return string[]
     */
    public function getAssocItemRPHList()
    {
        return $this->assocItemRPHList;
    }

    /**
     * Sets a new assocItemRPHList
     *
     * References to all associated items contained in this package.
     *
     * @param string $assocItemRPHList
     * @return self
     */
    public function setAssocItemRPHList(array $assocItemRPHList)
    {
        $this->assocItemRPHList = $assocItemRPHList;

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


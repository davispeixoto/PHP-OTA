<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DynamicPkgType
 *
 * Contains pre-selected components and information about the guests and payments
 * made on the existing reservation.
 * XSD Type: DynamicPkgType
 */
class DynamicPkgType
{

    /**
     * The action being requested on the component or package.
     *
     * @property string $dynamicPkgAction
     */
    private $dynamicPkgAction = null;

    /**
     * The status of the component or package.
     *
     * @property string $dynamicPkgStatus
     */
    private $dynamicPkgStatus = null;

    /**
     * A collection of pre-selected components.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType
     * $components
     */
    private $components = null;

    /**
     * Identifies the guests associated with this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType[] $resGuests
     */
    private $resGuests = null;

    /**
     * Information that affects the reservation as a whole.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType $globalInfo
     */
    private $globalInfo = null;

    /**
     * Gets as dynamicPkgAction
     *
     * The action being requested on the component or package.
     *
     * @return string
     */
    public function getDynamicPkgAction()
    {
        return $this->dynamicPkgAction;
    }

    /**
     * Sets a new dynamicPkgAction
     *
     * The action being requested on the component or package.
     *
     * @param string $dynamicPkgAction
     * @return self
     */
    public function setDynamicPkgAction($dynamicPkgAction)
    {
        $this->dynamicPkgAction = $dynamicPkgAction;

        return $this;
    }

    /**
     * Gets as dynamicPkgStatus
     *
     * The status of the component or package.
     *
     * @return string
     */
    public function getDynamicPkgStatus()
    {
        return $this->dynamicPkgStatus;
    }

    /**
     * Sets a new dynamicPkgStatus
     *
     * The status of the component or package.
     *
     * @param string $dynamicPkgStatus
     * @return self
     */
    public function setDynamicPkgStatus($dynamicPkgStatus)
    {
        $this->dynamicPkgStatus = $dynamicPkgStatus;

        return $this;
    }

    /**
     * Gets as components
     *
     * A collection of pre-selected components.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Sets a new components
     *
     * A collection of pre-selected components.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType
     * $components
     * @return self
     */
    public function setComponents(\Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType $components)
    {
        $this->components = $components;

        return $this;
    }

    /**
     * Adds as resGuest
     *
     * Identifies the guests associated with this reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType $resGuest
     */
    public function addToResGuests(\Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType $resGuest)
    {
        $this->resGuests[] = $resGuest;

        return $this;
    }

    /**
     * isset resGuests
     *
     * Identifies the guests associated with this reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResGuests($index)
    {
        return isset($this->resGuests[$index]);
    }

    /**
     * unset resGuests
     *
     * Identifies the guests associated with this reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResGuests($index)
    {
        unset($this->resGuests[$index]);
    }

    /**
     * Gets as resGuests
     *
     * Identifies the guests associated with this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType[]
     */
    public function getResGuests()
    {
        return $this->resGuests;
    }

    /**
     * Sets a new resGuests
     *
     * Identifies the guests associated with this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType[] $resGuests
     * @return self
     */
    public function setResGuests(array $resGuests)
    {
        $this->resGuests = $resGuests;

        return $this;
    }

    /**
     * Gets as globalInfo
     *
     * Information that affects the reservation as a whole.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType
     */
    public function getGlobalInfo()
    {
        return $this->globalInfo;
    }

    /**
     * Sets a new globalInfo
     *
     * Information that affects the reservation as a whole.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType $globalInfo
     * @return self
     */
    public function setGlobalInfo(\Davispeixoto\OpenTravelAlliance\DynamicPkgGlobalInfoType $globalInfo)
    {
        $this->globalInfo = $globalInfo;

        return $this;
    }


}


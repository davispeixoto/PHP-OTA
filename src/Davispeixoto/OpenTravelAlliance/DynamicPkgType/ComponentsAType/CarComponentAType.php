<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType;

/**
 * Class representing CarComponentAType
 */
class CarComponentAType
{

    /**
     * The length of time starting at the create time for which the component will be
     * held.
     *
     * @property \DateInterval $holdDuration
     */
    private $holdDuration = null;

    /**
     * A reference number used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @property string $quoteID
     */
    private $quoteID = null;

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
     * The date and time the car component was created.
     *
     * @property \DateTime $createDateTime
     */
    private $createDateTime = null;

    /**
     * Used to provide PMS and/or CRS identifiers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     */
    private $uniqueID = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\CarComponentAType\VehicleAType
     * $vehicle
     */
    private $vehicle = null;

    /**
     * Gets as holdDuration
     *
     * The length of time starting at the create time for which the component will be
     * held.
     *
     * @return \DateInterval
     */
    public function getHoldDuration()
    {
        return $this->holdDuration;
    }

    /**
     * Sets a new holdDuration
     *
     * The length of time starting at the create time for which the component will be
     * held.
     *
     * @param \DateInterval $holdDuration
     * @return self
     */
    public function setHoldDuration(\DateInterval $holdDuration)
    {
        $this->holdDuration = $holdDuration;

        return $this;
    }

    /**
     * Gets as quoteID
     *
     * A reference number used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * A reference number used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;

        return $this;
    }

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
     * Gets as createDateTime
     *
     * The date and time the car component was created.
     *
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * The date and time the car component was created.
     *
     * @param \DateTime $createDateTime
     * @return self
     */
    public function setCreateDateTime(\DateTime $createDateTime)
    {
        $this->createDateTime = $createDateTime;

        return $this;
    }

    /**
     * Adds as uniqueID
     *
     * Used to provide PMS and/or CRS identifiers.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;

        return $this;
    }

    /**
     * isset uniqueID
     *
     * Used to provide PMS and/or CRS identifiers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * Used to provide PMS and/or CRS identifiers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * Used to provide PMS and/or CRS identifiers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Used to provide PMS and/or CRS identifiers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as vehicle
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\CarComponentAType\VehicleAType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\CarComponentAType\VehicleAType
     * $vehicle
     * @return self
     */
    public function setVehicle(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType\CarComponentAType\VehicleAType $vehicle
    ) {
        $this->vehicle = $vehicle;

        return $this;
    }


}


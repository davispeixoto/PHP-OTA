<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgType\ComponentsAType;

use Davispeixoto\OpenTravelAlliance\HotelReservationType;

/**
 * Class representing HotelComponentAType
 */
class HotelComponentAType extends HotelReservationType
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


}


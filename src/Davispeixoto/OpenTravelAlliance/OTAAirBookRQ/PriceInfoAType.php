<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBookRQ;

use Davispeixoto\OpenTravelAlliance\BookingPriceInfoType;

/**
 * Class representing PriceInfoAType
 */
class PriceInfoAType extends BookingPriceInfoType
{

    /**
     * To specify the level of participation by a vendor in another system. Refer to
     * OpenTravel Code List Participation Level Code (PLC)
     *
     * @property string $participationLevel
     */
    private $participationLevel = null;

    /**
     * When true, should return expanded pricing that may include up to 99 taxes and/or
     * service fees.
     *
     * @property boolean $expandedPricingInd
     */
    private $expandedPricingInd = null;

    /**
     * Identifies a pricing preference for this booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\PriceInfoAType\PricingPrefAType[]
     * $pricingPref
     */
    private $pricingPref = null;

    /**
     * Gets as participationLevel
     *
     * To specify the level of participation by a vendor in another system. Refer to
     * OpenTravel Code List Participation Level Code (PLC)
     *
     * @return string
     */
    public function getParticipationLevel()
    {
        return $this->participationLevel;
    }

    /**
     * Sets a new participationLevel
     *
     * To specify the level of participation by a vendor in another system. Refer to
     * OpenTravel Code List Participation Level Code (PLC)
     *
     * @param string $participationLevel
     * @return self
     */
    public function setParticipationLevel($participationLevel)
    {
        $this->participationLevel = $participationLevel;

        return $this;
    }

    /**
     * Gets as expandedPricingInd
     *
     * When true, should return expanded pricing that may include up to 99 taxes and/or
     * service fees.
     *
     * @return boolean
     */
    public function getExpandedPricingInd()
    {
        return $this->expandedPricingInd;
    }

    /**
     * Sets a new expandedPricingInd
     *
     * When true, should return expanded pricing that may include up to 99 taxes and/or
     * service fees.
     *
     * @param boolean $expandedPricingInd
     * @return self
     */
    public function setExpandedPricingInd($expandedPricingInd)
    {
        $this->expandedPricingInd = $expandedPricingInd;

        return $this;
    }

    /**
     * Adds as pricingPref
     *
     * Identifies a pricing preference for this booking.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\PriceInfoAType\PricingPrefAType
     * $pricingPref
     */
    public function addToPricingPref(
        \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\PriceInfoAType\PricingPrefAType $pricingPref
    ) {
        $this->pricingPref[] = $pricingPref;

        return $this;
    }

    /**
     * isset pricingPref
     *
     * Identifies a pricing preference for this booking.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricingPref($index)
    {
        return isset($this->pricingPref[$index]);
    }

    /**
     * unset pricingPref
     *
     * Identifies a pricing preference for this booking.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricingPref($index)
    {
        unset($this->pricingPref[$index]);
    }

    /**
     * Gets as pricingPref
     *
     * Identifies a pricing preference for this booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\PriceInfoAType\PricingPrefAType[]
     */
    public function getPricingPref()
    {
        return $this->pricingPref;
    }

    /**
     * Sets a new pricingPref
     *
     * Identifies a pricing preference for this booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\PriceInfoAType\PricingPrefAType[]
     * $pricingPref
     * @return self
     */
    public function setPricingPref(array $pricingPref)
    {
        $this->pricingPref = $pricingPref;

        return $this;
    }


}


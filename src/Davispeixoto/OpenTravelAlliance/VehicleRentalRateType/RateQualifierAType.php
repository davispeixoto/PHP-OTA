<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleRentalRateType;

use Davispeixoto\OpenTravelAlliance\RateQualifierType;

/**
 * Class representing RateQualifierAType
 */
class RateQualifierAType extends RateQualifierType
{

    /**
     * Provides a reference pointer that links the availability rate to a TourInfo.
     *
     * @property string $tourInfoRPH
     */
    private $tourInfoRPH = null;

    /**
     * Provides a reference pointer that links the availability rate to one or more
     * CustLoyalty RPHs.
     *
     * @property string[] $custLoyaltyRPH
     */
    private $custLoyaltyRPH = null;

    /**
     * A reference string used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @property string $quoteID
     */
    private $quoteID = null;

    /**
     * Gets as tourInfoRPH
     *
     * Provides a reference pointer that links the availability rate to a TourInfo.
     *
     * @return string
     */
    public function getTourInfoRPH()
    {
        return $this->tourInfoRPH;
    }

    /**
     * Sets a new tourInfoRPH
     *
     * Provides a reference pointer that links the availability rate to a TourInfo.
     *
     * @param string $tourInfoRPH
     * @return self
     */
    public function setTourInfoRPH($tourInfoRPH)
    {
        $this->tourInfoRPH = $tourInfoRPH;

        return $this;
    }

    /**
     * Adds as custLoyaltyRPH
     *
     * Provides a reference pointer that links the availability rate to one or more
     * CustLoyalty RPHs.
     *
     * @return self
     * @param string $custLoyaltyRPH
     */
    public function addToCustLoyaltyRPH($custLoyaltyRPH)
    {
        $this->custLoyaltyRPH[] = $custLoyaltyRPH;

        return $this;
    }

    /**
     * isset custLoyaltyRPH
     *
     * Provides a reference pointer that links the availability rate to one or more
     * CustLoyalty RPHs.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustLoyaltyRPH($index)
    {
        return isset($this->custLoyaltyRPH[$index]);
    }

    /**
     * unset custLoyaltyRPH
     *
     * Provides a reference pointer that links the availability rate to one or more
     * CustLoyalty RPHs.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustLoyaltyRPH($index)
    {
        unset($this->custLoyaltyRPH[$index]);
    }

    /**
     * Gets as custLoyaltyRPH
     *
     * Provides a reference pointer that links the availability rate to one or more
     * CustLoyalty RPHs.
     *
     * @return string[]
     */
    public function getCustLoyaltyRPH()
    {
        return $this->custLoyaltyRPH;
    }

    /**
     * Sets a new custLoyaltyRPH
     *
     * Provides a reference pointer that links the availability rate to one or more
     * CustLoyalty RPHs.
     *
     * @param string $custLoyaltyRPH
     * @return self
     */
    public function setCustLoyaltyRPH(array $custLoyaltyRPH)
    {
        $this->custLoyaltyRPH = $custLoyaltyRPH;

        return $this;
    }

    /**
     * Gets as quoteID
     *
     * A reference string used to match a query, with rates, to a given time. This is
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
     * A reference string used to match a query, with rates, to a given time. This is
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


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfCourseAvailRQ;

/**
 * Class representing ProcessingInfoAType
 */
class ProcessingInfoAType
{

    /**
     * The requested display currency in ISO 4217 encoding.(Reference):
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php(More
     * Info):
     * http://www.opentraveldevelopersnetwork.com/2012A_SchemaDoc/DisplayCurrency
     *
     * @property string $displayCurrency
     */
    private $displayCurrency = null;

    /**
     * The requested pricing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD
     * = United States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $pricingCurrency
     */
    private $pricingCurrency = null;

    /**
     * If true, redemption program points may be used to pay for the total or a portion
     * of the tee time.
     *
     * @property boolean $redemptionInd
     */
    private $redemptionInd = null;

    /**
     * The maximum quantity of search results in the response.
     *
     * @property integer $maxResultsQty
     */
    private $maxResultsQty = null;

    /**
     * Gets as displayCurrency
     *
     * The requested display currency in ISO 4217 encoding.(Reference):
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php(More
     * Info):
     * http://www.opentraveldevelopersnetwork.com/2012A_SchemaDoc/DisplayCurrency
     *
     * @return string
     */
    public function getDisplayCurrency()
    {
        return $this->displayCurrency;
    }

    /**
     * Sets a new displayCurrency
     *
     * The requested display currency in ISO 4217 encoding.(Reference):
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php(More
     * Info):
     * http://www.opentraveldevelopersnetwork.com/2012A_SchemaDoc/DisplayCurrency
     *
     * @param string $displayCurrency
     * @return self
     */
    public function setDisplayCurrency($displayCurrency)
    {
        $this->displayCurrency = $displayCurrency;

        return $this;
    }

    /**
     * Gets as pricingCurrency
     *
     * The requested pricing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD
     * = United States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getPricingCurrency()
    {
        return $this->pricingCurrency;
    }

    /**
     * Sets a new pricingCurrency
     *
     * The requested pricing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD
     * = United States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $pricingCurrency
     * @return self
     */
    public function setPricingCurrency($pricingCurrency)
    {
        $this->pricingCurrency = $pricingCurrency;

        return $this;
    }

    /**
     * Gets as redemptionInd
     *
     * If true, redemption program points may be used to pay for the total or a portion
     * of the tee time.
     *
     * @return boolean
     */
    public function getRedemptionInd()
    {
        return $this->redemptionInd;
    }

    /**
     * Sets a new redemptionInd
     *
     * If true, redemption program points may be used to pay for the total or a portion
     * of the tee time.
     *
     * @param boolean $redemptionInd
     * @return self
     */
    public function setRedemptionInd($redemptionInd)
    {
        $this->redemptionInd = $redemptionInd;

        return $this;
    }

    /**
     * Gets as maxResultsQty
     *
     * The maximum quantity of search results in the response.
     *
     * @return integer
     */
    public function getMaxResultsQty()
    {
        return $this->maxResultsQty;
    }

    /**
     * Sets a new maxResultsQty
     *
     * The maximum quantity of search results in the response.
     *
     * @param integer $maxResultsQty
     * @return self
     */
    public function setMaxResultsQty($maxResultsQty)
    {
        $this->maxResultsQty = $maxResultsQty;

        return $this;
    }


}


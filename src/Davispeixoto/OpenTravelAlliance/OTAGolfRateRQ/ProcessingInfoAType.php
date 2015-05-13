<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ;

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
     * The type of results to return.
     *
     * @property string $resultsType
     */
    private $resultsType = null;

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
     * Gets as resultsType
     *
     * The type of results to return.
     *
     * @return string
     */
    public function getResultsType()
    {
        return $this->resultsType;
    }

    /**
     * Sets a new resultsType
     *
     * The type of results to return.
     *
     * @param string $resultsType
     * @return self
     */
    public function setResultsType($resultsType)
    {
        $this->resultsType = $resultsType;

        return $this;
    }


}


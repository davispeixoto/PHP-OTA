<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ;

/**
 * Class representing ProcessingInfoAType
 */
class ProcessingInfoAType
{

    /**
     * If true, summary information is requested in the search results.(Developer
     * Notes) An agreement should be in place with your trading partners that specifies
     * what information is summary versus detail.
     *
     * @property boolean $summaryResultsInd
     */
    private $summaryResultsInd = null;

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
     * The maximum quantity of search results in the response.
     *
     * @property integer $maxResultsQty
     */
    private $maxResultsQty = null;

    /**
     * Gets as summaryResultsInd
     *
     * If true, summary information is requested in the search results.(Developer
     * Notes) An agreement should be in place with your trading partners that specifies
     * what information is summary versus detail.
     *
     * @return boolean
     */
    public function getSummaryResultsInd()
    {
        return $this->summaryResultsInd;
    }

    /**
     * Sets a new summaryResultsInd
     *
     * If true, summary information is requested in the search results.(Developer
     * Notes) An agreement should be in place with your trading partners that specifies
     * what information is summary versus detail.
     *
     * @param boolean $summaryResultsInd
     * @return self
     */
    public function setSummaryResultsInd($summaryResultsInd)
    {
        $this->summaryResultsInd = $summaryResultsInd;

        return $this;
    }

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


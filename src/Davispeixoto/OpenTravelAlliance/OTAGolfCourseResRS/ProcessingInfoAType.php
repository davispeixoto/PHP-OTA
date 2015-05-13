<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfCourseResRS;

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


}


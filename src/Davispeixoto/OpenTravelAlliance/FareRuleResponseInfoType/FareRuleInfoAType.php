<?php

namespace Davispeixoto\OpenTravelAlliance\FareRuleResponseInfoType;

use Davispeixoto\OpenTravelAlliance\FareInfoType;

/**
 * Class representing FareRuleInfoAType
 */
class FareRuleInfoAType extends FareInfoType
{

    /**
     * Specifies the language in which the rules should be returned.
     *
     * @property string $languageRequested
     */
    private $languageRequested = null;

    /**
     * Specifies the language in which the rules are returned.
     *
     * @property string $languageReturned
     */
    private $languageReturned = null;

    /**
     * Gets as languageRequested
     *
     * Specifies the language in which the rules should be returned.
     *
     * @return string
     */
    public function getLanguageRequested()
    {
        return $this->languageRequested;
    }

    /**
     * Sets a new languageRequested
     *
     * Specifies the language in which the rules should be returned.
     *
     * @param string $languageRequested
     * @return self
     */
    public function setLanguageRequested($languageRequested)
    {
        $this->languageRequested = $languageRequested;

        return $this;
    }

    /**
     * Gets as languageReturned
     *
     * Specifies the language in which the rules are returned.
     *
     * @return string
     */
    public function getLanguageReturned()
    {
        return $this->languageReturned;
    }

    /**
     * Sets a new languageReturned
     *
     * Specifies the language in which the rules are returned.
     *
     * @param string $languageReturned
     * @return self
     */
    public function setLanguageReturned($languageReturned)
    {
        $this->languageReturned = $languageReturned;

        return $this;
    }


}


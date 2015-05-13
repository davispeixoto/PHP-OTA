<?php

namespace Davispeixoto\OpenTravelAlliance\AppliedRuleType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType
{

    /**
     * A short description of the rule text with a language identifier.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType $shortDescription
     */
    private $shortDescription = null;

    /**
     * A long description of the rule text with a language identifier.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType $longDescription
     */
    private $longDescription = null;

    /**
     * Gets as shortDescription
     *
     * A short description of the rule text with a language identifier.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Sets a new shortDescription
     *
     * A short description of the rule text with a language identifier.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $shortDescription
     * @return self
     */
    public function setShortDescription(\Davispeixoto\OpenTravelAlliance\FreeTextType $shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Gets as longDescription
     *
     * A long description of the rule text with a language identifier.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Sets a new longDescription
     *
     * A long description of the rule text with a language identifier.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $longDescription
     * @return self
     */
    public function setLongDescription(\Davispeixoto\OpenTravelAlliance\FreeTextType $longDescription)
    {
        $this->longDescription = $longDescription;

        return $this;
    }


}


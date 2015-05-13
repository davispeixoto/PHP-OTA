<?php

namespace Davispeixoto\OpenTravelAlliance\AreaInfoType\AttractionsAType\AttractionAType;

use Davispeixoto\OpenTravelAlliance\ContactInfoType;

/**
 * Class representing ContactAType
 */
class ContactAType extends ContactInfoType
{

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }


}


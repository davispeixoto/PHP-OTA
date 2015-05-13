<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing PNRAType
 */
class PNRAType extends UniqueIDType
{

    /**
     * If true, this traveler is already checked in.
     *
     * @property boolean $checkedInInd
     */
    private $checkedInInd = null;

    /**
     * Associated ID.Example: UAA512346Note: This may contain an associated ID, such as
     * a conjunctive ticket number.
     *
     * @property string $associatedID
     */
    private $associatedID = null;

    /**
     * Gets as checkedInInd
     *
     * If true, this traveler is already checked in.
     *
     * @return boolean
     */
    public function getCheckedInInd()
    {
        return $this->checkedInInd;
    }

    /**
     * Sets a new checkedInInd
     *
     * If true, this traveler is already checked in.
     *
     * @param boolean $checkedInInd
     * @return self
     */
    public function setCheckedInInd($checkedInInd)
    {
        $this->checkedInInd = $checkedInInd;

        return $this;
    }

    /**
     * Gets as associatedID
     *
     * Associated ID.Example: UAA512346Note: This may contain an associated ID, such as
     * a conjunctive ticket number.
     *
     * @return string
     */
    public function getAssociatedID()
    {
        return $this->associatedID;
    }

    /**
     * Sets a new associatedID
     *
     * Associated ID.Example: UAA512346Note: This may contain an associated ID, such as
     * a conjunctive ticket number.
     *
     * @param string $associatedID
     * @return self
     */
    public function setAssociatedID($associatedID)
    {
        $this->associatedID = $associatedID;

        return $this;
    }


}


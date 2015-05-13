<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelInvBlockNotifRS;

use Davispeixoto\OpenTravelAlliance\InvBlockCodeRefType;

/**
 * Class representing InvBlockCodeRefsAType
 */
class InvBlockCodeRefsAType extends InvBlockCodeRefType
{

    /**
     * This contains inventory block codes used between the sending and receiving
     * systems. It acknowledges the creation of the block to the sender and may provide
     * codes for cross reference.
     *
     * @property \Davispeixoto\OpenTravelAlliance\InvBlockCodeRefType[]
     * $invBlockCodeRef
     */
    private $invBlockCodeRef = null;

    /**
     * Adds as invBlockCodeRef
     *
     * This contains inventory block codes used between the sending and receiving
     * systems. It acknowledges the creation of the block to the sender and may provide
     * codes for cross reference.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\InvBlockCodeRefType $invBlockCodeRef
     */
    public function addToInvBlockCodeRef(\Davispeixoto\OpenTravelAlliance\InvBlockCodeRefType $invBlockCodeRef)
    {
        $this->invBlockCodeRef[] = $invBlockCodeRef;

        return $this;
    }

    /**
     * isset invBlockCodeRef
     *
     * This contains inventory block codes used between the sending and receiving
     * systems. It acknowledges the creation of the block to the sender and may provide
     * codes for cross reference.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInvBlockCodeRef($index)
    {
        return isset($this->invBlockCodeRef[$index]);
    }

    /**
     * unset invBlockCodeRef
     *
     * This contains inventory block codes used between the sending and receiving
     * systems. It acknowledges the creation of the block to the sender and may provide
     * codes for cross reference.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInvBlockCodeRef($index)
    {
        unset($this->invBlockCodeRef[$index]);
    }

    /**
     * Gets as invBlockCodeRef
     *
     * This contains inventory block codes used between the sending and receiving
     * systems. It acknowledges the creation of the block to the sender and may provide
     * codes for cross reference.
     *
     * @return \Davispeixoto\OpenTravelAlliance\InvBlockCodeRefType[]
     */
    public function getInvBlockCodeRef()
    {
        return $this->invBlockCodeRef;
    }

    /**
     * Sets a new invBlockCodeRef
     *
     * This contains inventory block codes used between the sending and receiving
     * systems. It acknowledges the creation of the block to the sender and may provide
     * codes for cross reference.
     *
     * @param \Davispeixoto\OpenTravelAlliance\InvBlockCodeRefType[] $invBlockCodeRef
     * @return self
     */
    public function setInvBlockCodeRef(array $invBlockCodeRef)
    {
        $this->invBlockCodeRef = $invBlockCodeRef;

        return $this;
    }


}


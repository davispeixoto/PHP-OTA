<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType;

use Davispeixoto\OpenTravelAlliance\RestaurantType;

/**
 * Class representing DiningRoomAType
 */
class DiningRoomAType extends RestaurantType
{

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Name of the deck on the ship where the dining room is located.
     *
     * @property string $deckName
     */
    private $deckName = null;

    /**
     * Contains the list of sitting details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType\SittingDetailAType[]
     * $sittingDetails
     */
    private $sittingDetails = null;

    /**
     * Used to provide charge information for dining rooms that have additional fees.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType $fee
     */
    private $fee = null;

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return boolean
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param boolean $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * Gets as deckName
     *
     * Name of the deck on the ship where the dining room is located.
     *
     * @return string
     */
    public function getDeckName()
    {
        return $this->deckName;
    }

    /**
     * Sets a new deckName
     *
     * Name of the deck on the ship where the dining room is located.
     *
     * @param string $deckName
     * @return self
     */
    public function setDeckName($deckName)
    {
        $this->deckName = $deckName;

        return $this;
    }

    /**
     * Adds as sittingDetail
     *
     * Contains the list of sitting details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType\SittingDetailAType
     * $sittingDetail
     */
    public function addToSittingDetails(
        \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType\SittingDetailAType $sittingDetail
    ) {
        $this->sittingDetails[] = $sittingDetail;

        return $this;
    }

    /**
     * isset sittingDetails
     *
     * Contains the list of sitting details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSittingDetails($index)
    {
        return isset($this->sittingDetails[$index]);
    }

    /**
     * unset sittingDetails
     *
     * Contains the list of sitting details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSittingDetails($index)
    {
        unset($this->sittingDetails[$index]);
    }

    /**
     * Gets as sittingDetails
     *
     * Contains the list of sitting details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType\SittingDetailAType[]
     */
    public function getSittingDetails()
    {
        return $this->sittingDetails;
    }

    /**
     * Sets a new sittingDetails
     *
     * Contains the list of sitting details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType\SittingDetailAType[]
     * $sittingDetails
     * @return self
     */
    public function setSittingDetails(array $sittingDetails)
    {
        $this->sittingDetails = $sittingDetails;

        return $this;
    }

    /**
     * Gets as fee
     *
     * Used to provide charge information for dining rooms that have additional fees.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Used to provide charge information for dining rooms that have additional fees.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $fee
     * @return self
     */
    public function setFee(\Davispeixoto\OpenTravelAlliance\FeeType $fee)
    {
        $this->fee = $fee;

        return $this;
    }


}


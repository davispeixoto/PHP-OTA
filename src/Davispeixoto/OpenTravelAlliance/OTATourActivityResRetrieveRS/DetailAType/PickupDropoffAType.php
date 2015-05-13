<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType;

use Davispeixoto\OpenTravelAlliance\TourActivityTransRequestType;

/**
 * Class representing PickupDropoffAType
 */
class PickupDropoffAType extends TourActivityTransRequestType
{

    /**
     * References to individual participants, a participant category and/ or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PickupDropoffAType\ParticipantListAType[]
     * $participantList
     */
    private $participantList = null;

    /**
     * Adds as participantList
     *
     * References to individual participants, a participant category and/ or a group.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PickupDropoffAType\ParticipantListAType
     * $participantList
     */
    public function addToParticipantList(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PickupDropoffAType\ParticipantListAType $participantList
    ) {
        $this->participantList[] = $participantList;

        return $this;
    }

    /**
     * isset participantList
     *
     * References to individual participants, a participant category and/ or a group.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantList($index)
    {
        return isset($this->participantList[$index]);
    }

    /**
     * unset participantList
     *
     * References to individual participants, a participant category and/ or a group.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantList($index)
    {
        unset($this->participantList[$index]);
    }

    /**
     * Gets as participantList
     *
     * References to individual participants, a participant category and/ or a group.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PickupDropoffAType\ParticipantListAType[]
     */
    public function getParticipantList()
    {
        return $this->participantList;
    }

    /**
     * Sets a new participantList
     *
     * References to individual participants, a participant category and/ or a group.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\PickupDropoffAType\ParticipantListAType[]
     * $participantList
     * @return self
     */
    public function setParticipantList(array $participantList)
    {
        $this->participantList = $participantList;

        return $this;
    }


}


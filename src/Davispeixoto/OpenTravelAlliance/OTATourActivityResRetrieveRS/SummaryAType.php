<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS;

/**
 * Class representing SummaryAType
 */
class SummaryAType
{

    /**
     * Core information about the booked tour and/or activity, including ID(s) and
     * name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\SummaryAType\BasicInfoAType
     * $basicInfo
     */
    private $basicInfo = null;

    /**
     * A confirmation number for the sucessfully booked reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation
     */
    private $confirmation = null;

    /**
     * Detailed contact information if a third-party company and/or individual made
     * this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactDetail
     */
    private $contactDetail = null;

    /**
     * Individual participant, participant category and group details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\SummaryAType\ParticipantInfoAType[]
     * $participantInfo
     */
    private $participantInfo = null;

    /**
     * Gets as basicInfo
     *
     * Core information about the booked tour and/or activity, including ID(s) and
     * name.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\SummaryAType\BasicInfoAType
     */
    public function getBasicInfo()
    {
        return $this->basicInfo;
    }

    /**
     * Sets a new basicInfo
     *
     * Core information about the booked tour and/or activity, including ID(s) and
     * name.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\SummaryAType\BasicInfoAType
     * $basicInfo
     * @return self
     */
    public function setBasicInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\SummaryAType\BasicInfoAType $basicInfo
    ) {
        $this->basicInfo = $basicInfo;

        return $this;
    }

    /**
     * Gets as confirmation
     *
     * A confirmation number for the sucessfully booked reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Sets a new confirmation
     *
     * A confirmation number for the sucessfully booked reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation
     * @return self
     */
    public function setConfirmation(\Davispeixoto\OpenTravelAlliance\UniqueIDType $confirmation)
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Gets as contactDetail
     *
     * Detailed contact information if a third-party company and/or individual made
     * this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getContactDetail()
    {
        return $this->contactDetail;
    }

    /**
     * Sets a new contactDetail
     *
     * Detailed contact information if a third-party company and/or individual made
     * this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactDetail
     * @return self
     */
    public function setContactDetail(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contactDetail)
    {
        $this->contactDetail = $contactDetail;

        return $this;
    }

    /**
     * Adds as participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\SummaryAType\ParticipantInfoAType
     * $participantInfo
     */
    public function addToParticipantInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\SummaryAType\ParticipantInfoAType $participantInfo
    ) {
        $this->participantInfo[] = $participantInfo;

        return $this;
    }

    /**
     * isset participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantInfo($index)
    {
        return isset($this->participantInfo[$index]);
    }

    /**
     * unset participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantInfo($index)
    {
        unset($this->participantInfo[$index]);
    }

    /**
     * Gets as participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\SummaryAType\ParticipantInfoAType[]
     */
    public function getParticipantInfo()
    {
        return $this->participantInfo;
    }

    /**
     * Sets a new participantInfo
     *
     * Individual participant, participant category and group details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\SummaryAType\ParticipantInfoAType[]
     * $participantInfo
     * @return self
     */
    public function setParticipantInfo(array $participantInfo)
    {
        $this->participantInfo = $participantInfo;

        return $this;
    }


}


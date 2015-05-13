<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityPolicyType
 *
 * Contains policies associated with the tour/activity.
 * XSD Type: TourActivityPolicyType
 */
class TourActivityPolicyType
{

    /**
     * An indication of insurance requirements.
     *
     * @property string $insuranceReqInd
     */
    private $insuranceReqInd = null;

    /**
     * A brief description of insurance requirements and/or options.
     *
     * @property string $insuranceOverview
     */
    private $insuranceOverview = null;

    /**
     * If true, one or more participants may be required to sign a waiver.
     *
     * @property boolean $waiverInd
     */
    private $waiverInd = null;

    /**
     * A brief description of waiver requirements.
     *
     * @property string $waiverOverview
     */
    private $waiverOverview = null;

    /**
     * Participant quantity and age requirements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\ParticipantAType
     * $participant
     */
    private $participant = null;

    /**
     * Cancellation policy information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\CancelAType
     * $cancel
     */
    private $cancel = null;

    /**
     * Other policy description and optional type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\OtherAType[]
     * $other
     */
    private $other = null;

    /**
     * Gets as insuranceReqInd
     *
     * An indication of insurance requirements.
     *
     * @return string
     */
    public function getInsuranceReqInd()
    {
        return $this->insuranceReqInd;
    }

    /**
     * Sets a new insuranceReqInd
     *
     * An indication of insurance requirements.
     *
     * @param string $insuranceReqInd
     * @return self
     */
    public function setInsuranceReqInd($insuranceReqInd)
    {
        $this->insuranceReqInd = $insuranceReqInd;

        return $this;
    }

    /**
     * Gets as insuranceOverview
     *
     * A brief description of insurance requirements and/or options.
     *
     * @return string
     */
    public function getInsuranceOverview()
    {
        return $this->insuranceOverview;
    }

    /**
     * Sets a new insuranceOverview
     *
     * A brief description of insurance requirements and/or options.
     *
     * @param string $insuranceOverview
     * @return self
     */
    public function setInsuranceOverview($insuranceOverview)
    {
        $this->insuranceOverview = $insuranceOverview;

        return $this;
    }

    /**
     * Gets as waiverInd
     *
     * If true, one or more participants may be required to sign a waiver.
     *
     * @return boolean
     */
    public function getWaiverInd()
    {
        return $this->waiverInd;
    }

    /**
     * Sets a new waiverInd
     *
     * If true, one or more participants may be required to sign a waiver.
     *
     * @param boolean $waiverInd
     * @return self
     */
    public function setWaiverInd($waiverInd)
    {
        $this->waiverInd = $waiverInd;

        return $this;
    }

    /**
     * Gets as waiverOverview
     *
     * A brief description of waiver requirements.
     *
     * @return string
     */
    public function getWaiverOverview()
    {
        return $this->waiverOverview;
    }

    /**
     * Sets a new waiverOverview
     *
     * A brief description of waiver requirements.
     *
     * @param string $waiverOverview
     * @return self
     */
    public function setWaiverOverview($waiverOverview)
    {
        $this->waiverOverview = $waiverOverview;

        return $this;
    }

    /**
     * Gets as participant
     *
     * Participant quantity and age requirements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\ParticipantAType
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * Participant quantity and age requirements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\ParticipantAType
     * $participant
     * @return self
     */
    public function setParticipant(
        \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\ParticipantAType $participant
    ) {
        $this->participant = $participant;

        return $this;
    }

    /**
     * Gets as cancel
     *
     * Cancellation policy information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\CancelAType
     */
    public function getCancel()
    {
        return $this->cancel;
    }

    /**
     * Sets a new cancel
     *
     * Cancellation policy information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\CancelAType
     * $cancel
     * @return self
     */
    public function setCancel(\Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\CancelAType $cancel)
    {
        $this->cancel = $cancel;

        return $this;
    }

    /**
     * Adds as other
     *
     * Other policy description and optional type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\OtherAType $other
     */
    public function addToOther(\Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\OtherAType $other)
    {
        $this->other[] = $other;

        return $this;
    }

    /**
     * isset other
     *
     * Other policy description and optional type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOther($index)
    {
        return isset($this->other[$index]);
    }

    /**
     * unset other
     *
     * Other policy description and optional type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOther($index)
    {
        unset($this->other[$index]);
    }

    /**
     * Gets as other
     *
     * Other policy description and optional type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\OtherAType[]
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Sets a new other
     *
     * Other policy description and optional type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType\OtherAType[]
     * $other
     * @return self
     */
    public function setOther(array $other)
    {
        $this->other = $other;

        return $this;
    }


}


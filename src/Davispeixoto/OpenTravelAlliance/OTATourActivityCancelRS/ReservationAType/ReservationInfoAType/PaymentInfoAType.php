<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType;

use Davispeixoto\OpenTravelAlliance\TourActivityChargeType;

/**
 * Class representing PaymentInfoAType
 */
class PaymentInfoAType extends TourActivityChargeType
{

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @property string $participantID
     */
    private $participantID = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @property string $participantCategoryID
     */
    private $participantCategoryID = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @property string $groupID
     */
    private $groupID = null;

    /**
     * Detailed information for the payment form.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PaymentInfoAType\DetailsAType
     * $details
     */
    private $details = null;

    /**
     * Gets as participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @return string
     */
    public function getParticipantID()
    {
        return $this->participantID;
    }

    /**
     * Sets a new participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @param string $participantID
     * @return self
     */
    public function setParticipantID($participantID)
    {
        $this->participantID = $participantID;

        return $this;
    }

    /**
     * Gets as participantCategoryID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @return string
     */
    public function getParticipantCategoryID()
    {
        return $this->participantCategoryID;
    }

    /**
     * Sets a new participantCategoryID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @param string $participantCategoryID
     * @return self
     */
    public function setParticipantCategoryID($participantCategoryID)
    {
        $this->participantCategoryID = $participantCategoryID;

        return $this;
    }

    /**
     * Gets as groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @return string
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Sets a new groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @param string $groupID
     * @return self
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;

        return $this;
    }

    /**
     * Gets as details
     *
     * Detailed information for the payment form.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PaymentInfoAType\DetailsAType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Detailed information for the payment form.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PaymentInfoAType\DetailsAType
     * $details
     * @return self
     */
    public function setDetails(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PaymentInfoAType\DetailsAType $details
    ) {
        $this->details = $details;

        return $this;
    }


}


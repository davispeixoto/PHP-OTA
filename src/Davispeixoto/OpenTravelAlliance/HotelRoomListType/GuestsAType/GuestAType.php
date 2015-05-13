<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing GuestAType
 */
class GuestAType extends ContactPersonType
{

    /**
     * This attributes indicates the change in status of the guest.
     *
     * @property string $guestAction
     */
    private $guestAction = null;

    /**
     * Indicates whether to send the printed confirmation.
     *
     * @property boolean $printConfoInd
     */
    private $printConfoInd = null;

    /**
     * The confirmation number for a particular guest. This is used with the
     * 'GuestAction' attribute value of 'Add-Update' to indicate an update.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType[]
     * $loyalty
     */
    private $loyalty = null;

    /**
     * Guarantee or Payment information for an individual guest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType[]
     * $guaranteePayment
     */
    private $guaranteePayment = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AdditionalDetailType[]
     * $additionalDetails
     */
    private $additionalDetails = null;

    /**
     * Gets as guestAction
     *
     * This attributes indicates the change in status of the guest.
     *
     * @return string
     */
    public function getGuestAction()
    {
        return $this->guestAction;
    }

    /**
     * Sets a new guestAction
     *
     * This attributes indicates the change in status of the guest.
     *
     * @param string $guestAction
     * @return self
     */
    public function setGuestAction($guestAction)
    {
        $this->guestAction = $guestAction;

        return $this;
    }

    /**
     * Gets as printConfoInd
     *
     * Indicates whether to send the printed confirmation.
     *
     * @return boolean
     */
    public function getPrintConfoInd()
    {
        return $this->printConfoInd;
    }

    /**
     * Sets a new printConfoInd
     *
     * Indicates whether to send the printed confirmation.
     *
     * @param boolean $printConfoInd
     * @return self
     */
    public function setPrintConfoInd($printConfoInd)
    {
        $this->printConfoInd = $printConfoInd;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The confirmation number for a particular guest. This is used with the
     * 'GuestAction' attribute value of 'Add-Update' to indicate an update.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The confirmation number for a particular guest. This is used with the
     * 'GuestAction' attribute value of 'Add-Update' to indicate an update.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Adds as loyalty
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType
     * $loyalty
     */
    public function addToLoyalty(
        \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType $loyalty
    ) {
        $this->loyalty[] = $loyalty;

        return $this;
    }

    /**
     * isset loyalty
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyalty($index)
    {
        return isset($this->loyalty[$index]);
    }

    /**
     * unset loyalty
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyalty($index)
    {
        unset($this->loyalty[$index]);
    }

    /**
     * Gets as loyalty
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType[]
     */
    public function getLoyalty()
    {
        return $this->loyalty;
    }

    /**
     * Sets a new loyalty
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType\LoyaltyAType[]
     * $loyalty
     * @return self
     */
    public function setLoyalty(array $loyalty)
    {
        $this->loyalty = $loyalty;

        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType
     * $guaranteePayment
     */
    public function addToGuaranteePayment(
        \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType $guaranteePayment
    ) {
        $this->guaranteePayment[] = $guaranteePayment;

        return $this;
    }

    /**
     * isset guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuaranteePayment($index)
    {
        return isset($this->guaranteePayment[$index]);
    }

    /**
     * unset guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuaranteePayment($index)
    {
        unset($this->guaranteePayment[$index]);
    }

    /**
     * Gets as guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType[]
     */
    public function getGuaranteePayment()
    {
        return $this->guaranteePayment;
    }

    /**
     * Sets a new guaranteePayment
     *
     * Guarantee or Payment information for an individual guest.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType\GuaranteePaymentAType[]
     * $guaranteePayment
     * @return self
     */
    public function setGuaranteePayment(array $guaranteePayment)
    {
        $this->guaranteePayment = $guaranteePayment;

        return $this;
    }

    /**
     * Adds as additionalDetail
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AdditionalDetailType $additionalDetail
     */
    public function addToAdditionalDetails(\Davispeixoto\OpenTravelAlliance\AdditionalDetailType $additionalDetail)
    {
        $this->additionalDetails[] = $additionalDetail;

        return $this;
    }

    /**
     * isset additionalDetails
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalDetails($index)
    {
        return isset($this->additionalDetails[$index]);
    }

    /**
     * unset additionalDetails
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalDetails($index)
    {
        unset($this->additionalDetails[$index]);
    }

    /**
     * Gets as additionalDetails
     *
     * @return \Davispeixoto\OpenTravelAlliance\AdditionalDetailType[]
     */
    public function getAdditionalDetails()
    {
        return $this->additionalDetails;
    }

    /**
     * Sets a new additionalDetails
     *
     * @param \Davispeixoto\OpenTravelAlliance\AdditionalDetailType[]
     * $additionalDetails
     * @return self
     */
    public function setAdditionalDetails(array $additionalDetails)
    {
        $this->additionalDetails = $additionalDetails;

        return $this;
    }


}


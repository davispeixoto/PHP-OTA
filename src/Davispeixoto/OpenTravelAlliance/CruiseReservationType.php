<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CruiseReservationType
 *
 *
 * XSD Type: CruiseReservationType
 */
class CruiseReservationType
{

    /**
     * Specifies the selected category to book. Contains information related to the
     * selected sailing. Typically the selected sailing is one of the sailings returned
     * in the previous sailing availability response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo
     */
    private $sailingInfo = null;

    /**
     * Specifies the profile information at the sailing level.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CruiseProfileType[] $sailingProfile
     */
    private $sailingProfile = null;

    /**
     * Specifies reservation and guest information about the booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType $reservationInfo
     */
    private $reservationInfo = null;

    /**
     * A collection of payments due.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType\PaymentDueAType[]
     * $paymentsDue
     */
    private $paymentsDue = null;

    /**
     * Contains information such as advisories or marketing messages returned by the
     * cruise line.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $information
     */
    private $information = null;

    /**
     * Gets as sailingInfo
     *
     * Specifies the selected category to book. Contains information related to the
     * selected sailing. Typically the selected sailing is one of the sailings returned
     * in the previous sailing availability response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType
     */
    public function getSailingInfo()
    {
        return $this->sailingInfo;
    }

    /**
     * Sets a new sailingInfo
     *
     * Specifies the selected category to book. Contains information related to the
     * selected sailing. Typically the selected sailing is one of the sailings returned
     * in the previous sailing availability response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo
     * @return self
     */
    public function setSailingInfo(\Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo)
    {
        $this->sailingInfo = $sailingInfo;

        return $this;
    }

    /**
     * Adds as sailingProfile
     *
     * Specifies the profile information at the sailing level.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CruiseProfileType $sailingProfile
     */
    public function addToSailingProfile(\Davispeixoto\OpenTravelAlliance\CruiseProfileType $sailingProfile)
    {
        $this->sailingProfile[] = $sailingProfile;

        return $this;
    }

    /**
     * isset sailingProfile
     *
     * Specifies the profile information at the sailing level.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSailingProfile($index)
    {
        return isset($this->sailingProfile[$index]);
    }

    /**
     * unset sailingProfile
     *
     * Specifies the profile information at the sailing level.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSailingProfile($index)
    {
        unset($this->sailingProfile[$index]);
    }

    /**
     * Gets as sailingProfile
     *
     * Specifies the profile information at the sailing level.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CruiseProfileType[]
     */
    public function getSailingProfile()
    {
        return $this->sailingProfile;
    }

    /**
     * Sets a new sailingProfile
     *
     * Specifies the profile information at the sailing level.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruiseProfileType[] $sailingProfile
     * @return self
     */
    public function setSailingProfile(array $sailingProfile)
    {
        $this->sailingProfile = $sailingProfile;

        return $this;
    }

    /**
     * Gets as reservationInfo
     *
     * Specifies reservation and guest information about the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType
     */
    public function getReservationInfo()
    {
        return $this->reservationInfo;
    }

    /**
     * Sets a new reservationInfo
     *
     * Specifies reservation and guest information about the booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType $reservationInfo
     * @return self
     */
    public function setReservationInfo(\Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType $reservationInfo)
    {
        $this->reservationInfo = $reservationInfo;

        return $this;
    }

    /**
     * Adds as paymentDue
     *
     * A collection of payments due.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType\PaymentDueAType
     * $paymentDue
     */
    public function addToPaymentsDue(
        \Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType\PaymentDueAType $paymentDue
    ) {
        $this->paymentsDue[] = $paymentDue;

        return $this;
    }

    /**
     * isset paymentsDue
     *
     * A collection of payments due.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentsDue($index)
    {
        return isset($this->paymentsDue[$index]);
    }

    /**
     * unset paymentsDue
     *
     * A collection of payments due.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentsDue($index)
    {
        unset($this->paymentsDue[$index]);
    }

    /**
     * Gets as paymentsDue
     *
     * A collection of payments due.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType\PaymentDueAType[]
     */
    public function getPaymentsDue()
    {
        return $this->paymentsDue;
    }

    /**
     * Sets a new paymentsDue
     *
     * A collection of payments due.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseReservationType\PaymentsDueAType\PaymentDueAType[]
     * $paymentsDue
     * @return self
     */
    public function setPaymentsDue(array $paymentsDue)
    {
        $this->paymentsDue = $paymentsDue;

        return $this;
    }

    /**
     * Adds as information
     *
     * Contains information such as advisories or marketing messages returned by the
     * cruise line.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $information
     */
    public function addToInformation(\Davispeixoto\OpenTravelAlliance\ParagraphType $information)
    {
        $this->information[] = $information;

        return $this;
    }

    /**
     * isset information
     *
     * Contains information such as advisories or marketing messages returned by the
     * cruise line.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * Contains information such as advisories or marketing messages returned by the
     * cruise line.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * Contains information such as advisories or marketing messages returned by the
     * cruise line.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * Contains information such as advisories or marketing messages returned by the
     * cruise line.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $information
     * @return self
     */
    public function setInformation(array $information)
    {
        $this->information = $information;

        return $this;
    }


}


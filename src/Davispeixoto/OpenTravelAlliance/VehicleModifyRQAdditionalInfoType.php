<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleModifyRQAdditionalInfoType
 *
 * The VehicleModifyRQAdditionalInfoType complex type identifies the data that is
 * supplemental in a request to modify an existing vehicle reservation.
 * XSD Type: VehicleModifyRQAdditionalInfoType
 */
class VehicleModifyRQAdditionalInfoType
{

    /**
     * @property integer $luggageQty
     */
    private $luggageQty = null;

    /**
     * @property integer $passengerQty
     */
    private $passengerQty = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * The GasPrePay attribute defines a set of valid values for the choice of
     * prepaying for gas at the time of the pick up of the rental vehicle. This
     * information is useful in that it allows a customer's preference to be made known
     * to the vendor. It also allows the vendor to provide more detailed and accurate
     * pricing up front.
     *  false
     *
     * @property boolean $gasPrePay
     */
    private $gasPrePay = null;

    /**
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType[]
     * $specialReqPref
     */
    private $specialReqPref = null;

    /**
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     * $coveragePrefs
     */
    private $coveragePrefs = null;

    /**
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OffLocationServiceType[]
     * $offLocService
     */
    private $offLocService = null;

    /**
     * Details of the arrival transportation, if applicable
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType
     * $arrivalDetails
     */
    private $arrivalDetails = null;

    /**
     * Indicates preferences for the form of payment that will be used, if the request
     * results in a reservation. This element may repeat for different rental payment
     * preferences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\RentalPaymentPrefAType[]
     * $rentalPaymentPref
     */
    private $rentalPaymentPref = null;

    /**
     * Information identifying an earlier availability quote.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\ReferenceAType
     * $reference
     */
    private $reference = null;

    /**
     * Details of a tour with which this reservation information is associated. Rate
     * information may vary if associated with a tour.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleTourInfoType $tourInfo
     */
    private $tourInfo = null;

    /**
     * Used to provide instructions regarding customer preferences for receiving
     * confirmation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * Free text description regarding the rental modification.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $remark
     */
    private $remark = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as luggageQty
     *
     * @return integer
     */
    public function getLuggageQty()
    {
        return $this->luggageQty;
    }

    /**
     * Sets a new luggageQty
     *
     * @param integer $luggageQty
     * @return self
     */
    public function setLuggageQty($luggageQty)
    {
        $this->luggageQty = $luggageQty;

        return $this;
    }

    /**
     * Gets as passengerQty
     *
     * @return integer
     */
    public function getPassengerQty()
    {
        return $this->passengerQty;
    }

    /**
     * Sets a new passengerQty
     *
     * @param integer $passengerQty
     * @return self
     */
    public function setPassengerQty($passengerQty)
    {
        $this->passengerQty = $passengerQty;

        return $this;
    }

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
     * Gets as gasPrePay
     *
     * The GasPrePay attribute defines a set of valid values for the choice of
     * prepaying for gas at the time of the pick up of the rental vehicle. This
     * information is useful in that it allows a customer's preference to be made known
     * to the vendor. It also allows the vendor to provide more detailed and accurate
     * pricing up front.
     *  false
     *
     * @return boolean
     */
    public function getGasPrePay()
    {
        return $this->gasPrePay;
    }

    /**
     * Sets a new gasPrePay
     *
     * The GasPrePay attribute defines a set of valid values for the choice of
     * prepaying for gas at the time of the pick up of the rental vehicle. This
     * information is useful in that it allows a customer's preference to be made known
     * to the vendor. It also allows the vendor to provide more detailed and accurate
     * pricing up front.
     *  false
     *
     * @param boolean $gasPrePay
     * @return self
     */
    public function setGasPrePay($gasPrePay)
    {
        $this->gasPrePay = $gasPrePay;

        return $this;
    }

    /**
     * Adds as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType
     * $specialReqPref
     */
    public function addToSpecialReqPref(\Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType $specialReqPref)
    {
        $this->specialReqPref[] = $specialReqPref;

        return $this;
    }

    /**
     * isset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialReqPref($index)
    {
        return isset($this->specialReqPref[$index]);
    }

    /**
     * unset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialReqPref($index)
    {
        unset($this->specialReqPref[$index]);
    }

    /**
     * Gets as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType[]
     */
    public function getSpecialReqPref()
    {
        return $this->specialReqPref;
    }

    /**
     * Sets a new specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType[]
     * $specialReqPref
     * @return self
     */
    public function setSpecialReqPref(array $specialReqPref)
    {
        $this->specialReqPref = $specialReqPref;

        return $this;
    }

    /**
     * Adds as coveragePref
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType
     * $coveragePref
     */
    public function addToCoveragePrefs(
        \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref
    ) {
        $this->coveragePrefs[] = $coveragePref;

        return $this;
    }

    /**
     * isset coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveragePrefs($index)
    {
        return isset($this->coveragePrefs[$index]);
    }

    /**
     * unset coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveragePrefs($index)
    {
        unset($this->coveragePrefs[$index]);
    }

    /**
     * Gets as coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     */
    public function getCoveragePrefs()
    {
        return $this->coveragePrefs;
    }

    /**
     * Sets a new coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     * $coveragePrefs
     * @return self
     */
    public function setCoveragePrefs(array $coveragePrefs)
    {
        $this->coveragePrefs = $coveragePrefs;

        return $this;
    }

    /**
     * Adds as offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServiceType $offLocService
     */
    public function addToOffLocService(\Davispeixoto\OpenTravelAlliance\OffLocationServiceType $offLocService)
    {
        $this->offLocService[] = $offLocService;

        return $this;
    }

    /**
     * isset offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffLocService($index)
    {
        return isset($this->offLocService[$index]);
    }

    /**
     * unset offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffLocService($index)
    {
        unset($this->offLocService[$index]);
    }

    /**
     * Gets as offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OffLocationServiceType[]
     */
    public function getOffLocService()
    {
        return $this->offLocService;
    }

    /**
     * Sets a new offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServiceType[] $offLocService
     * @return self
     */
    public function setOffLocService(array $offLocService)
    {
        $this->offLocService = $offLocService;

        return $this;
    }

    /**
     * Gets as arrivalDetails
     *
     * Details of the arrival transportation, if applicable
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType
     */
    public function getArrivalDetails()
    {
        return $this->arrivalDetails;
    }

    /**
     * Sets a new arrivalDetails
     *
     * Details of the arrival transportation, if applicable
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType
     * $arrivalDetails
     * @return self
     */
    public function setArrivalDetails(\Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType $arrivalDetails)
    {
        $this->arrivalDetails = $arrivalDetails;

        return $this;
    }

    /**
     * Adds as rentalPaymentPref
     *
     * Indicates preferences for the form of payment that will be used, if the request
     * results in a reservation. This element may repeat for different rental payment
     * preferences.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\RentalPaymentPrefAType
     * $rentalPaymentPref
     */
    public function addToRentalPaymentPref(
        \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\RentalPaymentPrefAType $rentalPaymentPref
    ) {
        $this->rentalPaymentPref[] = $rentalPaymentPref;

        return $this;
    }

    /**
     * isset rentalPaymentPref
     *
     * Indicates preferences for the form of payment that will be used, if the request
     * results in a reservation. This element may repeat for different rental payment
     * preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRentalPaymentPref($index)
    {
        return isset($this->rentalPaymentPref[$index]);
    }

    /**
     * unset rentalPaymentPref
     *
     * Indicates preferences for the form of payment that will be used, if the request
     * results in a reservation. This element may repeat for different rental payment
     * preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRentalPaymentPref($index)
    {
        unset($this->rentalPaymentPref[$index]);
    }

    /**
     * Gets as rentalPaymentPref
     *
     * Indicates preferences for the form of payment that will be used, if the request
     * results in a reservation. This element may repeat for different rental payment
     * preferences.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\RentalPaymentPrefAType[]
     */
    public function getRentalPaymentPref()
    {
        return $this->rentalPaymentPref;
    }

    /**
     * Sets a new rentalPaymentPref
     *
     * Indicates preferences for the form of payment that will be used, if the request
     * results in a reservation. This element may repeat for different rental payment
     * preferences.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\RentalPaymentPrefAType[]
     * $rentalPaymentPref
     * @return self
     */
    public function setRentalPaymentPref(array $rentalPaymentPref)
    {
        $this->rentalPaymentPref = $rentalPaymentPref;

        return $this;
    }

    /**
     * Gets as reference
     *
     * Information identifying an earlier availability quote.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\ReferenceAType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Information identifying an earlier availability quote.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\ReferenceAType
     * $reference
     * @return self
     */
    public function setReference(
        \Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\ReferenceAType $reference
    ) {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour with which this reservation information is associated. Rate
     * information may vary if associated with a tour.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleTourInfoType
     */
    public function getTourInfo()
    {
        return $this->tourInfo;
    }

    /**
     * Sets a new tourInfo
     *
     * Details of a tour with which this reservation information is associated. Rate
     * information may vary if associated with a tour.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleTourInfoType $tourInfo
     * @return self
     */
    public function setTourInfo(\Davispeixoto\OpenTravelAlliance\VehicleTourInfoType $tourInfo)
    {
        $this->tourInfo = $tourInfo;

        return $this;
    }

    /**
     * Gets as writtenConfInst
     *
     * Used to provide instructions regarding customer preferences for receiving
     * confirmation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WrittenConfInstType
     */
    public function getWrittenConfInst()
    {
        return $this->writtenConfInst;
    }

    /**
     * Sets a new writtenConfInst
     *
     * Used to provide instructions regarding customer preferences for receiving
     * confirmation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst
     * @return self
     */
    public function setWrittenConfInst(\Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst)
    {
        $this->writtenConfInst = $writtenConfInst;

        return $this;
    }

    /**
     * Adds as remark
     *
     * Free text description regarding the rental modification.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $remark
     */
    public function addToRemark(\Davispeixoto\OpenTravelAlliance\ParagraphType $remark)
    {
        $this->remark[] = $remark;

        return $this;
    }

    /**
     * isset remark
     *
     * Free text description regarding the rental modification.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRemark($index)
    {
        return isset($this->remark[$index]);
    }

    /**
     * unset remark
     *
     * Free text description regarding the rental modification.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRemark($index)
    {
        unset($this->remark[$index]);
    }

    /**
     * Gets as remark
     *
     * Free text description regarding the rental modification.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Free text description regarding the rental modification.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}


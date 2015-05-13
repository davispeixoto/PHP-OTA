<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleSegmentAdditionalInfoType
 *
 * The VehicleSegmentAdditionalInfoType complex type identifies the data that
 * descibes the supplemental information assocated with a vehicle segment. Such
 * information may be associated with the reservation of a vehicle, but is not
 * normally included.
 * XSD Type: VehicleSegmentAdditionalInfoType
 */
class VehicleSegmentAdditionalInfoType
{

    /**
     * When true, a written confirmation may be requested.
     *
     * @property boolean $writtenConfInd
     */
    private $writtenConfInd = null;

    /**
     * A collection of payment rules associated with this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentDetailType[]
     * $rentalPaymentAmount
     */
    private $rentalPaymentAmount = null;

    /**
     * A collection of vehicle coverages associated with this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoveragePricedType[] $pricedCoverages
     */
    private $pricedCoverages = null;

    /**
     * Information on an off-location service associated with this reservation, along
     * with the associated charge.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OffLocationServicePricedType[]
     * $pricedOffLocService
     */
    private $pricedOffLocService = null;

    /**
     * A collection of free-format messages associated with this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType[]
     * $locationDetails
     */
    private $locationDetails = null;

    /**
     * Details of a tour associated with which this reservation information is
     * associated. Rate information may vary if associated with a tour.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleTourInfoType $tourInfo
     */
    private $tourInfo = null;

    /**
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleSpecialReqPrefType[]
     * $specialReqPref
     */
    private $specialReqPref = null;

    /**
     * Details of the arrival transportation, if applicable.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType
     * $arrivalDetails
     */
    private $arrivalDetails = null;

    /**
     * Used to provide instructions regarding cusotmer preferences for receiving
     * confirmation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * Free text description regarding the rental (e.g. vehicle is being rented because
     * of an accident).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $remark
     */
    private $remark = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as writtenConfInd
     *
     * When true, a written confirmation may be requested.
     *
     * @return boolean
     */
    public function getWrittenConfInd()
    {
        return $this->writtenConfInd;
    }

    /**
     * Sets a new writtenConfInd
     *
     * When true, a written confirmation may be requested.
     *
     * @param boolean $writtenConfInd
     * @return self
     */
    public function setWrittenConfInd($writtenConfInd)
    {
        $this->writtenConfInd = $writtenConfInd;

        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;

        return $this;
    }

    /**
     * isset paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules)
    {
        $this->paymentRules = $paymentRules;

        return $this;
    }

    /**
     * Adds as rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType $rentalPaymentAmount
     */
    public function addToRentalPaymentAmount(\Davispeixoto\OpenTravelAlliance\PaymentDetailType $rentalPaymentAmount)
    {
        $this->rentalPaymentAmount[] = $rentalPaymentAmount;

        return $this;
    }

    /**
     * isset rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRentalPaymentAmount($index)
    {
        return isset($this->rentalPaymentAmount[$index]);
    }

    /**
     * unset rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRentalPaymentAmount($index)
    {
        unset($this->rentalPaymentAmount[$index]);
    }

    /**
     * Gets as rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentDetailType[]
     */
    public function getRentalPaymentAmount()
    {
        return $this->rentalPaymentAmount;
    }

    /**
     * Sets a new rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType[] $rentalPaymentAmount
     * @return self
     */
    public function setRentalPaymentAmount(array $rentalPaymentAmount)
    {
        $this->rentalPaymentAmount = $rentalPaymentAmount;

        return $this;
    }

    /**
     * Adds as pricedCoverage
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage
     */
    public function addToPricedCoverages(\Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverages[] = $pricedCoverage;

        return $this;
    }

    /**
     * isset pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedCoverages($index)
    {
        return isset($this->pricedCoverages[$index]);
    }

    /**
     * unset pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedCoverages($index)
    {
        unset($this->pricedCoverages[$index]);
    }

    /**
     * Gets as pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveragePricedType[]
     */
    public function getPricedCoverages()
    {
        return $this->pricedCoverages;
    }

    /**
     * Sets a new pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType[] $pricedCoverages
     * @return self
     */
    public function setPricedCoverages(array $pricedCoverages)
    {
        $this->pricedCoverages = $pricedCoverages;

        return $this;
    }

    /**
     * Adds as pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along
     * with the associated charge.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServicePricedType
     * $pricedOffLocService
     */
    public function addToPricedOffLocService(
        \Davispeixoto\OpenTravelAlliance\OffLocationServicePricedType $pricedOffLocService
    ) {
        $this->pricedOffLocService[] = $pricedOffLocService;

        return $this;
    }

    /**
     * isset pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along
     * with the associated charge.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedOffLocService($index)
    {
        return isset($this->pricedOffLocService[$index]);
    }

    /**
     * unset pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along
     * with the associated charge.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedOffLocService($index)
    {
        unset($this->pricedOffLocService[$index]);
    }

    /**
     * Gets as pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along
     * with the associated charge.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OffLocationServicePricedType[]
     */
    public function getPricedOffLocService()
    {
        return $this->pricedOffLocService;
    }

    /**
     * Sets a new pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along
     * with the associated charge.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServicePricedType[]
     * $pricedOffLocService
     * @return self
     */
    public function setPricedOffLocService(array $pricedOffLocService)
    {
        $this->pricedOffLocService = $pricedOffLocService;

        return $this;
    }

    /**
     * Adds as vendorMessage
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $vendorMessage
     */
    public function addToVendorMessages(\Davispeixoto\OpenTravelAlliance\FormattedTextType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;

        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages)
    {
        $this->vendorMessages = $vendorMessages;

        return $this;
    }

    /**
     * Adds as locationDetails
     *
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType
     * $locationDetails
     */
    public function addToLocationDetails(\Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType $locationDetails)
    {
        $this->locationDetails[] = $locationDetails;

        return $this;
    }

    /**
     * isset locationDetails
     *
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocationDetails($index)
    {
        return isset($this->locationDetails[$index]);
    }

    /**
     * unset locationDetails
     *
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocationDetails($index)
    {
        unset($this->locationDetails[$index]);
    }

    /**
     * Gets as locationDetails
     *
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType[]
     */
    public function getLocationDetails()
    {
        return $this->locationDetails;
    }

    /**
     * Sets a new locationDetails
     *
     * Detailed information about the associated rental facilities, for example,
     * address, phone number, hours of operation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType[]
     * $locationDetails
     * @return self
     */
    public function setLocationDetails(array $locationDetails)
    {
        $this->locationDetails = $locationDetails;

        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour associated with which this reservation information is
     * associated. Rate information may vary if associated with a tour.
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
     * Details of a tour associated with which this reservation information is
     * associated. Rate information may vary if associated with a tour.
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
     * Adds as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the
     * customer, described using free text.
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
     * customer, described using free text.
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
     * customer, described using free text.
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
     * customer, described using free text.
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
     * customer, described using free text.
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
     * Gets as arrivalDetails
     *
     * Details of the arrival transportation, if applicable.
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
     * Details of the arrival transportation, if applicable.
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
     * Gets as writtenConfInst
     *
     * Used to provide instructions regarding cusotmer preferences for receiving
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
     * Used to provide instructions regarding cusotmer preferences for receiving
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
     * Free text description regarding the rental (e.g. vehicle is being rented because
     * of an accident).
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
     * Free text description regarding the rental (e.g. vehicle is being rented because
     * of an accident).
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
     * Free text description regarding the rental (e.g. vehicle is being rented because
     * of an accident).
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
     * Free text description regarding the rental (e.g. vehicle is being rented because
     * of an accident).
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
     * Free text description regarding the rental (e.g. vehicle is being rented because
     * of an accident).
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


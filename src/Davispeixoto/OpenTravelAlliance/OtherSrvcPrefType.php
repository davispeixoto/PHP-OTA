<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OtherSrvcPrefType
 *
 * Identifies other service preferences.
 * XSD Type: OtherSrvcPrefType
 */
class OtherSrvcPrefType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @property string $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * The name identfiying the service.
     *
     * @property string $otherSrvcName
     */
    private $otherSrvcName = null;

    /**
     * Enables a preference to be indicated for a vendor.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[] $vendorPref
     */
    private $vendorPref = null;

    /**
     * Enables a preference to be indicated for a loyalty program.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = null;

    /**
     * Enables a preference to be indicated for a form of payment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType[]
     * $paymentFormPref
     */
    private $paymentFormPref = null;

    /**
     * Enables a preference to be indicated for a special request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecRequestPrefType[]
     * $specRequestPref
     */
    private $specRequestPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * Gets as travelPurpose
     *
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @return string
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @param string $travelPurpose
     * @return self
     */
    public function setTravelPurpose($travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;

        return $this;
    }

    /**
     * Gets as otherSrvcName
     *
     * The name identfiying the service.
     *
     * @return string
     */
    public function getOtherSrvcName()
    {
        return $this->otherSrvcName;
    }

    /**
     * Sets a new otherSrvcName
     *
     * The name identfiying the service.
     *
     * @param string $otherSrvcName
     * @return self
     */
    public function setOtherSrvcName($otherSrvcName)
    {
        $this->otherSrvcName = $otherSrvcName;

        return $this;
    }

    /**
     * Adds as vendorPref
     *
     * Enables a preference to be indicated for a vendor.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $vendorPref
     */
    public function addToVendorPref(\Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $vendorPref)
    {
        $this->vendorPref[] = $vendorPref;

        return $this;
    }

    /**
     * isset vendorPref
     *
     * Enables a preference to be indicated for a vendor.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorPref($index)
    {
        return isset($this->vendorPref[$index]);
    }

    /**
     * unset vendorPref
     *
     * Enables a preference to be indicated for a vendor.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorPref($index)
    {
        unset($this->vendorPref[$index]);
    }

    /**
     * Gets as vendorPref
     *
     * Enables a preference to be indicated for a vendor.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[]
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Enables a preference to be indicated for a vendor.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[] $vendorPref
     * @return self
     */
    public function setVendorPref(array $vendorPref)
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }

    /**
     * Adds as loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType $loyaltyPref
     */
    public function addToLoyaltyPref(\Davispeixoto\OpenTravelAlliance\LoyaltyPrefType $loyaltyPref)
    {
        $this->loyaltyPref[] = $loyaltyPref;

        return $this;
    }

    /**
     * isset loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyaltyPref($index)
    {
        return isset($this->loyaltyPref[$index]);
    }

    /**
     * unset loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyaltyPref($index)
    {
        unset($this->loyaltyPref[$index]);
    }

    /**
     * Gets as loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType[]
     */
    public function getLoyaltyPref()
    {
        return $this->loyaltyPref;
    }

    /**
     * Sets a new loyaltyPref
     *
     * Enables a preference to be indicated for a loyalty program.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType[] $loyaltyPref
     * @return self
     */
    public function setLoyaltyPref(array $loyaltyPref)
    {
        $this->loyaltyPref = $loyaltyPref;

        return $this;
    }

    /**
     * Adds as paymentFormPref
     *
     * Enables a preference to be indicated for a form of payment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType $paymentFormPref
     */
    public function addToPaymentFormPref(\Davispeixoto\OpenTravelAlliance\PaymentFormPrefType $paymentFormPref)
    {
        $this->paymentFormPref[] = $paymentFormPref;

        return $this;
    }

    /**
     * isset paymentFormPref
     *
     * Enables a preference to be indicated for a form of payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentFormPref($index)
    {
        return isset($this->paymentFormPref[$index]);
    }

    /**
     * unset paymentFormPref
     *
     * Enables a preference to be indicated for a form of payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentFormPref($index)
    {
        unset($this->paymentFormPref[$index]);
    }

    /**
     * Gets as paymentFormPref
     *
     * Enables a preference to be indicated for a form of payment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType[]
     */
    public function getPaymentFormPref()
    {
        return $this->paymentFormPref;
    }

    /**
     * Sets a new paymentFormPref
     *
     * Enables a preference to be indicated for a form of payment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType[] $paymentFormPref
     * @return self
     */
    public function setPaymentFormPref(array $paymentFormPref)
    {
        $this->paymentFormPref = $paymentFormPref;

        return $this;
    }

    /**
     * Adds as specRequestPref
     *
     * Enables a preference to be indicated for a special request.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecRequestPrefType $specRequestPref
     */
    public function addToSpecRequestPref(\Davispeixoto\OpenTravelAlliance\SpecRequestPrefType $specRequestPref)
    {
        $this->specRequestPref[] = $specRequestPref;

        return $this;
    }

    /**
     * isset specRequestPref
     *
     * Enables a preference to be indicated for a special request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecRequestPref($index)
    {
        return isset($this->specRequestPref[$index]);
    }

    /**
     * unset specRequestPref
     *
     * Enables a preference to be indicated for a special request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecRequestPref($index)
    {
        unset($this->specRequestPref[$index]);
    }

    /**
     * Gets as specRequestPref
     *
     * Enables a preference to be indicated for a special request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecRequestPrefType[]
     */
    public function getSpecRequestPref()
    {
        return $this->specRequestPref;
    }

    /**
     * Sets a new specRequestPref
     *
     * Enables a preference to be indicated for a special request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecRequestPrefType[] $specRequestPref
     * @return self
     */
    public function setSpecRequestPref(array $specRequestPref)
    {
        $this->specRequestPref = $specRequestPref;

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


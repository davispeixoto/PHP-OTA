<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CommonPrefType
 *
 * Identifies preferences for common travel needs not associated with a specific
 * travel service.
 * XSD Type: CommonPrefType
 */
class CommonPrefType
{

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
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @property string $primaryLangID
     */
    private $primaryLangID = null;

    /**
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @property string $altLangID
     */
    private $altLangID = null;

    /**
     * Enables a preference to be indicated for name information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\NamePrefType[] $namePref
     */
    private $namePref = null;

    /**
     * Enables a preference to be indicated for telephone information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PhonePrefType[] $phonePref
     */
    private $phonePref = null;

    /**
     * Enables a preference to be indicated for address information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressPrefType[] $addressPref
     */
    private $addressPref = null;

    /**
     * Enables a preference to be indicated for form of payment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType[]
     * $paymentFormPref
     */
    private $paymentFormPref = null;

    /**
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @property \Davispeixoto\OpenTravelAlliance\InterestPrefType[] $interestPref
     */
    private $interestPref = null;

    /**
     * Enables a preference to be indicated for insurance.
     *
     * @property \Davispeixoto\OpenTravelAlliance\InsurancePrefType[] $insurancePref
     */
    private $insurancePref = null;

    /**
     * Enables a preference to be indicated for seating.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatingPrefType[] $seatingPref
     */
    private $seatingPref = null;

    /**
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TicketDistribPrefType[]
     * $ticketDistribPref
     */
    private $ticketDistribPref = null;

    /**
     * Enables a preference to be indicated for media and entertainment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType[]
     * $mediaEntertainPref
     */
    private $mediaEntertainPref = null;

    /**
     * Enables a preference to be indicated for pet information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PetInfoPrefType[] $petInfoPref
     */
    private $petInfoPref = null;

    /**
     * Enables a preference to be indicated for food and beverage.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MealPrefType[] $mealPref
     */
    private $mealPref = null;

    /**
     * Enables a preference to be indicated for a loyalty program.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = null;

    /**
     * Enables a preference to be indicated for a special request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecRequestPrefType[]
     * $specRequestPref
     */
    private $specRequestPref = null;

    /**
     * Enables a preference to be indicated for a related traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RelatedTravelerPrefType[]
     * $relatedTravelerPref
     */
    private $relatedTravelerPref = null;

    /**
     * The traveller's preferred means of being contacted.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommonPrefType\ContactPrefAType[]
     * $contactPref
     */
    private $contactPref = null;

    /**
     * Defines the category of the traveler and the purpose of the trip for which these
     * preferences apply. Typically used for company profiles.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmployeeInfoType $employeeLevelInfo
     */
    private $employeeLevelInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Gets as primaryLangID
     *
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @return string
     */
    public function getPrimaryLangID()
    {
        return $this->primaryLangID;
    }

    /**
     * Sets a new primaryLangID
     *
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @param string $primaryLangID
     * @return self
     */
    public function setPrimaryLangID($primaryLangID)
    {
        $this->primaryLangID = $primaryLangID;

        return $this;
    }

    /**
     * Gets as altLangID
     *
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @return string
     */
    public function getAltLangID()
    {
        return $this->altLangID;
    }

    /**
     * Sets a new altLangID
     *
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @param string $altLangID
     * @return self
     */
    public function setAltLangID($altLangID)
    {
        $this->altLangID = $altLangID;

        return $this;
    }

    /**
     * Adds as namePref
     *
     * Enables a preference to be indicated for name information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\NamePrefType $namePref
     */
    public function addToNamePref(\Davispeixoto\OpenTravelAlliance\NamePrefType $namePref)
    {
        $this->namePref[] = $namePref;

        return $this;
    }

    /**
     * isset namePref
     *
     * Enables a preference to be indicated for name information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNamePref($index)
    {
        return isset($this->namePref[$index]);
    }

    /**
     * unset namePref
     *
     * Enables a preference to be indicated for name information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNamePref($index)
    {
        unset($this->namePref[$index]);
    }

    /**
     * Gets as namePref
     *
     * Enables a preference to be indicated for name information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\NamePrefType[]
     */
    public function getNamePref()
    {
        return $this->namePref;
    }

    /**
     * Sets a new namePref
     *
     * Enables a preference to be indicated for name information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\NamePrefType[] $namePref
     * @return self
     */
    public function setNamePref(array $namePref)
    {
        $this->namePref = $namePref;

        return $this;
    }

    /**
     * Adds as phonePref
     *
     * Enables a preference to be indicated for telephone information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PhonePrefType $phonePref
     */
    public function addToPhonePref(\Davispeixoto\OpenTravelAlliance\PhonePrefType $phonePref)
    {
        $this->phonePref[] = $phonePref;

        return $this;
    }

    /**
     * isset phonePref
     *
     * Enables a preference to be indicated for telephone information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPhonePref($index)
    {
        return isset($this->phonePref[$index]);
    }

    /**
     * unset phonePref
     *
     * Enables a preference to be indicated for telephone information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPhonePref($index)
    {
        unset($this->phonePref[$index]);
    }

    /**
     * Gets as phonePref
     *
     * Enables a preference to be indicated for telephone information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PhonePrefType[]
     */
    public function getPhonePref()
    {
        return $this->phonePref;
    }

    /**
     * Sets a new phonePref
     *
     * Enables a preference to be indicated for telephone information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PhonePrefType[] $phonePref
     * @return self
     */
    public function setPhonePref(array $phonePref)
    {
        $this->phonePref = $phonePref;

        return $this;
    }

    /**
     * Adds as addressPref
     *
     * Enables a preference to be indicated for address information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AddressPrefType $addressPref
     */
    public function addToAddressPref(\Davispeixoto\OpenTravelAlliance\AddressPrefType $addressPref)
    {
        $this->addressPref[] = $addressPref;

        return $this;
    }

    /**
     * isset addressPref
     *
     * Enables a preference to be indicated for address information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddressPref($index)
    {
        return isset($this->addressPref[$index]);
    }

    /**
     * unset addressPref
     *
     * Enables a preference to be indicated for address information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddressPref($index)
    {
        unset($this->addressPref[$index]);
    }

    /**
     * Gets as addressPref
     *
     * Enables a preference to be indicated for address information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressPrefType[]
     */
    public function getAddressPref()
    {
        return $this->addressPref;
    }

    /**
     * Sets a new addressPref
     *
     * Enables a preference to be indicated for address information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressPrefType[] $addressPref
     * @return self
     */
    public function setAddressPref(array $addressPref)
    {
        $this->addressPref = $addressPref;

        return $this;
    }

    /**
     * Adds as paymentFormPref
     *
     * Enables a preference to be indicated for form of payment.
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
     * Enables a preference to be indicated for form of payment.
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
     * Enables a preference to be indicated for form of payment.
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
     * Enables a preference to be indicated for form of payment.
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
     * Enables a preference to be indicated for form of payment.
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
     * Adds as interestPref
     *
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\InterestPrefType $interestPref
     */
    public function addToInterestPref(\Davispeixoto\OpenTravelAlliance\InterestPrefType $interestPref)
    {
        $this->interestPref[] = $interestPref;

        return $this;
    }

    /**
     * isset interestPref
     *
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInterestPref($index)
    {
        return isset($this->interestPref[$index]);
    }

    /**
     * unset interestPref
     *
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInterestPref($index)
    {
        unset($this->interestPref[$index]);
    }

    /**
     * Gets as interestPref
     *
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @return \Davispeixoto\OpenTravelAlliance\InterestPrefType[]
     */
    public function getInterestPref()
    {
        return $this->interestPref;
    }

    /**
     * Sets a new interestPref
     *
     * Enables a preference to be indicated for a traveler's interests.
     *
     * @param \Davispeixoto\OpenTravelAlliance\InterestPrefType[] $interestPref
     * @return self
     */
    public function setInterestPref(array $interestPref)
    {
        $this->interestPref = $interestPref;

        return $this;
    }

    /**
     * Adds as insurancePref
     *
     * Enables a preference to be indicated for insurance.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\InsurancePrefType $insurancePref
     */
    public function addToInsurancePref(\Davispeixoto\OpenTravelAlliance\InsurancePrefType $insurancePref)
    {
        $this->insurancePref[] = $insurancePref;

        return $this;
    }

    /**
     * isset insurancePref
     *
     * Enables a preference to be indicated for insurance.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInsurancePref($index)
    {
        return isset($this->insurancePref[$index]);
    }

    /**
     * unset insurancePref
     *
     * Enables a preference to be indicated for insurance.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInsurancePref($index)
    {
        unset($this->insurancePref[$index]);
    }

    /**
     * Gets as insurancePref
     *
     * Enables a preference to be indicated for insurance.
     *
     * @return \Davispeixoto\OpenTravelAlliance\InsurancePrefType[]
     */
    public function getInsurancePref()
    {
        return $this->insurancePref;
    }

    /**
     * Sets a new insurancePref
     *
     * Enables a preference to be indicated for insurance.
     *
     * @param \Davispeixoto\OpenTravelAlliance\InsurancePrefType[] $insurancePref
     * @return self
     */
    public function setInsurancePref(array $insurancePref)
    {
        $this->insurancePref = $insurancePref;

        return $this;
    }

    /**
     * Adds as seatingPref
     *
     * Enables a preference to be indicated for seating.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatingPrefType $seatingPref
     */
    public function addToSeatingPref(\Davispeixoto\OpenTravelAlliance\SeatingPrefType $seatingPref)
    {
        $this->seatingPref[] = $seatingPref;

        return $this;
    }

    /**
     * isset seatingPref
     *
     * Enables a preference to be indicated for seating.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatingPref($index)
    {
        return isset($this->seatingPref[$index]);
    }

    /**
     * unset seatingPref
     *
     * Enables a preference to be indicated for seating.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatingPref($index)
    {
        unset($this->seatingPref[$index]);
    }

    /**
     * Gets as seatingPref
     *
     * Enables a preference to be indicated for seating.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatingPrefType[]
     */
    public function getSeatingPref()
    {
        return $this->seatingPref;
    }

    /**
     * Sets a new seatingPref
     *
     * Enables a preference to be indicated for seating.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatingPrefType[] $seatingPref
     * @return self
     */
    public function setSeatingPref(array $seatingPref)
    {
        $this->seatingPref = $seatingPref;

        return $this;
    }

    /**
     * Adds as ticketDistribPref
     *
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TicketDistribPrefType $ticketDistribPref
     */
    public function addToTicketDistribPref(\Davispeixoto\OpenTravelAlliance\TicketDistribPrefType $ticketDistribPref)
    {
        $this->ticketDistribPref[] = $ticketDistribPref;

        return $this;
    }

    /**
     * isset ticketDistribPref
     *
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketDistribPref($index)
    {
        return isset($this->ticketDistribPref[$index]);
    }

    /**
     * unset ticketDistribPref
     *
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketDistribPref($index)
    {
        unset($this->ticketDistribPref[$index]);
    }

    /**
     * Gets as ticketDistribPref
     *
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TicketDistribPrefType[]
     */
    public function getTicketDistribPref()
    {
        return $this->ticketDistribPref;
    }

    /**
     * Sets a new ticketDistribPref
     *
     * Enables a preference to be indicated for a method of ticket distribution.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TicketDistribPrefType[]
     * $ticketDistribPref
     * @return self
     */
    public function setTicketDistribPref(array $ticketDistribPref)
    {
        $this->ticketDistribPref = $ticketDistribPref;

        return $this;
    }

    /**
     * Adds as mediaEntertainPref
     *
     * Enables a preference to be indicated for media and entertainment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType
     * $mediaEntertainPref
     */
    public function addToMediaEntertainPref(\Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType $mediaEntertainPref)
    {
        $this->mediaEntertainPref[] = $mediaEntertainPref;

        return $this;
    }

    /**
     * isset mediaEntertainPref
     *
     * Enables a preference to be indicated for media and entertainment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMediaEntertainPref($index)
    {
        return isset($this->mediaEntertainPref[$index]);
    }

    /**
     * unset mediaEntertainPref
     *
     * Enables a preference to be indicated for media and entertainment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMediaEntertainPref($index)
    {
        unset($this->mediaEntertainPref[$index]);
    }

    /**
     * Gets as mediaEntertainPref
     *
     * Enables a preference to be indicated for media and entertainment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType[]
     */
    public function getMediaEntertainPref()
    {
        return $this->mediaEntertainPref;
    }

    /**
     * Sets a new mediaEntertainPref
     *
     * Enables a preference to be indicated for media and entertainment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType[]
     * $mediaEntertainPref
     * @return self
     */
    public function setMediaEntertainPref(array $mediaEntertainPref)
    {
        $this->mediaEntertainPref = $mediaEntertainPref;

        return $this;
    }

    /**
     * Adds as petInfoPref
     *
     * Enables a preference to be indicated for pet information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PetInfoPrefType $petInfoPref
     */
    public function addToPetInfoPref(\Davispeixoto\OpenTravelAlliance\PetInfoPrefType $petInfoPref)
    {
        $this->petInfoPref[] = $petInfoPref;

        return $this;
    }

    /**
     * isset petInfoPref
     *
     * Enables a preference to be indicated for pet information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPetInfoPref($index)
    {
        return isset($this->petInfoPref[$index]);
    }

    /**
     * unset petInfoPref
     *
     * Enables a preference to be indicated for pet information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPetInfoPref($index)
    {
        unset($this->petInfoPref[$index]);
    }

    /**
     * Gets as petInfoPref
     *
     * Enables a preference to be indicated for pet information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PetInfoPrefType[]
     */
    public function getPetInfoPref()
    {
        return $this->petInfoPref;
    }

    /**
     * Sets a new petInfoPref
     *
     * Enables a preference to be indicated for pet information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PetInfoPrefType[] $petInfoPref
     * @return self
     */
    public function setPetInfoPref(array $petInfoPref)
    {
        $this->petInfoPref = $petInfoPref;

        return $this;
    }

    /**
     * Adds as mealPref
     *
     * Enables a preference to be indicated for food and beverage.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MealPrefType $mealPref
     */
    public function addToMealPref(\Davispeixoto\OpenTravelAlliance\MealPrefType $mealPref)
    {
        $this->mealPref[] = $mealPref;

        return $this;
    }

    /**
     * isset mealPref
     *
     * Enables a preference to be indicated for food and beverage.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMealPref($index)
    {
        return isset($this->mealPref[$index]);
    }

    /**
     * unset mealPref
     *
     * Enables a preference to be indicated for food and beverage.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMealPref($index)
    {
        unset($this->mealPref[$index]);
    }

    /**
     * Gets as mealPref
     *
     * Enables a preference to be indicated for food and beverage.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MealPrefType[]
     */
    public function getMealPref()
    {
        return $this->mealPref;
    }

    /**
     * Sets a new mealPref
     *
     * Enables a preference to be indicated for food and beverage.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MealPrefType[] $mealPref
     * @return self
     */
    public function setMealPref(array $mealPref)
    {
        $this->mealPref = $mealPref;

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
     * Adds as relatedTravelerPref
     *
     * Enables a preference to be indicated for a related traveler.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RelatedTravelerPrefType
     * $relatedTravelerPref
     */
    public function addToRelatedTravelerPref(
        \Davispeixoto\OpenTravelAlliance\RelatedTravelerPrefType $relatedTravelerPref
    ) {
        $this->relatedTravelerPref[] = $relatedTravelerPref;

        return $this;
    }

    /**
     * isset relatedTravelerPref
     *
     * Enables a preference to be indicated for a related traveler.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelatedTravelerPref($index)
    {
        return isset($this->relatedTravelerPref[$index]);
    }

    /**
     * unset relatedTravelerPref
     *
     * Enables a preference to be indicated for a related traveler.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelatedTravelerPref($index)
    {
        unset($this->relatedTravelerPref[$index]);
    }

    /**
     * Gets as relatedTravelerPref
     *
     * Enables a preference to be indicated for a related traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RelatedTravelerPrefType[]
     */
    public function getRelatedTravelerPref()
    {
        return $this->relatedTravelerPref;
    }

    /**
     * Sets a new relatedTravelerPref
     *
     * Enables a preference to be indicated for a related traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RelatedTravelerPrefType[]
     * $relatedTravelerPref
     * @return self
     */
    public function setRelatedTravelerPref(array $relatedTravelerPref)
    {
        $this->relatedTravelerPref = $relatedTravelerPref;

        return $this;
    }

    /**
     * Adds as contactPref
     *
     * The traveller's preferred means of being contacted.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommonPrefType\ContactPrefAType
     * $contactPref
     */
    public function addToContactPref(\Davispeixoto\OpenTravelAlliance\CommonPrefType\ContactPrefAType $contactPref)
    {
        $this->contactPref[] = $contactPref;

        return $this;
    }

    /**
     * isset contactPref
     *
     * The traveller's preferred means of being contacted.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactPref($index)
    {
        return isset($this->contactPref[$index]);
    }

    /**
     * unset contactPref
     *
     * The traveller's preferred means of being contacted.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactPref($index)
    {
        unset($this->contactPref[$index]);
    }

    /**
     * Gets as contactPref
     *
     * The traveller's preferred means of being contacted.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommonPrefType\ContactPrefAType[]
     */
    public function getContactPref()
    {
        return $this->contactPref;
    }

    /**
     * Sets a new contactPref
     *
     * The traveller's preferred means of being contacted.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommonPrefType\ContactPrefAType[]
     * $contactPref
     * @return self
     */
    public function setContactPref(array $contactPref)
    {
        $this->contactPref = $contactPref;

        return $this;
    }

    /**
     * Gets as employeeLevelInfo
     *
     * Defines the category of the traveler and the purpose of the trip for which these
     * preferences apply. Typically used for company profiles.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmployeeInfoType
     */
    public function getEmployeeLevelInfo()
    {
        return $this->employeeLevelInfo;
    }

    /**
     * Sets a new employeeLevelInfo
     *
     * Defines the category of the traveler and the purpose of the trip for which these
     * preferences apply. Typically used for company profiles.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmployeeInfoType $employeeLevelInfo
     * @return self
     */
    public function setEmployeeLevelInfo(\Davispeixoto\OpenTravelAlliance\EmployeeInfoType $employeeLevelInfo)
    {
        $this->employeeLevelInfo = $employeeLevelInfo;

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


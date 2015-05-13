<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing HotelPrefType
 *
 * These are the hotel preference elements used on an instance of a profile.
 * XSD Type: HotelPrefType
 */
class HotelPrefType
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
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Code identifying preferred hotel rate plan for this travel situation
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * Category of hotel guest. Refer to OpenTravel Code List Hotel Guest Type (GUE).
     *
     * @property string $hotelGuestType
     */
    private $hotelGuestType = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType[]
     * $paymentFormPref
     */
    private $paymentFormPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[] $hotelChainPref
     */
    private $hotelChainPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PropertyNamePrefType[]
     * $propertyNamePref
     */
    private $propertyNamePref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PropertyLocationPrefType[]
     * $propertyLocationPref
     */
    private $propertyLocationPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PropertyTypePrefType[]
     * $propertyTypePref
     */
    private $propertyTypePref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PropertyClassPrefType[]
     * $propertyClassPref
     */
    private $propertyClassPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PropertyAmenityPrefType[]
     * $propertyAmenityPref
     */
    private $propertyAmenityPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[]
     * $roomAmenityPref
     */
    private $roomAmenityPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\RoomLocationPrefType[]
     * $roomLocationPref
     */
    private $roomLocationPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\BedTypePrefType[] $bedTypePref
     */
    private $bedTypePref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\FoodSrvcPrefType[] $foodSrvcPref
     */
    private $foodSrvcPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType[]
     * $mediaEntertainPref
     */
    private $mediaEntertainPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PetInfoPrefType[] $petInfoPref
     */
    private $petInfoPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\MealPrefType[] $mealPref
     */
    private $mealPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\RecreationSrvcPrefType[]
     * $recreationSrvcPref
     */
    private $recreationSrvcPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\BusinessSrvcPrefType[]
     * $businessSrvcPref
     */
    private $businessSrvcPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PersonalSrvcPrefType[]
     * $personalSrvcPref
     */
    private $personalSrvcPref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\SecurityFeaturePrefType[]
     * $securityFeaturePref
     */
    private $securityFeaturePref = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PhysChallFeaturePrefType[]
     * $physChallFeaturePref
     */
    private $physChallFeaturePref = null;

    /**
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
     * Gets as ratePlanCode
     *
     * Code identifying preferred hotel rate plan for this travel situation
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * Code identifying preferred hotel rate plan for this travel situation
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;

        return $this;
    }

    /**
     * Gets as hotelGuestType
     *
     * Category of hotel guest. Refer to OpenTravel Code List Hotel Guest Type (GUE).
     *
     * @return string
     */
    public function getHotelGuestType()
    {
        return $this->hotelGuestType;
    }

    /**
     * Sets a new hotelGuestType
     *
     * Category of hotel guest. Refer to OpenTravel Code List Hotel Guest Type (GUE).
     *
     * @param string $hotelGuestType
     * @return self
     */
    public function setHotelGuestType($hotelGuestType)
    {
        $this->hotelGuestType = $hotelGuestType;

        return $this;
    }

    /**
     * Adds as loyaltyPref
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
     * @return \Davispeixoto\OpenTravelAlliance\LoyaltyPrefType[]
     */
    public function getLoyaltyPref()
    {
        return $this->loyaltyPref;
    }

    /**
     * Sets a new loyaltyPref
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
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormPrefType[]
     */
    public function getPaymentFormPref()
    {
        return $this->paymentFormPref;
    }

    /**
     * Sets a new paymentFormPref
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
     * Adds as hotelChainPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $hotelChainPref
     */
    public function addToHotelChainPref(\Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $hotelChainPref)
    {
        $this->hotelChainPref[] = $hotelChainPref;

        return $this;
    }

    /**
     * isset hotelChainPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelChainPref($index)
    {
        return isset($this->hotelChainPref[$index]);
    }

    /**
     * unset hotelChainPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelChainPref($index)
    {
        unset($this->hotelChainPref[$index]);
    }

    /**
     * Gets as hotelChainPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[]
     */
    public function getHotelChainPref()
    {
        return $this->hotelChainPref;
    }

    /**
     * Sets a new hotelChainPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[] $hotelChainPref
     * @return self
     */
    public function setHotelChainPref(array $hotelChainPref)
    {
        $this->hotelChainPref = $hotelChainPref;

        return $this;
    }

    /**
     * Adds as propertyNamePref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PropertyNamePrefType $propertyNamePref
     */
    public function addToPropertyNamePref(\Davispeixoto\OpenTravelAlliance\PropertyNamePrefType $propertyNamePref)
    {
        $this->propertyNamePref[] = $propertyNamePref;

        return $this;
    }

    /**
     * isset propertyNamePref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPropertyNamePref($index)
    {
        return isset($this->propertyNamePref[$index]);
    }

    /**
     * unset propertyNamePref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPropertyNamePref($index)
    {
        unset($this->propertyNamePref[$index]);
    }

    /**
     * Gets as propertyNamePref
     *
     * @return \Davispeixoto\OpenTravelAlliance\PropertyNamePrefType[]
     */
    public function getPropertyNamePref()
    {
        return $this->propertyNamePref;
    }

    /**
     * Sets a new propertyNamePref
     *
     * @param \Davispeixoto\OpenTravelAlliance\PropertyNamePrefType[] $propertyNamePref
     * @return self
     */
    public function setPropertyNamePref(array $propertyNamePref)
    {
        $this->propertyNamePref = $propertyNamePref;

        return $this;
    }

    /**
     * Adds as propertyLocationPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PropertyLocationPrefType
     * $propertyLocationPref
     */
    public function addToPropertyLocationPref(
        \Davispeixoto\OpenTravelAlliance\PropertyLocationPrefType $propertyLocationPref
    ) {
        $this->propertyLocationPref[] = $propertyLocationPref;

        return $this;
    }

    /**
     * isset propertyLocationPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPropertyLocationPref($index)
    {
        return isset($this->propertyLocationPref[$index]);
    }

    /**
     * unset propertyLocationPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPropertyLocationPref($index)
    {
        unset($this->propertyLocationPref[$index]);
    }

    /**
     * Gets as propertyLocationPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\PropertyLocationPrefType[]
     */
    public function getPropertyLocationPref()
    {
        return $this->propertyLocationPref;
    }

    /**
     * Sets a new propertyLocationPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\PropertyLocationPrefType[]
     * $propertyLocationPref
     * @return self
     */
    public function setPropertyLocationPref(array $propertyLocationPref)
    {
        $this->propertyLocationPref = $propertyLocationPref;

        return $this;
    }

    /**
     * Adds as propertyTypePref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PropertyTypePrefType $propertyTypePref
     */
    public function addToPropertyTypePref(\Davispeixoto\OpenTravelAlliance\PropertyTypePrefType $propertyTypePref)
    {
        $this->propertyTypePref[] = $propertyTypePref;

        return $this;
    }

    /**
     * isset propertyTypePref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPropertyTypePref($index)
    {
        return isset($this->propertyTypePref[$index]);
    }

    /**
     * unset propertyTypePref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPropertyTypePref($index)
    {
        unset($this->propertyTypePref[$index]);
    }

    /**
     * Gets as propertyTypePref
     *
     * @return \Davispeixoto\OpenTravelAlliance\PropertyTypePrefType[]
     */
    public function getPropertyTypePref()
    {
        return $this->propertyTypePref;
    }

    /**
     * Sets a new propertyTypePref
     *
     * @param \Davispeixoto\OpenTravelAlliance\PropertyTypePrefType[] $propertyTypePref
     * @return self
     */
    public function setPropertyTypePref(array $propertyTypePref)
    {
        $this->propertyTypePref = $propertyTypePref;

        return $this;
    }

    /**
     * Adds as propertyClassPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PropertyClassPrefType $propertyClassPref
     */
    public function addToPropertyClassPref(\Davispeixoto\OpenTravelAlliance\PropertyClassPrefType $propertyClassPref)
    {
        $this->propertyClassPref[] = $propertyClassPref;

        return $this;
    }

    /**
     * isset propertyClassPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPropertyClassPref($index)
    {
        return isset($this->propertyClassPref[$index]);
    }

    /**
     * unset propertyClassPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPropertyClassPref($index)
    {
        unset($this->propertyClassPref[$index]);
    }

    /**
     * Gets as propertyClassPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\PropertyClassPrefType[]
     */
    public function getPropertyClassPref()
    {
        return $this->propertyClassPref;
    }

    /**
     * Sets a new propertyClassPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\PropertyClassPrefType[]
     * $propertyClassPref
     * @return self
     */
    public function setPropertyClassPref(array $propertyClassPref)
    {
        $this->propertyClassPref = $propertyClassPref;

        return $this;
    }

    /**
     * Adds as propertyAmenityPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PropertyAmenityPrefType
     * $propertyAmenityPref
     */
    public function addToPropertyAmenityPref(
        \Davispeixoto\OpenTravelAlliance\PropertyAmenityPrefType $propertyAmenityPref
    ) {
        $this->propertyAmenityPref[] = $propertyAmenityPref;

        return $this;
    }

    /**
     * isset propertyAmenityPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPropertyAmenityPref($index)
    {
        return isset($this->propertyAmenityPref[$index]);
    }

    /**
     * unset propertyAmenityPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPropertyAmenityPref($index)
    {
        unset($this->propertyAmenityPref[$index]);
    }

    /**
     * Gets as propertyAmenityPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\PropertyAmenityPrefType[]
     */
    public function getPropertyAmenityPref()
    {
        return $this->propertyAmenityPref;
    }

    /**
     * Sets a new propertyAmenityPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\PropertyAmenityPrefType[]
     * $propertyAmenityPref
     * @return self
     */
    public function setPropertyAmenityPref(array $propertyAmenityPref)
    {
        $this->propertyAmenityPref = $propertyAmenityPref;

        return $this;
    }

    /**
     * Adds as roomAmenityPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType $roomAmenityPref
     */
    public function addToRoomAmenityPref(\Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType $roomAmenityPref)
    {
        $this->roomAmenityPref[] = $roomAmenityPref;

        return $this;
    }

    /**
     * isset roomAmenityPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomAmenityPref($index)
    {
        return isset($this->roomAmenityPref[$index]);
    }

    /**
     * unset roomAmenityPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomAmenityPref($index)
    {
        unset($this->roomAmenityPref[$index]);
    }

    /**
     * Gets as roomAmenityPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[]
     */
    public function getRoomAmenityPref()
    {
        return $this->roomAmenityPref;
    }

    /**
     * Sets a new roomAmenityPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomAmenityPrefType[] $roomAmenityPref
     * @return self
     */
    public function setRoomAmenityPref(array $roomAmenityPref)
    {
        $this->roomAmenityPref = $roomAmenityPref;

        return $this;
    }

    /**
     * Adds as roomLocationPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomLocationPrefType $roomLocationPref
     */
    public function addToRoomLocationPref(\Davispeixoto\OpenTravelAlliance\RoomLocationPrefType $roomLocationPref)
    {
        $this->roomLocationPref[] = $roomLocationPref;

        return $this;
    }

    /**
     * isset roomLocationPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomLocationPref($index)
    {
        return isset($this->roomLocationPref[$index]);
    }

    /**
     * unset roomLocationPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomLocationPref($index)
    {
        unset($this->roomLocationPref[$index]);
    }

    /**
     * Gets as roomLocationPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomLocationPrefType[]
     */
    public function getRoomLocationPref()
    {
        return $this->roomLocationPref;
    }

    /**
     * Sets a new roomLocationPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomLocationPrefType[] $roomLocationPref
     * @return self
     */
    public function setRoomLocationPref(array $roomLocationPref)
    {
        $this->roomLocationPref = $roomLocationPref;

        return $this;
    }

    /**
     * Adds as bedTypePref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BedTypePrefType $bedTypePref
     */
    public function addToBedTypePref(\Davispeixoto\OpenTravelAlliance\BedTypePrefType $bedTypePref)
    {
        $this->bedTypePref[] = $bedTypePref;

        return $this;
    }

    /**
     * isset bedTypePref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBedTypePref($index)
    {
        return isset($this->bedTypePref[$index]);
    }

    /**
     * unset bedTypePref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBedTypePref($index)
    {
        unset($this->bedTypePref[$index]);
    }

    /**
     * Gets as bedTypePref
     *
     * @return \Davispeixoto\OpenTravelAlliance\BedTypePrefType[]
     */
    public function getBedTypePref()
    {
        return $this->bedTypePref;
    }

    /**
     * Sets a new bedTypePref
     *
     * @param \Davispeixoto\OpenTravelAlliance\BedTypePrefType[] $bedTypePref
     * @return self
     */
    public function setBedTypePref(array $bedTypePref)
    {
        $this->bedTypePref = $bedTypePref;

        return $this;
    }

    /**
     * Adds as foodSrvcPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FoodSrvcPrefType $foodSrvcPref
     */
    public function addToFoodSrvcPref(\Davispeixoto\OpenTravelAlliance\FoodSrvcPrefType $foodSrvcPref)
    {
        $this->foodSrvcPref[] = $foodSrvcPref;

        return $this;
    }

    /**
     * isset foodSrvcPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFoodSrvcPref($index)
    {
        return isset($this->foodSrvcPref[$index]);
    }

    /**
     * unset foodSrvcPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFoodSrvcPref($index)
    {
        unset($this->foodSrvcPref[$index]);
    }

    /**
     * Gets as foodSrvcPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\FoodSrvcPrefType[]
     */
    public function getFoodSrvcPref()
    {
        return $this->foodSrvcPref;
    }

    /**
     * Sets a new foodSrvcPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\FoodSrvcPrefType[] $foodSrvcPref
     * @return self
     */
    public function setFoodSrvcPref(array $foodSrvcPref)
    {
        $this->foodSrvcPref = $foodSrvcPref;

        return $this;
    }

    /**
     * Adds as mediaEntertainPref
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
     * @return \Davispeixoto\OpenTravelAlliance\MediaEntertainPrefType[]
     */
    public function getMediaEntertainPref()
    {
        return $this->mediaEntertainPref;
    }

    /**
     * Sets a new mediaEntertainPref
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
     * @return \Davispeixoto\OpenTravelAlliance\PetInfoPrefType[]
     */
    public function getPetInfoPref()
    {
        return $this->petInfoPref;
    }

    /**
     * Sets a new petInfoPref
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
     * @return \Davispeixoto\OpenTravelAlliance\MealPrefType[]
     */
    public function getMealPref()
    {
        return $this->mealPref;
    }

    /**
     * Sets a new mealPref
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
     * Adds as recreationSrvcPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RecreationSrvcPrefType
     * $recreationSrvcPref
     */
    public function addToRecreationSrvcPref(\Davispeixoto\OpenTravelAlliance\RecreationSrvcPrefType $recreationSrvcPref)
    {
        $this->recreationSrvcPref[] = $recreationSrvcPref;

        return $this;
    }

    /**
     * isset recreationSrvcPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecreationSrvcPref($index)
    {
        return isset($this->recreationSrvcPref[$index]);
    }

    /**
     * unset recreationSrvcPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecreationSrvcPref($index)
    {
        unset($this->recreationSrvcPref[$index]);
    }

    /**
     * Gets as recreationSrvcPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\RecreationSrvcPrefType[]
     */
    public function getRecreationSrvcPref()
    {
        return $this->recreationSrvcPref;
    }

    /**
     * Sets a new recreationSrvcPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\RecreationSrvcPrefType[]
     * $recreationSrvcPref
     * @return self
     */
    public function setRecreationSrvcPref(array $recreationSrvcPref)
    {
        $this->recreationSrvcPref = $recreationSrvcPref;

        return $this;
    }

    /**
     * Adds as businessSrvcPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BusinessSrvcPrefType $businessSrvcPref
     */
    public function addToBusinessSrvcPref(\Davispeixoto\OpenTravelAlliance\BusinessSrvcPrefType $businessSrvcPref)
    {
        $this->businessSrvcPref[] = $businessSrvcPref;

        return $this;
    }

    /**
     * isset businessSrvcPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBusinessSrvcPref($index)
    {
        return isset($this->businessSrvcPref[$index]);
    }

    /**
     * unset businessSrvcPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBusinessSrvcPref($index)
    {
        unset($this->businessSrvcPref[$index]);
    }

    /**
     * Gets as businessSrvcPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\BusinessSrvcPrefType[]
     */
    public function getBusinessSrvcPref()
    {
        return $this->businessSrvcPref;
    }

    /**
     * Sets a new businessSrvcPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\BusinessSrvcPrefType[] $businessSrvcPref
     * @return self
     */
    public function setBusinessSrvcPref(array $businessSrvcPref)
    {
        $this->businessSrvcPref = $businessSrvcPref;

        return $this;
    }

    /**
     * Adds as personalSrvcPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PersonalSrvcPrefType $personalSrvcPref
     */
    public function addToPersonalSrvcPref(\Davispeixoto\OpenTravelAlliance\PersonalSrvcPrefType $personalSrvcPref)
    {
        $this->personalSrvcPref[] = $personalSrvcPref;

        return $this;
    }

    /**
     * isset personalSrvcPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPersonalSrvcPref($index)
    {
        return isset($this->personalSrvcPref[$index]);
    }

    /**
     * unset personalSrvcPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPersonalSrvcPref($index)
    {
        unset($this->personalSrvcPref[$index]);
    }

    /**
     * Gets as personalSrvcPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonalSrvcPrefType[]
     */
    public function getPersonalSrvcPref()
    {
        return $this->personalSrvcPref;
    }

    /**
     * Sets a new personalSrvcPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonalSrvcPrefType[] $personalSrvcPref
     * @return self
     */
    public function setPersonalSrvcPref(array $personalSrvcPref)
    {
        $this->personalSrvcPref = $personalSrvcPref;

        return $this;
    }

    /**
     * Adds as securityFeaturePref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SecurityFeaturePrefType
     * $securityFeaturePref
     */
    public function addToSecurityFeaturePref(
        \Davispeixoto\OpenTravelAlliance\SecurityFeaturePrefType $securityFeaturePref
    ) {
        $this->securityFeaturePref[] = $securityFeaturePref;

        return $this;
    }

    /**
     * isset securityFeaturePref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSecurityFeaturePref($index)
    {
        return isset($this->securityFeaturePref[$index]);
    }

    /**
     * unset securityFeaturePref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSecurityFeaturePref($index)
    {
        unset($this->securityFeaturePref[$index]);
    }

    /**
     * Gets as securityFeaturePref
     *
     * @return \Davispeixoto\OpenTravelAlliance\SecurityFeaturePrefType[]
     */
    public function getSecurityFeaturePref()
    {
        return $this->securityFeaturePref;
    }

    /**
     * Sets a new securityFeaturePref
     *
     * @param \Davispeixoto\OpenTravelAlliance\SecurityFeaturePrefType[]
     * $securityFeaturePref
     * @return self
     */
    public function setSecurityFeaturePref(array $securityFeaturePref)
    {
        $this->securityFeaturePref = $securityFeaturePref;

        return $this;
    }

    /**
     * Adds as physChallFeaturePref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PhysChallFeaturePrefType
     * $physChallFeaturePref
     */
    public function addToPhysChallFeaturePref(
        \Davispeixoto\OpenTravelAlliance\PhysChallFeaturePrefType $physChallFeaturePref
    ) {
        $this->physChallFeaturePref[] = $physChallFeaturePref;

        return $this;
    }

    /**
     * isset physChallFeaturePref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPhysChallFeaturePref($index)
    {
        return isset($this->physChallFeaturePref[$index]);
    }

    /**
     * unset physChallFeaturePref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPhysChallFeaturePref($index)
    {
        unset($this->physChallFeaturePref[$index]);
    }

    /**
     * Gets as physChallFeaturePref
     *
     * @return \Davispeixoto\OpenTravelAlliance\PhysChallFeaturePrefType[]
     */
    public function getPhysChallFeaturePref()
    {
        return $this->physChallFeaturePref;
    }

    /**
     * Sets a new physChallFeaturePref
     *
     * @param \Davispeixoto\OpenTravelAlliance\PhysChallFeaturePrefType[]
     * $physChallFeaturePref
     * @return self
     */
    public function setPhysChallFeaturePref(array $physChallFeaturePref)
    {
        $this->physChallFeaturePref = $physChallFeaturePref;

        return $this;
    }

    /**
     * Adds as specRequestPref
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
     * @return \Davispeixoto\OpenTravelAlliance\SpecRequestPrefType[]
     */
    public function getSpecRequestPref()
    {
        return $this->specRequestPref;
    }

    /**
     * Sets a new specRequestPref
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


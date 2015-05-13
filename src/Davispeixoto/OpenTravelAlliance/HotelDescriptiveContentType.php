<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing HotelDescriptiveContentType
 *
 * The HotelDescriptiveContent element contains the descriptive information about a
 * hotel property.
 * XSD Type: HotelDescriptiveContentType
 */
class HotelDescriptiveContentType
{

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Identification of the requested language to be used for the hotel descriptive
     * information. ISO standard for human-readable languages.
     *
     * @property string $languageCode
     */
    private $languageCode = null;

    /**
     * This is the numeric value associated with the measurement.
     *
     * @property float $unitOfMeasureQuantity
     */
    private $unitOfMeasureQuantity = null;

    /**
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @property string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * Describes the local time zone in which the hotel is located. This could include
     * additional information regarding time zones (e.g., Daylight Saving Time
     * observed), a proprietary code, the difference between the local time and GMT.
     *
     * @property string $timeZone
     */
    private $timeZone = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * Provides the unit of measure in which distance is provided in this message.
     * Refer to OpenTravel Code List Unit of Measure (UOM).
     *
     * @property string $distanceUnitOfMeasureCode
     */
    private $distanceUnitOfMeasureCode = null;

    /**
     * Provides the unit of measure in which area is provided in this message. Refer to
     * OpenTravel Code List Unit of Measure (UOM).
     *
     * @property string $areaUnitOfMeasureCode
     */
    private $areaUnitOfMeasureCode = null;

    /**
     * Provides the unit of measure in which weight is provided in this message. Refer
     * to OpenTravel Code List Unit of Measure (UOM).
     *
     * @property string $weightUnitOfMeasureCode
     */
    private $weightUnitOfMeasureCode = null;

    /**
     * Descriptive Content Reference ID.Example: 1Note: This is a unique reference ID
     * for one set of descriptive information that is set here and may be referenced
     * elsewhere in this message.
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place
     * holder (RPH) is a unique ID assigned to an instance in a collection of like
     * items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * A collection of destination systems codes.
     *
     * @property string[] $destinationSystemsCode
     */
    private $destinationSystemsCode = null;

    /**
     * Contains descriptive information about a hotel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelInfoType $hotelInfo
     */
    private $hotelInfo = null;

    /**
     * Provides information pertaining to the hotel facitilty itself.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FacilityInfoType $facilityInfo
     */
    private $facilityInfo = null;

    /**
     * A collection of policy information as it applies to the hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PoliciesAType
     * $policies
     */
    private $policies = null;

    /**
     * Provides information on area attractions, recreations and reference points.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AreaInfoType $areaInfo
     */
    private $areaInfo = null;

    /**
     * Provides information regarding affiliations, loyalty programs and award ratings.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AffiliationInfoType $affiliationInfo
     */
    private $affiliationInfo = null;

    /**
     * Multimedia information about a collection of multimedia objects.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Provides contact information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactInfoRootType[] $contactInfos
     */
    private $contactInfos = null;

    /**
     * This allows for information for GDS's to be specified.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GDSInfoType $gDSInfo
     */
    private $gDSInfo = null;

    /**
     * Collection for viewerships.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType[]
     * $viewerships
     */
    private $viewerships = null;

    /**
     * Collection of effective periods.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\EffectivePeriodsAType\EffectivePeriodAType[]
     * $effectivePeriods
     */
    private $effectivePeriods = null;

    /**
     * A collection of packages and promotions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PromotionsAType\PromotionAType[]
     * $promotions
     */
    private $promotions = null;

    /**
     * Describes room block information accepted by the hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\RoomBlocksAType
     * $roomBlocks
     */
    private $roomBlocks = null;

    /**
     * Property environmental impact and green program/ initiative information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType
     * $environmentalImpact
     */
    private $environmentalImpact = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as languageCode
     *
     * Identification of the requested language to be used for the hotel descriptive
     * information. ISO standard for human-readable languages.
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * Identification of the requested language to be used for the hotel descriptive
     * information. ISO standard for human-readable languages.
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Gets as unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @return float
     */
    public function getUnitOfMeasureQuantity()
    {
        return $this->unitOfMeasureQuantity;
    }

    /**
     * Sets a new unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @param float $unitOfMeasureQuantity
     * @return self
     */
    public function setUnitOfMeasureQuantity($unitOfMeasureQuantity)
    {
        $this->unitOfMeasureQuantity = $unitOfMeasureQuantity;

        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as timeZone
     *
     * Describes the local time zone in which the hotel is located. This could include
     * additional information regarding time zones (e.g., Daylight Saving Time
     * observed), a proprietary code, the difference between the local time and GMT.
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Sets a new timeZone
     *
     * Describes the local time zone in which the hotel is located. This could include
     * additional information regarding time zones (e.g., Daylight Saving Time
     * observed), a proprietary code, the difference between the local time and GMT.
     *
     * @param string $timeZone
     * @return self
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as distanceUnitOfMeasureCode
     *
     * Provides the unit of measure in which distance is provided in this message.
     * Refer to OpenTravel Code List Unit of Measure (UOM).
     *
     * @return string
     */
    public function getDistanceUnitOfMeasureCode()
    {
        return $this->distanceUnitOfMeasureCode;
    }

    /**
     * Sets a new distanceUnitOfMeasureCode
     *
     * Provides the unit of measure in which distance is provided in this message.
     * Refer to OpenTravel Code List Unit of Measure (UOM).
     *
     * @param string $distanceUnitOfMeasureCode
     * @return self
     */
    public function setDistanceUnitOfMeasureCode($distanceUnitOfMeasureCode)
    {
        $this->distanceUnitOfMeasureCode = $distanceUnitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as areaUnitOfMeasureCode
     *
     * Provides the unit of measure in which area is provided in this message. Refer to
     * OpenTravel Code List Unit of Measure (UOM).
     *
     * @return string
     */
    public function getAreaUnitOfMeasureCode()
    {
        return $this->areaUnitOfMeasureCode;
    }

    /**
     * Sets a new areaUnitOfMeasureCode
     *
     * Provides the unit of measure in which area is provided in this message. Refer to
     * OpenTravel Code List Unit of Measure (UOM).
     *
     * @param string $areaUnitOfMeasureCode
     * @return self
     */
    public function setAreaUnitOfMeasureCode($areaUnitOfMeasureCode)
    {
        $this->areaUnitOfMeasureCode = $areaUnitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as weightUnitOfMeasureCode
     *
     * Provides the unit of measure in which weight is provided in this message. Refer
     * to OpenTravel Code List Unit of Measure (UOM).
     *
     * @return string
     */
    public function getWeightUnitOfMeasureCode()
    {
        return $this->weightUnitOfMeasureCode;
    }

    /**
     * Sets a new weightUnitOfMeasureCode
     *
     * Provides the unit of measure in which weight is provided in this message. Refer
     * to OpenTravel Code List Unit of Measure (UOM).
     *
     * @param string $weightUnitOfMeasureCode
     * @return self
     */
    public function setWeightUnitOfMeasureCode($weightUnitOfMeasureCode)
    {
        $this->weightUnitOfMeasureCode = $weightUnitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * Descriptive Content Reference ID.Example: 1Note: This is a unique reference ID
     * for one set of descriptive information that is set here and may be referenced
     * elsewhere in this message.
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place
     * holder (RPH) is a unique ID assigned to an instance in a collection of like
     * items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Descriptive Content Reference ID.Example: 1Note: This is a unique reference ID
     * for one set of descriptive information that is set here and may be referenced
     * elsewhere in this message.
     * OpenTravel Best Practice: Using Reference Place Holders: The reference place
     * holder (RPH) is a unique ID assigned to an instance in a collection of like
     * items (e.g. used to assign a unique ID to each passenger in a list of
     * passengers. When referencing an RPH, the same RPH type is used to identify the
     * assigned unique ID in an element that references the item in a collection.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Adds as destinationSystemCode
     *
     * A collection of destination systems codes.
     *
     * @return self
     * @param string $destinationSystemCode
     */
    public function addToDestinationSystemsCode($destinationSystemCode)
    {
        $this->destinationSystemsCode[] = $destinationSystemCode;

        return $this;
    }

    /**
     * isset destinationSystemsCode
     *
     * A collection of destination systems codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestinationSystemsCode($index)
    {
        return isset($this->destinationSystemsCode[$index]);
    }

    /**
     * unset destinationSystemsCode
     *
     * A collection of destination systems codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestinationSystemsCode($index)
    {
        unset($this->destinationSystemsCode[$index]);
    }

    /**
     * Gets as destinationSystemsCode
     *
     * A collection of destination systems codes.
     *
     * @return string[]
     */
    public function getDestinationSystemsCode()
    {
        return $this->destinationSystemsCode;
    }

    /**
     * Sets a new destinationSystemsCode
     *
     * A collection of destination systems codes.
     *
     * @param string $destinationSystemsCode
     * @return self
     */
    public function setDestinationSystemsCode(array $destinationSystemsCode)
    {
        $this->destinationSystemsCode = $destinationSystemsCode;

        return $this;
    }

    /**
     * Gets as hotelInfo
     *
     * Contains descriptive information about a hotel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelInfoType
     */
    public function getHotelInfo()
    {
        return $this->hotelInfo;
    }

    /**
     * Sets a new hotelInfo
     *
     * Contains descriptive information about a hotel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelInfoType $hotelInfo
     * @return self
     */
    public function setHotelInfo(\Davispeixoto\OpenTravelAlliance\HotelInfoType $hotelInfo)
    {
        $this->hotelInfo = $hotelInfo;

        return $this;
    }

    /**
     * Gets as facilityInfo
     *
     * Provides information pertaining to the hotel facitilty itself.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FacilityInfoType
     */
    public function getFacilityInfo()
    {
        return $this->facilityInfo;
    }

    /**
     * Sets a new facilityInfo
     *
     * Provides information pertaining to the hotel facitilty itself.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FacilityInfoType $facilityInfo
     * @return self
     */
    public function setFacilityInfo(\Davispeixoto\OpenTravelAlliance\FacilityInfoType $facilityInfo)
    {
        $this->facilityInfo = $facilityInfo;

        return $this;
    }

    /**
     * Gets as policies
     *
     * A collection of policy information as it applies to the hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PoliciesAType
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * Sets a new policies
     *
     * A collection of policy information as it applies to the hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PoliciesAType
     * $policies
     * @return self
     */
    public function setPolicies(\Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PoliciesAType $policies)
    {
        $this->policies = $policies;

        return $this;
    }

    /**
     * Gets as areaInfo
     *
     * Provides information on area attractions, recreations and reference points.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AreaInfoType
     */
    public function getAreaInfo()
    {
        return $this->areaInfo;
    }

    /**
     * Sets a new areaInfo
     *
     * Provides information on area attractions, recreations and reference points.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AreaInfoType $areaInfo
     * @return self
     */
    public function setAreaInfo(\Davispeixoto\OpenTravelAlliance\AreaInfoType $areaInfo)
    {
        $this->areaInfo = $areaInfo;

        return $this;
    }

    /**
     * Gets as affiliationInfo
     *
     * Provides information regarding affiliations, loyalty programs and award ratings.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AffiliationInfoType
     */
    public function getAffiliationInfo()
    {
        return $this->affiliationInfo;
    }

    /**
     * Sets a new affiliationInfo
     *
     * Provides information regarding affiliations, loyalty programs and award ratings.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AffiliationInfoType $affiliationInfo
     * @return self
     */
    public function setAffiliationInfo(\Davispeixoto\OpenTravelAlliance\AffiliationInfoType $affiliationInfo)
    {
        $this->affiliationInfo = $affiliationInfo;

        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about a collection of multimedia objects.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about a collection of multimedia objects.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(
        \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType $multimediaDescriptions
    ) {
        $this->multimediaDescriptions = $multimediaDescriptions;

        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * Provides contact information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactInfoRootType $contactInfo
     */
    public function addToContactInfos(\Davispeixoto\OpenTravelAlliance\ContactInfoRootType $contactInfo)
    {
        $this->contactInfos[] = $contactInfo;

        return $this;
    }

    /**
     * isset contactInfos
     *
     * Provides contact information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactInfos($index)
    {
        return isset($this->contactInfos[$index]);
    }

    /**
     * unset contactInfos
     *
     * Provides contact information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactInfos($index)
    {
        unset($this->contactInfos[$index]);
    }

    /**
     * Gets as contactInfos
     *
     * Provides contact information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactInfoRootType[]
     */
    public function getContactInfos()
    {
        return $this->contactInfos;
    }

    /**
     * Sets a new contactInfos
     *
     * Provides contact information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactInfoRootType[] $contactInfos
     * @return self
     */
    public function setContactInfos(array $contactInfos)
    {
        $this->contactInfos = $contactInfos;

        return $this;
    }

    /**
     * Gets as gDSInfo
     *
     * This allows for information for GDS's to be specified.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GDSInfoType
     */
    public function getGDSInfo()
    {
        return $this->gDSInfo;
    }

    /**
     * Sets a new gDSInfo
     *
     * This allows for information for GDS's to be specified.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GDSInfoType $gDSInfo
     * @return self
     */
    public function setGDSInfo(\Davispeixoto\OpenTravelAlliance\GDSInfoType $gDSInfo)
    {
        $this->gDSInfo = $gDSInfo;

        return $this;
    }

    /**
     * Adds as viewership
     *
     * Collection for viewerships.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType
     * $viewership
     */
    public function addToViewerships(\Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType $viewership)
    {
        $this->viewerships[] = $viewership;

        return $this;
    }

    /**
     * isset viewerships
     *
     * Collection for viewerships.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetViewerships($index)
    {
        return isset($this->viewerships[$index]);
    }

    /**
     * unset viewerships
     *
     * Collection for viewerships.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetViewerships($index)
    {
        unset($this->viewerships[$index]);
    }

    /**
     * Gets as viewerships
     *
     * Collection for viewerships.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType[]
     */
    public function getViewerships()
    {
        return $this->viewerships;
    }

    /**
     * Sets a new viewerships
     *
     * Collection for viewerships.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType[]
     * $viewerships
     * @return self
     */
    public function setViewerships(array $viewerships)
    {
        $this->viewerships = $viewerships;

        return $this;
    }

    /**
     * Adds as effectivePeriod
     *
     * Collection of effective periods.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\EffectivePeriodsAType\EffectivePeriodAType
     * $effectivePeriod
     */
    public function addToEffectivePeriods(
        \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\EffectivePeriodsAType\EffectivePeriodAType $effectivePeriod
    ) {
        $this->effectivePeriods[] = $effectivePeriod;

        return $this;
    }

    /**
     * isset effectivePeriods
     *
     * Collection of effective periods.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEffectivePeriods($index)
    {
        return isset($this->effectivePeriods[$index]);
    }

    /**
     * unset effectivePeriods
     *
     * Collection of effective periods.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEffectivePeriods($index)
    {
        unset($this->effectivePeriods[$index]);
    }

    /**
     * Gets as effectivePeriods
     *
     * Collection of effective periods.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\EffectivePeriodsAType\EffectivePeriodAType[]
     */
    public function getEffectivePeriods()
    {
        return $this->effectivePeriods;
    }

    /**
     * Sets a new effectivePeriods
     *
     * Collection of effective periods.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\EffectivePeriodsAType\EffectivePeriodAType[]
     * $effectivePeriods
     * @return self
     */
    public function setEffectivePeriods(array $effectivePeriods)
    {
        $this->effectivePeriods = $effectivePeriods;

        return $this;
    }

    /**
     * Adds as promotion
     *
     * A collection of packages and promotions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PromotionsAType\PromotionAType
     * $promotion
     */
    public function addToPromotions(
        \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PromotionsAType\PromotionAType $promotion
    ) {
        $this->promotions[] = $promotion;

        return $this;
    }

    /**
     * isset promotions
     *
     * A collection of packages and promotions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotions($index)
    {
        return isset($this->promotions[$index]);
    }

    /**
     * unset promotions
     *
     * A collection of packages and promotions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotions($index)
    {
        unset($this->promotions[$index]);
    }

    /**
     * Gets as promotions
     *
     * A collection of packages and promotions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PromotionsAType\PromotionAType[]
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Sets a new promotions
     *
     * A collection of packages and promotions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\PromotionsAType\PromotionAType[]
     * $promotions
     * @return self
     */
    public function setPromotions(array $promotions)
    {
        $this->promotions = $promotions;

        return $this;
    }

    /**
     * Gets as roomBlocks
     *
     * Describes room block information accepted by the hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\RoomBlocksAType
     */
    public function getRoomBlocks()
    {
        return $this->roomBlocks;
    }

    /**
     * Sets a new roomBlocks
     *
     * Describes room block information accepted by the hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\RoomBlocksAType
     * $roomBlocks
     * @return self
     */
    public function setRoomBlocks(
        \Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType\RoomBlocksAType $roomBlocks
    ) {
        $this->roomBlocks = $roomBlocks;

        return $this;
    }

    /**
     * Gets as environmentalImpact
     *
     * Property environmental impact and green program/ initiative information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType
     */
    public function getEnvironmentalImpact()
    {
        return $this->environmentalImpact;
    }

    /**
     * Sets a new environmentalImpact
     *
     * Property environmental impact and green program/ initiative information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType
     * $environmentalImpact
     * @return self
     */
    public function setEnvironmentalImpact(
        \Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType $environmentalImpact
    ) {
        $this->environmentalImpact = $environmentalImpact;

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


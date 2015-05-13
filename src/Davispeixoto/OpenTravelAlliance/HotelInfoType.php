<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing HotelInfoType
 *
 * The HotelInfo class that describes general information about the hotel.
 * XSD Type: HotelInfoType
 */
class HotelInfoType
{

    /**
     * The date that the hotel facility was built, usually just the year. If a full
     * date is used, it is recommended that the W3C date format be followed.
     *
     * @property string $whenBuilt
     */
    private $whenBuilt = null;

    /**
     * Indication as to the last time any element supported within this message was
     * updated.
     *
     * @property \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * Description of the weather typical to the hotel facility's area.
     *
     * @property string $areaWeather
     */
    private $areaWeather = null;

    /**
     * Identifies the interface being used by this hotel.
     *
     * @property string $interfaceCompliance
     */
    private $interfaceCompliance = null;

    /**
     * Identifies the Property Management System being used by this hotel.
     *
     * @property string $pMSSystem
     */
    private $pMSSystem = null;

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
     * This is a description of the operating status of the Hotel. This information may
     * support the code in HotelStatusCode.
     *
     * @property string $hotelStatus
     */
    private $hotelStatus = null;

    /**
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening)
     * of the hotels to be returned in the response. Refer to OpenTravel Code List
     * HotelStatusCode.
     *
     * @property string $hotelStatusCode
     */
    private $hotelStatusCode = null;

    /**
     * The tax ID code for the property.
     *
     * @property string $taxID
     */
    private $taxID = null;

    /**
     * When false, indicates the location does not observe Daylight Saving Time.
     *
     * @property boolean $daylightSavingIndicator
     */
    private $daylightSavingIndicator = null;

    /**
     * When true, the hotel indicates they are ISO 9000 certified.
     *
     * @property boolean $iSO9000CertifiedInd
     */
    private $iSO9000CertifiedInd = null;

    /**
     * The full name of the hotel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelNameAType
     * $hotelName
     */
    private $hotelName = null;

    /**
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $closedSeasons
     */
    private $closedSeasons = null;

    /**
     * Identifies any Blackout Dates which are periods during which the hotel cannot
     * guarantee rates and rooms availability due to peak occupancy.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[]
     * $blackoutDates
     */
    private $blackoutDates = null;

    /**
     * Collection of directions to/from one or more locations.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RelativePositionType[]
     * $relativePositions
     */
    private $relativePositions = null;

    /**
     * Collection of descriptive details about a hotel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CategoryCodesType $categoryCodes
     */
    private $categoryCodes = null;

    /**
     * Collection of hotel and/or renovation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelInfoType\DescriptionsAType
     * $descriptions
     */
    private $descriptions = null;

    /**
     * A collection of hotel codes and descriptions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[]
     * $hotelInfoCodes
     */
    private $hotelInfoCodes = null;

    /**
     * Describes the geocoded location of the hotel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelInfoType\PositionAType $position
     */
    private $position = null;

    /**
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType\ServiceAType[]
     * $services
     */
    private $services = null;

    /**
     * Collection of WeatherInfo elements. This may be used to provide information for
     * multiple time periods.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WeatherInfoType[] $weatherInfos
     */
    private $weatherInfos = null;

    /**
     * Collection of OwnershipManagementInfo.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[]
     * $ownershipManagementInfos
     */
    private $ownershipManagementInfos = null;

    /**
     * Collection of language details pertaining to the hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\LanguagesAType\LanguageAType[]
     * $languages
     */
    private $languages = null;

    /**
     * Gets as whenBuilt
     *
     * The date that the hotel facility was built, usually just the year. If a full
     * date is used, it is recommended that the W3C date format be followed.
     *
     * @return string
     */
    public function getWhenBuilt()
    {
        return $this->whenBuilt;
    }

    /**
     * Sets a new whenBuilt
     *
     * The date that the hotel facility was built, usually just the year. If a full
     * date is used, it is recommended that the W3C date format be followed.
     *
     * @param string $whenBuilt
     * @return self
     */
    public function setWhenBuilt($whenBuilt)
    {
        $this->whenBuilt = $whenBuilt;

        return $this;
    }

    /**
     * Gets as lastUpdated
     *
     * Indication as to the last time any element supported within this message was
     * updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * Indication as to the last time any element supported within this message was
     * updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * Gets as areaWeather
     *
     * Description of the weather typical to the hotel facility's area.
     *
     * @return string
     */
    public function getAreaWeather()
    {
        return $this->areaWeather;
    }

    /**
     * Sets a new areaWeather
     *
     * Description of the weather typical to the hotel facility's area.
     *
     * @param string $areaWeather
     * @return self
     */
    public function setAreaWeather($areaWeather)
    {
        $this->areaWeather = $areaWeather;

        return $this;
    }

    /**
     * Gets as interfaceCompliance
     *
     * Identifies the interface being used by this hotel.
     *
     * @return string
     */
    public function getInterfaceCompliance()
    {
        return $this->interfaceCompliance;
    }

    /**
     * Sets a new interfaceCompliance
     *
     * Identifies the interface being used by this hotel.
     *
     * @param string $interfaceCompliance
     * @return self
     */
    public function setInterfaceCompliance($interfaceCompliance)
    {
        $this->interfaceCompliance = $interfaceCompliance;

        return $this;
    }

    /**
     * Gets as pMSSystem
     *
     * Identifies the Property Management System being used by this hotel.
     *
     * @return string
     */
    public function getPMSSystem()
    {
        return $this->pMSSystem;
    }

    /**
     * Sets a new pMSSystem
     *
     * Identifies the Property Management System being used by this hotel.
     *
     * @param string $pMSSystem
     * @return self
     */
    public function setPMSSystem($pMSSystem)
    {
        $this->pMSSystem = $pMSSystem;

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
     * Gets as hotelStatus
     *
     * This is a description of the operating status of the Hotel. This information may
     * support the code in HotelStatusCode.
     *
     * @return string
     */
    public function getHotelStatus()
    {
        return $this->hotelStatus;
    }

    /**
     * Sets a new hotelStatus
     *
     * This is a description of the operating status of the Hotel. This information may
     * support the code in HotelStatusCode.
     *
     * @param string $hotelStatus
     * @return self
     */
    public function setHotelStatus($hotelStatus)
    {
        $this->hotelStatus = $hotelStatus;

        return $this;
    }

    /**
     * Gets as hotelStatusCode
     *
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening)
     * of the hotels to be returned in the response. Refer to OpenTravel Code List
     * HotelStatusCode.
     *
     * @return string
     */
    public function getHotelStatusCode()
    {
        return $this->hotelStatusCode;
    }

    /**
     * Sets a new hotelStatusCode
     *
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening)
     * of the hotels to be returned in the response. Refer to OpenTravel Code List
     * HotelStatusCode.
     *
     * @param string $hotelStatusCode
     * @return self
     */
    public function setHotelStatusCode($hotelStatusCode)
    {
        $this->hotelStatusCode = $hotelStatusCode;

        return $this;
    }

    /**
     * Gets as taxID
     *
     * The tax ID code for the property.
     *
     * @return string
     */
    public function getTaxID()
    {
        return $this->taxID;
    }

    /**
     * Sets a new taxID
     *
     * The tax ID code for the property.
     *
     * @param string $taxID
     * @return self
     */
    public function setTaxID($taxID)
    {
        $this->taxID = $taxID;

        return $this;
    }

    /**
     * Gets as daylightSavingIndicator
     *
     * When false, indicates the location does not observe Daylight Saving Time.
     *
     * @return boolean
     */
    public function getDaylightSavingIndicator()
    {
        return $this->daylightSavingIndicator;
    }

    /**
     * Sets a new daylightSavingIndicator
     *
     * When false, indicates the location does not observe Daylight Saving Time.
     *
     * @param boolean $daylightSavingIndicator
     * @return self
     */
    public function setDaylightSavingIndicator($daylightSavingIndicator)
    {
        $this->daylightSavingIndicator = $daylightSavingIndicator;

        return $this;
    }

    /**
     * Gets as iSO9000CertifiedInd
     *
     * When true, the hotel indicates they are ISO 9000 certified.
     *
     * @return boolean
     */
    public function getISO9000CertifiedInd()
    {
        return $this->iSO9000CertifiedInd;
    }

    /**
     * Sets a new iSO9000CertifiedInd
     *
     * When true, the hotel indicates they are ISO 9000 certified.
     *
     * @param boolean $iSO9000CertifiedInd
     * @return self
     */
    public function setISO9000CertifiedInd($iSO9000CertifiedInd)
    {
        $this->iSO9000CertifiedInd = $iSO9000CertifiedInd;

        return $this;
    }

    /**
     * Gets as hotelName
     *
     * The full name of the hotel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelNameAType
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * The full name of the hotel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelNameAType $hotelName
     * @return self
     */
    public function setHotelName(\Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelNameAType $hotelName)
    {
        $this->hotelName = $hotelName;

        return $this;
    }

    /**
     * Adds as closedSeason
     *
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $closedSeason
     */
    public function addToClosedSeasons(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $closedSeason)
    {
        $this->closedSeasons[] = $closedSeason;

        return $this;
    }

    /**
     * isset closedSeasons
     *
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetClosedSeasons($index)
    {
        return isset($this->closedSeasons[$index]);
    }

    /**
     * unset closedSeasons
     *
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetClosedSeasons($index)
    {
        unset($this->closedSeasons[$index]);
    }

    /**
     * Gets as closedSeasons
     *
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[]
     */
    public function getClosedSeasons()
    {
        return $this->closedSeasons;
    }

    /**
     * Sets a new closedSeasons
     *
     * A collection of date and time periods when the hotel facility is closed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $closedSeasons
     * @return self
     */
    public function setClosedSeasons(array $closedSeasons)
    {
        $this->closedSeasons = $closedSeasons;

        return $this;
    }

    /**
     * Adds as blackoutDate
     *
     * Identifies any Blackout Dates which are periods during which the hotel cannot
     * guarantee rates and rooms availability due to peak occupancy.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType
     * $blackoutDate
     */
    public function addToBlackoutDates(
        \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType $blackoutDate
    ) {
        $this->blackoutDates[] = $blackoutDate;

        return $this;
    }

    /**
     * isset blackoutDates
     *
     * Identifies any Blackout Dates which are periods during which the hotel cannot
     * guarantee rates and rooms availability due to peak occupancy.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBlackoutDates($index)
    {
        return isset($this->blackoutDates[$index]);
    }

    /**
     * unset blackoutDates
     *
     * Identifies any Blackout Dates which are periods during which the hotel cannot
     * guarantee rates and rooms availability due to peak occupancy.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBlackoutDates($index)
    {
        unset($this->blackoutDates[$index]);
    }

    /**
     * Gets as blackoutDates
     *
     * Identifies any Blackout Dates which are periods during which the hotel cannot
     * guarantee rates and rooms availability due to peak occupancy.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[]
     */
    public function getBlackoutDates()
    {
        return $this->blackoutDates;
    }

    /**
     * Sets a new blackoutDates
     *
     * Identifies any Blackout Dates which are periods during which the hotel cannot
     * guarantee rates and rooms availability due to peak occupancy.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[]
     * $blackoutDates
     * @return self
     */
    public function setBlackoutDates(array $blackoutDates)
    {
        $this->blackoutDates = $blackoutDates;

        return $this;
    }

    /**
     * Adds as relativePosition
     *
     * Collection of directions to/from one or more locations.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RelativePositionType $relativePosition
     */
    public function addToRelativePositions(\Davispeixoto\OpenTravelAlliance\RelativePositionType $relativePosition)
    {
        $this->relativePositions[] = $relativePosition;

        return $this;
    }

    /**
     * isset relativePositions
     *
     * Collection of directions to/from one or more locations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelativePositions($index)
    {
        return isset($this->relativePositions[$index]);
    }

    /**
     * unset relativePositions
     *
     * Collection of directions to/from one or more locations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelativePositions($index)
    {
        unset($this->relativePositions[$index]);
    }

    /**
     * Gets as relativePositions
     *
     * Collection of directions to/from one or more locations.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RelativePositionType[]
     */
    public function getRelativePositions()
    {
        return $this->relativePositions;
    }

    /**
     * Sets a new relativePositions
     *
     * Collection of directions to/from one or more locations.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RelativePositionType[]
     * $relativePositions
     * @return self
     */
    public function setRelativePositions(array $relativePositions)
    {
        $this->relativePositions = $relativePositions;

        return $this;
    }

    /**
     * Gets as categoryCodes
     *
     * Collection of descriptive details about a hotel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CategoryCodesType
     */
    public function getCategoryCodes()
    {
        return $this->categoryCodes;
    }

    /**
     * Sets a new categoryCodes
     *
     * Collection of descriptive details about a hotel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CategoryCodesType $categoryCodes
     * @return self
     */
    public function setCategoryCodes(\Davispeixoto\OpenTravelAlliance\CategoryCodesType $categoryCodes)
    {
        $this->categoryCodes = $categoryCodes;

        return $this;
    }

    /**
     * Gets as descriptions
     *
     * Collection of hotel and/or renovation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelInfoType\DescriptionsAType
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * Collection of hotel and/or renovation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelInfoType\DescriptionsAType
     * $descriptions
     * @return self
     */
    public function setDescriptions(\Davispeixoto\OpenTravelAlliance\HotelInfoType\DescriptionsAType $descriptions)
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    /**
     * Adds as hotelInfoCode
     *
     * A collection of hotel codes and descriptions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType
     * $hotelInfoCode
     */
    public function addToHotelInfoCodes(
        \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType $hotelInfoCode
    ) {
        $this->hotelInfoCodes[] = $hotelInfoCode;

        return $this;
    }

    /**
     * isset hotelInfoCodes
     *
     * A collection of hotel codes and descriptions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelInfoCodes($index)
    {
        return isset($this->hotelInfoCodes[$index]);
    }

    /**
     * unset hotelInfoCodes
     *
     * A collection of hotel codes and descriptions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelInfoCodes($index)
    {
        unset($this->hotelInfoCodes[$index]);
    }

    /**
     * Gets as hotelInfoCodes
     *
     * A collection of hotel codes and descriptions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[]
     */
    public function getHotelInfoCodes()
    {
        return $this->hotelInfoCodes;
    }

    /**
     * Sets a new hotelInfoCodes
     *
     * A collection of hotel codes and descriptions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\HotelInfoCodesAType\HotelInfoCodeAType[]
     * $hotelInfoCodes
     * @return self
     */
    public function setHotelInfoCodes(array $hotelInfoCodes)
    {
        $this->hotelInfoCodes = $hotelInfoCodes;

        return $this;
    }

    /**
     * Gets as position
     *
     * Describes the geocoded location of the hotel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelInfoType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * Describes the geocoded location of the hotel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelInfoType\PositionAType $position
     * @return self
     */
    public function setPosition(\Davispeixoto\OpenTravelAlliance\HotelInfoType\PositionAType $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Adds as service
     *
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType\ServiceAType
     * $service
     */
    public function addToServices(\Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType\ServiceAType $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * isset services
     *
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServices($index)
    {
        return isset($this->services[$index]);
    }

    /**
     * unset services
     *
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServices($index)
    {
        unset($this->services[$index]);
    }

    /**
     * Gets as services
     *
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType\ServiceAType[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * Collection of hotel services and/or amenities available to the guest.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType\ServiceAType[]
     * $services
     * @return self
     */
    public function setServices(array $services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Adds as weatherInfo
     *
     * Collection of WeatherInfo elements. This may be used to provide information for
     * multiple time periods.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WeatherInfoType $weatherInfo
     */
    public function addToWeatherInfos(\Davispeixoto\OpenTravelAlliance\WeatherInfoType $weatherInfo)
    {
        $this->weatherInfos[] = $weatherInfo;

        return $this;
    }

    /**
     * isset weatherInfos
     *
     * Collection of WeatherInfo elements. This may be used to provide information for
     * multiple time periods.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWeatherInfos($index)
    {
        return isset($this->weatherInfos[$index]);
    }

    /**
     * unset weatherInfos
     *
     * Collection of WeatherInfo elements. This may be used to provide information for
     * multiple time periods.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWeatherInfos($index)
    {
        unset($this->weatherInfos[$index]);
    }

    /**
     * Gets as weatherInfos
     *
     * Collection of WeatherInfo elements. This may be used to provide information for
     * multiple time periods.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WeatherInfoType[]
     */
    public function getWeatherInfos()
    {
        return $this->weatherInfos;
    }

    /**
     * Sets a new weatherInfos
     *
     * Collection of WeatherInfo elements. This may be used to provide information for
     * multiple time periods.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WeatherInfoType[] $weatherInfos
     * @return self
     */
    public function setWeatherInfos(array $weatherInfos)
    {
        $this->weatherInfos = $weatherInfos;

        return $this;
    }

    /**
     * Adds as ownershipManagementInfo
     *
     * Collection of OwnershipManagementInfo.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType
     * $ownershipManagementInfo
     */
    public function addToOwnershipManagementInfos(
        \Davispeixoto\OpenTravelAlliance\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType $ownershipManagementInfo
    ) {
        $this->ownershipManagementInfos[] = $ownershipManagementInfo;

        return $this;
    }

    /**
     * isset ownershipManagementInfos
     *
     * Collection of OwnershipManagementInfo.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOwnershipManagementInfos($index)
    {
        return isset($this->ownershipManagementInfos[$index]);
    }

    /**
     * unset ownershipManagementInfos
     *
     * Collection of OwnershipManagementInfo.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOwnershipManagementInfos($index)
    {
        unset($this->ownershipManagementInfos[$index]);
    }

    /**
     * Gets as ownershipManagementInfos
     *
     * Collection of OwnershipManagementInfo.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[]
     */
    public function getOwnershipManagementInfos()
    {
        return $this->ownershipManagementInfos;
    }

    /**
     * Sets a new ownershipManagementInfos
     *
     * Collection of OwnershipManagementInfo.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[]
     * $ownershipManagementInfos
     * @return self
     */
    public function setOwnershipManagementInfos(array $ownershipManagementInfos)
    {
        $this->ownershipManagementInfos = $ownershipManagementInfos;

        return $this;
    }

    /**
     * Adds as language
     *
     * Collection of language details pertaining to the hotel.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\LanguagesAType\LanguageAType
     * $language
     */
    public function addToLanguages(
        \Davispeixoto\OpenTravelAlliance\HotelInfoType\LanguagesAType\LanguageAType $language
    ) {
        $this->languages[] = $language;

        return $this;
    }

    /**
     * isset languages
     *
     * Collection of language details pertaining to the hotel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLanguages($index)
    {
        return isset($this->languages[$index]);
    }

    /**
     * unset languages
     *
     * Collection of language details pertaining to the hotel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLanguages($index)
    {
        unset($this->languages[$index]);
    }

    /**
     * Gets as languages
     *
     * Collection of language details pertaining to the hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\LanguagesAType\LanguageAType[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Sets a new languages
     *
     * Collection of language details pertaining to the hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\LanguagesAType\LanguageAType[]
     * $languages
     * @return self
     */
    public function setLanguages(array $languages)
    {
        $this->languages = $languages;

        return $this;
    }


}


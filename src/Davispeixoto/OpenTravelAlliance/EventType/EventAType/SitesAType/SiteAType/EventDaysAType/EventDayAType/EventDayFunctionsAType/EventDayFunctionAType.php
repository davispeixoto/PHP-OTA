<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType;

/**
 * Class representing EventDayFunctionAType
 */
class EventDayFunctionAType
{

    /**
     * The name of the function.
     *
     * @property string $functionName
     */
    private $functionName = null;

    /**
     * The type of function being requested (e.g. breakfast meeting or reception).
     * Refer to OpenTravel Code table Event Charge (EVT).
     *
     * @property string $functionType
     */
    private $functionType = null;

    /**
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool)
     * for the function.
     *
     * @property string $locationName
     */
    private $locationName = null;

    /**
     * The ID of the room where the function is taking place.
     *
     * @property string $locationID
     */
    private $locationID = null;

    /**
     * When true, a location is held on a 24-hour basis (e.g., ensures a set-up is not
     * disturbed).
     *
     * @property boolean $twentyFourHourHold
     */
    private $twentyFourHourHold = null;

    /**
     * The time the function is scheduled to begin.
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The time the function is scheduled to finish.
     *
     * @property \DateTime $endTime
     */
    private $endTime = null;

    /**
     * The number of people attending this function.
     *
     * @property integer $attendeeQuantity
     */
    private $attendeeQuantity = null;

    /**
     * The number of keys required for this function space.
     *
     * @property integer $requiredKeyQuantity
     */
    private $requiredKeyQuantity = null;

    /**
     * When true, indicates the room lock needs rekeyed.
     *
     * @property boolean $reKeyIndicator
     */
    private $reKeyIndicator = null;

    /**
     * When true, indicates the function should be posted (e.g., on a reader board).
     *
     * @property boolean $postIndicator
     */
    private $postIndicator = null;

    /**
     * An identifier for this function.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * When true, indicates that this function is an exhibition.
     *
     * @property boolean $exhibitionIndicator
     */
    private $exhibitionIndicator = null;

    /**
     * A collection of contacts associated with a function
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType\ContactAType[]
     * $contacts
     */
    private $contacts = null;

    /**
     * A collection of audio visual needs for a function.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType
     * $audioVisuals
     */
    private $audioVisuals = null;

    /**
     * The room setup requirements for the function.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType
     * $roomSetup
     */
    private $roomSetup = null;

    /**
     * The start and end times for a session or show within a function.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\SessionTimesAType[]
     * $sessionTimes
     */
    private $sessionTimes = null;

    /**
     * A collection of food and beverage details for a function.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType
     * $foodAndBeverages
     */
    private $foodAndBeverages = null;

    /**
     * A collection of services.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[]
     * $services
     */
    private $services = null;

    /**
     * A collection of comments associated to the function.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as functionName
     *
     * The name of the function.
     *
     * @return string
     */
    public function getFunctionName()
    {
        return $this->functionName;
    }

    /**
     * Sets a new functionName
     *
     * The name of the function.
     *
     * @param string $functionName
     * @return self
     */
    public function setFunctionName($functionName)
    {
        $this->functionName = $functionName;

        return $this;
    }

    /**
     * Gets as functionType
     *
     * The type of function being requested (e.g. breakfast meeting or reception).
     * Refer to OpenTravel Code table Event Charge (EVT).
     *
     * @return string
     */
    public function getFunctionType()
    {
        return $this->functionType;
    }

    /**
     * Sets a new functionType
     *
     * The type of function being requested (e.g. breakfast meeting or reception).
     * Refer to OpenTravel Code table Event Charge (EVT).
     *
     * @param string $functionType
     * @return self
     */
    public function setFunctionType($functionType)
    {
        $this->functionType = $functionType;

        return $this;
    }

    /**
     * Gets as locationName
     *
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool)
     * for the function.
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Sets a new locationName
     *
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool)
     * for the function.
     *
     * @param string $locationName
     * @return self
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Gets as locationID
     *
     * The ID of the room where the function is taking place.
     *
     * @return string
     */
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * Sets a new locationID
     *
     * The ID of the room where the function is taking place.
     *
     * @param string $locationID
     * @return self
     */
    public function setLocationID($locationID)
    {
        $this->locationID = $locationID;

        return $this;
    }

    /**
     * Gets as twentyFourHourHold
     *
     * When true, a location is held on a 24-hour basis (e.g., ensures a set-up is not
     * disturbed).
     *
     * @return boolean
     */
    public function getTwentyFourHourHold()
    {
        return $this->twentyFourHourHold;
    }

    /**
     * Sets a new twentyFourHourHold
     *
     * When true, a location is held on a 24-hour basis (e.g., ensures a set-up is not
     * disturbed).
     *
     * @param boolean $twentyFourHourHold
     * @return self
     */
    public function setTwentyFourHourHold($twentyFourHourHold)
    {
        $this->twentyFourHourHold = $twentyFourHourHold;

        return $this;
    }

    /**
     * Gets as startTime
     *
     * The time the function is scheduled to begin.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The time the function is scheduled to begin.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Gets as endTime
     *
     * The time the function is scheduled to finish.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The time the function is scheduled to finish.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Gets as attendeeQuantity
     *
     * The number of people attending this function.
     *
     * @return integer
     */
    public function getAttendeeQuantity()
    {
        return $this->attendeeQuantity;
    }

    /**
     * Sets a new attendeeQuantity
     *
     * The number of people attending this function.
     *
     * @param integer $attendeeQuantity
     * @return self
     */
    public function setAttendeeQuantity($attendeeQuantity)
    {
        $this->attendeeQuantity = $attendeeQuantity;

        return $this;
    }

    /**
     * Gets as requiredKeyQuantity
     *
     * The number of keys required for this function space.
     *
     * @return integer
     */
    public function getRequiredKeyQuantity()
    {
        return $this->requiredKeyQuantity;
    }

    /**
     * Sets a new requiredKeyQuantity
     *
     * The number of keys required for this function space.
     *
     * @param integer $requiredKeyQuantity
     * @return self
     */
    public function setRequiredKeyQuantity($requiredKeyQuantity)
    {
        $this->requiredKeyQuantity = $requiredKeyQuantity;

        return $this;
    }

    /**
     * Gets as reKeyIndicator
     *
     * When true, indicates the room lock needs rekeyed.
     *
     * @return boolean
     */
    public function getReKeyIndicator()
    {
        return $this->reKeyIndicator;
    }

    /**
     * Sets a new reKeyIndicator
     *
     * When true, indicates the room lock needs rekeyed.
     *
     * @param boolean $reKeyIndicator
     * @return self
     */
    public function setReKeyIndicator($reKeyIndicator)
    {
        $this->reKeyIndicator = $reKeyIndicator;

        return $this;
    }

    /**
     * Gets as postIndicator
     *
     * When true, indicates the function should be posted (e.g., on a reader board).
     *
     * @return boolean
     */
    public function getPostIndicator()
    {
        return $this->postIndicator;
    }

    /**
     * Sets a new postIndicator
     *
     * When true, indicates the function should be posted (e.g., on a reader board).
     *
     * @param boolean $postIndicator
     * @return self
     */
    public function setPostIndicator($postIndicator)
    {
        $this->postIndicator = $postIndicator;

        return $this;
    }

    /**
     * Gets as iD
     *
     * An identifier for this function.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * An identifier for this function.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as exhibitionIndicator
     *
     * When true, indicates that this function is an exhibition.
     *
     * @return boolean
     */
    public function getExhibitionIndicator()
    {
        return $this->exhibitionIndicator;
    }

    /**
     * Sets a new exhibitionIndicator
     *
     * When true, indicates that this function is an exhibition.
     *
     * @param boolean $exhibitionIndicator
     * @return self
     */
    public function setExhibitionIndicator($exhibitionIndicator)
    {
        $this->exhibitionIndicator = $exhibitionIndicator;

        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts associated with a function
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType\ContactAType
     * $contact
     */
    public function addToContacts(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType\ContactAType $contact
    ) {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts associated with a function
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * A collection of contacts associated with a function
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * A collection of contacts associated with a function
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType\ContactAType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts associated with a function
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType\ContactAType[]
     * $contacts
     * @return self
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Gets as audioVisuals
     *
     * A collection of audio visual needs for a function.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType
     */
    public function getAudioVisuals()
    {
        return $this->audioVisuals;
    }

    /**
     * Sets a new audioVisuals
     *
     * A collection of audio visual needs for a function.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType
     * $audioVisuals
     * @return self
     */
    public function setAudioVisuals(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType $audioVisuals
    ) {
        $this->audioVisuals = $audioVisuals;

        return $this;
    }

    /**
     * Gets as roomSetup
     *
     * The room setup requirements for the function.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType
     */
    public function getRoomSetup()
    {
        return $this->roomSetup;
    }

    /**
     * Sets a new roomSetup
     *
     * The room setup requirements for the function.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType
     * $roomSetup
     * @return self
     */
    public function setRoomSetup(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType $roomSetup
    ) {
        $this->roomSetup = $roomSetup;

        return $this;
    }

    /**
     * Adds as sessionTimes
     *
     * The start and end times for a session or show within a function.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\SessionTimesAType
     * $sessionTimes
     */
    public function addToSessionTimes(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\SessionTimesAType $sessionTimes
    ) {
        $this->sessionTimes[] = $sessionTimes;

        return $this;
    }

    /**
     * isset sessionTimes
     *
     * The start and end times for a session or show within a function.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSessionTimes($index)
    {
        return isset($this->sessionTimes[$index]);
    }

    /**
     * unset sessionTimes
     *
     * The start and end times for a session or show within a function.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSessionTimes($index)
    {
        unset($this->sessionTimes[$index]);
    }

    /**
     * Gets as sessionTimes
     *
     * The start and end times for a session or show within a function.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\SessionTimesAType[]
     */
    public function getSessionTimes()
    {
        return $this->sessionTimes;
    }

    /**
     * Sets a new sessionTimes
     *
     * The start and end times for a session or show within a function.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\SessionTimesAType[]
     * $sessionTimes
     * @return self
     */
    public function setSessionTimes(array $sessionTimes)
    {
        $this->sessionTimes = $sessionTimes;

        return $this;
    }

    /**
     * Gets as foodAndBeverages
     *
     * A collection of food and beverage details for a function.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType
     */
    public function getFoodAndBeverages()
    {
        return $this->foodAndBeverages;
    }

    /**
     * Sets a new foodAndBeverages
     *
     * A collection of food and beverage details for a function.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType
     * $foodAndBeverages
     * @return self
     */
    public function setFoodAndBeverages(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType $foodAndBeverages
    ) {
        $this->foodAndBeverages = $foodAndBeverages;

        return $this;
    }

    /**
     * Adds as service
     *
     * A collection of services.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType
     * $service
     */
    public function addToServices(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType $service
    ) {
        $this->services[] = $service;

        return $this;
    }

    /**
     * isset services
     *
     * A collection of services.
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
     * A collection of services.
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
     * A collection of services.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * A collection of services.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[]
     * $services
     * @return self
     */
    public function setServices(array $services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments associated to the function.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments associated to the function.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments associated to the function.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments associated to the function.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments associated to the function.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType;

/**
 * Class representing GeneralEventInfoAType
 */
class GeneralEventInfoAType
{

    /**
     * Identifies the name of the event.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Identifies an acronym for the event.
     *
     * @property string $acronym
     */
    private $acronym = null;

    /**
     * Identifies a web site associated with the event.
     *
     * @property string $uRL
     */
    private $uRL = null;

    /**
     * Identifies the type of event (e.g., Board Meeting, Trade Show). Refer to
     * OpenTravel Code List Event Type (ETT).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Used to indicate the frequency of this event.
     *
     * @property string $frequency
     */
    private $frequency = null;

    /**
     * When true, the attendees spouses are invited to the event.
     *
     * @property boolean $spouseInvitedIndicator
     */
    private $spouseInvitedIndicator = null;

    /**
     * When true, the attendees children are invited to the event.
     *
     * @property boolean $childrenInvitedIndicator
     */
    private $childrenInvitedIndicator = null;

    /**
     * Defines the size of the event by identifying if one or multiple venues are
     * needed for the event.
     *
     * @property string $scope
     */
    private $scope = null;

    /**
     * When true, a venue off-site was utilized.
     *
     * @property boolean $offsiteVenueIndicator
     */
    private $offsiteVenueIndicator = null;

    /**
     * When true, shuttle service was provided.
     *
     * @property boolean $shuttleServiceIndicator
     */
    private $shuttleServiceIndicator = null;

    /**
     * Identifies the type of desitnation service provider used. Refer to OpenTravel
     * Code List Destination Service Provider Type (DSP).
     *
     * @property string[] $destinationServiceProviderCode
     */
    private $destinationServiceProviderCode = null;

    /**
     * When true, indicates organized programs were available to attendee's guests
     * (e.g., a tour).
     *
     * @property boolean $attendeeGuestProgramIndicator
     */
    private $attendeeGuestProgramIndicator = null;

    /**
     * References the other events that were held in conjunction with (ICW) this event
     * as identified by the RPH located in their EventReport element.
     *
     * @property string[] $eventReportRPH
     */
    private $eventReportRPH = null;

    /**
     * A collection of contacts that pertain to this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType[]
     * $eventContacts
     */
    private $eventContacts = null;

    /**
     * Provides high-level event location information (i.e., city, state/province,
     * country).
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationGeneralType $eventLocation
     */
    private $eventLocation = null;

    /**
     * Specifies the number of event attendees.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\AttendeeInfoAType[]
     * $attendeeInfo
     */
    private $attendeeInfo = null;

    /**
     * A collection of dates for past or future events.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType[]
     * $dates
     */
    private $dates = null;

    /**
     * General hotel usage information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\HousingInfoAType
     * $housingInfo
     */
    private $housingInfo = null;

    /**
     * General food and beverage information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FoodAndBeverageInfoAType
     * $foodAndBeverageInfo
     */
    private $foodAndBeverageInfo = null;

    /**
     * General function space information for this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType
     * $functionSpaceInfo
     */
    private $functionSpaceInfo = null;

    /**
     * General exhibition information for this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\ExhibitionInfoAType
     * $exhibitionInfo
     */
    private $exhibitionInfo = null;

    /**
     * A collection of comments that pertain to the overall event.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as name
     *
     * Identifies the name of the event.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Identifies the name of the event.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as acronym
     *
     * Identifies an acronym for the event.
     *
     * @return string
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * Sets a new acronym
     *
     * Identifies an acronym for the event.
     *
     * @param string $acronym
     * @return self
     */
    public function setAcronym($acronym)
    {
        $this->acronym = $acronym;

        return $this;
    }

    /**
     * Gets as uRL
     *
     * Identifies a web site associated with the event.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * Identifies a web site associated with the event.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Gets as type
     *
     * Identifies the type of event (e.g., Board Meeting, Trade Show). Refer to
     * OpenTravel Code List Event Type (ETT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the type of event (e.g., Board Meeting, Trade Show). Refer to
     * OpenTravel Code List Event Type (ETT).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as frequency
     *
     * Used to indicate the frequency of this event.
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * Used to indicate the frequency of this event.
     *
     * @param string $frequency
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Gets as spouseInvitedIndicator
     *
     * When true, the attendees spouses are invited to the event.
     *
     * @return boolean
     */
    public function getSpouseInvitedIndicator()
    {
        return $this->spouseInvitedIndicator;
    }

    /**
     * Sets a new spouseInvitedIndicator
     *
     * When true, the attendees spouses are invited to the event.
     *
     * @param boolean $spouseInvitedIndicator
     * @return self
     */
    public function setSpouseInvitedIndicator($spouseInvitedIndicator)
    {
        $this->spouseInvitedIndicator = $spouseInvitedIndicator;

        return $this;
    }

    /**
     * Gets as childrenInvitedIndicator
     *
     * When true, the attendees children are invited to the event.
     *
     * @return boolean
     */
    public function getChildrenInvitedIndicator()
    {
        return $this->childrenInvitedIndicator;
    }

    /**
     * Sets a new childrenInvitedIndicator
     *
     * When true, the attendees children are invited to the event.
     *
     * @param boolean $childrenInvitedIndicator
     * @return self
     */
    public function setChildrenInvitedIndicator($childrenInvitedIndicator)
    {
        $this->childrenInvitedIndicator = $childrenInvitedIndicator;

        return $this;
    }

    /**
     * Gets as scope
     *
     * Defines the size of the event by identifying if one or multiple venues are
     * needed for the event.
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * Defines the size of the event by identifying if one or multiple venues are
     * needed for the event.
     *
     * @param string $scope
     * @return self
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Gets as offsiteVenueIndicator
     *
     * When true, a venue off-site was utilized.
     *
     * @return boolean
     */
    public function getOffsiteVenueIndicator()
    {
        return $this->offsiteVenueIndicator;
    }

    /**
     * Sets a new offsiteVenueIndicator
     *
     * When true, a venue off-site was utilized.
     *
     * @param boolean $offsiteVenueIndicator
     * @return self
     */
    public function setOffsiteVenueIndicator($offsiteVenueIndicator)
    {
        $this->offsiteVenueIndicator = $offsiteVenueIndicator;

        return $this;
    }

    /**
     * Gets as shuttleServiceIndicator
     *
     * When true, shuttle service was provided.
     *
     * @return boolean
     */
    public function getShuttleServiceIndicator()
    {
        return $this->shuttleServiceIndicator;
    }

    /**
     * Sets a new shuttleServiceIndicator
     *
     * When true, shuttle service was provided.
     *
     * @param boolean $shuttleServiceIndicator
     * @return self
     */
    public function setShuttleServiceIndicator($shuttleServiceIndicator)
    {
        $this->shuttleServiceIndicator = $shuttleServiceIndicator;

        return $this;
    }

    /**
     * Adds as destinationServiceProviderCode
     *
     * Identifies the type of desitnation service provider used. Refer to OpenTravel
     * Code List Destination Service Provider Type (DSP).
     *
     * @return self
     * @param string $destinationServiceProviderCode
     */
    public function addToDestinationServiceProviderCode($destinationServiceProviderCode)
    {
        $this->destinationServiceProviderCode[] = $destinationServiceProviderCode;

        return $this;
    }

    /**
     * isset destinationServiceProviderCode
     *
     * Identifies the type of desitnation service provider used. Refer to OpenTravel
     * Code List Destination Service Provider Type (DSP).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestinationServiceProviderCode($index)
    {
        return isset($this->destinationServiceProviderCode[$index]);
    }

    /**
     * unset destinationServiceProviderCode
     *
     * Identifies the type of desitnation service provider used. Refer to OpenTravel
     * Code List Destination Service Provider Type (DSP).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestinationServiceProviderCode($index)
    {
        unset($this->destinationServiceProviderCode[$index]);
    }

    /**
     * Gets as destinationServiceProviderCode
     *
     * Identifies the type of desitnation service provider used. Refer to OpenTravel
     * Code List Destination Service Provider Type (DSP).
     *
     * @return string[]
     */
    public function getDestinationServiceProviderCode()
    {
        return $this->destinationServiceProviderCode;
    }

    /**
     * Sets a new destinationServiceProviderCode
     *
     * Identifies the type of desitnation service provider used. Refer to OpenTravel
     * Code List Destination Service Provider Type (DSP).
     *
     * @param string $destinationServiceProviderCode
     * @return self
     */
    public function setDestinationServiceProviderCode(array $destinationServiceProviderCode)
    {
        $this->destinationServiceProviderCode = $destinationServiceProviderCode;

        return $this;
    }

    /**
     * Gets as attendeeGuestProgramIndicator
     *
     * When true, indicates organized programs were available to attendee's guests
     * (e.g., a tour).
     *
     * @return boolean
     */
    public function getAttendeeGuestProgramIndicator()
    {
        return $this->attendeeGuestProgramIndicator;
    }

    /**
     * Sets a new attendeeGuestProgramIndicator
     *
     * When true, indicates organized programs were available to attendee's guests
     * (e.g., a tour).
     *
     * @param boolean $attendeeGuestProgramIndicator
     * @return self
     */
    public function setAttendeeGuestProgramIndicator($attendeeGuestProgramIndicator)
    {
        $this->attendeeGuestProgramIndicator = $attendeeGuestProgramIndicator;

        return $this;
    }

    /**
     * Adds as eventReportRPH
     *
     * References the other events that were held in conjunction with (ICW) this event
     * as identified by the RPH located in their EventReport element.
     *
     * @return self
     * @param string $eventReportRPH
     */
    public function addToEventReportRPH($eventReportRPH)
    {
        $this->eventReportRPH[] = $eventReportRPH;

        return $this;
    }

    /**
     * isset eventReportRPH
     *
     * References the other events that were held in conjunction with (ICW) this event
     * as identified by the RPH located in their EventReport element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventReportRPH($index)
    {
        return isset($this->eventReportRPH[$index]);
    }

    /**
     * unset eventReportRPH
     *
     * References the other events that were held in conjunction with (ICW) this event
     * as identified by the RPH located in their EventReport element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventReportRPH($index)
    {
        unset($this->eventReportRPH[$index]);
    }

    /**
     * Gets as eventReportRPH
     *
     * References the other events that were held in conjunction with (ICW) this event
     * as identified by the RPH located in their EventReport element.
     *
     * @return string[]
     */
    public function getEventReportRPH()
    {
        return $this->eventReportRPH;
    }

    /**
     * Sets a new eventReportRPH
     *
     * References the other events that were held in conjunction with (ICW) this event
     * as identified by the RPH located in their EventReport element.
     *
     * @param string $eventReportRPH
     * @return self
     */
    public function setEventReportRPH(array $eventReportRPH)
    {
        $this->eventReportRPH = $eventReportRPH;

        return $this;
    }

    /**
     * Adds as eventContact
     *
     * A collection of contacts that pertain to this event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType
     * $eventContact
     */
    public function addToEventContacts(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType $eventContact
    ) {
        $this->eventContacts[] = $eventContact;

        return $this;
    }

    /**
     * isset eventContacts
     *
     * A collection of contacts that pertain to this event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventContacts($index)
    {
        return isset($this->eventContacts[$index]);
    }

    /**
     * unset eventContacts
     *
     * A collection of contacts that pertain to this event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventContacts($index)
    {
        unset($this->eventContacts[$index]);
    }

    /**
     * Gets as eventContacts
     *
     * A collection of contacts that pertain to this event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType[]
     */
    public function getEventContacts()
    {
        return $this->eventContacts;
    }

    /**
     * Sets a new eventContacts
     *
     * A collection of contacts that pertain to this event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\EventContactsAType\EventContactAType[]
     * $eventContacts
     * @return self
     */
    public function setEventContacts(array $eventContacts)
    {
        $this->eventContacts = $eventContacts;

        return $this;
    }

    /**
     * Gets as eventLocation
     *
     * Provides high-level event location information (i.e., city, state/province,
     * country).
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationGeneralType
     */
    public function getEventLocation()
    {
        return $this->eventLocation;
    }

    /**
     * Sets a new eventLocation
     *
     * Provides high-level event location information (i.e., city, state/province,
     * country).
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationGeneralType $eventLocation
     * @return self
     */
    public function setEventLocation(\Davispeixoto\OpenTravelAlliance\LocationGeneralType $eventLocation)
    {
        $this->eventLocation = $eventLocation;

        return $this;
    }

    /**
     * Adds as attendeeInfo
     *
     * Specifies the number of event attendees.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\AttendeeInfoAType
     * $attendeeInfo
     */
    public function addToAttendeeInfo(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\AttendeeInfoAType $attendeeInfo
    ) {
        $this->attendeeInfo[] = $attendeeInfo;

        return $this;
    }

    /**
     * isset attendeeInfo
     *
     * Specifies the number of event attendees.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttendeeInfo($index)
    {
        return isset($this->attendeeInfo[$index]);
    }

    /**
     * unset attendeeInfo
     *
     * Specifies the number of event attendees.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttendeeInfo($index)
    {
        unset($this->attendeeInfo[$index]);
    }

    /**
     * Gets as attendeeInfo
     *
     * Specifies the number of event attendees.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\AttendeeInfoAType[]
     */
    public function getAttendeeInfo()
    {
        return $this->attendeeInfo;
    }

    /**
     * Sets a new attendeeInfo
     *
     * Specifies the number of event attendees.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\AttendeeInfoAType[]
     * $attendeeInfo
     * @return self
     */
    public function setAttendeeInfo(array $attendeeInfo)
    {
        $this->attendeeInfo = $attendeeInfo;

        return $this;
    }

    /**
     * Adds as date
     *
     * A collection of dates for past or future events.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType
     * $date
     */
    public function addToDates(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType $date
    ) {
        $this->dates[] = $date;

        return $this;
    }

    /**
     * isset dates
     *
     * A collection of dates for past or future events.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDates($index)
    {
        return isset($this->dates[$index]);
    }

    /**
     * unset dates
     *
     * A collection of dates for past or future events.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDates($index)
    {
        unset($this->dates[$index]);
    }

    /**
     * Gets as dates
     *
     * A collection of dates for past or future events.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType[]
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Sets a new dates
     *
     * A collection of dates for past or future events.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType[]
     * $dates
     * @return self
     */
    public function setDates(array $dates)
    {
        $this->dates = $dates;

        return $this;
    }

    /**
     * Gets as housingInfo
     *
     * General hotel usage information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\HousingInfoAType
     */
    public function getHousingInfo()
    {
        return $this->housingInfo;
    }

    /**
     * Sets a new housingInfo
     *
     * General hotel usage information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\HousingInfoAType
     * $housingInfo
     * @return self
     */
    public function setHousingInfo(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\HousingInfoAType $housingInfo
    ) {
        $this->housingInfo = $housingInfo;

        return $this;
    }

    /**
     * Gets as foodAndBeverageInfo
     *
     * General food and beverage information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FoodAndBeverageInfoAType
     */
    public function getFoodAndBeverageInfo()
    {
        return $this->foodAndBeverageInfo;
    }

    /**
     * Sets a new foodAndBeverageInfo
     *
     * General food and beverage information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FoodAndBeverageInfoAType
     * $foodAndBeverageInfo
     * @return self
     */
    public function setFoodAndBeverageInfo(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FoodAndBeverageInfoAType $foodAndBeverageInfo
    ) {
        $this->foodAndBeverageInfo = $foodAndBeverageInfo;

        return $this;
    }

    /**
     * Gets as functionSpaceInfo
     *
     * General function space information for this event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType
     */
    public function getFunctionSpaceInfo()
    {
        return $this->functionSpaceInfo;
    }

    /**
     * Sets a new functionSpaceInfo
     *
     * General function space information for this event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType
     * $functionSpaceInfo
     * @return self
     */
    public function setFunctionSpaceInfo(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType $functionSpaceInfo
    ) {
        $this->functionSpaceInfo = $functionSpaceInfo;

        return $this;
    }

    /**
     * Gets as exhibitionInfo
     *
     * General exhibition information for this event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\ExhibitionInfoAType
     */
    public function getExhibitionInfo()
    {
        return $this->exhibitionInfo;
    }

    /**
     * Sets a new exhibitionInfo
     *
     * General exhibition information for this event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\ExhibitionInfoAType
     * $exhibitionInfo
     * @return self
     */
    public function setExhibitionInfo(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\ExhibitionInfoAType $exhibitionInfo
    ) {
        $this->exhibitionInfo = $exhibitionInfo;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments that pertain to the overall event.
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
     * A collection of comments that pertain to the overall event.
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
     * A collection of comments that pertain to the overall event.
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
     * A collection of comments that pertain to the overall event.
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
     * A collection of comments that pertain to the overall event.
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


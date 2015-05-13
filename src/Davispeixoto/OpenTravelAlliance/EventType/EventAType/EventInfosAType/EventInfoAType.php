<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType;

/**
 * Class representing EventInfoAType
 */
class EventInfoAType
{

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
     * A collection of additional dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[]
     * $additionalDates
     */
    private $additionalDates = null;

    /**
     * A collection of contacts that pertain to this occurence of the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[]
     * $contacts
     */
    private $contacts = null;

    /**
     * Describes an event at which products and services are displayed.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType[]
     * $exhibition
     */
    private $exhibition = null;

    /**
     * A collection of transportation elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TransportationType\TransportationAType[]
     * $transportations
     */
    private $transportations = null;

    /**
     * Used to provide tax exemption information for the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\TaxExemptInfoAType[]
     * $taxExemptInfo
     */
    private $taxExemptInfo = null;

    /**
     * A collection of comments that pertain to this occurrence of the event.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

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
     * Adds as additionalDate
     *
     * A collection of additional dates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType
     * $additionalDate
     */
    public function addToAdditionalDates(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType $additionalDate
    ) {
        $this->additionalDates[] = $additionalDate;

        return $this;
    }

    /**
     * isset additionalDates
     *
     * A collection of additional dates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalDates($index)
    {
        return isset($this->additionalDates[$index]);
    }

    /**
     * unset additionalDates
     *
     * A collection of additional dates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalDates($index)
    {
        unset($this->additionalDates[$index]);
    }

    /**
     * Gets as additionalDates
     *
     * A collection of additional dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[]
     */
    public function getAdditionalDates()
    {
        return $this->additionalDates;
    }

    /**
     * Sets a new additionalDates
     *
     * A collection of additional dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[]
     * $additionalDates
     * @return self
     */
    public function setAdditionalDates(array $additionalDates)
    {
        $this->additionalDates = $additionalDates;

        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts that pertain to this occurence of the event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType
     * $contact
     */
    public function addToContacts(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType $contact
    ) {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts that pertain to this occurence of the event.
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
     * A collection of contacts that pertain to this occurence of the event.
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
     * A collection of contacts that pertain to this occurence of the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts that pertain to this occurence of the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[]
     * $contacts
     * @return self
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Adds as exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType
     * $exhibition
     */
    public function addToExhibition(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType $exhibition
    ) {
        $this->exhibition[] = $exhibition;

        return $this;
    }

    /**
     * isset exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExhibition($index)
    {
        return isset($this->exhibition[$index]);
    }

    /**
     * unset exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExhibition($index)
    {
        unset($this->exhibition[$index]);
    }

    /**
     * Gets as exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType[]
     */
    public function getExhibition()
    {
        return $this->exhibition;
    }

    /**
     * Sets a new exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType[]
     * $exhibition
     * @return self
     */
    public function setExhibition(array $exhibition)
    {
        $this->exhibition = $exhibition;

        return $this;
    }

    /**
     * Adds as transportation
     *
     * A collection of transportation elements.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TransportationType\TransportationAType
     * $transportation
     */
    public function addToTransportations(
        \Davispeixoto\OpenTravelAlliance\TransportationType\TransportationAType $transportation
    ) {
        $this->transportations[] = $transportation;

        return $this;
    }

    /**
     * isset transportations
     *
     * A collection of transportation elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransportations($index)
    {
        return isset($this->transportations[$index]);
    }

    /**
     * unset transportations
     *
     * A collection of transportation elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransportations($index)
    {
        unset($this->transportations[$index]);
    }

    /**
     * Gets as transportations
     *
     * A collection of transportation elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TransportationType\TransportationAType[]
     */
    public function getTransportations()
    {
        return $this->transportations;
    }

    /**
     * Sets a new transportations
     *
     * A collection of transportation elements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TransportationType\TransportationAType[]
     * $transportations
     * @return self
     */
    public function setTransportations(array $transportations)
    {
        $this->transportations = $transportations;

        return $this;
    }

    /**
     * Adds as taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\TaxExemptInfoAType
     * $taxExemptInfo
     */
    public function addToTaxExemptInfo(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\TaxExemptInfoAType $taxExemptInfo
    ) {
        $this->taxExemptInfo[] = $taxExemptInfo;

        return $this;
    }

    /**
     * isset taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxExemptInfo($index)
    {
        return isset($this->taxExemptInfo[$index]);
    }

    /**
     * unset taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxExemptInfo($index)
    {
        unset($this->taxExemptInfo[$index]);
    }

    /**
     * Gets as taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\TaxExemptInfoAType[]
     */
    public function getTaxExemptInfo()
    {
        return $this->taxExemptInfo;
    }

    /**
     * Sets a new taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\TaxExemptInfoAType[]
     * $taxExemptInfo
     * @return self
     */
    public function setTaxExemptInfo(array $taxExemptInfo)
    {
        $this->taxExemptInfo = $taxExemptInfo;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments that pertain to this occurrence of the event.
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
     * A collection of comments that pertain to this occurrence of the event.
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
     * A collection of comments that pertain to this occurrence of the event.
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
     * A collection of comments that pertain to this occurrence of the event.
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
     * A collection of comments that pertain to this occurrence of the event.
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


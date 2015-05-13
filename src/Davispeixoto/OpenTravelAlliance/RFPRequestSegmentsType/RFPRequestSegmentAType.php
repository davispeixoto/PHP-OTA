<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType;

/**
 * Class representing RFPRequestSegmentAType
 */
class RFPRequestSegmentAType
{

    /**
     * When true, indicates a room block is requested. When false, indicates no room
     * block is requested and RoomBlock will not be passed.
     *
     * @property boolean $roomBlockIndicator
     */
    private $roomBlockIndicator = null;

    /**
     * When true, indicates function space is required. When false, indicates no
     * function space is required and EventBlock will not be passed.
     *
     * @property boolean $eventBlockIndicator
     */
    private $eventBlockIndicator = null;

    /**
     * Used to provide details on the proposal such as the key factors that will play a
     * role in the proposal evaluation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType
     * $proposalSpecification
     */
    private $proposalSpecification = null;

    /**
     * This is who is submitting the request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     * $profiles
     */
    private $profiles = null;

    /**
     * A collection of dates which allows you to request preferred and/or alternate
     * dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType
     * $dates
     */
    private $dates = null;

    /**
     * A collection of sites for which the request is being submitted (e.g. a hotel,
     * national sales office, convention center).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[]
     * $sites
     */
    private $sites = null;

    /**
     * This is information pertaining to room requirements for this request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType
     * $roomBlock
     */
    private $roomBlock = null;

    /**
     * This is information pertaining to the event requirements for this request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType
     * $eventBlock
     */
    private $eventBlock = null;

    /**
     * Collection of preferences or requirements for the RFP.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[]
     * $preferences
     */
    private $preferences = null;

    /**
     * A collection of individual Histories.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType[]
     * $histories
     */
    private $histories = null;

    /**
     * OTA formatted text type
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RFPIDAType[]
     * $rFPID
     */
    private $rFPID = null;

    /**
     * A collection of additional information requests.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType[]
     * $additionalInfos
     */
    private $additionalInfos = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as roomBlockIndicator
     *
     * When true, indicates a room block is requested. When false, indicates no room
     * block is requested and RoomBlock will not be passed.
     *
     * @return boolean
     */
    public function getRoomBlockIndicator()
    {
        return $this->roomBlockIndicator;
    }

    /**
     * Sets a new roomBlockIndicator
     *
     * When true, indicates a room block is requested. When false, indicates no room
     * block is requested and RoomBlock will not be passed.
     *
     * @param boolean $roomBlockIndicator
     * @return self
     */
    public function setRoomBlockIndicator($roomBlockIndicator)
    {
        $this->roomBlockIndicator = $roomBlockIndicator;

        return $this;
    }

    /**
     * Gets as eventBlockIndicator
     *
     * When true, indicates function space is required. When false, indicates no
     * function space is required and EventBlock will not be passed.
     *
     * @return boolean
     */
    public function getEventBlockIndicator()
    {
        return $this->eventBlockIndicator;
    }

    /**
     * Sets a new eventBlockIndicator
     *
     * When true, indicates function space is required. When false, indicates no
     * function space is required and EventBlock will not be passed.
     *
     * @param boolean $eventBlockIndicator
     * @return self
     */
    public function setEventBlockIndicator($eventBlockIndicator)
    {
        $this->eventBlockIndicator = $eventBlockIndicator;

        return $this;
    }

    /**
     * Gets as proposalSpecification
     *
     * Used to provide details on the proposal such as the key factors that will play a
     * role in the proposal evaluation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType
     */
    public function getProposalSpecification()
    {
        return $this->proposalSpecification;
    }

    /**
     * Sets a new proposalSpecification
     *
     * Used to provide details on the proposal such as the key factors that will play a
     * role in the proposal evaluation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType
     * $proposalSpecification
     * @return self
     */
    public function setProposalSpecification(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType $proposalSpecification
    ) {
        $this->proposalSpecification = $proposalSpecification;

        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * This is who is submitting the request.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType
     * $profileInfo
     */
    public function addToProfiles(\Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;

        return $this;
    }

    /**
     * isset profiles
     *
     * This is who is submitting the request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * This is who is submitting the request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * This is who is submitting the request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * This is who is submitting the request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfilesType\ProfileInfoAType[]
     * $profiles
     * @return self
     */
    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;

        return $this;
    }

    /**
     * Gets as dates
     *
     * A collection of dates which allows you to request preferred and/or alternate
     * dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Sets a new dates
     *
     * A collection of dates which allows you to request preferred and/or alternate
     * dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType
     * $dates
     * @return self
     */
    public function setDates(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType $dates
    ) {
        $this->dates = $dates;

        return $this;
    }

    /**
     * Adds as site
     *
     * A collection of sites for which the request is being submitted (e.g. a hotel,
     * national sales office, convention center).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType
     * $site
     */
    public function addToSites(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType $site
    ) {
        $this->sites[] = $site;

        return $this;
    }

    /**
     * isset sites
     *
     * A collection of sites for which the request is being submitted (e.g. a hotel,
     * national sales office, convention center).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSites($index)
    {
        return isset($this->sites[$index]);
    }

    /**
     * unset sites
     *
     * A collection of sites for which the request is being submitted (e.g. a hotel,
     * national sales office, convention center).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSites($index)
    {
        unset($this->sites[$index]);
    }

    /**
     * Gets as sites
     *
     * A collection of sites for which the request is being submitted (e.g. a hotel,
     * national sales office, convention center).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[]
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Sets a new sites
     *
     * A collection of sites for which the request is being submitted (e.g. a hotel,
     * national sales office, convention center).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[]
     * $sites
     * @return self
     */
    public function setSites(array $sites)
    {
        $this->sites = $sites;

        return $this;
    }

    /**
     * Gets as roomBlock
     *
     * This is information pertaining to room requirements for this request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType
     */
    public function getRoomBlock()
    {
        return $this->roomBlock;
    }

    /**
     * Sets a new roomBlock
     *
     * This is information pertaining to room requirements for this request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType
     * $roomBlock
     * @return self
     */
    public function setRoomBlock(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType $roomBlock
    ) {
        $this->roomBlock = $roomBlock;

        return $this;
    }

    /**
     * Gets as eventBlock
     *
     * This is information pertaining to the event requirements for this request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType
     */
    public function getEventBlock()
    {
        return $this->eventBlock;
    }

    /**
     * Sets a new eventBlock
     *
     * This is information pertaining to the event requirements for this request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType
     * $eventBlock
     * @return self
     */
    public function setEventBlock(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType $eventBlock
    ) {
        $this->eventBlock = $eventBlock;

        return $this;
    }

    /**
     * Adds as preference
     *
     * Collection of preferences or requirements for the RFP.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType
     * $preference
     */
    public function addToPreferences(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType $preference
    ) {
        $this->preferences[] = $preference;

        return $this;
    }

    /**
     * isset preferences
     *
     * Collection of preferences or requirements for the RFP.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPreferences($index)
    {
        return isset($this->preferences[$index]);
    }

    /**
     * unset preferences
     *
     * Collection of preferences or requirements for the RFP.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPreferences($index)
    {
        unset($this->preferences[$index]);
    }

    /**
     * Gets as preferences
     *
     * Collection of preferences or requirements for the RFP.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[]
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * Sets a new preferences
     *
     * Collection of preferences or requirements for the RFP.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[]
     * $preferences
     * @return self
     */
    public function setPreferences(array $preferences)
    {
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * Adds as history
     *
     * A collection of individual Histories.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType
     * $history
     */
    public function addToHistories(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType $history
    ) {
        $this->histories[] = $history;

        return $this;
    }

    /**
     * isset histories
     *
     * A collection of individual Histories.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHistories($index)
    {
        return isset($this->histories[$index]);
    }

    /**
     * unset histories
     *
     * A collection of individual Histories.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHistories($index)
    {
        unset($this->histories[$index]);
    }

    /**
     * Gets as histories
     *
     * A collection of individual Histories.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType[]
     */
    public function getHistories()
    {
        return $this->histories;
    }

    /**
     * Sets a new histories
     *
     * A collection of individual Histories.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType[]
     * $histories
     * @return self
     */
    public function setHistories(array $histories)
    {
        $this->histories = $histories;

        return $this;
    }

    /**
     * Adds as comments
     *
     * OTA formatted text type
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * isset comments
     *
     * OTA formatted text type
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
     * OTA formatted text type
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
     * OTA formatted text type
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
     * OTA formatted text type
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Adds as rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RFPIDAType
     * $rFPID
     */
    public function addToRFPID(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RFPIDAType $rFPID
    ) {
        $this->rFPID[] = $rFPID;

        return $this;
    }

    /**
     * isset rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRFPID($index)
    {
        return isset($this->rFPID[$index]);
    }

    /**
     * unset rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRFPID($index)
    {
        unset($this->rFPID[$index]);
    }

    /**
     * Gets as rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RFPIDAType[]
     */
    public function getRFPID()
    {
        return $this->rFPID;
    }

    /**
     * Sets a new rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RFPIDAType[]
     * $rFPID
     * @return self
     */
    public function setRFPID(array $rFPID)
    {
        $this->rFPID = $rFPID;

        return $this;
    }

    /**
     * Adds as additionalInfo
     *
     * A collection of additional information requests.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType
     * $additionalInfo
     */
    public function addToAdditionalInfos(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo
    ) {
        $this->additionalInfos[] = $additionalInfo;

        return $this;
    }

    /**
     * isset additionalInfos
     *
     * A collection of additional information requests.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalInfos($index)
    {
        return isset($this->additionalInfos[$index]);
    }

    /**
     * unset additionalInfos
     *
     * A collection of additional information requests.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalInfos($index)
    {
        unset($this->additionalInfos[$index]);
    }

    /**
     * Gets as additionalInfos
     *
     * A collection of additional information requests.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType[]
     */
    public function getAdditionalInfos()
    {
        return $this->additionalInfos;
    }

    /**
     * Sets a new additionalInfos
     *
     * A collection of additional information requests.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType[]
     * $additionalInfos
     * @return self
     */
    public function setAdditionalInfos(array $additionalInfos)
    {
        $this->additionalInfos = $additionalInfos;

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


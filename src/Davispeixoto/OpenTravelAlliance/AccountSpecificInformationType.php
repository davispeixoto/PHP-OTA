<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AccountSpecificInformationType
 *
 * This describes data that is specific to a single account.
 * XSD Type: AccountSpecificInformationType
 */
class AccountSpecificInformationType
{

    /**
     * This indicates the information contained in this message is correct and binding.
     *
     * @property boolean $contractAgreementIndicator
     */
    private $contractAgreementIndicator = null;

    /**
     * It describes specific criteria upon which the client rate is based.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\AccountSpecificRateInfoAType
     * $accountSpecificRateInfo
     */
    private $accountSpecificRateInfo = null;

    /**
     * A Collection of room types.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[]
     * $roomTypes
     */
    private $roomTypes = null;

    /**
     * A collection of blackout dates.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $blackoutDates
     */
    private $blackoutDates = null;

    /**
     * Defines the contacts related to the RFP.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactInfoRootType[] $contactInfos
     */
    private $contactInfos = null;

    /**
     * Collection of supplemental information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as contractAgreementIndicator
     *
     * This indicates the information contained in this message is correct and binding.
     *
     * @return boolean
     */
    public function getContractAgreementIndicator()
    {
        return $this->contractAgreementIndicator;
    }

    /**
     * Sets a new contractAgreementIndicator
     *
     * This indicates the information contained in this message is correct and binding.
     *
     * @param boolean $contractAgreementIndicator
     * @return self
     */
    public function setContractAgreementIndicator($contractAgreementIndicator)
    {
        $this->contractAgreementIndicator = $contractAgreementIndicator;

        return $this;
    }

    /**
     * Gets as accountSpecificRateInfo
     *
     * It describes specific criteria upon which the client rate is based.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\AccountSpecificRateInfoAType
     */
    public function getAccountSpecificRateInfo()
    {
        return $this->accountSpecificRateInfo;
    }

    /**
     * Sets a new accountSpecificRateInfo
     *
     * It describes specific criteria upon which the client rate is based.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\AccountSpecificRateInfoAType
     * $accountSpecificRateInfo
     * @return self
     */
    public function setAccountSpecificRateInfo(
        \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\AccountSpecificRateInfoAType $accountSpecificRateInfo
    ) {
        $this->accountSpecificRateInfo = $accountSpecificRateInfo;

        return $this;
    }

    /**
     * Adds as roomType
     *
     * A Collection of room types.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType
     * $roomType
     */
    public function addToRoomTypes(
        \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType $roomType
    ) {
        $this->roomTypes[] = $roomType;

        return $this;
    }

    /**
     * isset roomTypes
     *
     * A Collection of room types.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomTypes($index)
    {
        return isset($this->roomTypes[$index]);
    }

    /**
     * unset roomTypes
     *
     * A Collection of room types.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomTypes($index)
    {
        unset($this->roomTypes[$index]);
    }

    /**
     * Gets as roomTypes
     *
     * A Collection of room types.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * A Collection of room types.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType[]
     * $roomTypes
     * @return self
     */
    public function setRoomTypes(array $roomTypes)
    {
        $this->roomTypes = $roomTypes;

        return $this;
    }

    /**
     * Adds as blackoutDate
     *
     * A collection of blackout dates.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $blackoutDate
     */
    public function addToBlackoutDates(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $blackoutDate)
    {
        $this->blackoutDates[] = $blackoutDate;

        return $this;
    }

    /**
     * isset blackoutDates
     *
     * A collection of blackout dates.
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
     * A collection of blackout dates.
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
     * A collection of blackout dates.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[]
     */
    public function getBlackoutDates()
    {
        return $this->blackoutDates;
    }

    /**
     * Sets a new blackoutDates
     *
     * A collection of blackout dates.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType[] $blackoutDates
     * @return self
     */
    public function setBlackoutDates(array $blackoutDates)
    {
        $this->blackoutDates = $blackoutDates;

        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * Defines the contacts related to the RFP.
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
     * Defines the contacts related to the RFP.
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
     * Defines the contacts related to the RFP.
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
     * Defines the contacts related to the RFP.
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
     * Defines the contacts related to the RFP.
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
     * Adds as comment
     *
     * Collection of supplemental information.
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
     * Collection of supplemental information.
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
     * Collection of supplemental information.
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
     * Collection of supplemental information.
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
     * Collection of supplemental information.
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


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTACruisePkgAvailRQ
 */
class OTACruisePkgAvailRQ
{

    /**
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @property string $echoToken
     */
    private $echoToken = null;

    /**
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @property \DateTime $timeStamp
     */
    private $timeStamp = null;

    /**
     * Test or Production target system indicator.
     *
     * @property string $target
     */
    private $target = null;

    /**
     * The name of the Test or Production system.
     *
     * @property string $targetName
     */
    private $targetName = null;

    /**
     * The OpenTravel message version indicated by a decimal value.
     *
     * @property float $version
     */
    private $version = null;

    /**
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @property string $transactionIdentifier
     */
    private $transactionIdentifier = null;

    /**
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @property integer $sequenceNmbr
     */
    private $sequenceNmbr = null;

    /**
     * This indicates where this message falls within a sequence of messages.
     *
     * @property string $transactionStatusCode
     */
    private $transactionStatusCode = null;

    /**
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @property boolean $retransmissionIndicator
     */
    private $retransmissionIndicator = null;

    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @property string $correlationID
     */
    private $correlationID = null;

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
     * If true, this indicates more items are available. If false, no more items are
     * available.
     *
     * @property boolean $moreIndicator
     */
    private $moreIndicator = null;

    /**
     * A reference to the last response returned. Originally set in the response
     * message and will be used in the next query for more details.
     *
     * @property string $moreDataEchoToken
     */
    private $moreDataEchoToken = null;

    /**
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @property integer $maxResponses
     */
    private $maxResponses = null;

    /**
     * Point of sale object.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Collection of guest information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType[]
     * $guestInfos
     */
    private $guestInfos = null;

    /**
     * Specifies guest quantity and guest types.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     */
    private $guestCounts = null;

    /**
     * Contains information related to the selected sailing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo
     */
    private $sailingInfo = null;

    /**
     * Specifies the type of package options of interest.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CruisePackageType[] $packageOption
     */
    private $packageOption = null;

    /**
     * Used to further qualify the package availability search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SearchQualifierType $searchQualifiers
     */
    private $searchQualifiers = null;

    /**
     * A reference to a specific reservation which may limit the available packages.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ReservationIDType $reservationID
     */
    private $reservationID = null;

    /**
     * Gets as echoToken
     *
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @return string
     */
    public function getEchoToken()
    {
        return $this->echoToken;
    }

    /**
     * Sets a new echoToken
     *
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @param string $echoToken
     * @return self
     */
    public function setEchoToken($echoToken)
    {
        $this->echoToken = $echoToken;

        return $this;
    }

    /**
     * Gets as timeStamp
     *
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * Sets a new timeStamp
     *
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @param \DateTime $timeStamp
     * @return self
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * Gets as target
     *
     * Test or Production target system indicator.
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Test or Production target system indicator.
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Gets as targetName
     *
     * The name of the Test or Production system.
     *
     * @return string
     */
    public function getTargetName()
    {
        return $this->targetName;
    }

    /**
     * Sets a new targetName
     *
     * The name of the Test or Production system.
     *
     * @param string $targetName
     * @return self
     */
    public function setTargetName($targetName)
    {
        $this->targetName = $targetName;

        return $this;
    }

    /**
     * Gets as version
     *
     * The OpenTravel message version indicated by a decimal value.
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The OpenTravel message version indicated by a decimal value.
     *
     * @param float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as transactionIdentifier
     *
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @return string
     */
    public function getTransactionIdentifier()
    {
        return $this->transactionIdentifier;
    }

    /**
     * Sets a new transactionIdentifier
     *
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @param string $transactionIdentifier
     * @return self
     */
    public function setTransactionIdentifier($transactionIdentifier)
    {
        $this->transactionIdentifier = $transactionIdentifier;

        return $this;
    }

    /**
     * Gets as sequenceNmbr
     *
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @return integer
     */
    public function getSequenceNmbr()
    {
        return $this->sequenceNmbr;
    }

    /**
     * Sets a new sequenceNmbr
     *
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @param integer $sequenceNmbr
     * @return self
     */
    public function setSequenceNmbr($sequenceNmbr)
    {
        $this->sequenceNmbr = $sequenceNmbr;

        return $this;
    }

    /**
     * Gets as transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @return string
     */
    public function getTransactionStatusCode()
    {
        return $this->transactionStatusCode;
    }

    /**
     * Sets a new transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @param string $transactionStatusCode
     * @return self
     */
    public function setTransactionStatusCode($transactionStatusCode)
    {
        $this->transactionStatusCode = $transactionStatusCode;

        return $this;
    }

    /**
     * Gets as retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @return boolean
     */
    public function getRetransmissionIndicator()
    {
        return $this->retransmissionIndicator;
    }

    /**
     * Sets a new retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @param boolean $retransmissionIndicator
     * @return self
     */
    public function setRetransmissionIndicator($retransmissionIndicator)
    {
        $this->retransmissionIndicator = $retransmissionIndicator;

        return $this;
    }

    /**
     * Gets as correlationID
     *
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;

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
     * Gets as moreIndicator
     *
     * If true, this indicates more items are available. If false, no more items are
     * available.
     *
     * @return boolean
     */
    public function getMoreIndicator()
    {
        return $this->moreIndicator;
    }

    /**
     * Sets a new moreIndicator
     *
     * If true, this indicates more items are available. If false, no more items are
     * available.
     *
     * @param boolean $moreIndicator
     * @return self
     */
    public function setMoreIndicator($moreIndicator)
    {
        $this->moreIndicator = $moreIndicator;

        return $this;
    }

    /**
     * Gets as moreDataEchoToken
     *
     * A reference to the last response returned. Originally set in the response
     * message and will be used in the next query for more details.
     *
     * @return string
     */
    public function getMoreDataEchoToken()
    {
        return $this->moreDataEchoToken;
    }

    /**
     * Sets a new moreDataEchoToken
     *
     * A reference to the last response returned. Originally set in the response
     * message and will be used in the next query for more details.
     *
     * @param string $moreDataEchoToken
     * @return self
     */
    public function setMoreDataEchoToken($moreDataEchoToken)
    {
        $this->moreDataEchoToken = $moreDataEchoToken;

        return $this;
    }

    /**
     * Gets as maxResponses
     *
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @return integer
     */
    public function getMaxResponses()
    {
        return $this->maxResponses;
    }

    /**
     * Sets a new maxResponses
     *
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @param integer $maxResponses
     * @return self
     */
    public function setMaxResponses($maxResponses)
    {
        $this->maxResponses = $maxResponses;

        return $this;
    }

    /**
     * Adds as source
     *
     * Point of sale object.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SourceType $source
     */
    public function addToPOS(\Davispeixoto\OpenTravelAlliance\SourceType $source)
    {
        $this->pOS[] = $source;

        return $this;
    }

    /**
     * isset pOS
     *
     * Point of sale object.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * Point of sale object.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * Point of sale object.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Point of sale object.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Adds as guestInfo
     *
     * Collection of guest information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType
     * $guestInfo
     */
    public function addToGuestInfos(
        \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType $guestInfo
    ) {
        $this->guestInfos[] = $guestInfo;

        return $this;
    }

    /**
     * isset guestInfos
     *
     * Collection of guest information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestInfos($index)
    {
        return isset($this->guestInfos[$index]);
    }

    /**
     * unset guestInfos
     *
     * Collection of guest information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestInfos($index)
    {
        unset($this->guestInfos[$index]);
    }

    /**
     * Gets as guestInfos
     *
     * Collection of guest information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType[]
     */
    public function getGuestInfos()
    {
        return $this->guestInfos;
    }

    /**
     * Sets a new guestInfos
     *
     * Collection of guest information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType[]
     * $guestInfos
     * @return self
     */
    public function setGuestInfos(array $guestInfos)
    {
        $this->guestInfos = $guestInfos;

        return $this;
    }

    /**
     * Adds as guestCount
     *
     * Specifies guest quantity and guest types.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCounts(
        \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestCountsAType\GuestCountAType $guestCount
    ) {
        $this->guestCounts[] = $guestCount;

        return $this;
    }

    /**
     * isset guestCounts
     *
     * Specifies guest quantity and guest types.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestCounts($index)
    {
        return isset($this->guestCounts[$index]);
    }

    /**
     * unset guestCounts
     *
     * Specifies guest quantity and guest types.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestCounts($index)
    {
        unset($this->guestCounts[$index]);
    }

    /**
     * Gets as guestCounts
     *
     * Specifies guest quantity and guest types.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * Specifies guest quantity and guest types.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     * @return self
     */
    public function setGuestCounts(array $guestCounts)
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }

    /**
     * Gets as sailingInfo
     *
     * Contains information related to the selected sailing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType
     */
    public function getSailingInfo()
    {
        return $this->sailingInfo;
    }

    /**
     * Sets a new sailingInfo
     *
     * Contains information related to the selected sailing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo
     * @return self
     */
    public function setSailingInfo(\Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo)
    {
        $this->sailingInfo = $sailingInfo;

        return $this;
    }

    /**
     * Adds as packageOption
     *
     * Specifies the type of package options of interest.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CruisePackageType $packageOption
     */
    public function addToPackageOption(\Davispeixoto\OpenTravelAlliance\CruisePackageType $packageOption)
    {
        $this->packageOption[] = $packageOption;

        return $this;
    }

    /**
     * isset packageOption
     *
     * Specifies the type of package options of interest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPackageOption($index)
    {
        return isset($this->packageOption[$index]);
    }

    /**
     * unset packageOption
     *
     * Specifies the type of package options of interest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPackageOption($index)
    {
        unset($this->packageOption[$index]);
    }

    /**
     * Gets as packageOption
     *
     * Specifies the type of package options of interest.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CruisePackageType[]
     */
    public function getPackageOption()
    {
        return $this->packageOption;
    }

    /**
     * Sets a new packageOption
     *
     * Specifies the type of package options of interest.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruisePackageType[] $packageOption
     * @return self
     */
    public function setPackageOption(array $packageOption)
    {
        $this->packageOption = $packageOption;

        return $this;
    }

    /**
     * Gets as searchQualifiers
     *
     * Used to further qualify the package availability search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SearchQualifierType
     */
    public function getSearchQualifiers()
    {
        return $this->searchQualifiers;
    }

    /**
     * Sets a new searchQualifiers
     *
     * Used to further qualify the package availability search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SearchQualifierType $searchQualifiers
     * @return self
     */
    public function setSearchQualifiers(\Davispeixoto\OpenTravelAlliance\SearchQualifierType $searchQualifiers)
    {
        $this->searchQualifiers = $searchQualifiers;

        return $this;
    }

    /**
     * Gets as reservationID
     *
     * A reference to a specific reservation which may limit the available packages.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ReservationIDType
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * A reference to a specific reservation which may limit the available packages.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ReservationIDType $reservationID
     * @return self
     */
    public function setReservationID(\Davispeixoto\OpenTravelAlliance\ReservationIDType $reservationID)
    {
        $this->reservationID = $reservationID;

        return $this;
    }


}


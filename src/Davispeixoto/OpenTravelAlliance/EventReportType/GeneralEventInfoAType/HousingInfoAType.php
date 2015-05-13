<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType;

/**
 * Class representing HousingInfoAType
 */
class HousingInfoAType
{

    /**
     * When true, indicates the event utilized sleeping rooms.
     *
     * @property boolean $sleepingRoomsIndicator
     */
    private $sleepingRoomsIndicator = null;

    /**
     * Specifies the total number of hotels utilized by the event.
     *
     * @property integer $hotelQuantity
     */
    private $hotelQuantity = null;

    /**
     * Specifies the total number of sleeping rooms utilized on the peak night across
     * all hotels.
     *
     * @property integer $peakRoomNightQuantity
     */
    private $peakRoomNightQuantity = null;

    /**
     * The type of housing service provider used for this event. Refer to OpenTravel
     * Code list Destination Service Provider Type (DSP).
     *
     * @property string $housingProviderCode
     */
    private $housingProviderCode = null;

    /**
     * Name of the housing service provider used for this event.
     *
     * @property string $housingProviderName
     */
    private $housingProviderName = null;

    /**
     * A collection of comments regarding the general hotel usage.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as sleepingRoomsIndicator
     *
     * When true, indicates the event utilized sleeping rooms.
     *
     * @return boolean
     */
    public function getSleepingRoomsIndicator()
    {
        return $this->sleepingRoomsIndicator;
    }

    /**
     * Sets a new sleepingRoomsIndicator
     *
     * When true, indicates the event utilized sleeping rooms.
     *
     * @param boolean $sleepingRoomsIndicator
     * @return self
     */
    public function setSleepingRoomsIndicator($sleepingRoomsIndicator)
    {
        $this->sleepingRoomsIndicator = $sleepingRoomsIndicator;

        return $this;
    }

    /**
     * Gets as hotelQuantity
     *
     * Specifies the total number of hotels utilized by the event.
     *
     * @return integer
     */
    public function getHotelQuantity()
    {
        return $this->hotelQuantity;
    }

    /**
     * Sets a new hotelQuantity
     *
     * Specifies the total number of hotels utilized by the event.
     *
     * @param integer $hotelQuantity
     * @return self
     */
    public function setHotelQuantity($hotelQuantity)
    {
        $this->hotelQuantity = $hotelQuantity;

        return $this;
    }

    /**
     * Gets as peakRoomNightQuantity
     *
     * Specifies the total number of sleeping rooms utilized on the peak night across
     * all hotels.
     *
     * @return integer
     */
    public function getPeakRoomNightQuantity()
    {
        return $this->peakRoomNightQuantity;
    }

    /**
     * Sets a new peakRoomNightQuantity
     *
     * Specifies the total number of sleeping rooms utilized on the peak night across
     * all hotels.
     *
     * @param integer $peakRoomNightQuantity
     * @return self
     */
    public function setPeakRoomNightQuantity($peakRoomNightQuantity)
    {
        $this->peakRoomNightQuantity = $peakRoomNightQuantity;

        return $this;
    }

    /**
     * Gets as housingProviderCode
     *
     * The type of housing service provider used for this event. Refer to OpenTravel
     * Code list Destination Service Provider Type (DSP).
     *
     * @return string
     */
    public function getHousingProviderCode()
    {
        return $this->housingProviderCode;
    }

    /**
     * Sets a new housingProviderCode
     *
     * The type of housing service provider used for this event. Refer to OpenTravel
     * Code list Destination Service Provider Type (DSP).
     *
     * @param string $housingProviderCode
     * @return self
     */
    public function setHousingProviderCode($housingProviderCode)
    {
        $this->housingProviderCode = $housingProviderCode;

        return $this;
    }

    /**
     * Gets as housingProviderName
     *
     * Name of the housing service provider used for this event.
     *
     * @return string
     */
    public function getHousingProviderName()
    {
        return $this->housingProviderName;
    }

    /**
     * Sets a new housingProviderName
     *
     * Name of the housing service provider used for this event.
     *
     * @param string $housingProviderName
     * @return self
     */
    public function setHousingProviderName($housingProviderName)
    {
        $this->housingProviderName = $housingProviderName;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments regarding the general hotel usage.
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
     * A collection of comments regarding the general hotel usage.
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
     * A collection of comments regarding the general hotel usage.
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
     * A collection of comments regarding the general hotel usage.
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
     * A collection of comments regarding the general hotel usage.
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


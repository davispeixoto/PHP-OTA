<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCabinHoldRS\SelectedSailingAType;

/**
 * Class representing DiningAType
 */
class DiningAType
{

    /**
     * Indicates the guest smoking preference. Refer to OpenTravel Code table Option
     * Type Code (OTC).
     *
     * @property string $smokingCode
     */
    private $smokingCode = null;

    /**
     * Specifies the Dining Room.
     *
     * @property string $diningRoom
     */
    private $diningRoom = null;

    /**
     * Specifies the table size of the dining.
     *
     * @property string $tableSize
     */
    private $tableSize = null;

    /**
     * Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @property string $ageCode
     */
    private $ageCode = null;

    /**
     * Typically used to define the preferred language of the server.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Dining service. Typical values are: first, second, third, open.
     *
     * @property string $sitting
     */
    private $sitting = null;

    /**
     * Dining status. Refer to OpenTravel Code table Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * @property string $preference
     */
    private $preference = null;

    /**
     * Gets as smokingCode
     *
     * Indicates the guest smoking preference. Refer to OpenTravel Code table Option
     * Type Code (OTC).
     *
     * @return string
     */
    public function getSmokingCode()
    {
        return $this->smokingCode;
    }

    /**
     * Sets a new smokingCode
     *
     * Indicates the guest smoking preference. Refer to OpenTravel Code table Option
     * Type Code (OTC).
     *
     * @param string $smokingCode
     * @return self
     */
    public function setSmokingCode($smokingCode)
    {
        $this->smokingCode = $smokingCode;

        return $this;
    }

    /**
     * Gets as diningRoom
     *
     * Specifies the Dining Room.
     *
     * @return string
     */
    public function getDiningRoom()
    {
        return $this->diningRoom;
    }

    /**
     * Sets a new diningRoom
     *
     * Specifies the Dining Room.
     *
     * @param string $diningRoom
     * @return self
     */
    public function setDiningRoom($diningRoom)
    {
        $this->diningRoom = $diningRoom;

        return $this;
    }

    /**
     * Gets as tableSize
     *
     * Specifies the table size of the dining.
     *
     * @return string
     */
    public function getTableSize()
    {
        return $this->tableSize;
    }

    /**
     * Sets a new tableSize
     *
     * Specifies the table size of the dining.
     *
     * @param string $tableSize
     * @return self
     */
    public function setTableSize($tableSize)
    {
        $this->tableSize = $tableSize;

        return $this;
    }

    /**
     * Gets as ageCode
     *
     * Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @return string
     */
    public function getAgeCode()
    {
        return $this->ageCode;
    }

    /**
     * Sets a new ageCode
     *
     * Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @param string $ageCode
     * @return self
     */
    public function setAgeCode($ageCode)
    {
        $this->ageCode = $ageCode;

        return $this;
    }

    /**
     * Gets as language
     *
     * Typically used to define the preferred language of the server.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Typically used to define the preferred language of the server.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Gets as sitting
     *
     * Dining service. Typical values are: first, second, third, open.
     *
     * @return string
     */
    public function getSitting()
    {
        return $this->sitting;
    }

    /**
     * Sets a new sitting
     *
     * Dining service. Typical values are: first, second, third, open.
     *
     * @param string $sitting
     * @return self
     */
    public function setSitting($sitting)
    {
        $this->sitting = $sitting;

        return $this;
    }

    /**
     * Gets as status
     *
     * Dining status. Refer to OpenTravel Code table Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Dining status. Refer to OpenTravel Code table Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as preference
     *
     * @return string
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * Sets a new preference
     *
     * @param string $preference
     * @return self
     */
    public function setPreference($preference)
    {
        $this->preference = $preference;

        return $this;
    }


}


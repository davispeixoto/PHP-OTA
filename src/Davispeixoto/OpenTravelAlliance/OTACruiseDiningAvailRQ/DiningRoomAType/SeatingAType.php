<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRQ\DiningRoomAType;

/**
 * Class representing SeatingAType
 */
class SeatingAType
{

    /**
     * Specifies the table size of the dining room.
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
     * Dining service. Typical values are: first, second, third, open.
     *
     * @property string $sitting
     */
    private $sitting = null;

    /**
     * Gets as tableSize
     *
     * Specifies the table size of the dining room.
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
     * Specifies the table size of the dining room.
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


}


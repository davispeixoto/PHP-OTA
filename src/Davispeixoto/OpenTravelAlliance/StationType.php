<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing StationType
 *
 * Defines information used to fully describe a train station.
 * XSD Type: StationType
 */
class StationType extends LocationType
{

    /**
     * When true, the train station is staffed.
     *
     * @property boolean $isStaffedInd
     */
    private $isStaffedInd = null;

    /**
     * When true, the train station has ticket printing facilities.
     *
     * @property boolean $ticketPrinterInd
     */
    private $ticketPrinterInd = null;

    /**
     * When true, self service technology (e.g. ticket machines that accept credit
     * cards and/or cash) are available.
     *
     * @property boolean $sSTMachineInd
     */
    private $sSTMachineInd = null;

    /**
     * The time zone for the train station schedules and availability that's derived by
     * an offset from the UTC time.
     *
     * @property string $timeZoneOffset
     */
    private $timeZoneOffset = null;

    /**
     * Gets as isStaffedInd
     *
     * When true, the train station is staffed.
     *
     * @return boolean
     */
    public function getIsStaffedInd()
    {
        return $this->isStaffedInd;
    }

    /**
     * Sets a new isStaffedInd
     *
     * When true, the train station is staffed.
     *
     * @param boolean $isStaffedInd
     * @return self
     */
    public function setIsStaffedInd($isStaffedInd)
    {
        $this->isStaffedInd = $isStaffedInd;

        return $this;
    }

    /**
     * Gets as ticketPrinterInd
     *
     * When true, the train station has ticket printing facilities.
     *
     * @return boolean
     */
    public function getTicketPrinterInd()
    {
        return $this->ticketPrinterInd;
    }

    /**
     * Sets a new ticketPrinterInd
     *
     * When true, the train station has ticket printing facilities.
     *
     * @param boolean $ticketPrinterInd
     * @return self
     */
    public function setTicketPrinterInd($ticketPrinterInd)
    {
        $this->ticketPrinterInd = $ticketPrinterInd;

        return $this;
    }

    /**
     * Gets as sSTMachineInd
     *
     * When true, self service technology (e.g. ticket machines that accept credit
     * cards and/or cash) are available.
     *
     * @return boolean
     */
    public function getSSTMachineInd()
    {
        return $this->sSTMachineInd;
    }

    /**
     * Sets a new sSTMachineInd
     *
     * When true, self service technology (e.g. ticket machines that accept credit
     * cards and/or cash) are available.
     *
     * @param boolean $sSTMachineInd
     * @return self
     */
    public function setSSTMachineInd($sSTMachineInd)
    {
        $this->sSTMachineInd = $sSTMachineInd;

        return $this;
    }

    /**
     * Gets as timeZoneOffset
     *
     * The time zone for the train station schedules and availability that's derived by
     * an offset from the UTC time.
     *
     * @return string
     */
    public function getTimeZoneOffset()
    {
        return $this->timeZoneOffset;
    }

    /**
     * Sets a new timeZoneOffset
     *
     * The time zone for the train station schedules and availability that's derived by
     * an offset from the UTC time.
     *
     * @param string $timeZoneOffset
     * @return self
     */
    public function setTimeZoneOffset($timeZoneOffset)
    {
        $this->timeZoneOffset = $timeZoneOffset;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\CruiseReadRequestAType;

/**
 * Class representing SelectedSailingAType
 */
class SelectedSailingAType
{

    /**
     * Specifies the cruise line unique identifier for a particular sailing.
     *
     * @property string $voyageID
     */
    private $voyageID = null;

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
     * Specifies the operator of the ship (e.g. cruise line or ferry company).
     *
     * @property string $vendorCode
     */
    private $vendorCode = null;

    /**
     * Specifies the name of the operator of the ship (e.g. a cruise line or ferry
     * company).
     *
     * @property string $vendorName
     */
    private $vendorName = null;

    /**
     * Specifies the ship code as defined by the cruise line.
     *
     * @property string $shipCode
     */
    private $shipCode = null;

    /**
     * Specifies the ship name as specified by the cruise line.
     *
     * @property string $shipName
     */
    private $shipName = null;

    /**
     * Identifies the source authority for the code (e.g., IATA); typically used with
     * VendorCode.
     *
     * @property string $vendorCodeContext
     */
    private $vendorCodeContext = null;

    /**
     * Provides the status of the voyage. Refer to OpenTravel Code table Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Specifies the group code.
     *
     * @property string $groupCode
     */
    private $groupCode = null;

    /**
     * Gets as voyageID
     *
     * Specifies the cruise line unique identifier for a particular sailing.
     *
     * @return string
     */
    public function getVoyageID()
    {
        return $this->voyageID;
    }

    /**
     * Sets a new voyageID
     *
     * Specifies the cruise line unique identifier for a particular sailing.
     *
     * @param string $voyageID
     * @return self
     */
    public function setVoyageID($voyageID)
    {
        $this->voyageID = $voyageID;

        return $this;
    }

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
     * Gets as vendorCode
     *
     * Specifies the operator of the ship (e.g. cruise line or ferry company).
     *
     * @return string
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * Sets a new vendorCode
     *
     * Specifies the operator of the ship (e.g. cruise line or ferry company).
     *
     * @param string $vendorCode
     * @return self
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * Gets as vendorName
     *
     * Specifies the name of the operator of the ship (e.g. a cruise line or ferry
     * company).
     *
     * @return string
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * Sets a new vendorName
     *
     * Specifies the name of the operator of the ship (e.g. a cruise line or ferry
     * company).
     *
     * @param string $vendorName
     * @return self
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName = $vendorName;

        return $this;
    }

    /**
     * Gets as shipCode
     *
     * Specifies the ship code as defined by the cruise line.
     *
     * @return string
     */
    public function getShipCode()
    {
        return $this->shipCode;
    }

    /**
     * Sets a new shipCode
     *
     * Specifies the ship code as defined by the cruise line.
     *
     * @param string $shipCode
     * @return self
     */
    public function setShipCode($shipCode)
    {
        $this->shipCode = $shipCode;

        return $this;
    }

    /**
     * Gets as shipName
     *
     * Specifies the ship name as specified by the cruise line.
     *
     * @return string
     */
    public function getShipName()
    {
        return $this->shipName;
    }

    /**
     * Sets a new shipName
     *
     * Specifies the ship name as specified by the cruise line.
     *
     * @param string $shipName
     * @return self
     */
    public function setShipName($shipName)
    {
        $this->shipName = $shipName;

        return $this;
    }

    /**
     * Gets as vendorCodeContext
     *
     * Identifies the source authority for the code (e.g., IATA); typically used with
     * VendorCode.
     *
     * @return string
     */
    public function getVendorCodeContext()
    {
        return $this->vendorCodeContext;
    }

    /**
     * Sets a new vendorCodeContext
     *
     * Identifies the source authority for the code (e.g., IATA); typically used with
     * VendorCode.
     *
     * @param string $vendorCodeContext
     * @return self
     */
    public function setVendorCodeContext($vendorCodeContext)
    {
        $this->vendorCodeContext = $vendorCodeContext;

        return $this;
    }

    /**
     * Gets as status
     *
     * Provides the status of the voyage. Refer to OpenTravel Code table Status (STS).
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
     * Provides the status of the voyage. Refer to OpenTravel Code table Status (STS).
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
     * Gets as groupCode
     *
     * Specifies the group code.
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * Specifies the group code.
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }


}


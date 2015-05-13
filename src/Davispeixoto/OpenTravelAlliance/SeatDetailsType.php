<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SeatDetailsType
 *
 * Describes the row details in a seat map.
 * XSD Type: SeatDetailsType
 */
class SeatDetailsType
{

    /**
     * The grid number associated with the seat.
     *
     * @property integer $gridNumber
     */
    private $gridNumber = null;

    /**
     * The column number associated with the seat.
     *
     * @property integer $columnNumber
     */
    private $columnNumber = null;

    /**
     * If true, the seat is blocked.
     *
     * @property boolean $blockedInd
     */
    private $blockedInd = null;

    /**
     * If true, ths seat is buffered.
     *
     * @property boolean $bufferInd
     */
    private $bufferInd = null;

    /**
     * If true, this seat is a premium seat that may be subjected to additional fees.
     *
     * @property boolean $premiumInd
     */
    private $premiumInd = null;

    /**
     * The type or level of premium seat.
     *
     * @property string $premiumCode
     */
    private $premiumCode = null;

    /**
     * If true, this seat is in a bulkhead row.
     *
     * @property boolean $bulkheadInd
     */
    private $bulkheadInd = null;

    /**
     * If true, this seat is in an exit row.
     *
     * @property boolean $exitRowInd
     */
    private $exitRowInd = null;

    /**
     * If true, this seat is near a gally.
     *
     * @property boolean $galleyInd
     */
    private $galleyInd = null;

    /**
     * The section of the plane the seat is located in.
     *
     * @property string $planeSection
     */
    private $planeSection = null;

    /**
     * The number of columns the seat spans.
     *
     * @property integer $columnSpan
     */
    private $columnSpan = null;

    /**
     * The number of rows the seat spans.
     *
     * @property integer $rowSpan
     */
    private $rowSpan = null;

    /**
     * Summary seat information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatSummaryType $summary
     */
    private $summary = null;

    /**
     * Amenities associated with a seat with optional fees.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatDetailsType\AmenityAType[]
     * $amenity
     */
    private $amenity = null;

    /**
     * The seat availability. Select an item from the list or select the "Other_" value
     * and enter a value known to trading partners in the @extension attribute.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirSeatAvailabilityType $availability
     */
    private $availability = null;

    /**
     * Seat description.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[] $description
     */
    private $description = null;

    /**
     * An extensible list of seat features. Select an existing value from the list or
     * select the "Other_" value and enter a value known to trading partners in the
     * @extension attribute.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatFeaturesType[] $features
     */
    private $features = null;

    /**
     * Remarks about the seat.
     *
     * @property string $remarks
     */
    private $remarks = null;

    /**
     * Service(s) associated with a seat with optional fees.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatDetailsType\ServiceAType[]
     * $service
     */
    private $service = null;

    /**
     * An extensible list of seat status types. Select an existing value from the list
     * or use "Other_" and the @extension attribute to add a new value known between
     * trading partners.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StatusType[] $status
     */
    private $status = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as gridNumber
     *
     * The grid number associated with the seat.
     *
     * @return integer
     */
    public function getGridNumber()
    {
        return $this->gridNumber;
    }

    /**
     * Sets a new gridNumber
     *
     * The grid number associated with the seat.
     *
     * @param integer $gridNumber
     * @return self
     */
    public function setGridNumber($gridNumber)
    {
        $this->gridNumber = $gridNumber;

        return $this;
    }

    /**
     * Gets as columnNumber
     *
     * The column number associated with the seat.
     *
     * @return integer
     */
    public function getColumnNumber()
    {
        return $this->columnNumber;
    }

    /**
     * Sets a new columnNumber
     *
     * The column number associated with the seat.
     *
     * @param integer $columnNumber
     * @return self
     */
    public function setColumnNumber($columnNumber)
    {
        $this->columnNumber = $columnNumber;

        return $this;
    }

    /**
     * Gets as blockedInd
     *
     * If true, the seat is blocked.
     *
     * @return boolean
     */
    public function getBlockedInd()
    {
        return $this->blockedInd;
    }

    /**
     * Sets a new blockedInd
     *
     * If true, the seat is blocked.
     *
     * @param boolean $blockedInd
     * @return self
     */
    public function setBlockedInd($blockedInd)
    {
        $this->blockedInd = $blockedInd;

        return $this;
    }

    /**
     * Gets as bufferInd
     *
     * If true, ths seat is buffered.
     *
     * @return boolean
     */
    public function getBufferInd()
    {
        return $this->bufferInd;
    }

    /**
     * Sets a new bufferInd
     *
     * If true, ths seat is buffered.
     *
     * @param boolean $bufferInd
     * @return self
     */
    public function setBufferInd($bufferInd)
    {
        $this->bufferInd = $bufferInd;

        return $this;
    }

    /**
     * Gets as premiumInd
     *
     * If true, this seat is a premium seat that may be subjected to additional fees.
     *
     * @return boolean
     */
    public function getPremiumInd()
    {
        return $this->premiumInd;
    }

    /**
     * Sets a new premiumInd
     *
     * If true, this seat is a premium seat that may be subjected to additional fees.
     *
     * @param boolean $premiumInd
     * @return self
     */
    public function setPremiumInd($premiumInd)
    {
        $this->premiumInd = $premiumInd;

        return $this;
    }

    /**
     * Gets as premiumCode
     *
     * The type or level of premium seat.
     *
     * @return string
     */
    public function getPremiumCode()
    {
        return $this->premiumCode;
    }

    /**
     * Sets a new premiumCode
     *
     * The type or level of premium seat.
     *
     * @param string $premiumCode
     * @return self
     */
    public function setPremiumCode($premiumCode)
    {
        $this->premiumCode = $premiumCode;

        return $this;
    }

    /**
     * Gets as bulkheadInd
     *
     * If true, this seat is in a bulkhead row.
     *
     * @return boolean
     */
    public function getBulkheadInd()
    {
        return $this->bulkheadInd;
    }

    /**
     * Sets a new bulkheadInd
     *
     * If true, this seat is in a bulkhead row.
     *
     * @param boolean $bulkheadInd
     * @return self
     */
    public function setBulkheadInd($bulkheadInd)
    {
        $this->bulkheadInd = $bulkheadInd;

        return $this;
    }

    /**
     * Gets as exitRowInd
     *
     * If true, this seat is in an exit row.
     *
     * @return boolean
     */
    public function getExitRowInd()
    {
        return $this->exitRowInd;
    }

    /**
     * Sets a new exitRowInd
     *
     * If true, this seat is in an exit row.
     *
     * @param boolean $exitRowInd
     * @return self
     */
    public function setExitRowInd($exitRowInd)
    {
        $this->exitRowInd = $exitRowInd;

        return $this;
    }

    /**
     * Gets as galleyInd
     *
     * If true, this seat is near a gally.
     *
     * @return boolean
     */
    public function getGalleyInd()
    {
        return $this->galleyInd;
    }

    /**
     * Sets a new galleyInd
     *
     * If true, this seat is near a gally.
     *
     * @param boolean $galleyInd
     * @return self
     */
    public function setGalleyInd($galleyInd)
    {
        $this->galleyInd = $galleyInd;

        return $this;
    }

    /**
     * Gets as planeSection
     *
     * The section of the plane the seat is located in.
     *
     * @return string
     */
    public function getPlaneSection()
    {
        return $this->planeSection;
    }

    /**
     * Sets a new planeSection
     *
     * The section of the plane the seat is located in.
     *
     * @param string $planeSection
     * @return self
     */
    public function setPlaneSection($planeSection)
    {
        $this->planeSection = $planeSection;

        return $this;
    }

    /**
     * Gets as columnSpan
     *
     * The number of columns the seat spans.
     *
     * @return integer
     */
    public function getColumnSpan()
    {
        return $this->columnSpan;
    }

    /**
     * Sets a new columnSpan
     *
     * The number of columns the seat spans.
     *
     * @param integer $columnSpan
     * @return self
     */
    public function setColumnSpan($columnSpan)
    {
        $this->columnSpan = $columnSpan;

        return $this;
    }

    /**
     * Gets as rowSpan
     *
     * The number of rows the seat spans.
     *
     * @return integer
     */
    public function getRowSpan()
    {
        return $this->rowSpan;
    }

    /**
     * Sets a new rowSpan
     *
     * The number of rows the seat spans.
     *
     * @param integer $rowSpan
     * @return self
     */
    public function setRowSpan($rowSpan)
    {
        $this->rowSpan = $rowSpan;

        return $this;
    }

    /**
     * Gets as summary
     *
     * Summary seat information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatSummaryType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Summary seat information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatSummaryType $summary
     * @return self
     */
    public function setSummary(\Davispeixoto\OpenTravelAlliance\SeatSummaryType $summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Adds as amenity
     *
     * Amenities associated with a seat with optional fees.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatDetailsType\AmenityAType $amenity
     */
    public function addToAmenity(\Davispeixoto\OpenTravelAlliance\SeatDetailsType\AmenityAType $amenity)
    {
        $this->amenity[] = $amenity;

        return $this;
    }

    /**
     * isset amenity
     *
     * Amenities associated with a seat with optional fees.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenity($index)
    {
        return isset($this->amenity[$index]);
    }

    /**
     * unset amenity
     *
     * Amenities associated with a seat with optional fees.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenity($index)
    {
        unset($this->amenity[$index]);
    }

    /**
     * Gets as amenity
     *
     * Amenities associated with a seat with optional fees.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatDetailsType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Amenities associated with a seat with optional fees.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatDetailsType\AmenityAType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;

        return $this;
    }

    /**
     * Gets as availability
     *
     * The seat availability. Select an item from the list or select the "Other_" value
     * and enter a value known to trading partners in the @extension attribute.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirSeatAvailabilityType
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * The seat availability. Select an item from the list or select the "Other_" value
     * and enter a value known to trading partners in the @extension attribute.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirSeatAvailabilityType $availability
     * @return self
     */
    public function setAvailability(\Davispeixoto\OpenTravelAlliance\AirSeatAvailabilityType $availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Adds as description
     *
     * Seat description.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * Seat description.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Seat description.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Seat description.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Seat description.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Adds as features
     *
     * An extensible list of seat features. Select an existing value from the list or
     * select the "Other_" value and enter a value known to trading partners in the
     * @extension attribute.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatFeaturesType $features
     */
    public function addToFeatures(\Davispeixoto\OpenTravelAlliance\SeatFeaturesType $features)
    {
        $this->features[] = $features;

        return $this;
    }

    /**
     * isset features
     *
     * An extensible list of seat features. Select an existing value from the list or
     * select the "Other_" value and enter a value known to trading partners in the
     * @extension attribute.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * An extensible list of seat features. Select an existing value from the list or
     * select the "Other_" value and enter a value known to trading partners in the
     * @extension attribute.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * An extensible list of seat features. Select an existing value from the list or
     * select the "Other_" value and enter a value known to trading partners in the
     * @extension attribute.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatFeaturesType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * An extensible list of seat features. Select an existing value from the list or
     * select the "Other_" value and enter a value known to trading partners in the
     * @extension attribute.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatFeaturesType[] $features
     * @return self
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Gets as remarks
     *
     * Remarks about the seat.
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * Remarks about the seat.
     *
     * @param string $remarks
     * @return self
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Adds as service
     *
     * Service(s) associated with a seat with optional fees.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatDetailsType\ServiceAType $service
     */
    public function addToService(\Davispeixoto\OpenTravelAlliance\SeatDetailsType\ServiceAType $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * isset service
     *
     * Service(s) associated with a seat with optional fees.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Service(s) associated with a seat with optional fees.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Service(s) associated with a seat with optional fees.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatDetailsType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Service(s) associated with a seat with optional fees.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatDetailsType\ServiceAType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Adds as status
     *
     * An extensible list of seat status types. Select an existing value from the list
     * or use "Other_" and the @extension attribute to add a new value known between
     * trading partners.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\StatusType $status
     */
    public function addToStatus(\Davispeixoto\OpenTravelAlliance\StatusType $status)
    {
        $this->status[] = $status;

        return $this;
    }

    /**
     * isset status
     *
     * An extensible list of seat status types. Select an existing value from the list
     * or use "Other_" and the @extension attribute to add a new value known between
     * trading partners.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * An extensible list of seat status types. Select an existing value from the list
     * or use "Other_" and the @extension attribute to add a new value known between
     * trading partners.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * An extensible list of seat status types. Select an existing value from the list
     * or use "Other_" and the @extension attribute to add a new value known between
     * trading partners.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StatusType[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * An extensible list of seat status types. Select an existing value from the list
     * or use "Other_" and the @extension attribute to add a new value known between
     * trading partners.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StatusType[] $status
     * @return self
     */
    public function setStatus(array $status)
    {
        $this->status = $status;

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


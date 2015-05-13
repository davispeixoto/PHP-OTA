<?php

namespace Davispeixoto\OpenTravelAlliance\SourceType;

/**
 * Class representing BookingChannelAType
 */
class BookingChannelAType
{

    /**
     * The type of booking channel (e.g. Global Distribution System (GDS), Alternative
     * Distribution System (ADS), Sales and Catering System (SCS), Property Management
     * System (PMS), Central Reservation System (CRS), Tour Operator System (TOS),
     * Internet and ALL). Refer to OpenTravel Code List Booking Channel Type (BCT).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Indicates whether the enumerated booking channel is the primary means of
     * connectivity used by the source.
     *
     * @property boolean $primary
     */
    private $primary = null;

    /**
     * Identifies the company that is associated with the booking channel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as type
     *
     * The type of booking channel (e.g. Global Distribution System (GDS), Alternative
     * Distribution System (ADS), Sales and Catering System (SCS), Property Management
     * System (PMS), Central Reservation System (CRS), Tour Operator System (TOS),
     * Internet and ALL). Refer to OpenTravel Code List Booking Channel Type (BCT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of booking channel (e.g. Global Distribution System (GDS), Alternative
     * Distribution System (ADS), Sales and Catering System (SCS), Property Management
     * System (PMS), Central Reservation System (CRS), Tour Operator System (TOS),
     * Internet and ALL). Refer to OpenTravel Code List Booking Channel Type (BCT).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as primary
     *
     * Indicates whether the enumerated booking channel is the primary means of
     * connectivity used by the source.
     *
     * @return boolean
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Sets a new primary
     *
     * Indicates whether the enumerated booking channel is the primary means of
     * connectivity used by the source.
     *
     * @param boolean $primary
     * @return self
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * Gets as companyName
     *
     * Identifies the company that is associated with the booking channel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Identifies the company that is associated with the booking channel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName)
    {
        $this->companyName = $companyName;

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


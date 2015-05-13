<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleRetrieveResRQAdditionalInfoType
 *
 * The VehicleRetrieveInfoRQType complex type defines the supplemental data by
 * which an existing reservation can be identified for retrieval
 * XSD Type: VehicleRetrieveResRQAdditionalInfoType
 */
class VehicleRetrieveResRQAdditionalInfoType
{

    /**
     * @property \DateTime $pickUpDateTime
     */
    private $pickUpDateTime = null;

    /**
     * A code to identify the pick up location, along with an optional code context.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $pickUpLocation
     */
    private $pickUpLocation = null;

    /**
     * A code to identify the return location, along with an optional code context.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $returnLocation
     */
    private $returnLocation = null;

    /**
     * A telephone number associated with the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType\TelephoneAType
     * $telephone
     */
    private $telephone = null;

    /**
     * The vendor with whom the reservation has been made.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * Indicates any preferences for the vehicle, such as type, class, transmission,
     * air conditioning.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehPref
     */
    private $vehPref = null;

    /**
     * An email address associated with the reservation to be retrieved.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmailType $email
     */
    private $email = null;

    /**
     * Free text description regarding the rental to be retrieved.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $remark
     */
    private $remark = null;

    /**
     * Defines a date type and a date or date range for searching.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType\SearchDateRangeAType[]
     * $searchDateRange
     */
    private $searchDateRange = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as pickUpDateTime
     *
     * @return \DateTime
     */
    public function getPickUpDateTime()
    {
        return $this->pickUpDateTime;
    }

    /**
     * Sets a new pickUpDateTime
     *
     * @param \DateTime $pickUpDateTime
     * @return self
     */
    public function setPickUpDateTime(\DateTime $pickUpDateTime)
    {
        $this->pickUpDateTime = $pickUpDateTime;

        return $this;
    }

    /**
     * Gets as pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getPickUpLocation()
    {
        return $this->pickUpLocation;
    }

    /**
     * Sets a new pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $pickUpLocation
     * @return self
     */
    public function setPickUpLocation(\Davispeixoto\OpenTravelAlliance\LocationType $pickUpLocation)
    {
        $this->pickUpLocation = $pickUpLocation;

        return $this;
    }

    /**
     * Gets as returnLocation
     *
     * A code to identify the return location, along with an optional code context.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getReturnLocation()
    {
        return $this->returnLocation;
    }

    /**
     * Sets a new returnLocation
     *
     * A code to identify the return location, along with an optional code context.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $returnLocation
     * @return self
     */
    public function setReturnLocation(\Davispeixoto\OpenTravelAlliance\LocationType $returnLocation)
    {
        $this->returnLocation = $returnLocation;

        return $this;
    }

    /**
     * Gets as telephone
     *
     * A telephone number associated with the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * A telephone number associated with the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType\TelephoneAType
     * $telephone
     * @return self
     */
    public function setTelephone(
        \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType\TelephoneAType $telephone
    ) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets as vendor
     *
     * The vendor with whom the reservation has been made.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * The vendor with whom the reservation has been made.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     * @return self
     */
    public function setVendor(\Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Gets as vehPref
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission,
     * air conditioning.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehiclePrefType
     */
    public function getVehPref()
    {
        return $this->vehPref;
    }

    /**
     * Sets a new vehPref
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission,
     * air conditioning.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehPref
     * @return self
     */
    public function setVehPref(\Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehPref)
    {
        $this->vehPref = $vehPref;

        return $this;
    }

    /**
     * Gets as email
     *
     * An email address associated with the reservation to be retrieved.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmailType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * An email address associated with the reservation to be retrieved.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmailType $email
     * @return self
     */
    public function setEmail(\Davispeixoto\OpenTravelAlliance\EmailType $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Adds as remark
     *
     * Free text description regarding the rental to be retrieved.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $remark
     */
    public function addToRemark(\Davispeixoto\OpenTravelAlliance\ParagraphType $remark)
    {
        $this->remark[] = $remark;

        return $this;
    }

    /**
     * isset remark
     *
     * Free text description regarding the rental to be retrieved.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRemark($index)
    {
        return isset($this->remark[$index]);
    }

    /**
     * unset remark
     *
     * Free text description regarding the rental to be retrieved.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRemark($index)
    {
        unset($this->remark[$index]);
    }

    /**
     * Gets as remark
     *
     * Free text description regarding the rental to be retrieved.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Free text description regarding the rental to be retrieved.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Adds as searchDateRange
     *
     * Defines a date type and a date or date range for searching.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType\SearchDateRangeAType
     * $searchDateRange
     */
    public function addToSearchDateRange(
        \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType\SearchDateRangeAType $searchDateRange
    ) {
        $this->searchDateRange[] = $searchDateRange;

        return $this;
    }

    /**
     * isset searchDateRange
     *
     * Defines a date type and a date or date range for searching.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSearchDateRange($index)
    {
        return isset($this->searchDateRange[$index]);
    }

    /**
     * unset searchDateRange
     *
     * Defines a date type and a date or date range for searching.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSearchDateRange($index)
    {
        unset($this->searchDateRange[$index]);
    }

    /**
     * Gets as searchDateRange
     *
     * Defines a date type and a date or date range for searching.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType\SearchDateRangeAType[]
     */
    public function getSearchDateRange()
    {
        return $this->searchDateRange;
    }

    /**
     * Sets a new searchDateRange
     *
     * Defines a date type and a date or date range for searching.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQAdditionalInfoType\SearchDateRangeAType[]
     * $searchDateRange
     * @return self
     */
    public function setSearchDateRange(array $searchDateRange)
    {
        $this->searchDateRange = $searchDateRange;

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


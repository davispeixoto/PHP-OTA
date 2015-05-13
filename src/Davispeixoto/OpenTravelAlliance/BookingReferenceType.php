<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BookingReferenceType
 *
 * An extensible list of unique ID types.
 * XSD Type: BookingReferenceType
 */
class BookingReferenceType
{

    /**
     * The identification of a record as it exists at a point in time. An instance is
     * used in update messages where the sender must assure the server that the update
     * sent refers to the most recent modification level of the object being updated.
     *
     * @property string $instance
     */
    private $instance = null;

    /**
     * The booking reference ID, e.g. PNR.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * An associated ID, such as a conjunctive ticket number.
     *
     * @property string $associatedID
     */
    private $associatedID = null;

    /**
     * The unique ID type. Select a value from the list or use the "Other_" value and
     * the @extension to define a value known between trading partners.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BookingReferenceType\UniqueIDTypeAType
     * $uniqueIDType
     */
    private $uniqueIDType = null;

    /**
     * Associated company information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $company
     */
    private $company = null;

    /**
     * Associated traveler information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelerInfoType[] $traveler
     */
    private $traveler = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as instance
     *
     * The identification of a record as it exists at a point in time. An instance is
     * used in update messages where the sender must assure the server that the update
     * sent refers to the most recent modification level of the object being updated.
     *
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * The identification of a record as it exists at a point in time. An instance is
     * used in update messages where the sender must assure the server that the update
     * sent refers to the most recent modification level of the object being updated.
     *
     * @param string $instance
     * @return self
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;

        return $this;
    }

    /**
     * Gets as iD
     *
     * The booking reference ID, e.g. PNR.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * The booking reference ID, e.g. PNR.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as associatedID
     *
     * An associated ID, such as a conjunctive ticket number.
     *
     * @return string
     */
    public function getAssociatedID()
    {
        return $this->associatedID;
    }

    /**
     * Sets a new associatedID
     *
     * An associated ID, such as a conjunctive ticket number.
     *
     * @param string $associatedID
     * @return self
     */
    public function setAssociatedID($associatedID)
    {
        $this->associatedID = $associatedID;

        return $this;
    }

    /**
     * Gets as uniqueIDType
     *
     * The unique ID type. Select a value from the list or use the "Other_" value and
     * the @extension to define a value known between trading partners.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookingReferenceType\UniqueIDTypeAType
     */
    public function getUniqueIDType()
    {
        return $this->uniqueIDType;
    }

    /**
     * Sets a new uniqueIDType
     *
     * The unique ID type. Select a value from the list or use the "Other_" value and
     * the @extension to define a value known between trading partners.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookingReferenceType\UniqueIDTypeAType
     * $uniqueIDType
     * @return self
     */
    public function setUniqueIDType(
        \Davispeixoto\OpenTravelAlliance\BookingReferenceType\UniqueIDTypeAType $uniqueIDType
    ) {
        $this->uniqueIDType = $uniqueIDType;

        return $this;
    }

    /**
     * Gets as company
     *
     * Associated company information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * Associated company information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $company
     * @return self
     */
    public function setCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Adds as traveler
     *
     * Associated traveler information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInfoType $traveler
     */
    public function addToTraveler(\Davispeixoto\OpenTravelAlliance\TravelerInfoType $traveler)
    {
        $this->traveler[] = $traveler;

        return $this;
    }

    /**
     * isset traveler
     *
     * Associated traveler information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTraveler($index)
    {
        return isset($this->traveler[$index]);
    }

    /**
     * unset traveler
     *
     * Associated traveler information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTraveler($index)
    {
        unset($this->traveler[$index]);
    }

    /**
     * Gets as traveler
     *
     * Associated traveler information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelerInfoType[]
     */
    public function getTraveler()
    {
        return $this->traveler;
    }

    /**
     * Sets a new traveler
     *
     * Associated traveler information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInfoType[] $traveler
     * @return self
     */
    public function setTraveler(array $traveler)
    {
        $this->traveler = $traveler;

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


<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType;

/**
 * Class representing ProfileReadRequestAType
 */
class ProfileReadRequestAType
{

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
     * Specifies the type of date provided in the date time span attributes.
     *
     * @property string $dateType
     */
    private $dateType = null;

    /**
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @property string $statusCode
     */
    private $statusCode = null;

    /**
     * Code to specify a profile such as customer, tour operator, corporation, etc.
     * Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @property string $profileTypeCode
     */
    private $profileTypeCode = null;

    /**
     * Used to convey the identity of the profile, the owner of the profile, or an id
     * provided by the client.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ProfileReadRequestAType\UniqueIDAType[]
     * $uniqueID
     */
    private $uniqueID = null;

    /**
     * Detailed contact information for a company or a company point of contact used
     * for searching profiles.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $company
     */
    private $company = null;

    /**
     * Detailed customer information used for searching profiles.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomerType $customer
     */
    private $customer = null;

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
     * Gets as dateType
     *
     * Specifies the type of date provided in the date time span attributes.
     *
     * @return string
     */
    public function getDateType()
    {
        return $this->dateType;
    }

    /**
     * Sets a new dateType
     *
     * Specifies the type of date provided in the date time span attributes.
     *
     * @param string $dateType
     * @return self
     */
    public function setDateType($dateType)
    {
        $this->dateType = $dateType;

        return $this;
    }

    /**
     * Gets as statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Gets as profileTypeCode
     *
     * Code to specify a profile such as customer, tour operator, corporation, etc.
     * Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @return string
     */
    public function getProfileTypeCode()
    {
        return $this->profileTypeCode;
    }

    /**
     * Sets a new profileTypeCode
     *
     * Code to specify a profile such as customer, tour operator, corporation, etc.
     * Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @param string $profileTypeCode
     * @return self
     */
    public function setProfileTypeCode($profileTypeCode)
    {
        $this->profileTypeCode = $profileTypeCode;

        return $this;
    }

    /**
     * Adds as uniqueID
     *
     * Used to convey the identity of the profile, the owner of the profile, or an id
     * provided by the client.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ProfileReadRequestAType\UniqueIDAType
     * $uniqueID
     */
    public function addToUniqueID(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ProfileReadRequestAType\UniqueIDAType $uniqueID
    ) {
        $this->uniqueID[] = $uniqueID;

        return $this;
    }

    /**
     * isset uniqueID
     *
     * Used to convey the identity of the profile, the owner of the profile, or an id
     * provided by the client.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * Used to convey the identity of the profile, the owner of the profile, or an id
     * provided by the client.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * Used to convey the identity of the profile, the owner of the profile, or an id
     * provided by the client.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ProfileReadRequestAType\UniqueIDAType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Used to convey the identity of the profile, the owner of the profile, or an id
     * provided by the client.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ProfileReadRequestAType\UniqueIDAType[]
     * $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as company
     *
     * Detailed contact information for a company or a company point of contact used
     * for searching profiles.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * Detailed contact information for a company or a company point of contact used
     * for searching profiles.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $company
     * @return self
     */
    public function setCompany(\Davispeixoto\OpenTravelAlliance\ContactPersonType $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Gets as customer
     *
     * Detailed customer information used for searching profiles.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Detailed customer information used for searching profiles.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerType $customer
     * @return self
     */
    public function setCustomer(\Davispeixoto\OpenTravelAlliance\CustomerType $customer)
    {
        $this->customer = $customer;

        return $this;
    }


}


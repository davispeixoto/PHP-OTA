<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PackageOptionType
 *
 * A product which supplements a package.
 * XSD Type: PackageOptionType
 */
class PackageOptionType extends ServiceType
{

    /**
     * A text field used to indicate a special ID code that is associated with the rate
     * and is essential in the reservation request in order to obtain the rate.
     * Examples are Corporate ID.
     *
     * @property string $ratePlanID
     */
    private $ratePlanID = null;

    /**
     * A reference string used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @property string $quoteID
     */
    private $quoteID = null;

    /**
     * The type of feature. Refer to OpenTravel Code List Package Option Type Code
     * (PKO).
     *
     * @property string $packageOptionType
     */
    private $packageOptionType = null;

    /**
     * Used to specify an availability status for the room rate.
     *
     * @property string $availabilityStatus
     */
    private $availabilityStatus = null;

    /**
     * The vendor name.
     *
     * @property string $companyShortName
     */
    private $companyShortName = null;

    /**
     * Gets as ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate
     * and is essential in the reservation request in order to obtain the rate.
     * Examples are Corporate ID.
     *
     * @return string
     */
    public function getRatePlanID()
    {
        return $this->ratePlanID;
    }

    /**
     * Sets a new ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate
     * and is essential in the reservation request in order to obtain the rate.
     * Examples are Corporate ID.
     *
     * @param string $ratePlanID
     * @return self
     */
    public function setRatePlanID($ratePlanID)
    {
        $this->ratePlanID = $ratePlanID;

        return $this;
    }

    /**
     * Gets as quoteID
     *
     * A reference string used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * A reference string used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;

        return $this;
    }

    /**
     * Gets as packageOptionType
     *
     * The type of feature. Refer to OpenTravel Code List Package Option Type Code
     * (PKO).
     *
     * @return string
     */
    public function getPackageOptionType()
    {
        return $this->packageOptionType;
    }

    /**
     * Sets a new packageOptionType
     *
     * The type of feature. Refer to OpenTravel Code List Package Option Type Code
     * (PKO).
     *
     * @param string $packageOptionType
     * @return self
     */
    public function setPackageOptionType($packageOptionType)
    {
        $this->packageOptionType = $packageOptionType;

        return $this;
    }

    /**
     * Gets as availabilityStatus
     *
     * Used to specify an availability status for the room rate.
     *
     * @return string
     */
    public function getAvailabilityStatus()
    {
        return $this->availabilityStatus;
    }

    /**
     * Sets a new availabilityStatus
     *
     * Used to specify an availability status for the room rate.
     *
     * @param string $availabilityStatus
     * @return self
     */
    public function setAvailabilityStatus($availabilityStatus)
    {
        $this->availabilityStatus = $availabilityStatus;

        return $this;
    }

    /**
     * Gets as companyShortName
     *
     * The vendor name.
     *
     * @return string
     */
    public function getCompanyShortName()
    {
        return $this->companyShortName;
    }

    /**
     * Sets a new companyShortName
     *
     * The vendor name.
     *
     * @param string $companyShortName
     * @return self
     */
    public function setCompanyShortName($companyShortName)
    {
        $this->companyShortName = $companyShortName;

        return $this;
    }


}


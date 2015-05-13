<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing InsCoverageDetailType
 *
 * Provides vendor with information about the traveler(s)' requirements for
 * insurance coverage.
 * XSD Type: InsCoverageDetailType
 */
class InsCoverageDetailType
{

    /**
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property boolean $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * The type of trip being insured, e.g. Single or Multi trip.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * When true, an insurance policy that automatically renews has been requested.
     *
     * @property boolean $autoRenew
     */
    private $autoRenew = null;

    /**
     * Container for any insurance coverage requirements shared by all travelers
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoverageLimitType[]
     * $coverageRequirements
     */
    private $coverageRequirements = null;

    /**
     * The number of trips the traveler(s) plan on taking during the period of coverage
     * (multi-trip plans only).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\TotalTripQuantityAType
     * $totalTripQuantity
     */
    private $totalTripQuantity = null;

    /**
     * The maximum trip length the traveler(s) plan on taking during the period of
     * coverage (Multi-Trip plans only).
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeDurationType $maximumTripLength
     */
    private $maximumTripLength = null;

    /**
     * Estimated trip cost, or the total price of the journey for the traveler(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\TotalTripCostAType
     * $totalTripCost
     */
    private $totalTripCost = null;

    /**
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType\CoveredTripAType[]
     * $coveredTrips
     */
    private $coveredTrips = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\DistribPrefType[] $deliveryPref
     */
    private $deliveryPref = null;

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return boolean
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param boolean $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;

        return $this;
    }

    /**
     * Gets as type
     *
     * The type of trip being insured, e.g. Single or Multi trip.
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
     * The type of trip being insured, e.g. Single or Multi trip.
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
     * Gets as autoRenew
     *
     * When true, an insurance policy that automatically renews has been requested.
     *
     * @return boolean
     */
    public function getAutoRenew()
    {
        return $this->autoRenew;
    }

    /**
     * Sets a new autoRenew
     *
     * When true, an insurance policy that automatically renews has been requested.
     *
     * @param boolean $autoRenew
     * @return self
     */
    public function setAutoRenew($autoRenew)
    {
        $this->autoRenew = $autoRenew;

        return $this;
    }

    /**
     * Adds as coverageRequirement
     *
     * Container for any insurance coverage requirements shared by all travelers
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageRequirement
     */
    public function addToCoverageRequirements(\Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageRequirement)
    {
        $this->coverageRequirements[] = $coverageRequirement;

        return $this;
    }

    /**
     * isset coverageRequirements
     *
     * Container for any insurance coverage requirements shared by all travelers
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoverageRequirements($index)
    {
        return isset($this->coverageRequirements[$index]);
    }

    /**
     * unset coverageRequirements
     *
     * Container for any insurance coverage requirements shared by all travelers
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoverageRequirements($index)
    {
        unset($this->coverageRequirements[$index]);
    }

    /**
     * Gets as coverageRequirements
     *
     * Container for any insurance coverage requirements shared by all travelers
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoverageLimitType[]
     */
    public function getCoverageRequirements()
    {
        return $this->coverageRequirements;
    }

    /**
     * Sets a new coverageRequirements
     *
     * Container for any insurance coverage requirements shared by all travelers
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoverageLimitType[]
     * $coverageRequirements
     * @return self
     */
    public function setCoverageRequirements(array $coverageRequirements)
    {
        $this->coverageRequirements = $coverageRequirements;

        return $this;
    }

    /**
     * Gets as totalTripQuantity
     *
     * The number of trips the traveler(s) plan on taking during the period of coverage
     * (multi-trip plans only).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\TotalTripQuantityAType
     */
    public function getTotalTripQuantity()
    {
        return $this->totalTripQuantity;
    }

    /**
     * Sets a new totalTripQuantity
     *
     * The number of trips the traveler(s) plan on taking during the period of coverage
     * (multi-trip plans only).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\TotalTripQuantityAType
     * $totalTripQuantity
     * @return self
     */
    public function setTotalTripQuantity(
        \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\TotalTripQuantityAType $totalTripQuantity
    ) {
        $this->totalTripQuantity = $totalTripQuantity;

        return $this;
    }

    /**
     * Gets as maximumTripLength
     *
     * The maximum trip length the traveler(s) plan on taking during the period of
     * coverage (Multi-Trip plans only).
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeDurationType
     */
    public function getMaximumTripLength()
    {
        return $this->maximumTripLength;
    }

    /**
     * Sets a new maximumTripLength
     *
     * The maximum trip length the traveler(s) plan on taking during the period of
     * coverage (Multi-Trip plans only).
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeDurationType $maximumTripLength
     * @return self
     */
    public function setMaximumTripLength(\Davispeixoto\OpenTravelAlliance\TimeDurationType $maximumTripLength)
    {
        $this->maximumTripLength = $maximumTripLength;

        return $this;
    }

    /**
     * Gets as totalTripCost
     *
     * Estimated trip cost, or the total price of the journey for the traveler(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\TotalTripCostAType
     */
    public function getTotalTripCost()
    {
        return $this->totalTripCost;
    }

    /**
     * Sets a new totalTripCost
     *
     * Estimated trip cost, or the total price of the journey for the traveler(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\TotalTripCostAType
     * $totalTripCost
     * @return self
     */
    public function setTotalTripCost(
        \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\TotalTripCostAType $totalTripCost
    ) {
        $this->totalTripCost = $totalTripCost;

        return $this;
    }

    /**
     * Adds as coveredTrip
     *
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType\CoveredTripAType
     * $coveredTrip
     */
    public function addToCoveredTrips(
        \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType\CoveredTripAType $coveredTrip
    ) {
        $this->coveredTrips[] = $coveredTrip;

        return $this;
    }

    /**
     * isset coveredTrips
     *
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveredTrips($index)
    {
        return isset($this->coveredTrips[$index]);
    }

    /**
     * unset coveredTrips
     *
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveredTrips($index)
    {
        unset($this->coveredTrips[$index]);
    }

    /**
     * Gets as coveredTrips
     *
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType\CoveredTripAType[]
     */
    public function getCoveredTrips()
    {
        return $this->coveredTrips;
    }

    /**
     * Sets a new coveredTrips
     *
     * Container for any information about the trip(s) for which the traveler(s) are
     * requesting coverage.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType\CoveredTripsAType\CoveredTripAType[]
     * $coveredTrips
     * @return self
     */
    public function setCoveredTrips(array $coveredTrips)
    {
        $this->coveredTrips = $coveredTrips;

        return $this;
    }

    /**
     * Adds as deliveryPref
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DistribPrefType $deliveryPref
     */
    public function addToDeliveryPref(\Davispeixoto\OpenTravelAlliance\DistribPrefType $deliveryPref)
    {
        $this->deliveryPref[] = $deliveryPref;

        return $this;
    }

    /**
     * isset deliveryPref
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeliveryPref($index)
    {
        return isset($this->deliveryPref[$index]);
    }

    /**
     * unset deliveryPref
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeliveryPref($index)
    {
        unset($this->deliveryPref[$index]);
    }

    /**
     * Gets as deliveryPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\DistribPrefType[]
     */
    public function getDeliveryPref()
    {
        return $this->deliveryPref;
    }

    /**
     * Sets a new deliveryPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\DistribPrefType[] $deliveryPref
     * @return self
     */
    public function setDeliveryPref(array $deliveryPref)
    {
        $this->deliveryPref = $deliveryPref;

        return $this;
    }


}


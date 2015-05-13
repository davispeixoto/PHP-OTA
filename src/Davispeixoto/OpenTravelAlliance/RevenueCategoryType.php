<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RevenueCategoryType
 *
 * The classifications of revenue data associated with the StayInfo report. A
 * RevenueCategory provide a way to classify guest financial stay data and analyze
 * guest spending for a certain category (e.g., food and beverage, room, etc.)
 * XSD Type: RevenueCategoryType
 */
class RevenueCategoryType
{

    /**
     * Describes the type of revenue generated. Refer to OpenTravel Code List Revenue
     * Category Code (RCC).
     *
     * @property string $revenueCategoryCode
     */
    private $revenueCategoryCode = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\RevenueCategoryType\SummaryAmountAType
     * $summaryAmount
     */
    private $summaryAmount = null;

    /**
     * A collection of revenue details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RevenueDetailType[] $revenueDetails
     */
    private $revenueDetails = null;

    /**
     * Gets as revenueCategoryCode
     *
     * Describes the type of revenue generated. Refer to OpenTravel Code List Revenue
     * Category Code (RCC).
     *
     * @return string
     */
    public function getRevenueCategoryCode()
    {
        return $this->revenueCategoryCode;
    }

    /**
     * Sets a new revenueCategoryCode
     *
     * Describes the type of revenue generated. Refer to OpenTravel Code List Revenue
     * Category Code (RCC).
     *
     * @param string $revenueCategoryCode
     * @return self
     */
    public function setRevenueCategoryCode($revenueCategoryCode)
    {
        $this->revenueCategoryCode = $revenueCategoryCode;

        return $this;
    }

    /**
     * Gets as summaryAmount
     *
     * @return \Davispeixoto\OpenTravelAlliance\RevenueCategoryType\SummaryAmountAType
     */
    public function getSummaryAmount()
    {
        return $this->summaryAmount;
    }

    /**
     * Sets a new summaryAmount
     *
     * @param \Davispeixoto\OpenTravelAlliance\RevenueCategoryType\SummaryAmountAType
     * $summaryAmount
     * @return self
     */
    public function setSummaryAmount(
        \Davispeixoto\OpenTravelAlliance\RevenueCategoryType\SummaryAmountAType $summaryAmount
    ) {
        $this->summaryAmount = $summaryAmount;

        return $this;
    }

    /**
     * Adds as revenueDetail
     *
     * A collection of revenue details.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RevenueDetailType $revenueDetail
     */
    public function addToRevenueDetails(\Davispeixoto\OpenTravelAlliance\RevenueDetailType $revenueDetail)
    {
        $this->revenueDetails[] = $revenueDetail;

        return $this;
    }

    /**
     * isset revenueDetails
     *
     * A collection of revenue details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRevenueDetails($index)
    {
        return isset($this->revenueDetails[$index]);
    }

    /**
     * unset revenueDetails
     *
     * A collection of revenue details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRevenueDetails($index)
    {
        unset($this->revenueDetails[$index]);
    }

    /**
     * Gets as revenueDetails
     *
     * A collection of revenue details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RevenueDetailType[]
     */
    public function getRevenueDetails()
    {
        return $this->revenueDetails;
    }

    /**
     * Sets a new revenueDetails
     *
     * A collection of revenue details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RevenueDetailType[] $revenueDetails
     * @return self
     */
    public function setRevenueDetails(array $revenueDetails)
    {
        $this->revenueDetails = $revenueDetails;

        return $this;
    }


}


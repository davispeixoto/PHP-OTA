<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAHotelResRQ
 */
class OTAHotelResRQ extends HotelResRequestType
{

    /**
     * Information about an independent charitable donation made with the hotel
     * booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DonationType $donationInformation
     */
    private $donationInformation = null;

    /**
     * Collection of rebate programs the hotel participates in.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RebateType[] $rebatePrograms
     */
    private $rebatePrograms = null;

    /**
     * Gets as donationInformation
     *
     * Information about an independent charitable donation made with the hotel
     * booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DonationType
     */
    public function getDonationInformation()
    {
        return $this->donationInformation;
    }

    /**
     * Sets a new donationInformation
     *
     * Information about an independent charitable donation made with the hotel
     * booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DonationType $donationInformation
     * @return self
     */
    public function setDonationInformation(\Davispeixoto\OpenTravelAlliance\DonationType $donationInformation)
    {
        $this->donationInformation = $donationInformation;

        return $this;
    }

    /**
     * Adds as rebateProgram
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RebateType $rebateProgram
     */
    public function addToRebatePrograms(\Davispeixoto\OpenTravelAlliance\RebateType $rebateProgram)
    {
        $this->rebatePrograms[] = $rebateProgram;

        return $this;
    }

    /**
     * isset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRebatePrograms($index)
    {
        return isset($this->rebatePrograms[$index]);
    }

    /**
     * unset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRebatePrograms($index)
    {
        unset($this->rebatePrograms[$index]);
    }

    /**
     * Gets as rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RebateType[]
     */
    public function getRebatePrograms()
    {
        return $this->rebatePrograms;
    }

    /**
     * Sets a new rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RebateType[] $rebatePrograms
     * @return self
     */
    public function setRebatePrograms(array $rebatePrograms)
    {
        $this->rebatePrograms = $rebatePrograms;

        return $this;
    }


}


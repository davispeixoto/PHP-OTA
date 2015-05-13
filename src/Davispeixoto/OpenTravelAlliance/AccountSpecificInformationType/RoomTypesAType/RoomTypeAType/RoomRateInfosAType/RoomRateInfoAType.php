<?php

namespace Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType;

/**
 * Class representing RoomRateInfoAType
 */
class RoomRateInfoAType
{

    /**
     * Individual rate amount. This rate is valid for a range of number of occupants
     * and an occupant type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RateType\RateAType[] $rates
     */
    private $rates = null;

    /**
     * Provides textual description of the room rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     * $roomRateDescription
     */
    private $roomRateDescription = null;

    /**
     * Commission associated with the RatePlan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType[] $commission
     */
    private $commission = null;

    /**
     * Adds as rate
     *
     * Individual rate amount. This rate is valid for a range of number of occupants
     * and an occupant type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RateType\RateAType $rate
     */
    public function addToRates(\Davispeixoto\OpenTravelAlliance\RateType\RateAType $rate)
    {
        $this->rates[] = $rate;

        return $this;
    }

    /**
     * isset rates
     *
     * Individual rate amount. This rate is valid for a range of number of occupants
     * and an occupant type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRates($index)
    {
        return isset($this->rates[$index]);
    }

    /**
     * unset rates
     *
     * Individual rate amount. This rate is valid for a range of number of occupants
     * and an occupant type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRates($index)
    {
        unset($this->rates[$index]);
    }

    /**
     * Gets as rates
     *
     * Individual rate amount. This rate is valid for a range of number of occupants
     * and an occupant type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RateType\RateAType[]
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Sets a new rates
     *
     * Individual rate amount. This rate is valid for a range of number of occupants
     * and an occupant type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RateType\RateAType[] $rates
     * @return self
     */
    public function setRates(array $rates)
    {
        $this->rates = $rates;

        return $this;
    }

    /**
     * Gets as roomRateDescription
     *
     * Provides textual description of the room rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     */
    public function getRoomRateDescription()
    {
        return $this->roomRateDescription;
    }

    /**
     * Sets a new roomRateDescription
     *
     * Provides textual description of the room rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     * $roomRateDescription
     * @return self
     */
    public function setRoomRateDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $roomRateDescription)
    {
        $this->roomRateDescription = $roomRateDescription;

        return $this;
    }

    /**
     * Adds as commission
     *
     * Commission associated with the RatePlan.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType $commission
     */
    public function addToCommission(\Davispeixoto\OpenTravelAlliance\CommissionType $commission)
    {
        $this->commission[] = $commission;

        return $this;
    }

    /**
     * isset commission
     *
     * Commission associated with the RatePlan.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommission($index)
    {
        return isset($this->commission[$index]);
    }

    /**
     * unset commission
     *
     * Commission associated with the RatePlan.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommission($index)
    {
        unset($this->commission[$index]);
    }

    /**
     * Gets as commission
     *
     * Commission associated with the RatePlan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionType[]
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Commission associated with the RatePlan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType[] $commission
     * @return self
     */
    public function setCommission(array $commission)
    {
        $this->commission = $commission;

        return $this;
    }


}


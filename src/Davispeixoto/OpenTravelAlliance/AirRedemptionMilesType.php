<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirRedemptionMilesType
 *
 * Information about using redemption miles as currency.
 * XSD Type: AirRedemptionMilesType
 */
class AirRedemptionMilesType
{

    /**
     * The number of points (miles) required or used to redeem this award.
     *
     * @property float $pointQty
     */
    private $pointQty = null;

    /**
     * The award code associated with the redemption miles amount.
     *
     * @property string $rewardCode
     */
    private $rewardCode = null;

    /**
     * The ratio used to calculate the number of miles required to pay for any monetary
     * amount.This attribute assumes the MoneyToMilesRatio:1. For example, a base fare
     * of $100 where MoneyToMilesRatio is 1000 requires 100,000 frequent flyer miles to
     * pay for the full base fare (100 * 1000 = 100,000 miles.)
     *
     * @property integer $moneyToMilesRatio
     */
    private $moneyToMilesRatio = null;

    /**
     * A percentage used for discount calculations.
     *
     * @property float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * Gets as pointQty
     *
     * The number of points (miles) required or used to redeem this award.
     *
     * @return float
     */
    public function getPointQty()
    {
        return $this->pointQty;
    }

    /**
     * Sets a new pointQty
     *
     * The number of points (miles) required or used to redeem this award.
     *
     * @param float $pointQty
     * @return self
     */
    public function setPointQty($pointQty)
    {
        $this->pointQty = $pointQty;

        return $this;
    }

    /**
     * Gets as rewardCode
     *
     * The award code associated with the redemption miles amount.
     *
     * @return string
     */
    public function getRewardCode()
    {
        return $this->rewardCode;
    }

    /**
     * Sets a new rewardCode
     *
     * The award code associated with the redemption miles amount.
     *
     * @param string $rewardCode
     * @return self
     */
    public function setRewardCode($rewardCode)
    {
        $this->rewardCode = $rewardCode;

        return $this;
    }

    /**
     * Gets as moneyToMilesRatio
     *
     * The ratio used to calculate the number of miles required to pay for any monetary
     * amount.This attribute assumes the MoneyToMilesRatio:1. For example, a base fare
     * of $100 where MoneyToMilesRatio is 1000 requires 100,000 frequent flyer miles to
     * pay for the full base fare (100 * 1000 = 100,000 miles.)
     *
     * @return integer
     */
    public function getMoneyToMilesRatio()
    {
        return $this->moneyToMilesRatio;
    }

    /**
     * Sets a new moneyToMilesRatio
     *
     * The ratio used to calculate the number of miles required to pay for any monetary
     * amount.This attribute assumes the MoneyToMilesRatio:1. For example, a base fare
     * of $100 where MoneyToMilesRatio is 1000 requires 100,000 frequent flyer miles to
     * pay for the full base fare (100 * 1000 = 100,000 miles.)
     *
     * @param integer $moneyToMilesRatio
     * @return self
     */
    public function setMoneyToMilesRatio($moneyToMilesRatio)
    {
        $this->moneyToMilesRatio = $moneyToMilesRatio;

        return $this;
    }

    /**
     * Gets as discountPercentage
     *
     * A percentage used for discount calculations.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage
     *
     * A percentage used for discount calculations.
     *
     * @param float $discountPercentage
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }


}


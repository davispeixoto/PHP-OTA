<?php

namespace Davispeixoto\OpenTravelAlliance\GroundServiceChargesType;

/**
 * Class representing MinMaxAType
 */
class MinMaxAType
{

    /**
     * The maximum amount that will be charged.
     *
     * @property float $maxCharge
     */
    private $maxCharge = null;

    /**
     * The minimum amount that will be charged.
     *
     * @property float $minCharge
     */
    private $minCharge = null;

    /**
     * Maximum number of days for which a charge will be applied.
     *
     * @property integer $maxChargeDays
     */
    private $maxChargeDays = null;

    /**
     * Gets as maxCharge
     *
     * The maximum amount that will be charged.
     *
     * @return float
     */
    public function getMaxCharge()
    {
        return $this->maxCharge;
    }

    /**
     * Sets a new maxCharge
     *
     * The maximum amount that will be charged.
     *
     * @param float $maxCharge
     * @return self
     */
    public function setMaxCharge($maxCharge)
    {
        $this->maxCharge = $maxCharge;

        return $this;
    }

    /**
     * Gets as minCharge
     *
     * The minimum amount that will be charged.
     *
     * @return float
     */
    public function getMinCharge()
    {
        return $this->minCharge;
    }

    /**
     * Sets a new minCharge
     *
     * The minimum amount that will be charged.
     *
     * @param float $minCharge
     * @return self
     */
    public function setMinCharge($minCharge)
    {
        $this->minCharge = $minCharge;

        return $this;
    }

    /**
     * Gets as maxChargeDays
     *
     * Maximum number of days for which a charge will be applied.
     *
     * @return integer
     */
    public function getMaxChargeDays()
    {
        return $this->maxChargeDays;
    }

    /**
     * Sets a new maxChargeDays
     *
     * Maximum number of days for which a charge will be applied.
     *
     * @param integer $maxChargeDays
     * @return self
     */
    public function setMaxChargeDays($maxChargeDays)
    {
        $this->maxChargeDays = $maxChargeDays;

        return $this;
    }


}


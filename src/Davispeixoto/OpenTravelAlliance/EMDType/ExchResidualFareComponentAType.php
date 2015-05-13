<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

use Davispeixoto\OpenTravelAlliance\AirTaxType;
use Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType\TotalAmountAType;
use Davispeixoto\OpenTravelAlliance\FareComponentType;

/**
 * Class representing ExchResidualFareComponentAType
 */
class ExchResidualFareComponentAType extends FareComponentType
{

    /**
     * The tax, fee, or charge amount information.
     *
     * @property AirTaxType[] $taxes
     */
    private $taxes = null;

    /**
     * The total residual value, including applicable tax, fees and charges.
     *
     * @property TotalAmountAType $totalAmount
     */
    private $totalAmount = null;

    /**
     * Adds as tax
     *
     * The tax, fee, or charge amount information.
     *
     * @return self
     * @param AirTaxType $tax
     */
    public function addToTaxes(AirTaxType $tax)
    {
        $this->taxes[] = $tax;

        return $this;
    }

    /**
     * isset taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxes($index)
    {
        if (isset($index)) {
            return isset($this->taxes[$index]);
        }

        return false;
    }

    /**
     * unset taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        if (!empty($this)) {
            unset($this->taxes[$index]);
        }
    }

    /**
     * Gets as taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @return AirTaxType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @param AirTaxType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * The total residual value, including applicable tax, fees and charges.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType\TotalAmountAType
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * The total residual value, including applicable tax, fees and charges.
     *
     * @param TotalAmountAType $totalAmount
     * @return self
     */
    public function setTotalAmount(TotalAmountAType $totalAmount) {
        $this->totalAmount = $totalAmount;

        return $this;
    }


}


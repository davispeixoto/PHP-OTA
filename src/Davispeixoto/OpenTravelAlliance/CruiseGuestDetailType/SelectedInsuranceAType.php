<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType;

/**
 * Class representing SelectedInsuranceAType
 */
class SelectedInsuranceAType
{

    /**
     * Specifies the cruise vendor's insurance code.
     *
     * @property string $insuranceCode
     */
    private $insuranceCode = null;

    /**
     * When true indicates the item is selected. When false, indicates an alternate
     * item exists, but is not currently selected.
     *
     * @property boolean $selectedOptionIndicator
     */
    private $selectedOptionIndicator = null;

    /**
     * When true, the insurance code would be the pre-selected default. When false, the
     * insurance code is not the default.
     *
     * @property boolean $defaultIndicator
     */
    private $defaultIndicator = null;

    /**
     * Specifies the Status of the Insurance Refer to OpenTravel Code table Status
     * (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as insuranceCode
     *
     * Specifies the cruise vendor's insurance code.
     *
     * @return string
     */
    public function getInsuranceCode()
    {
        return $this->insuranceCode;
    }

    /**
     * Sets a new insuranceCode
     *
     * Specifies the cruise vendor's insurance code.
     *
     * @param string $insuranceCode
     * @return self
     */
    public function setInsuranceCode($insuranceCode)
    {
        $this->insuranceCode = $insuranceCode;

        return $this;
    }

    /**
     * Gets as selectedOptionIndicator
     *
     * When true indicates the item is selected. When false, indicates an alternate
     * item exists, but is not currently selected.
     *
     * @return boolean
     */
    public function getSelectedOptionIndicator()
    {
        return $this->selectedOptionIndicator;
    }

    /**
     * Sets a new selectedOptionIndicator
     *
     * When true indicates the item is selected. When false, indicates an alternate
     * item exists, but is not currently selected.
     *
     * @param boolean $selectedOptionIndicator
     * @return self
     */
    public function setSelectedOptionIndicator($selectedOptionIndicator)
    {
        $this->selectedOptionIndicator = $selectedOptionIndicator;

        return $this;
    }

    /**
     * Gets as defaultIndicator
     *
     * When true, the insurance code would be the pre-selected default. When false, the
     * insurance code is not the default.
     *
     * @return boolean
     */
    public function getDefaultIndicator()
    {
        return $this->defaultIndicator;
    }

    /**
     * Sets a new defaultIndicator
     *
     * When true, the insurance code would be the pre-selected default. When false, the
     * insurance code is not the default.
     *
     * @param boolean $defaultIndicator
     * @return self
     */
    public function setDefaultIndicator($defaultIndicator)
    {
        $this->defaultIndicator = $defaultIndicator;

        return $this;
    }

    /**
     * Gets as status
     *
     * Specifies the Status of the Insurance Refer to OpenTravel Code table Status
     * (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Specifies the Status of the Insurance Refer to OpenTravel Code table Status
     * (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }


}


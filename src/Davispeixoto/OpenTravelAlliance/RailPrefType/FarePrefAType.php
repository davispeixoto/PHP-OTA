<?php

namespace Davispeixoto\OpenTravelAlliance\RailPrefType;

/**
 * Class representing FarePrefAType
 */
class FarePrefAType
{

    /**
     * Code indicating the type of fare preference (e.g., FM=commission, FD=fare
     * discount). May be used to represent a class code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Free text describing the fare preference.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Reference to one or more rail operators.
     *
     * @property string[] $vendorPrefRPH
     */
    private $vendorPrefRPH = null;

    /**
     * Provides a rate category for the fare preference. Refer to OpenTravel code list
     * Rate Category (RTC).
     *
     * @property string $rateCategoryCode
     */
    private $rateCategoryCode = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @property string $transferAction
     */
    private $transferAction = null;

    /**
     * A fare basis code.
     *
     * @property string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Gets as code
     *
     * Code indicating the type of fare preference (e.g., FM=commission, FD=fare
     * discount). May be used to represent a class code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code indicating the type of fare preference (e.g., FM=commission, FD=fare
     * discount). May be used to represent a class code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as description
     *
     * Free text describing the fare preference.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Free text describing the fare preference.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Adds as vendorPrefRPH
     *
     * Reference to one or more rail operators.
     *
     * @return self
     * @param string $vendorPrefRPH
     */
    public function addToVendorPrefRPH($vendorPrefRPH)
    {
        $this->vendorPrefRPH[] = $vendorPrefRPH;

        return $this;
    }

    /**
     * isset vendorPrefRPH
     *
     * Reference to one or more rail operators.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorPrefRPH($index)
    {
        return isset($this->vendorPrefRPH[$index]);
    }

    /**
     * unset vendorPrefRPH
     *
     * Reference to one or more rail operators.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorPrefRPH($index)
    {
        unset($this->vendorPrefRPH[$index]);
    }

    /**
     * Gets as vendorPrefRPH
     *
     * Reference to one or more rail operators.
     *
     * @return string[]
     */
    public function getVendorPrefRPH()
    {
        return $this->vendorPrefRPH;
    }

    /**
     * Sets a new vendorPrefRPH
     *
     * Reference to one or more rail operators.
     *
     * @param string $vendorPrefRPH
     * @return self
     */
    public function setVendorPrefRPH(array $vendorPrefRPH)
    {
        $this->vendorPrefRPH = $vendorPrefRPH;

        return $this;
    }

    /**
     * Gets as rateCategoryCode
     *
     * Provides a rate category for the fare preference. Refer to OpenTravel code list
     * Rate Category (RTC).
     *
     * @return string
     */
    public function getRateCategoryCode()
    {
        return $this->rateCategoryCode;
    }

    /**
     * Sets a new rateCategoryCode
     *
     * Provides a rate category for the fare preference. Refer to OpenTravel code list
     * Rate Category (RTC).
     *
     * @param string $rateCategoryCode
     * @return self
     */
    public function setRateCategoryCode($rateCategoryCode)
    {
        $this->rateCategoryCode = $rateCategoryCode;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions this element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;

        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * A fare basis code.
     *
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * A fare basis code.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricedOfferType;

/**
 * Class representing BookingInstructionAType
 */
class BookingInstructionAType
{

    /**
     * The booking method that should be applied to the offer.
     *
     * @property string $bookingMethod
     */
    private $bookingMethod = null;

    /**
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an
     * eticket.)
     *
     * @property string $eMDType
     */
    private $eMDType = null;

    /**
     * Special service request information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType[] $sSRInfo
     */
    private $sSRInfo = null;

    /**
     * Other service information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[] $oSIInfo
     */
    private $oSIInfo = null;

    /**
     * Upgrade instruction information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\BookingInstructionAType\UpgradeAType
     * $upgrade
     */
    private $upgrade = null;

    /**
     * Gets as bookingMethod
     *
     * The booking method that should be applied to the offer.
     *
     * @return string
     */
    public function getBookingMethod()
    {
        return $this->bookingMethod;
    }

    /**
     * Sets a new bookingMethod
     *
     * The booking method that should be applied to the offer.
     *
     * @param string $bookingMethod
     * @return self
     */
    public function setBookingMethod($bookingMethod)
    {
        $this->bookingMethod = $bookingMethod;

        return $this;
    }

    /**
     * Gets as eMDType
     *
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an
     * eticket.)
     *
     * @return string
     */
    public function getEMDType()
    {
        return $this->eMDType;
    }

    /**
     * Sets a new eMDType
     *
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an
     * eticket.)
     *
     * @param string $eMDType
     * @return self
     */
    public function setEMDType($eMDType)
    {
        $this->eMDType = $eMDType;

        return $this;
    }

    /**
     * Adds as sSRInfo
     *
     * Special service request information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType $sSRInfo
     */
    public function addToSSRInfo(\Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType $sSRInfo)
    {
        $this->sSRInfo[] = $sSRInfo;

        return $this;
    }

    /**
     * isset sSRInfo
     *
     * Special service request information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSSRInfo($index)
    {
        return isset($this->sSRInfo[$index]);
    }

    /**
     * unset sSRInfo
     *
     * Special service request information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSSRInfo($index)
    {
        unset($this->sSRInfo[$index]);
    }

    /**
     * Gets as sSRInfo
     *
     * Special service request information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType[]
     */
    public function getSSRInfo()
    {
        return $this->sSRInfo;
    }

    /**
     * Sets a new sSRInfo
     *
     * Special service request information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecialServiceRequestType[] $sSRInfo
     * @return self
     */
    public function setSSRInfo(array $sSRInfo)
    {
        $this->sSRInfo = $sSRInfo;

        return $this;
    }

    /**
     * Adds as oSIInfo
     *
     * Other service information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType $oSIInfo
     */
    public function addToOSIInfo(\Davispeixoto\OpenTravelAlliance\OtherServiceInfoType $oSIInfo)
    {
        $this->oSIInfo[] = $oSIInfo;

        return $this;
    }

    /**
     * isset oSIInfo
     *
     * Other service information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOSIInfo($index)
    {
        return isset($this->oSIInfo[$index]);
    }

    /**
     * unset oSIInfo
     *
     * Other service information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOSIInfo($index)
    {
        unset($this->oSIInfo[$index]);
    }

    /**
     * Gets as oSIInfo
     *
     * Other service information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[]
     */
    public function getOSIInfo()
    {
        return $this->oSIInfo;
    }

    /**
     * Sets a new oSIInfo
     *
     * Other service information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OtherServiceInfoType[] $oSIInfo
     * @return self
     */
    public function setOSIInfo(array $oSIInfo)
    {
        $this->oSIInfo = $oSIInfo;

        return $this;
    }

    /**
     * Gets as upgrade
     *
     * Upgrade instruction information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\BookingInstructionAType\UpgradeAType
     */
    public function getUpgrade()
    {
        return $this->upgrade;
    }

    /**
     * Sets a new upgrade
     *
     * Upgrade instruction information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\BookingInstructionAType\UpgradeAType
     * $upgrade
     * @return self
     */
    public function setUpgrade(
        \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\BookingInstructionAType\UpgradeAType $upgrade
    ) {
        $this->upgrade = $upgrade;

        return $this;
    }


}


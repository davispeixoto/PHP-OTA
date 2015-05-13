<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType\TaxCouponInformationAType\TicketDocumentAType\CouponNumberAType;

/**
 * Class representing TaxCouponInfoAType
 */
class TaxCouponInfoAType
{

    /**
     * The sold cabin of passenger travel for the coupon.
     *
     * @property string $cabin
     */
    private $cabin = null;

    /**
     * The standard code of the equipment used for the coupon flight.
     *
     * @property string $airEquipType
     */
    private $airEquipType = null;

    /**
     * Gets as cabin
     *
     * The sold cabin of passenger travel for the coupon.
     *
     * @return string
     */
    public function getCabin()
    {
        return $this->cabin;
    }

    /**
     * Sets a new cabin
     *
     * The sold cabin of passenger travel for the coupon.
     *
     * @param string $cabin
     * @return self
     */
    public function setCabin($cabin)
    {
        $this->cabin = $cabin;

        return $this;
    }

    /**
     * Gets as airEquipType
     *
     * The standard code of the equipment used for the coupon flight.
     *
     * @return string
     */
    public function getAirEquipType()
    {
        return $this->airEquipType;
    }

    /**
     * Sets a new airEquipType
     *
     * The standard code of the equipment used for the coupon flight.
     *
     * @param string $airEquipType
     * @return self
     */
    public function setAirEquipType($airEquipType)
    {
        $this->airEquipType = $airEquipType;

        return $this;
    }


}


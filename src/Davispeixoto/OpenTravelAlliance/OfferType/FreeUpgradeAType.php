<?php

namespace Davispeixoto\OpenTravelAlliance\OfferType;

/**
 * Class representing FreeUpgradeAType
 */
class FreeUpgradeAType
{

    /**
     * Code that identifies the inventory item which must appear in the booking.
     *
     * @property string $upgradeBookingCode
     */
    private $upgradeBookingCode = null;

    /**
     * The specifics of the typical room or service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType\UpgradeFromAType
     * $upgradeFrom
     */
    private $upgradeFrom = null;

    /**
     * The specifics of the upgraded room or service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType\UpgradeToAType
     * $upgradeTo
     */
    private $upgradeTo = null;

    /**
     * Gets as upgradeBookingCode
     *
     * Code that identifies the inventory item which must appear in the booking.
     *
     * @return string
     */
    public function getUpgradeBookingCode()
    {
        return $this->upgradeBookingCode;
    }

    /**
     * Sets a new upgradeBookingCode
     *
     * Code that identifies the inventory item which must appear in the booking.
     *
     * @param string $upgradeBookingCode
     * @return self
     */
    public function setUpgradeBookingCode($upgradeBookingCode)
    {
        $this->upgradeBookingCode = $upgradeBookingCode;

        return $this;
    }

    /**
     * Gets as upgradeFrom
     *
     * The specifics of the typical room or service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType\UpgradeFromAType
     */
    public function getUpgradeFrom()
    {
        return $this->upgradeFrom;
    }

    /**
     * Sets a new upgradeFrom
     *
     * The specifics of the typical room or service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType\UpgradeFromAType
     * $upgradeFrom
     * @return self
     */
    public function setUpgradeFrom(
        \Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType\UpgradeFromAType $upgradeFrom
    ) {
        $this->upgradeFrom = $upgradeFrom;

        return $this;
    }

    /**
     * Gets as upgradeTo
     *
     * The specifics of the upgraded room or service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType\UpgradeToAType
     */
    public function getUpgradeTo()
    {
        return $this->upgradeTo;
    }

    /**
     * Sets a new upgradeTo
     *
     * The specifics of the upgraded room or service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType\UpgradeToAType
     * $upgradeTo
     * @return self
     */
    public function setUpgradeTo(\Davispeixoto\OpenTravelAlliance\OfferType\FreeUpgradeAType\UpgradeToAType $upgradeTo)
    {
        $this->upgradeTo = $upgradeTo;

        return $this;
    }


}


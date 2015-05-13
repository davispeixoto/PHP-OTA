<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ShipInfoType
 *
 * Defines the ship details.
 * XSD Type: ShipInfoType
 */
class ShipInfoType
{

    /**
     * Specifies the operator of the ship (e.g. cruise line or ferry company).
     *
     * @property string $vendorCode
     */
    private $vendorCode = null;

    /**
     * Specifies the name of the operator of the ship (e.g. a cruise line or ferry
     * company).
     *
     * @property string $vendorName
     */
    private $vendorName = null;

    /**
     * Specifies the ship code as defined by the cruise line.
     *
     * @property string $shipCode
     */
    private $shipCode = null;

    /**
     * Specifies the ship name as specified by the cruise line.
     *
     * @property string $shipName
     */
    private $shipName = null;

    /**
     * Identifies the source authority for the code (e.g., IATA); typically used with
     * VendorCode.
     *
     * @property string $vendorCodeContext
     */
    private $vendorCodeContext = null;

    /**
     * Defines the ship details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipAType $ship
     */
    private $ship = null;

    /**
     * Defines the length of the ship.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipLengthAType
     * $shipLength
     */
    private $shipLength = null;

    /**
     * Defines the voltage on the ship.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipVoltageAType
     * $shipVoltage
     */
    private $shipVoltage = null;

    /**
     * Gets as vendorCode
     *
     * Specifies the operator of the ship (e.g. cruise line or ferry company).
     *
     * @return string
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * Sets a new vendorCode
     *
     * Specifies the operator of the ship (e.g. cruise line or ferry company).
     *
     * @param string $vendorCode
     * @return self
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * Gets as vendorName
     *
     * Specifies the name of the operator of the ship (e.g. a cruise line or ferry
     * company).
     *
     * @return string
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * Sets a new vendorName
     *
     * Specifies the name of the operator of the ship (e.g. a cruise line or ferry
     * company).
     *
     * @param string $vendorName
     * @return self
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName = $vendorName;

        return $this;
    }

    /**
     * Gets as shipCode
     *
     * Specifies the ship code as defined by the cruise line.
     *
     * @return string
     */
    public function getShipCode()
    {
        return $this->shipCode;
    }

    /**
     * Sets a new shipCode
     *
     * Specifies the ship code as defined by the cruise line.
     *
     * @param string $shipCode
     * @return self
     */
    public function setShipCode($shipCode)
    {
        $this->shipCode = $shipCode;

        return $this;
    }

    /**
     * Gets as shipName
     *
     * Specifies the ship name as specified by the cruise line.
     *
     * @return string
     */
    public function getShipName()
    {
        return $this->shipName;
    }

    /**
     * Sets a new shipName
     *
     * Specifies the ship name as specified by the cruise line.
     *
     * @param string $shipName
     * @return self
     */
    public function setShipName($shipName)
    {
        $this->shipName = $shipName;

        return $this;
    }

    /**
     * Gets as vendorCodeContext
     *
     * Identifies the source authority for the code (e.g., IATA); typically used with
     * VendorCode.
     *
     * @return string
     */
    public function getVendorCodeContext()
    {
        return $this->vendorCodeContext;
    }

    /**
     * Sets a new vendorCodeContext
     *
     * Identifies the source authority for the code (e.g., IATA); typically used with
     * VendorCode.
     *
     * @param string $vendorCodeContext
     * @return self
     */
    public function setVendorCodeContext($vendorCodeContext)
    {
        $this->vendorCodeContext = $vendorCodeContext;

        return $this;
    }

    /**
     * Gets as ship
     *
     * Defines the ship details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipAType
     */
    public function getShip()
    {
        return $this->ship;
    }

    /**
     * Sets a new ship
     *
     * Defines the ship details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipAType $ship
     * @return self
     */
    public function setShip(\Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipAType $ship)
    {
        $this->ship = $ship;

        return $this;
    }

    /**
     * Gets as shipLength
     *
     * Defines the length of the ship.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipLengthAType
     */
    public function getShipLength()
    {
        return $this->shipLength;
    }

    /**
     * Sets a new shipLength
     *
     * Defines the length of the ship.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipLengthAType $shipLength
     * @return self
     */
    public function setShipLength(\Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipLengthAType $shipLength)
    {
        $this->shipLength = $shipLength;

        return $this;
    }

    /**
     * Gets as shipVoltage
     *
     * Defines the voltage on the ship.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipVoltageAType
     */
    public function getShipVoltage()
    {
        return $this->shipVoltage;
    }

    /**
     * Sets a new shipVoltage
     *
     * Defines the voltage on the ship.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipVoltageAType
     * $shipVoltage
     * @return self
     */
    public function setShipVoltage(\Davispeixoto\OpenTravelAlliance\ShipInfoType\ShipVoltageAType $shipVoltage)
    {
        $this->shipVoltage = $shipVoltage;

        return $this;
    }


}


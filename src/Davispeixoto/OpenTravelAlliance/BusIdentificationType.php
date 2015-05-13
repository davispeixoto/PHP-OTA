<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BusIdentificationType
 *
 * Defines bus identification information.
 * XSD Type: BusIdentificationType
 */
class BusIdentificationType
{

    /**
     * The bus type. Use a string value or a value from an OpenTravel code list (to be
     * defined in 2011B specification.)
     *
     * @property string $busTypeCode
     */
    private $busTypeCode = null;

    /**
     * The unique number that identifies the bus.
     *
     * @property string $busNumber
     */
    private $busNumber = null;

    /**
     * The network code of a bus operator.
     *
     * @property \Davispeixoto\OpenTravelAlliance\NetworkCodeType $networkCode
     */
    private $networkCode = null;

    /**
     * Gets as busTypeCode
     *
     * The bus type. Use a string value or a value from an OpenTravel code list (to be
     * defined in 2011B specification.)
     *
     * @return string
     */
    public function getBusTypeCode()
    {
        return $this->busTypeCode;
    }

    /**
     * Sets a new busTypeCode
     *
     * The bus type. Use a string value or a value from an OpenTravel code list (to be
     * defined in 2011B specification.)
     *
     * @param string $busTypeCode
     * @return self
     */
    public function setBusTypeCode($busTypeCode)
    {
        $this->busTypeCode = $busTypeCode;

        return $this;
    }

    /**
     * Gets as busNumber
     *
     * The unique number that identifies the bus.
     *
     * @return string
     */
    public function getBusNumber()
    {
        return $this->busNumber;
    }

    /**
     * Sets a new busNumber
     *
     * The unique number that identifies the bus.
     *
     * @param string $busNumber
     * @return self
     */
    public function setBusNumber($busNumber)
    {
        $this->busNumber = $busNumber;

        return $this;
    }

    /**
     * Gets as networkCode
     *
     * The network code of a bus operator.
     *
     * @return \Davispeixoto\OpenTravelAlliance\NetworkCodeType
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }

    /**
     * Sets a new networkCode
     *
     * The network code of a bus operator.
     *
     * @param \Davispeixoto\OpenTravelAlliance\NetworkCodeType $networkCode
     * @return self
     */
    public function setNetworkCode(\Davispeixoto\OpenTravelAlliance\NetworkCodeType $networkCode)
    {
        $this->networkCode = $networkCode;

        return $this;
    }


}


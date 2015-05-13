<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricedOfferType\OriginDestinationAType;

/**
 * Class representing AlternateLocationInfoAType
 */
class AlternateLocationInfoAType
{

    /**
     * Specifies alternate airport/city codes for the origin location.
     *
     * @property string[] $originLocation
     */
    private $originLocation = null;

    /**
     * Specifies alternate airport/city codes for the destination location.
     *
     * @property string[] $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Adds as originLocation
     *
     * Specifies alternate airport/city codes for the origin location.
     *
     * @return self
     * @param string $originLocation
     */
    public function addToOriginLocation($originLocation)
    {
        $this->originLocation[] = $originLocation;

        return $this;
    }

    /**
     * isset originLocation
     *
     * Specifies alternate airport/city codes for the origin location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginLocation($index)
    {
        return isset($this->originLocation[$index]);
    }

    /**
     * unset originLocation
     *
     * Specifies alternate airport/city codes for the origin location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginLocation($index)
    {
        unset($this->originLocation[$index]);
    }

    /**
     * Gets as originLocation
     *
     * Specifies alternate airport/city codes for the origin location.
     *
     * @return string[]
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * Specifies alternate airport/city codes for the origin location.
     *
     * @param string $originLocation
     * @return self
     */
    public function setOriginLocation(array $originLocation)
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Adds as destinationLocation
     *
     * Specifies alternate airport/city codes for the destination location.
     *
     * @return self
     * @param string $destinationLocation
     */
    public function addToDestinationLocation($destinationLocation)
    {
        $this->destinationLocation[] = $destinationLocation;

        return $this;
    }

    /**
     * isset destinationLocation
     *
     * Specifies alternate airport/city codes for the destination location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestinationLocation($index)
    {
        return isset($this->destinationLocation[$index]);
    }

    /**
     * unset destinationLocation
     *
     * Specifies alternate airport/city codes for the destination location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestinationLocation($index)
    {
        unset($this->destinationLocation[$index]);
    }

    /**
     * Gets as destinationLocation
     *
     * Specifies alternate airport/city codes for the destination location.
     *
     * @return string[]
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * Specifies alternate airport/city codes for the destination location.
     *
     * @param string $destinationLocation
     * @return self
     */
    public function setDestinationLocation(array $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }


}


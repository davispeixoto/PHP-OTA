<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleCancelRQAdditionalInfoType;

/**
 * Class representing RentalInfoAType
 */
class RentalInfoAType
{

    /**
     * The PickUpDateTime attribute provides information on the pickup date and time.
     *
     * @property \DateTime $pickUpDateTime
     */
    private $pickUpDateTime = null;

    /**
     * The ReturnDateTime attribute provides information on the return date and time.
     *
     * @property \DateTime $returnDateTime
     */
    private $returnDateTime = null;

    /**
     * A code to identify the pick up location, along with an optional code context.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $pickUpLocation
     */
    private $pickUpLocation = null;

    /**
     * A code to identify the return location, along with an optional code context.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $returnLocation
     */
    private $returnLocation = null;

    /**
     * Gets as pickUpDateTime
     *
     * The PickUpDateTime attribute provides information on the pickup date and time.
     *
     * @return \DateTime
     */
    public function getPickUpDateTime()
    {
        return $this->pickUpDateTime;
    }

    /**
     * Sets a new pickUpDateTime
     *
     * The PickUpDateTime attribute provides information on the pickup date and time.
     *
     * @param \DateTime $pickUpDateTime
     * @return self
     */
    public function setPickUpDateTime(\DateTime $pickUpDateTime)
    {
        $this->pickUpDateTime = $pickUpDateTime;

        return $this;
    }

    /**
     * Gets as returnDateTime
     *
     * The ReturnDateTime attribute provides information on the return date and time.
     *
     * @return \DateTime
     */
    public function getReturnDateTime()
    {
        return $this->returnDateTime;
    }

    /**
     * Sets a new returnDateTime
     *
     * The ReturnDateTime attribute provides information on the return date and time.
     *
     * @param \DateTime $returnDateTime
     * @return self
     */
    public function setReturnDateTime(\DateTime $returnDateTime)
    {
        $this->returnDateTime = $returnDateTime;

        return $this;
    }

    /**
     * Gets as pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getPickUpLocation()
    {
        return $this->pickUpLocation;
    }

    /**
     * Sets a new pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $pickUpLocation
     * @return self
     */
    public function setPickUpLocation(\Davispeixoto\OpenTravelAlliance\LocationType $pickUpLocation)
    {
        $this->pickUpLocation = $pickUpLocation;

        return $this;
    }

    /**
     * Gets as returnLocation
     *
     * A code to identify the return location, along with an optional code context.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getReturnLocation()
    {
        return $this->returnLocation;
    }

    /**
     * Sets a new returnLocation
     *
     * A code to identify the return location, along with an optional code context.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $returnLocation
     * @return self
     */
    public function setReturnLocation(\Davispeixoto\OpenTravelAlliance\LocationType $returnLocation)
    {
        $this->returnLocation = $returnLocation;

        return $this;
    }


}


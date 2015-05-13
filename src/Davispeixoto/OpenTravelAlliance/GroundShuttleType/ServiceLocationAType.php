<?php

namespace Davispeixoto\OpenTravelAlliance\GroundShuttleType;

use Davispeixoto\OpenTravelAlliance\GroundLocationType;

/**
 * Class representing ServiceLocationAType
 */
class ServiceLocationAType extends GroundLocationType
{

    /**
     * A sequence number for the service location.
     *
     * @property integer $sequence
     */
    private $sequence = null;

    /**
     * If true, customers may board (be picked up) at this location.
     *
     * @property boolean $pickupInd
     */
    private $pickupInd = null;

    /**
     * A reference to a specific shuttle vehicle defined in Vehicle.
     *
     * @property string $shuttleRPH
     */
    private $shuttleRPH = null;

    /**
     * Hours of operation and other schedule information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationSchedulePlusChargeType[]
     * $schedule
     */
    private $schedule = null;

    /**
     * The name of the shuttle operation company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $operator
     */
    private $operator = null;

    /**
     * Contact information for the shuttle operation company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contact
     */
    private $contact = null;

    /**
     * Gets as sequence
     *
     * A sequence number for the service location.
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A sequence number for the service location.
     *
     * @param integer $sequence
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Gets as pickupInd
     *
     * If true, customers may board (be picked up) at this location.
     *
     * @return boolean
     */
    public function getPickupInd()
    {
        return $this->pickupInd;
    }

    /**
     * Sets a new pickupInd
     *
     * If true, customers may board (be picked up) at this location.
     *
     * @param boolean $pickupInd
     * @return self
     */
    public function setPickupInd($pickupInd)
    {
        $this->pickupInd = $pickupInd;

        return $this;
    }

    /**
     * Gets as shuttleRPH
     *
     * A reference to a specific shuttle vehicle defined in Vehicle.
     *
     * @return string
     */
    public function getShuttleRPH()
    {
        return $this->shuttleRPH;
    }

    /**
     * Sets a new shuttleRPH
     *
     * A reference to a specific shuttle vehicle defined in Vehicle.
     *
     * @param string $shuttleRPH
     * @return self
     */
    public function setShuttleRPH($shuttleRPH)
    {
        $this->shuttleRPH = $shuttleRPH;

        return $this;
    }

    /**
     * Adds as schedule
     *
     * Hours of operation and other schedule information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OperationSchedulePlusChargeType
     * $schedule
     */
    public function addToSchedule(\Davispeixoto\OpenTravelAlliance\OperationSchedulePlusChargeType $schedule)
    {
        $this->schedule[] = $schedule;

        return $this;
    }

    /**
     * isset schedule
     *
     * Hours of operation and other schedule information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSchedule($index)
    {
        return isset($this->schedule[$index]);
    }

    /**
     * unset schedule
     *
     * Hours of operation and other schedule information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSchedule($index)
    {
        unset($this->schedule[$index]);
    }

    /**
     * Gets as schedule
     *
     * Hours of operation and other schedule information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationSchedulePlusChargeType[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * Hours of operation and other schedule information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationSchedulePlusChargeType[]
     * $schedule
     * @return self
     */
    public function setSchedule(array $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Gets as operator
     *
     * The name of the shuttle operation company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * The name of the shuttle operation company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $operator
     * @return self
     */
    public function setOperator(\Davispeixoto\OpenTravelAlliance\CompanyNameType $operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact information for the shuttle operation company.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    public function addToContact(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contact)
    {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * isset contact
     *
     * Contact information for the shuttle operation company.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * Contact information for the shuttle operation company.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * Contact information for the shuttle operation company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact information for the shuttle operation company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;

        return $this;
    }


}


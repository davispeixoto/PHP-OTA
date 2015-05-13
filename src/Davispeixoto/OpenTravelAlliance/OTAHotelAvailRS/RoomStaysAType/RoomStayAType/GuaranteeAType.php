<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType;

/**
 * Class representing GuaranteeAType
 */
class GuaranteeAType
{

    /**
     * GuaranteeType MUST specify the type of the guarantee required in order to book a
     * reservation. FastRez GuaranteeType MUST either be GuaranteeRequired or None.
     *
     * @property string $guaranteeType
     */
    private $guaranteeType = null;

    /**
     * The GuaranteesAccepted container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     * $guaranteesAccepted
     */
    private $guaranteesAccepted = null;

    /**
     * Gets as guaranteeType
     *
     * GuaranteeType MUST specify the type of the guarantee required in order to book a
     * reservation. FastRez GuaranteeType MUST either be GuaranteeRequired or None.
     *
     * @return string
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * Sets a new guaranteeType
     *
     * GuaranteeType MUST specify the type of the guarantee required in order to book a
     * reservation. FastRez GuaranteeType MUST either be GuaranteeRequired or None.
     *
     * @param string $guaranteeType
     * @return self
     */
    public function setGuaranteeType($guaranteeType)
    {
        $this->guaranteeType = $guaranteeType;

        return $this;
    }

    /**
     * Adds as guaranteeAccepted
     *
     * The GuaranteesAccepted container allows for future expansion of the message.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType
     * $guaranteeAccepted
     */
    public function addToGuaranteesAccepted(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted
    ) {
        $this->guaranteesAccepted[] = $guaranteeAccepted;

        return $this;
    }

    /**
     * isset guaranteesAccepted
     *
     * The GuaranteesAccepted container allows for future expansion of the message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuaranteesAccepted($index)
    {
        return isset($this->guaranteesAccepted[$index]);
    }

    /**
     * unset guaranteesAccepted
     *
     * The GuaranteesAccepted container allows for future expansion of the message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuaranteesAccepted($index)
    {
        unset($this->guaranteesAccepted[$index]);
    }

    /**
     * Gets as guaranteesAccepted
     *
     * The GuaranteesAccepted container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     */
    public function getGuaranteesAccepted()
    {
        return $this->guaranteesAccepted;
    }

    /**
     * Sets a new guaranteesAccepted
     *
     * The GuaranteesAccepted container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     * $guaranteesAccepted
     * @return self
     */
    public function setGuaranteesAccepted(array $guaranteesAccepted)
    {
        $this->guaranteesAccepted = $guaranteesAccepted;

        return $this;
    }


}


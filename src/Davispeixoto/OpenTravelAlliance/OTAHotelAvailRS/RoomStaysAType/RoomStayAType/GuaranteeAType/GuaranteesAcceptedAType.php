<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType;

/**
 * Class representing GuaranteesAcceptedAType
 */
class GuaranteesAcceptedAType
{

    /**
     * GuaranteeAccepted MUST identify an acceptable form of guarantee in order to book
     * a reservation. GaranteeAccepted MUST repeat for each acceptable form of
     * guarantee.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     * $guaranteeAccepted
     */
    private $guaranteeAccepted = null;

    /**
     * Adds as guaranteeAccepted
     *
     * GuaranteeAccepted MUST identify an acceptable form of guarantee in order to book
     * a reservation. GaranteeAccepted MUST repeat for each acceptable form of
     * guarantee.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType
     * $guaranteeAccepted
     */
    public function addToGuaranteeAccepted(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted
    ) {
        $this->guaranteeAccepted[] = $guaranteeAccepted;

        return $this;
    }

    /**
     * isset guaranteeAccepted
     *
     * GuaranteeAccepted MUST identify an acceptable form of guarantee in order to book
     * a reservation. GaranteeAccepted MUST repeat for each acceptable form of
     * guarantee.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuaranteeAccepted($index)
    {
        return isset($this->guaranteeAccepted[$index]);
    }

    /**
     * unset guaranteeAccepted
     *
     * GuaranteeAccepted MUST identify an acceptable form of guarantee in order to book
     * a reservation. GaranteeAccepted MUST repeat for each acceptable form of
     * guarantee.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuaranteeAccepted($index)
    {
        unset($this->guaranteeAccepted[$index]);
    }

    /**
     * Gets as guaranteeAccepted
     *
     * GuaranteeAccepted MUST identify an acceptable form of guarantee in order to book
     * a reservation. GaranteeAccepted MUST repeat for each acceptable form of
     * guarantee.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     */
    public function getGuaranteeAccepted()
    {
        return $this->guaranteeAccepted;
    }

    /**
     * Sets a new guaranteeAccepted
     *
     * GuaranteeAccepted MUST identify an acceptable form of guarantee in order to book
     * a reservation. GaranteeAccepted MUST repeat for each acceptable form of
     * guarantee.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     * $guaranteeAccepted
     * @return self
     */
    public function setGuaranteeAccepted(array $guaranteeAccepted)
    {
        $this->guaranteeAccepted = $guaranteeAccepted;

        return $this;
    }


}


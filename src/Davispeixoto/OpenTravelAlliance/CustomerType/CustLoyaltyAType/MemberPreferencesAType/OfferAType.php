<?php

namespace Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType;

/**
 * Class representing OfferAType
 */
class OfferAType
{

    /**
     * An enumerated list of offer sources.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Preferred method of offer communication.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType\CommunicationAType[]
     * $communication
     */
    private $communication = null;

    /**
     * Gets as type
     *
     * An enumerated list of offer sources.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * An enumerated list of offer sources.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Adds as communication
     *
     * Preferred method of offer communication.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType\CommunicationAType
     * $communication
     */
    public function addToCommunication(
        \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType\CommunicationAType $communication
    ) {
        $this->communication[] = $communication;

        return $this;
    }

    /**
     * isset communication
     *
     * Preferred method of offer communication.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommunication($index)
    {
        return isset($this->communication[$index]);
    }

    /**
     * unset communication
     *
     * Preferred method of offer communication.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommunication($index)
    {
        unset($this->communication[$index]);
    }

    /**
     * Gets as communication
     *
     * Preferred method of offer communication.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType\CommunicationAType[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * Preferred method of offer communication.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType\CommunicationAType[]
     * $communication
     * @return self
     */
    public function setCommunication(array $communication)
    {
        $this->communication = $communication;

        return $this;
    }


}


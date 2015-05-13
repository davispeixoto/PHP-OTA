<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing HotelResModifyType
 *
 * Full structure of a hotel reservation modification.
 * XSD Type: HotelResModifyType
 */
class HotelResModifyType
{

    /**
     * A full overlay of reservation information containing the modified data.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType[]
     * $hotelResModify
     */
    private $hotelResModify = null;

    /**
     * A collection of routing hops.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType[]
     * $routingHops
     */
    private $routingHops = null;

    /**
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType
     * $hotelResModify
     */
    public function addToHotelResModify(
        \Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType $hotelResModify
    ) {
        $this->hotelResModify[] = $hotelResModify;

        return $this;
    }

    /**
     * isset hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelResModify($index)
    {
        return isset($this->hotelResModify[$index]);
    }

    /**
     * unset hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelResModify($index)
    {
        unset($this->hotelResModify[$index]);
    }

    /**
     * Gets as hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType[]
     */
    public function getHotelResModify()
    {
        return $this->hotelResModify;
    }

    /**
     * Sets a new hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType[]
     * $hotelResModify
     * @return self
     */
    public function setHotelResModify(array $hotelResModify)
    {
        $this->hotelResModify = $hotelResModify;

        return $this;
    }

    /**
     * Adds as routingHop
     *
     * A collection of routing hops.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType
     * $routingHop
     */
    public function addToRoutingHops(\Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType $routingHop)
    {
        $this->routingHops[] = $routingHop;

        return $this;
    }

    /**
     * isset routingHops
     *
     * A collection of routing hops.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoutingHops($index)
    {
        return isset($this->routingHops[$index]);
    }

    /**
     * unset routingHops
     *
     * A collection of routing hops.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoutingHops($index)
    {
        unset($this->routingHops[$index]);
    }

    /**
     * Gets as routingHops
     *
     * A collection of routing hops.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType[]
     */
    public function getRoutingHops()
    {
        return $this->routingHops;
    }

    /**
     * Sets a new routingHops
     *
     * A collection of routing hops.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType[]
     * $routingHops
     * @return self
     */
    public function setRoutingHops(array $routingHops)
    {
        $this->routingHops = $routingHops;

        return $this;
    }

    /**
     * Gets as writtenConfInst
     *
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WrittenConfInstType
     */
    public function getWrittenConfInst()
    {
        return $this->writtenConfInst;
    }

    /**
     * Sets a new writtenConfInst
     *
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst
     * @return self
     */
    public function setWrittenConfInst(\Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst)
    {
        $this->writtenConfInst = $writtenConfInst;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}


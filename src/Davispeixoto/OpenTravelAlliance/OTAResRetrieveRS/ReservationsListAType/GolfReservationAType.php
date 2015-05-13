<?php

namespace Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType;

/**
 * Class representing GolfReservationAType
 */
class GolfReservationAType
{

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * A unique identifier applied to this tee time round.
     *
     * @property integer $roundID
     */
    private $roundID = null;

    /**
     * The date for which the tee time round is reserved.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $playDateTime
     */
    private $playDateTime = null;

    /**
     * An identification of a package of which this tee time round is a part of.
     *
     * @property string $packageID
     */
    private $packageID = null;

    /**
     * The unique Identifier used by the party booking the reservation.
     *
     * @property string $requestorResID
     */
    private $requestorResID = null;

    /**
     * The unique identifier assigned by the supplier.
     *
     * @property string $responderResConfID
     */
    private $responderResConfID = null;

    /**
     * The golfer's membership information for this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GolfReservationAType\MembershipAType
     * $membership
     */
    private $membership = null;

    /**
     * The name of the golfer for this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     */
    private $name = null;

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as roundID
     *
     * A unique identifier applied to this tee time round.
     *
     * @return integer
     */
    public function getRoundID()
    {
        return $this->roundID;
    }

    /**
     * Sets a new roundID
     *
     * A unique identifier applied to this tee time round.
     *
     * @param integer $roundID
     * @return self
     */
    public function setRoundID($roundID)
    {
        $this->roundID = $roundID;

        return $this;
    }

    /**
     * Gets as playDateTime
     *
     * The date for which the tee time round is reserved.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getPlayDateTime()
    {
        return $this->playDateTime;
    }

    /**
     * Sets a new playDateTime
     *
     * The date for which the tee time round is reserved.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $playDateTime
     * @return self
     */
    public function setPlayDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $playDateTime)
    {
        $this->playDateTime = $playDateTime;

        return $this;
    }

    /**
     * Gets as packageID
     *
     * An identification of a package of which this tee time round is a part of.
     *
     * @return string
     */
    public function getPackageID()
    {
        return $this->packageID;
    }

    /**
     * Sets a new packageID
     *
     * An identification of a package of which this tee time round is a part of.
     *
     * @param string $packageID
     * @return self
     */
    public function setPackageID($packageID)
    {
        $this->packageID = $packageID;

        return $this;
    }

    /**
     * Gets as requestorResID
     *
     * The unique Identifier used by the party booking the reservation.
     *
     * @return string
     */
    public function getRequestorResID()
    {
        return $this->requestorResID;
    }

    /**
     * Sets a new requestorResID
     *
     * The unique Identifier used by the party booking the reservation.
     *
     * @param string $requestorResID
     * @return self
     */
    public function setRequestorResID($requestorResID)
    {
        $this->requestorResID = $requestorResID;

        return $this;
    }

    /**
     * Gets as responderResConfID
     *
     * The unique identifier assigned by the supplier.
     *
     * @return string
     */
    public function getResponderResConfID()
    {
        return $this->responderResConfID;
    }

    /**
     * Sets a new responderResConfID
     *
     * The unique identifier assigned by the supplier.
     *
     * @param string $responderResConfID
     * @return self
     */
    public function setResponderResConfID($responderResConfID)
    {
        $this->responderResConfID = $responderResConfID;

        return $this;
    }

    /**
     * Gets as membership
     *
     * The golfer's membership information for this reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GolfReservationAType\MembershipAType
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * Sets a new membership
     *
     * The golfer's membership information for this reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GolfReservationAType\MembershipAType
     * $membership
     * @return self
     */
    public function setMembership(
        \Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType\GolfReservationAType\MembershipAType $membership
    ) {
        $this->membership = $membership;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the golfer for this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the golfer for this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     * @return self
     */
    public function setName(\Davispeixoto\OpenTravelAlliance\PersonNameType $name)
    {
        $this->name = $name;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType;

/**
 * Class representing GolfReadRequestAType
 */
class GolfReadRequestAType
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
     * A unique identifier applied to this tee time round.
     *
     * @property integer $roundID
     */
    private $roundID = null;

    /**
     * To request a reservation record based on golf course membership(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\GolfReadRequestAType\MembershipAType[]
     * $membership
     */
    private $membership = null;

    /**
     * To request reservation record by the golfer's name.
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
     * Adds as membership
     *
     * To request a reservation record based on golf course membership(s).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\GolfReadRequestAType\MembershipAType
     * $membership
     */
    public function addToMembership(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\GolfReadRequestAType\MembershipAType $membership
    ) {
        $this->membership[] = $membership;

        return $this;
    }

    /**
     * isset membership
     *
     * To request a reservation record based on golf course membership(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMembership($index)
    {
        return isset($this->membership[$index]);
    }

    /**
     * unset membership
     *
     * To request a reservation record based on golf course membership(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMembership($index)
    {
        unset($this->membership[$index]);
    }

    /**
     * Gets as membership
     *
     * To request a reservation record based on golf course membership(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\GolfReadRequestAType\MembershipAType[]
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * Sets a new membership
     *
     * To request a reservation record based on golf course membership(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\GolfReadRequestAType\MembershipAType[]
     * $membership
     * @return self
     */
    public function setMembership(array $membership)
    {
        $this->membership = $membership;

        return $this;
    }

    /**
     * Gets as name
     *
     * To request reservation record by the golfer's name.
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
     * To request reservation record by the golfer's name.
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


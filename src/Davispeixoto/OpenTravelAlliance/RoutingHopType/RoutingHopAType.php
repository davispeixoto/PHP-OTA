<?php

namespace Davispeixoto\OpenTravelAlliance\RoutingHopType;

/**
 * Class representing RoutingHopAType
 */
class RoutingHopAType
{

    /**
     * @property string $systemCode
     */
    private $systemCode = null;

    /**
     * Identifier within the System that refers to this specific document
     * (reservation).
     *
     * @property string $localRefID
     */
    private $localRefID = null;

    /**
     * TimeStamp: TimeInstant - The date and time that the reservation passed through a
     * routing hop.
     *
     * @property \DateTime $timeStamp
     */
    private $timeStamp = null;

    /**
     * @property string $comment
     */
    private $comment = null;

    /**
     * Sequential number assigned to hops, Base 0.
     *
     * @property integer $sequenceNmbr
     */
    private $sequenceNmbr = null;

    /**
     * Data: String - This attribute is provided so that each system can put in
     * whatever data it would like (e.g., auditing information).
     *
     * @property string $data
     */
    private $data = null;

    /**
     * Gets as systemCode
     *
     * @return string
     */
    public function getSystemCode()
    {
        return $this->systemCode;
    }

    /**
     * Sets a new systemCode
     *
     * @param string $systemCode
     * @return self
     */
    public function setSystemCode($systemCode)
    {
        $this->systemCode = $systemCode;

        return $this;
    }

    /**
     * Gets as localRefID
     *
     * Identifier within the System that refers to this specific document
     * (reservation).
     *
     * @return string
     */
    public function getLocalRefID()
    {
        return $this->localRefID;
    }

    /**
     * Sets a new localRefID
     *
     * Identifier within the System that refers to this specific document
     * (reservation).
     *
     * @param string $localRefID
     * @return self
     */
    public function setLocalRefID($localRefID)
    {
        $this->localRefID = $localRefID;

        return $this;
    }

    /**
     * Gets as timeStamp
     *
     * TimeStamp: TimeInstant - The date and time that the reservation passed through a
     * routing hop.
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * Sets a new timeStamp
     *
     * TimeStamp: TimeInstant - The date and time that the reservation passed through a
     * routing hop.
     *
     * @param \DateTime $timeStamp
     * @return self
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * Gets as comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Gets as sequenceNmbr
     *
     * Sequential number assigned to hops, Base 0.
     *
     * @return integer
     */
    public function getSequenceNmbr()
    {
        return $this->sequenceNmbr;
    }

    /**
     * Sets a new sequenceNmbr
     *
     * Sequential number assigned to hops, Base 0.
     *
     * @param integer $sequenceNmbr
     * @return self
     */
    public function setSequenceNmbr($sequenceNmbr)
    {
        $this->sequenceNmbr = $sequenceNmbr;

        return $this;
    }

    /**
     * Gets as data
     *
     * Data: String - This attribute is provided so that each system can put in
     * whatever data it would like (e.g., auditing information).
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * Data: String - This attribute is provided so that each system can put in
     * whatever data it would like (e.g., auditing information).
     *
     * @param string $data
     * @return self
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType;

/**
 * Class representing ExhibitorInfoAType
 */
class ExhibitorInfoAType
{

    /**
     * The expected number of total attendees at the event.
     *
     * @property integer $expectedTotalQuantity
     */
    private $expectedTotalQuantity = null;

    /**
     * The expected number of domestic attendees for the event.
     *
     * @property integer $domesticQuantity
     */
    private $domesticQuantity = null;

    /**
     * The expected number of international attendess for the event.
     *
     * @property integer $internationalQuantity
     */
    private $internationalQuantity = null;

    /**
     * The number of preregistered attendees for the event.
     *
     * @property integer $preRegisteredQuantity
     */
    private $preRegisteredQuantity = null;

    /**
     * A collection of comments pertaining to the exhibitors.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as expectedTotalQuantity
     *
     * The expected number of total attendees at the event.
     *
     * @return integer
     */
    public function getExpectedTotalQuantity()
    {
        return $this->expectedTotalQuantity;
    }

    /**
     * Sets a new expectedTotalQuantity
     *
     * The expected number of total attendees at the event.
     *
     * @param integer $expectedTotalQuantity
     * @return self
     */
    public function setExpectedTotalQuantity($expectedTotalQuantity)
    {
        $this->expectedTotalQuantity = $expectedTotalQuantity;

        return $this;
    }

    /**
     * Gets as domesticQuantity
     *
     * The expected number of domestic attendees for the event.
     *
     * @return integer
     */
    public function getDomesticQuantity()
    {
        return $this->domesticQuantity;
    }

    /**
     * Sets a new domesticQuantity
     *
     * The expected number of domestic attendees for the event.
     *
     * @param integer $domesticQuantity
     * @return self
     */
    public function setDomesticQuantity($domesticQuantity)
    {
        $this->domesticQuantity = $domesticQuantity;

        return $this;
    }

    /**
     * Gets as internationalQuantity
     *
     * The expected number of international attendess for the event.
     *
     * @return integer
     */
    public function getInternationalQuantity()
    {
        return $this->internationalQuantity;
    }

    /**
     * Sets a new internationalQuantity
     *
     * The expected number of international attendess for the event.
     *
     * @param integer $internationalQuantity
     * @return self
     */
    public function setInternationalQuantity($internationalQuantity)
    {
        $this->internationalQuantity = $internationalQuantity;

        return $this;
    }

    /**
     * Gets as preRegisteredQuantity
     *
     * The number of preregistered attendees for the event.
     *
     * @return integer
     */
    public function getPreRegisteredQuantity()
    {
        return $this->preRegisteredQuantity;
    }

    /**
     * Sets a new preRegisteredQuantity
     *
     * The number of preregistered attendees for the event.
     *
     * @param integer $preRegisteredQuantity
     * @return self
     */
    public function setPreRegisteredQuantity($preRegisteredQuantity)
    {
        $this->preRegisteredQuantity = $preRegisteredQuantity;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to the exhibitors.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments pertaining to the exhibitors.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments pertaining to the exhibitors.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments pertaining to the exhibitors.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments pertaining to the exhibitors.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}


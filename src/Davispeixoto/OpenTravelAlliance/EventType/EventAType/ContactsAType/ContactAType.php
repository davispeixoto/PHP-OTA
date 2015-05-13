<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\ContactsAType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing ContactAType
 */
class ContactAType extends ContactPersonType
{

    /**
     * When true, indicates that the contact is on site.
     *
     * @property boolean $onSiteIndicator
     */
    private $onSiteIndicator = null;

    /**
     * A collection of comments pertaining to the contact.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as onSiteIndicator
     *
     * When true, indicates that the contact is on site.
     *
     * @return boolean
     */
    public function getOnSiteIndicator()
    {
        return $this->onSiteIndicator;
    }

    /**
     * Sets a new onSiteIndicator
     *
     * When true, indicates that the contact is on site.
     *
     * @param boolean $onSiteIndicator
     * @return self
     */
    public function setOnSiteIndicator($onSiteIndicator)
    {
        $this->onSiteIndicator = $onSiteIndicator;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to the contact.
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
     * A collection of comments pertaining to the contact.
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
     * A collection of comments pertaining to the contact.
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
     * A collection of comments pertaining to the contact.
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
     * A collection of comments pertaining to the contact.
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


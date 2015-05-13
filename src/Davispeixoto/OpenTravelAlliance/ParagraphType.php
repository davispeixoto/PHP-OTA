<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ParagraphType
 *
 * An indication of a new paragraph for a sub-section of a formatted text message.
 * XSD Type: ParagraphType
 */
class ParagraphType
{

    /**
     * In many cases the description repeats, this will allow you to define the
     * information that is being sent, typically used when multiple occurrences of
     * ParagraphType are being sent.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The sequence number for the paragraph.
     *
     * @property integer $paragraphNumber
     */
    private $paragraphNumber = null;

    /**
     * Time stamp of the creation.
     *
     * @property \DateTime $createDateTime
     */
    private $createDateTime = null;

    /**
     * ID of creator. The creator could be a software system identifier or an
     * identifier of an employee resposible for the creation.
     *
     * @property string $creatorID
     */
    private $creatorID = null;

    /**
     * Time stamp of last modification.
     *
     * @property \DateTime $lastModifyDateTime
     */
    private $lastModifyDateTime = null;

    /**
     * Identifies the last software system or person to modify a record.
     *
     * @property string $lastModifierID
     */
    private $lastModifierID = null;

    /**
     * Date an item will be purged from a database (e.g., from a live database to an
     * archive).
     *
     * @property \DateTime $purgeDate
     */
    private $purgeDate = null;

    /**
     * Language identification.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Formatted text content.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[] $text
     */
    private $text = null;

    /**
     * An image for this paragraph.
     *
     * @property string[] $image
     */
    private $image = null;

    /**
     * A URL for this paragraph.
     *
     * @property string[] $uRL
     */
    private $uRL = null;

    /**
     * Formatted text content and an associated item or sequence number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType\ListItemAType[]
     * $listItem
     */
    private $listItem = null;

    /**
     * Gets as name
     *
     * In many cases the description repeats, this will allow you to define the
     * information that is being sent, typically used when multiple occurrences of
     * ParagraphType are being sent.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * In many cases the description repeats, this will allow you to define the
     * information that is being sent, typically used when multiple occurrences of
     * ParagraphType are being sent.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as paragraphNumber
     *
     * The sequence number for the paragraph.
     *
     * @return integer
     */
    public function getParagraphNumber()
    {
        return $this->paragraphNumber;
    }

    /**
     * Sets a new paragraphNumber
     *
     * The sequence number for the paragraph.
     *
     * @param integer $paragraphNumber
     * @return self
     */
    public function setParagraphNumber($paragraphNumber)
    {
        $this->paragraphNumber = $paragraphNumber;

        return $this;
    }

    /**
     * Gets as createDateTime
     *
     * Time stamp of the creation.
     *
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * Time stamp of the creation.
     *
     * @param \DateTime $createDateTime
     * @return self
     */
    public function setCreateDateTime(\DateTime $createDateTime)
    {
        $this->createDateTime = $createDateTime;

        return $this;
    }

    /**
     * Gets as creatorID
     *
     * ID of creator. The creator could be a software system identifier or an
     * identifier of an employee resposible for the creation.
     *
     * @return string
     */
    public function getCreatorID()
    {
        return $this->creatorID;
    }

    /**
     * Sets a new creatorID
     *
     * ID of creator. The creator could be a software system identifier or an
     * identifier of an employee resposible for the creation.
     *
     * @param string $creatorID
     * @return self
     */
    public function setCreatorID($creatorID)
    {
        $this->creatorID = $creatorID;

        return $this;
    }

    /**
     * Gets as lastModifyDateTime
     *
     * Time stamp of last modification.
     *
     * @return \DateTime
     */
    public function getLastModifyDateTime()
    {
        return $this->lastModifyDateTime;
    }

    /**
     * Sets a new lastModifyDateTime
     *
     * Time stamp of last modification.
     *
     * @param \DateTime $lastModifyDateTime
     * @return self
     */
    public function setLastModifyDateTime(\DateTime $lastModifyDateTime)
    {
        $this->lastModifyDateTime = $lastModifyDateTime;

        return $this;
    }

    /**
     * Gets as lastModifierID
     *
     * Identifies the last software system or person to modify a record.
     *
     * @return string
     */
    public function getLastModifierID()
    {
        return $this->lastModifierID;
    }

    /**
     * Sets a new lastModifierID
     *
     * Identifies the last software system or person to modify a record.
     *
     * @param string $lastModifierID
     * @return self
     */
    public function setLastModifierID($lastModifierID)
    {
        $this->lastModifierID = $lastModifierID;

        return $this;
    }

    /**
     * Gets as purgeDate
     *
     * Date an item will be purged from a database (e.g., from a live database to an
     * archive).
     *
     * @return \DateTime
     */
    public function getPurgeDate()
    {
        return $this->purgeDate;
    }

    /**
     * Sets a new purgeDate
     *
     * Date an item will be purged from a database (e.g., from a live database to an
     * archive).
     *
     * @param \DateTime $purgeDate
     * @return self
     */
    public function setPurgeDate(\DateTime $purgeDate)
    {
        $this->purgeDate = $purgeDate;

        return $this;
    }

    /**
     * Gets as language
     *
     * Language identification.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language identification.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Adds as text
     *
     * Formatted text content.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $text
     */
    public function addToText(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $text)
    {
        $this->text[] = $text;

        return $this;
    }

    /**
     * isset text
     *
     * Formatted text content.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * Formatted text content.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * Formatted text content.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Formatted text content.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType[] $text
     * @return self
     */
    public function setText(array $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Adds as image
     *
     * An image for this paragraph.
     *
     * @return self
     * @param string $image
     */
    public function addToImage($image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * isset image
     *
     * An image for this paragraph.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetImage($index)
    {
        return isset($this->image[$index]);
    }

    /**
     * unset image
     *
     * An image for this paragraph.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetImage($index)
    {
        unset($this->image[$index]);
    }

    /**
     * Gets as image
     *
     * An image for this paragraph.
     *
     * @return string[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * An image for this paragraph.
     *
     * @param string[] $image
     * @return self
     */
    public function setImage(array $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Adds as uRL
     *
     * A URL for this paragraph.
     *
     * @return self
     * @param string $uRL
     */
    public function addToURL($uRL)
    {
        $this->uRL[] = $uRL;

        return $this;
    }

    /**
     * isset uRL
     *
     * A URL for this paragraph.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * A URL for this paragraph.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * A URL for this paragraph.
     *
     * @return string[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A URL for this paragraph.
     *
     * @param string[] $uRL
     * @return self
     */
    public function setURL(array $uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Adds as listItem
     *
     * Formatted text content and an associated item or sequence number.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType\ListItemAType $listItem
     */
    public function addToListItem(\Davispeixoto\OpenTravelAlliance\ParagraphType\ListItemAType $listItem)
    {
        $this->listItem[] = $listItem;

        return $this;
    }

    /**
     * isset listItem
     *
     * Formatted text content and an associated item or sequence number.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListItem($index)
    {
        return isset($this->listItem[$index]);
    }

    /**
     * unset listItem
     *
     * Formatted text content and an associated item or sequence number.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListItem($index)
    {
        unset($this->listItem[$index]);
    }

    /**
     * Gets as listItem
     *
     * Formatted text content and an associated item or sequence number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType\ListItemAType[]
     */
    public function getListItem()
    {
        return $this->listItem;
    }

    /**
     * Sets a new listItem
     *
     * Formatted text content and an associated item or sequence number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType\ListItemAType[] $listItem
     * @return self
     */
    public function setListItem(array $listItem)
    {
        $this->listItem = $listItem;

        return $this;
    }


}


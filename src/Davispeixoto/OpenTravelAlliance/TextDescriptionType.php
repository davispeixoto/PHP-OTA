<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TextDescriptionType
 *
 * Describes a text item.
 * XSD Type: TextDescriptionType
 */
class TextDescriptionType
{

    /**
     * Specifies the text category. Refer to OpenTravel Code list Picture Category Code
     * (PIC).
     *
     * @property string $category
     */
    private $category = null;

    /**
     * The content ID of a file attachment with the prefix 'cid:'. The value of this
     * can be used to retrieve the corresponding attachment by the receiving system.
     *
     * @property string $contentID
     */
    private $contentID = null;

    /**
     * The title of the multimedia object.
     *
     * @property string $title
     */
    private $title = null;

    /**
     * The author of the multimedia object.
     *
     * @property string $author
     */
    private $author = null;

    /**
     * A copyright notice for the multimedia object.
     *
     * @property string $copyrightNotice
     */
    private $copyrightNotice = null;

    /**
     * Owner of the copyright for the multimedia content.
     *
     * @property string $copyrightOwner
     */
    private $copyrightOwner = null;

    /**
     * The start date for which the multimedia content rights are claimed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $copyrightStart
     */
    private $copyrightStart = null;

    /**
     * The end date for which the multimedia content rights are claimed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $copyrightEnd
     */
    private $copyrightEnd = null;

    /**
     * The start date for which the content is considered valid.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $effectiveStart
     */
    private $effectiveStart = null;

    /**
     * The end date for which the content is considered valid.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $effectiveEnd
     */
    private $effectiveEnd = null;

    /**
     * Start month and day or date for which the multimedia content is relevent (e.g.
     * the start of a season or the start of an event). When a year is not used (i.e.
     * only the month and day) it signifies a recurring event.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $applicableStart
     */
    private $applicableStart = null;

    /**
     * End month and day or date for which the multimedia content is relevent (e.g. the
     * end of a season or the start of an event). When a year is not used (i.e. only
     * the month and day) it signifies a recurring event.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $applicableEnd
     */
    private $applicableEnd = null;

    /**
     * Uniquely identifies this file in the message.
     *
     * @property string $recordID
     */
    private $recordID = null;

    /**
     * Unique identifier for the source of the multimedia object (e.g., the original
     * image file).
     *
     * @property string $sourceID
     */
    private $sourceID = null;

    /**
     * The language of the text item.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * The URL for a specific text item.
     *
     * @property string $uRL
     */
    private $uRL = null;

    /**
     * The text in a specific language.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TextDescriptionType\DescriptionAType[]
     * $description
     */
    private $description = null;

    /**
     * Gets as category
     *
     * Specifies the text category. Refer to OpenTravel Code list Picture Category Code
     * (PIC).
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Specifies the text category. Refer to OpenTravel Code list Picture Category Code
     * (PIC).
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets as contentID
     *
     * The content ID of a file attachment with the prefix 'cid:'. The value of this
     * can be used to retrieve the corresponding attachment by the receiving system.
     *
     * @return string
     */
    public function getContentID()
    {
        return $this->contentID;
    }

    /**
     * Sets a new contentID
     *
     * The content ID of a file attachment with the prefix 'cid:'. The value of this
     * can be used to retrieve the corresponding attachment by the receiving system.
     *
     * @param string $contentID
     * @return self
     */
    public function setContentID($contentID)
    {
        $this->contentID = $contentID;

        return $this;
    }

    /**
     * Gets as title
     *
     * The title of the multimedia object.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The title of the multimedia object.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets as author
     *
     * The author of the multimedia object.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * The author of the multimedia object.
     *
     * @param string $author
     * @return self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Gets as copyrightNotice
     *
     * A copyright notice for the multimedia object.
     *
     * @return string
     */
    public function getCopyrightNotice()
    {
        return $this->copyrightNotice;
    }

    /**
     * Sets a new copyrightNotice
     *
     * A copyright notice for the multimedia object.
     *
     * @param string $copyrightNotice
     * @return self
     */
    public function setCopyrightNotice($copyrightNotice)
    {
        $this->copyrightNotice = $copyrightNotice;

        return $this;
    }

    /**
     * Gets as copyrightOwner
     *
     * Owner of the copyright for the multimedia content.
     *
     * @return string
     */
    public function getCopyrightOwner()
    {
        return $this->copyrightOwner;
    }

    /**
     * Sets a new copyrightOwner
     *
     * Owner of the copyright for the multimedia content.
     *
     * @param string $copyrightOwner
     * @return self
     */
    public function setCopyrightOwner($copyrightOwner)
    {
        $this->copyrightOwner = $copyrightOwner;

        return $this;
    }

    /**
     * Gets as copyrightStart
     *
     * The start date for which the multimedia content rights are claimed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getCopyrightStart()
    {
        return $this->copyrightStart;
    }

    /**
     * Sets a new copyrightStart
     *
     * The start date for which the multimedia content rights are claimed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $copyrightStart
     * @return self
     */
    public function setCopyrightStart(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $copyrightStart)
    {
        $this->copyrightStart = $copyrightStart;

        return $this;
    }

    /**
     * Gets as copyrightEnd
     *
     * The end date for which the multimedia content rights are claimed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getCopyrightEnd()
    {
        return $this->copyrightEnd;
    }

    /**
     * Sets a new copyrightEnd
     *
     * The end date for which the multimedia content rights are claimed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $copyrightEnd
     * @return self
     */
    public function setCopyrightEnd(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $copyrightEnd)
    {
        $this->copyrightEnd = $copyrightEnd;

        return $this;
    }

    /**
     * Gets as effectiveStart
     *
     * The start date for which the content is considered valid.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getEffectiveStart()
    {
        return $this->effectiveStart;
    }

    /**
     * Sets a new effectiveStart
     *
     * The start date for which the content is considered valid.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $effectiveStart
     * @return self
     */
    public function setEffectiveStart(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $effectiveStart)
    {
        $this->effectiveStart = $effectiveStart;

        return $this;
    }

    /**
     * Gets as effectiveEnd
     *
     * The end date for which the content is considered valid.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getEffectiveEnd()
    {
        return $this->effectiveEnd;
    }

    /**
     * Sets a new effectiveEnd
     *
     * The end date for which the content is considered valid.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $effectiveEnd
     * @return self
     */
    public function setEffectiveEnd(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $effectiveEnd)
    {
        $this->effectiveEnd = $effectiveEnd;

        return $this;
    }

    /**
     * Gets as applicableStart
     *
     * Start month and day or date for which the multimedia content is relevent (e.g.
     * the start of a season or the start of an event). When a year is not used (i.e.
     * only the month and day) it signifies a recurring event.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType
     */
    public function getApplicableStart()
    {
        return $this->applicableStart;
    }

    /**
     * Sets a new applicableStart
     *
     * Start month and day or date for which the multimedia content is relevent (e.g.
     * the start of a season or the start of an event). When a year is not used (i.e.
     * only the month and day) it signifies a recurring event.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $applicableStart
     * @return self
     */
    public function setApplicableStart(\Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $applicableStart)
    {
        $this->applicableStart = $applicableStart;

        return $this;
    }

    /**
     * Gets as applicableEnd
     *
     * End month and day or date for which the multimedia content is relevent (e.g. the
     * end of a season or the start of an event). When a year is not used (i.e. only
     * the month and day) it signifies a recurring event.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType
     */
    public function getApplicableEnd()
    {
        return $this->applicableEnd;
    }

    /**
     * Sets a new applicableEnd
     *
     * End month and day or date for which the multimedia content is relevent (e.g. the
     * end of a season or the start of an event). When a year is not used (i.e. only
     * the month and day) it signifies a recurring event.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $applicableEnd
     * @return self
     */
    public function setApplicableEnd(\Davispeixoto\OpenTravelAlliance\DateOrMonthDayType $applicableEnd)
    {
        $this->applicableEnd = $applicableEnd;

        return $this;
    }

    /**
     * Gets as recordID
     *
     * Uniquely identifies this file in the message.
     *
     * @return string
     */
    public function getRecordID()
    {
        return $this->recordID;
    }

    /**
     * Sets a new recordID
     *
     * Uniquely identifies this file in the message.
     *
     * @param string $recordID
     * @return self
     */
    public function setRecordID($recordID)
    {
        $this->recordID = $recordID;

        return $this;
    }

    /**
     * Gets as sourceID
     *
     * Unique identifier for the source of the multimedia object (e.g., the original
     * image file).
     *
     * @return string
     */
    public function getSourceID()
    {
        return $this->sourceID;
    }

    /**
     * Sets a new sourceID
     *
     * Unique identifier for the source of the multimedia object (e.g., the original
     * image file).
     *
     * @param string $sourceID
     * @return self
     */
    public function setSourceID($sourceID)
    {
        $this->sourceID = $sourceID;

        return $this;
    }

    /**
     * Gets as language
     *
     * The language of the text item.
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
     * The language of the text item.
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
     * Gets as uRL
     *
     * The URL for a specific text item.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * The URL for a specific text item.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Adds as description
     *
     * The text in a specific language.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TextDescriptionType\DescriptionAType
     * $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\TextDescriptionType\DescriptionAType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * The text in a specific language.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * The text in a specific language.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * The text in a specific language.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TextDescriptionType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The text in a specific language.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TextDescriptionType\DescriptionAType[]
     * $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }


}


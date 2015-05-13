<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FormattedTextSubSectionType
 *
 * Used to provide subsection formatted text information.
 * XSD Type: FormattedTextSubSectionType
 */
class FormattedTextSubSectionType
{

    /**
     * This attribute may be used to provide a title for a sub-section of the formatted
     * free text. A sub-section may have multiple related paragraphs of information.
     * For example, if used to provide driving directions there may be multiple
     * paragraphs, and these paragraphs may be grouped into a sub-section called
     * "Driving from the North". A second subsection may be titled "Driving from the
     * South", and may contain several paragraphs to describe the driving directions
     * when driving from the south.
     *
     * @property string $subTitle
     */
    private $subTitle = null;

    /**
     * An optional code that may be assigned to this sub-section of formatted free
     * text.
     *
     * @property string $subCode
     */
    private $subCode = null;

    /**
     * This attribute may be used when there is a need to number all of the
     * sub-sections of information that is to be presented.
     *
     * @property integer $subSectionNumber
     */
    private $subSectionNumber = null;

    /**
     * Details and content of a paragraph for a formatted text message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $paragraph
     */
    private $paragraph = null;

    /**
     * Gets as subTitle
     *
     * This attribute may be used to provide a title for a sub-section of the formatted
     * free text. A sub-section may have multiple related paragraphs of information.
     * For example, if used to provide driving directions there may be multiple
     * paragraphs, and these paragraphs may be grouped into a sub-section called
     * "Driving from the North". A second subsection may be titled "Driving from the
     * South", and may contain several paragraphs to describe the driving directions
     * when driving from the south.
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * This attribute may be used to provide a title for a sub-section of the formatted
     * free text. A sub-section may have multiple related paragraphs of information.
     * For example, if used to provide driving directions there may be multiple
     * paragraphs, and these paragraphs may be grouped into a sub-section called
     * "Driving from the North". A second subsection may be titled "Driving from the
     * South", and may contain several paragraphs to describe the driving directions
     * when driving from the south.
     *
     * @param string $subTitle
     * @return self
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    /**
     * Gets as subCode
     *
     * An optional code that may be assigned to this sub-section of formatted free
     * text.
     *
     * @return string
     */
    public function getSubCode()
    {
        return $this->subCode;
    }

    /**
     * Sets a new subCode
     *
     * An optional code that may be assigned to this sub-section of formatted free
     * text.
     *
     * @param string $subCode
     * @return self
     */
    public function setSubCode($subCode)
    {
        $this->subCode = $subCode;

        return $this;
    }

    /**
     * Gets as subSectionNumber
     *
     * This attribute may be used when there is a need to number all of the
     * sub-sections of information that is to be presented.
     *
     * @return integer
     */
    public function getSubSectionNumber()
    {
        return $this->subSectionNumber;
    }

    /**
     * Sets a new subSectionNumber
     *
     * This attribute may be used when there is a need to number all of the
     * sub-sections of information that is to be presented.
     *
     * @param integer $subSectionNumber
     * @return self
     */
    public function setSubSectionNumber($subSectionNumber)
    {
        $this->subSectionNumber = $subSectionNumber;

        return $this;
    }

    /**
     * Adds as paragraph
     *
     * Details and content of a paragraph for a formatted text message.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $paragraph
     */
    public function addToParagraph(\Davispeixoto\OpenTravelAlliance\ParagraphType $paragraph)
    {
        $this->paragraph[] = $paragraph;

        return $this;
    }

    /**
     * isset paragraph
     *
     * Details and content of a paragraph for a formatted text message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParagraph($index)
    {
        return isset($this->paragraph[$index]);
    }

    /**
     * unset paragraph
     *
     * Details and content of a paragraph for a formatted text message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParagraph($index)
    {
        unset($this->paragraph[$index]);
    }

    /**
     * Gets as paragraph
     *
     * Details and content of a paragraph for a formatted text message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getParagraph()
    {
        return $this->paragraph;
    }

    /**
     * Sets a new paragraph
     *
     * Details and content of a paragraph for a formatted text message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $paragraph
     * @return self
     */
    public function setParagraph(array $paragraph)
    {
        $this->paragraph = $paragraph;

        return $this;
    }


}


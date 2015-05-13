<?php

namespace Davispeixoto\OpenTravelAlliance\OTAFileAttachmentNotifRQ\FileAttachmentReferencesAType;

/**
 * Class representing FileAttachmentReferenceAType
 */
class FileAttachmentReferenceAType
{

    /**
     * Vendor-specific format that contains the content data for the multimedia object.
     *
     * @property string $contentData
     */
    private $contentData = null;

    /**
     * A short description of the multimedia object.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * A code defining the type of picture (e.g. Exterior, Lobby, Reception area,
     * RoomTypes, Facilities, Dining areas, Meeting Rooms, Logo). Refer to OpenTravel
     * Code List Picture Category Code (PIC).
     *
     * @property string $pictureCategoryCode
     */
    private $pictureCategoryCode = null;

    /**
     * The version of the multimedia object.
     *
     * @property string $version
     */
    private $version = null;

    /**
     * The title for the multimedia object.
     *
     * @property string $contentTitle
     */
    private $contentTitle = null;

    /**
     * The caption to be published with the multimedia file.
     *
     * @property string $contentCaption
     */
    private $contentCaption = null;

    /**
     * The information describing the copyright notice for the multimedia object at a
     * hotel facility. If this field is filled in, this copyright notice must be
     * printed with the multimedia object.
     *
     * @property string $copyrightNotice
     */
    private $copyrightNotice = null;

    /**
     * Specifies the name of the file being sent.
     *
     * @property string $fileName
     */
    private $fileName = null;

    /**
     * The size of the file sent, in bytes. This may be used to validate that the
     * received file is the correct size.
     *
     * @property integer $fileSize
     */
    private $fileSize = null;

    /**
     * The height of the image.
     *
     * @property integer $multimediaObjectHeight
     */
    private $multimediaObjectHeight = null;

    /**
     * The width of the image.
     *
     * @property integer $multimediaObjectWidth
     */
    private $multimediaObjectWidth = null;

    /**
     * The unit of measure for the multimedia object (e.g., inches, pixels,
     * centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The content ID of a file attachment with the prefix 'cid:'. The value of this
     * can be used to retrieve the corresponding attachment by the receiving system.
     *
     * @property string $contentID
     */
    private $contentID = null;

    /**
     * Description of the multimedia object or attached file contents. Refer to
     * OpenTravel Code List Content Code (CTT).
     *
     * @property string $contentCode
     */
    private $contentCode = null;

    /**
     * The specific file format of the multimedia object or attached file (e.g., mpeg,
     * jpg, gif). Refer to OpenTravel Code List Content Format Code (CFC).
     *
     * @property string $contentFormatCode
     */
    private $contentFormatCode = null;

    /**
     * Uniquely identifies this file in the message.
     *
     * @property string $recordID
     */
    private $recordID = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

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
     * Gets as contentData
     *
     * Vendor-specific format that contains the content data for the multimedia object.
     *
     * @return string
     */
    public function getContentData()
    {
        return $this->contentData;
    }

    /**
     * Sets a new contentData
     *
     * Vendor-specific format that contains the content data for the multimedia object.
     *
     * @param string $contentData
     * @return self
     */
    public function setContentData($contentData)
    {
        $this->contentData = $contentData;

        return $this;
    }

    /**
     * Gets as description
     *
     * A short description of the multimedia object.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A short description of the multimedia object.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as pictureCategoryCode
     *
     * A code defining the type of picture (e.g. Exterior, Lobby, Reception area,
     * RoomTypes, Facilities, Dining areas, Meeting Rooms, Logo). Refer to OpenTravel
     * Code List Picture Category Code (PIC).
     *
     * @return string
     */
    public function getPictureCategoryCode()
    {
        return $this->pictureCategoryCode;
    }

    /**
     * Sets a new pictureCategoryCode
     *
     * A code defining the type of picture (e.g. Exterior, Lobby, Reception area,
     * RoomTypes, Facilities, Dining areas, Meeting Rooms, Logo). Refer to OpenTravel
     * Code List Picture Category Code (PIC).
     *
     * @param string $pictureCategoryCode
     * @return self
     */
    public function setPictureCategoryCode($pictureCategoryCode)
    {
        $this->pictureCategoryCode = $pictureCategoryCode;

        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the multimedia object.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version of the multimedia object.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as contentTitle
     *
     * The title for the multimedia object.
     *
     * @return string
     */
    public function getContentTitle()
    {
        return $this->contentTitle;
    }

    /**
     * Sets a new contentTitle
     *
     * The title for the multimedia object.
     *
     * @param string $contentTitle
     * @return self
     */
    public function setContentTitle($contentTitle)
    {
        $this->contentTitle = $contentTitle;

        return $this;
    }

    /**
     * Gets as contentCaption
     *
     * The caption to be published with the multimedia file.
     *
     * @return string
     */
    public function getContentCaption()
    {
        return $this->contentCaption;
    }

    /**
     * Sets a new contentCaption
     *
     * The caption to be published with the multimedia file.
     *
     * @param string $contentCaption
     * @return self
     */
    public function setContentCaption($contentCaption)
    {
        $this->contentCaption = $contentCaption;

        return $this;
    }

    /**
     * Gets as copyrightNotice
     *
     * The information describing the copyright notice for the multimedia object at a
     * hotel facility. If this field is filled in, this copyright notice must be
     * printed with the multimedia object.
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
     * The information describing the copyright notice for the multimedia object at a
     * hotel facility. If this field is filled in, this copyright notice must be
     * printed with the multimedia object.
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
     * Gets as fileName
     *
     * Specifies the name of the file being sent.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * Specifies the name of the file being sent.
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Gets as fileSize
     *
     * The size of the file sent, in bytes. This may be used to validate that the
     * received file is the correct size.
     *
     * @return integer
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Sets a new fileSize
     *
     * The size of the file sent, in bytes. This may be used to validate that the
     * received file is the correct size.
     *
     * @param integer $fileSize
     * @return self
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Gets as multimediaObjectHeight
     *
     * The height of the image.
     *
     * @return integer
     */
    public function getMultimediaObjectHeight()
    {
        return $this->multimediaObjectHeight;
    }

    /**
     * Sets a new multimediaObjectHeight
     *
     * The height of the image.
     *
     * @param integer $multimediaObjectHeight
     * @return self
     */
    public function setMultimediaObjectHeight($multimediaObjectHeight)
    {
        $this->multimediaObjectHeight = $multimediaObjectHeight;

        return $this;
    }

    /**
     * Gets as multimediaObjectWidth
     *
     * The width of the image.
     *
     * @return integer
     */
    public function getMultimediaObjectWidth()
    {
        return $this->multimediaObjectWidth;
    }

    /**
     * Sets a new multimediaObjectWidth
     *
     * The width of the image.
     *
     * @param integer $multimediaObjectWidth
     * @return self
     */
    public function setMultimediaObjectWidth($multimediaObjectWidth)
    {
        $this->multimediaObjectWidth = $multimediaObjectWidth;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure for the multimedia object (e.g., inches, pixels,
     * centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure for the multimedia object (e.g., inches, pixels,
     * centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

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
     * Gets as contentCode
     *
     * Description of the multimedia object or attached file contents. Refer to
     * OpenTravel Code List Content Code (CTT).
     *
     * @return string
     */
    public function getContentCode()
    {
        return $this->contentCode;
    }

    /**
     * Sets a new contentCode
     *
     * Description of the multimedia object or attached file contents. Refer to
     * OpenTravel Code List Content Code (CTT).
     *
     * @param string $contentCode
     * @return self
     */
    public function setContentCode($contentCode)
    {
        $this->contentCode = $contentCode;

        return $this;
    }

    /**
     * Gets as contentFormatCode
     *
     * The specific file format of the multimedia object or attached file (e.g., mpeg,
     * jpg, gif). Refer to OpenTravel Code List Content Format Code (CFC).
     *
     * @return string
     */
    public function getContentFormatCode()
    {
        return $this->contentFormatCode;
    }

    /**
     * Sets a new contentFormatCode
     *
     * The specific file format of the multimedia object or attached file (e.g., mpeg,
     * jpg, gif). Refer to OpenTravel Code List Content Format Code (CFC).
     *
     * @param string $contentFormatCode
     * @return self
     */
    public function setContentFormatCode($contentFormatCode)
    {
        $this->contentFormatCode = $contentFormatCode;

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
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

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


}


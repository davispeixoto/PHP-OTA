<?php

namespace Davispeixoto\OpenTravelAlliance\OTAFileAttachmentNotifRQ;

/**
 * Class representing FileAttachmentReferencesAType
 */
class FileAttachmentReferencesAType
{

    /**
     * Specifies details about the file attached to this message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAFileAttachmentNotifRQ\FileAttachmentReferencesAType\FileAttachmentReferenceAType[]
     * $fileAttachmentReference
     */
    private $fileAttachmentReference = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as fileAttachmentReference
     *
     * Specifies details about the file attached to this message.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAFileAttachmentNotifRQ\FileAttachmentReferencesAType\FileAttachmentReferenceAType
     * $fileAttachmentReference
     */
    public function addToFileAttachmentReference(
        \Davispeixoto\OpenTravelAlliance\OTAFileAttachmentNotifRQ\FileAttachmentReferencesAType\FileAttachmentReferenceAType $fileAttachmentReference
    ) {
        $this->fileAttachmentReference[] = $fileAttachmentReference;

        return $this;
    }

    /**
     * isset fileAttachmentReference
     *
     * Specifies details about the file attached to this message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFileAttachmentReference($index)
    {
        return isset($this->fileAttachmentReference[$index]);
    }

    /**
     * unset fileAttachmentReference
     *
     * Specifies details about the file attached to this message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFileAttachmentReference($index)
    {
        unset($this->fileAttachmentReference[$index]);
    }

    /**
     * Gets as fileAttachmentReference
     *
     * Specifies details about the file attached to this message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAFileAttachmentNotifRQ\FileAttachmentReferencesAType\FileAttachmentReferenceAType[]
     */
    public function getFileAttachmentReference()
    {
        return $this->fileAttachmentReference;
    }

    /**
     * Sets a new fileAttachmentReference
     *
     * Specifies details about the file attached to this message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAFileAttachmentNotifRQ\FileAttachmentReferencesAType\FileAttachmentReferenceAType[]
     * $fileAttachmentReference
     * @return self
     */
    public function setFileAttachmentReference(array $fileAttachmentReference)
    {
        $this->fileAttachmentReference = $fileAttachmentReference;

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


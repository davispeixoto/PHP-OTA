<?php

namespace Davispeixoto\OpenTravelAlliance\DocumentType;

/**
 * Class representing AdditionalPersonNamesAType
 */
class AdditionalPersonNamesAType
{

    /**
     * The name of an additional person listed on this document.
     *
     * @property string[] $additionalPersonName
     */
    private $additionalPersonName = null;

    /**
     * Adds as additionalPersonName
     *
     * The name of an additional person listed on this document.
     *
     * @return self
     * @param string $additionalPersonName
     */
    public function addToAdditionalPersonName($additionalPersonName)
    {
        $this->additionalPersonName[] = $additionalPersonName;

        return $this;
    }

    /**
     * isset additionalPersonName
     *
     * The name of an additional person listed on this document.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalPersonName($index)
    {
        return isset($this->additionalPersonName[$index]);
    }

    /**
     * unset additionalPersonName
     *
     * The name of an additional person listed on this document.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalPersonName($index)
    {
        unset($this->additionalPersonName[$index]);
    }

    /**
     * Gets as additionalPersonName
     *
     * The name of an additional person listed on this document.
     *
     * @return string[]
     */
    public function getAdditionalPersonName()
    {
        return $this->additionalPersonName;
    }

    /**
     * Sets a new additionalPersonName
     *
     * The name of an additional person listed on this document.
     *
     * @param string $additionalPersonName
     * @return self
     */
    public function setAdditionalPersonName(array $additionalPersonName)
    {
        $this->additionalPersonName = $additionalPersonName;

        return $this;
    }


}


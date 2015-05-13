<?php

namespace Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType;

/**
 * Class representing AdditionalContentsAType
 */
class AdditionalContentsAType
{

    /**
     * Describes the specific content requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[]
     * $additionalContent
     */
    private $additionalContent = null;

    /**
     * Adds as additionalContent
     *
     * Describes the specific content requested.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType
     * $additionalContent
     */
    public function addToAdditionalContent(
        \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType $additionalContent
    ) {
        $this->additionalContent[] = $additionalContent;

        return $this;
    }

    /**
     * isset additionalContent
     *
     * Describes the specific content requested.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalContent($index)
    {
        return isset($this->additionalContent[$index]);
    }

    /**
     * unset additionalContent
     *
     * Describes the specific content requested.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalContent($index)
    {
        unset($this->additionalContent[$index]);
    }

    /**
     * Gets as additionalContent
     *
     * Describes the specific content requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[]
     */
    public function getAdditionalContent()
    {
        return $this->additionalContent;
    }

    /**
     * Sets a new additionalContent
     *
     * Describes the specific content requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[]
     * $additionalContent
     * @return self
     */
    public function setAdditionalContent(array $additionalContent)
    {
        $this->additionalContent = $additionalContent;

        return $this;
    }


}


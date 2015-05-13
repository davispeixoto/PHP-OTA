<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType;

/**
 * Class representing AdditionalDatesAType
 */
class AdditionalDatesAType
{

    /**
     * Date information petaining to the exhibition.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType[]
     * $additionalDate
     */
    private $additionalDate = null;

    /**
     * Adds as additionalDate
     *
     * Date information petaining to the exhibition.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType
     * $additionalDate
     */
    public function addToAdditionalDate(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType $additionalDate
    ) {
        $this->additionalDate[] = $additionalDate;

        return $this;
    }

    /**
     * isset additionalDate
     *
     * Date information petaining to the exhibition.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalDate($index)
    {
        return isset($this->additionalDate[$index]);
    }

    /**
     * unset additionalDate
     *
     * Date information petaining to the exhibition.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalDate($index)
    {
        unset($this->additionalDate[$index]);
    }

    /**
     * Gets as additionalDate
     *
     * Date information petaining to the exhibition.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType[]
     */
    public function getAdditionalDate()
    {
        return $this->additionalDate;
    }

    /**
     * Sets a new additionalDate
     *
     * Date information petaining to the exhibition.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType[]
     * $additionalDate
     * @return self
     */
    public function setAdditionalDate(array $additionalDate)
    {
        $this->additionalDate = $additionalDate;

        return $this;
    }


}


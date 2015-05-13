<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType;

/**
 * Class representing ExhibitDetailsAType
 */
class ExhibitDetailsAType
{

    /**
     * Describes a single exhibit within an exhibitiion.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     * $exhibitDetail
     */
    private $exhibitDetail = null;

    /**
     * Adds as exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType
     * $exhibitDetail
     */
    public function addToExhibitDetail(
        \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType $exhibitDetail
    ) {
        $this->exhibitDetail[] = $exhibitDetail;

        return $this;
    }

    /**
     * isset exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExhibitDetail($index)
    {
        return isset($this->exhibitDetail[$index]);
    }

    /**
     * unset exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExhibitDetail($index)
    {
        unset($this->exhibitDetail[$index]);
    }

    /**
     * Gets as exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     */
    public function getExhibitDetail()
    {
        return $this->exhibitDetail;
    }

    /**
     * Sets a new exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     * $exhibitDetail
     * @return self
     */
    public function setExhibitDetail(array $exhibitDetail)
    {
        $this->exhibitDetail = $exhibitDetail;

        return $this;
    }


}


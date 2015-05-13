<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType;

/**
 * Class representing CruiseReadRequestAType
 */
class CruiseReadRequestAType
{

    /**
     * When true, the history of the reservation should be returned.
     *
     * @property boolean $historyRequestedInd
     */
    private $historyRequestedInd = null;

    /**
     * Contains information related to the selected sailing. Typically the selected
     * sailing is one of the sailings returned in the previous sailing availability
     * response.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\CruiseReadRequestAType\SelectedSailingAType
     * $selectedSailing
     */
    private $selectedSailing = null;

    /**
     * Contains the guest information such as last name and first name.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $guestInfo
     */
    private $guestInfo = null;

    /**
     * Gets as historyRequestedInd
     *
     * When true, the history of the reservation should be returned.
     *
     * @return boolean
     */
    public function getHistoryRequestedInd()
    {
        return $this->historyRequestedInd;
    }

    /**
     * Sets a new historyRequestedInd
     *
     * When true, the history of the reservation should be returned.
     *
     * @param boolean $historyRequestedInd
     * @return self
     */
    public function setHistoryRequestedInd($historyRequestedInd)
    {
        $this->historyRequestedInd = $historyRequestedInd;

        return $this;
    }

    /**
     * Gets as selectedSailing
     *
     * Contains information related to the selected sailing. Typically the selected
     * sailing is one of the sailings returned in the previous sailing availability
     * response.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\CruiseReadRequestAType\SelectedSailingAType
     */
    public function getSelectedSailing()
    {
        return $this->selectedSailing;
    }

    /**
     * Sets a new selectedSailing
     *
     * Contains information related to the selected sailing. Typically the selected
     * sailing is one of the sailings returned in the previous sailing availability
     * response.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\CruiseReadRequestAType\SelectedSailingAType
     * $selectedSailing
     * @return self
     */
    public function setSelectedSailing(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\CruiseReadRequestAType\SelectedSailingAType $selectedSailing
    ) {
        $this->selectedSailing = $selectedSailing;

        return $this;
    }

    /**
     * Gets as guestInfo
     *
     * Contains the guest information such as last name and first name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getGuestInfo()
    {
        return $this->guestInfo;
    }

    /**
     * Sets a new guestInfo
     *
     * Contains the guest information such as last name and first name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $guestInfo
     * @return self
     */
    public function setGuestInfo(\Davispeixoto\OpenTravelAlliance\PersonNameType $guestInfo)
    {
        $this->guestInfo = $guestInfo;

        return $this;
    }


}


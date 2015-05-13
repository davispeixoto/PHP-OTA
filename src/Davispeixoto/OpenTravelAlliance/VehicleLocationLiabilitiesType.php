<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleLocationLiabilitiesType
 *
 * The Vehicle Location Liabilities Type is used to define information on the
 * financial liabilities assumed by the renter when renting from this facility,
 * along with optional coverage to reduce the financial liabilities.
 * XSD Type: VehicleLocationLiabilitiesType
 */
class VehicleLocationLiabilitiesType
{

    /**
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[]
     * $coverages
     */
    private $coverages = null;

    /**
     * General information about the fiancial liabilities associated with the rental of
     * a vehicle from the associated rental facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     */
    private $info = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as coverage
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType
     * $coverage
     */
    public function addToCoverages(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType $coverage
    ) {
        $this->coverages[] = $coverage;

        return $this;
    }

    /**
     * isset coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoverages($index)
    {
        return isset($this->coverages[$index]);
    }

    /**
     * unset coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoverages($index)
    {
        unset($this->coverages[$index]);
    }

    /**
     * Gets as coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[]
     */
    public function getCoverages()
    {
        return $this->coverages;
    }

    /**
     * Sets a new coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[]
     * $coverages
     * @return self
     */
    public function setCoverages(array $coverages)
    {
        $this->coverages = $coverages;

        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the fiancial liabilities associated with the rental of
     * a vehicle from the associated rental facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * General information about the fiancial liabilities associated with the rental of
     * a vehicle from the associated rental facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     * @return self
     */
    public function setInfo(\Davispeixoto\OpenTravelAlliance\FormattedTextType $info)
    {
        $this->info = $info;

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


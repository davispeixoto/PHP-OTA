<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SailingInfoType
 *
 * Contains information pertaining to the selected sailing.
 * XSD Type: SailingInfoType
 */
class SailingInfoType
{

    /**
     * Contains information related to the selected sailing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingInfoType\SelectedSailingAType
     * $selectedSailing
     */
    private $selectedSailing = null;

    /**
     * Used to request package options that the cruise might offer with the sailing. It
     * is quite common to request, at this stage, packages that are included in the
     * cruise sailing offering (inclusive packages).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SailingInfoType\InclusivePackageOptionAType
     * $inclusivePackageOption
     */
    private $inclusivePackageOption = null;

    /**
     * Currency in which the fare will be returned.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingInfoType\CurrencyAType
     * $currency
     */
    private $currency = null;

    /**
     * Gets as selectedSailing
     *
     * Contains information related to the selected sailing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingInfoType\SelectedSailingAType
     */
    public function getSelectedSailing()
    {
        return $this->selectedSailing;
    }

    /**
     * Sets a new selectedSailing
     *
     * Contains information related to the selected sailing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingInfoType\SelectedSailingAType
     * $selectedSailing
     * @return self
     */
    public function setSelectedSailing(
        \Davispeixoto\OpenTravelAlliance\SailingInfoType\SelectedSailingAType $selectedSailing
    ) {
        $this->selectedSailing = $selectedSailing;

        return $this;
    }

    /**
     * Gets as inclusivePackageOption
     *
     * Used to request package options that the cruise might offer with the sailing. It
     * is quite common to request, at this stage, packages that are included in the
     * cruise sailing offering (inclusive packages).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SailingInfoType\InclusivePackageOptionAType
     */
    public function getInclusivePackageOption()
    {
        return $this->inclusivePackageOption;
    }

    /**
     * Sets a new inclusivePackageOption
     *
     * Used to request package options that the cruise might offer with the sailing. It
     * is quite common to request, at this stage, packages that are included in the
     * cruise sailing offering (inclusive packages).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingInfoType\InclusivePackageOptionAType
     * $inclusivePackageOption
     * @return self
     */
    public function setInclusivePackageOption(
        \Davispeixoto\OpenTravelAlliance\SailingInfoType\InclusivePackageOptionAType $inclusivePackageOption
    ) {
        $this->inclusivePackageOption = $inclusivePackageOption;

        return $this;
    }

    /**
     * Gets as currency
     *
     * Currency in which the fare will be returned.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingInfoType\CurrencyAType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * Currency in which the fare will be returned.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingInfoType\CurrencyAType $currency
     * @return self
     */
    public function setCurrency(\Davispeixoto\OpenTravelAlliance\SailingInfoType\CurrencyAType $currency)
    {
        $this->currency = $currency;

        return $this;
    }


}


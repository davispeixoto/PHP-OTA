<?php

namespace Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType;

/**
 * Class representing DetailInfoAType
 */
class DetailInfoAType
{

    /**
     * Service animal indicator.Example: trueImplementer: If true, this traveler has a
     * service animal.
     *
     * @property boolean $serviceAnimalInd
     */
    private $serviceAnimalInd = null;

    /**
     * Disabled traveler indicator.Example: trueImplementer: If true, this traveler has
     * a disability.
     *
     * @property boolean $disabledInd
     */
    private $disabledInd = null;

    /**
     * Female traveler indicator.Example: trueImplementer: If true, this traveler is
     * female.
     *
     * @property boolean $femaleInd
     */
    private $femaleInd = null;

    /**
     * Male traveler indicator.Example: trueImplementer: If true, this traveler is
     * male.
     *
     * @property boolean $maleInd
     */
    private $maleInd = null;

    /**
     * Identifying traveler information.Implementer: Exchanging this level of personal
     * information between trading partners may be subject to state, local and
     * government legislation and internal or negotiated data use and sharing
     * permissions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType\IdentificationAType
     * $identification
     */
    private $identification = null;

    /**
     * Offer requestor assessed customer value.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OntologyValueType $customerValue
     */
    private $customerValue = null;

    /**
     * Gets as serviceAnimalInd
     *
     * Service animal indicator.Example: trueImplementer: If true, this traveler has a
     * service animal.
     *
     * @return boolean
     */
    public function getServiceAnimalInd()
    {
        return $this->serviceAnimalInd;
    }

    /**
     * Sets a new serviceAnimalInd
     *
     * Service animal indicator.Example: trueImplementer: If true, this traveler has a
     * service animal.
     *
     * @param boolean $serviceAnimalInd
     * @return self
     */
    public function setServiceAnimalInd($serviceAnimalInd)
    {
        $this->serviceAnimalInd = $serviceAnimalInd;

        return $this;
    }

    /**
     * Gets as disabledInd
     *
     * Disabled traveler indicator.Example: trueImplementer: If true, this traveler has
     * a disability.
     *
     * @return boolean
     */
    public function getDisabledInd()
    {
        return $this->disabledInd;
    }

    /**
     * Sets a new disabledInd
     *
     * Disabled traveler indicator.Example: trueImplementer: If true, this traveler has
     * a disability.
     *
     * @param boolean $disabledInd
     * @return self
     */
    public function setDisabledInd($disabledInd)
    {
        $this->disabledInd = $disabledInd;

        return $this;
    }

    /**
     * Gets as femaleInd
     *
     * Female traveler indicator.Example: trueImplementer: If true, this traveler is
     * female.
     *
     * @return boolean
     */
    public function getFemaleInd()
    {
        return $this->femaleInd;
    }

    /**
     * Sets a new femaleInd
     *
     * Female traveler indicator.Example: trueImplementer: If true, this traveler is
     * female.
     *
     * @param boolean $femaleInd
     * @return self
     */
    public function setFemaleInd($femaleInd)
    {
        $this->femaleInd = $femaleInd;

        return $this;
    }

    /**
     * Gets as maleInd
     *
     * Male traveler indicator.Example: trueImplementer: If true, this traveler is
     * male.
     *
     * @return boolean
     */
    public function getMaleInd()
    {
        return $this->maleInd;
    }

    /**
     * Sets a new maleInd
     *
     * Male traveler indicator.Example: trueImplementer: If true, this traveler is
     * male.
     *
     * @param boolean $maleInd
     * @return self
     */
    public function setMaleInd($maleInd)
    {
        $this->maleInd = $maleInd;

        return $this;
    }

    /**
     * Gets as identification
     *
     * Identifying traveler information.Implementer: Exchanging this level of personal
     * information between trading partners may be subject to state, local and
     * government legislation and internal or negotiated data use and sharing
     * permissions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType\IdentificationAType
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Sets a new identification
     *
     * Identifying traveler information.Implementer: Exchanging this level of personal
     * information between trading partners may be subject to state, local and
     * government legislation and internal or negotiated data use and sharing
     * permissions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType\IdentificationAType
     * $identification
     * @return self
     */
    public function setIdentification(
        \Davispeixoto\OpenTravelAlliance\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType\IdentificationAType $identification
    ) {
        $this->identification = $identification;

        return $this;
    }

    /**
     * Gets as customerValue
     *
     * Offer requestor assessed customer value.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OntologyValueType
     */
    public function getCustomerValue()
    {
        return $this->customerValue;
    }

    /**
     * Sets a new customerValue
     *
     * Offer requestor assessed customer value.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OntologyValueType $customerValue
     * @return self
     */
    public function setCustomerValue(\Davispeixoto\OpenTravelAlliance\OntologyValueType $customerValue)
    {
        $this->customerValue = $customerValue;

        return $this;
    }


}


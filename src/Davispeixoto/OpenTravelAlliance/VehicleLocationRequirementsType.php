<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleLocationRequirementsType
 *
 * The Vehicle Location Requirements Type is used to define information on the
 * requirements that are in place with regard to the renting of a vehicle. Such
 * requirements include license requirements, age requirements, payment options,
 * etc. These are requirement that typically must be met by the renter before a
 * rental may commence.
 * XSD Type: VehicleLocationRequirementsType
 */
class VehicleLocationRequirementsType
{

    /**
     * Information associated with the age requirements of renting a vehicle.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType $age
     */
    private $age = null;

    /**
     * Information associated with requirements regarding additional drivers and the
     * rental vehicle.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType
     * $additionalDriver
     */
    private $additionalDriver = null;

    /**
     * Information of the requirements regarding the payment of the rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType
     * $paymentOptions
     */
    private $paymentOptions = null;

    /**
     * Collection of descriptions about various requirements enforced by this location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType\RequirementInfoAType[]
     * $requirementInfos
     */
    private $requirementInfos = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as age
     *
     * Information associated with the age requirements of renting a vehicle.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Information associated with the age requirements of renting a vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType
     * $age
     * @return self
     */
    public function setAge(\Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AgeAType $age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets as additionalDriver
     *
     * Information associated with requirements regarding additional drivers and the
     * rental vehicle.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType
     */
    public function getAdditionalDriver()
    {
        return $this->additionalDriver;
    }

    /**
     * Sets a new additionalDriver
     *
     * Information associated with requirements regarding additional drivers and the
     * rental vehicle.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType
     * $additionalDriver
     * @return self
     */
    public function setAdditionalDriver(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\AdditionalDriverAType $additionalDriver
    ) {
        $this->additionalDriver = $additionalDriver;

        return $this;
    }

    /**
     * Gets as paymentOptions
     *
     * Information of the requirements regarding the payment of the rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType
     */
    public function getPaymentOptions()
    {
        return $this->paymentOptions;
    }

    /**
     * Sets a new paymentOptions
     *
     * Information of the requirements regarding the payment of the rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType
     * $paymentOptions
     * @return self
     */
    public function setPaymentOptions(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType $paymentOptions
    ) {
        $this->paymentOptions = $paymentOptions;

        return $this;
    }

    /**
     * Adds as requirementInfo
     *
     * Collection of descriptions about various requirements enforced by this location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType\RequirementInfoAType
     * $requirementInfo
     */
    public function addToRequirementInfos(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType\RequirementInfoAType $requirementInfo
    ) {
        $this->requirementInfos[] = $requirementInfo;

        return $this;
    }

    /**
     * isset requirementInfos
     *
     * Collection of descriptions about various requirements enforced by this location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRequirementInfos($index)
    {
        return isset($this->requirementInfos[$index]);
    }

    /**
     * unset requirementInfos
     *
     * Collection of descriptions about various requirements enforced by this location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRequirementInfos($index)
    {
        unset($this->requirementInfos[$index]);
    }

    /**
     * Gets as requirementInfos
     *
     * Collection of descriptions about various requirements enforced by this location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType\RequirementInfoAType[]
     */
    public function getRequirementInfos()
    {
        return $this->requirementInfos;
    }

    /**
     * Sets a new requirementInfos
     *
     * Collection of descriptions about various requirements enforced by this location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType\RequirementInfoAType[]
     * $requirementInfos
     * @return self
     */
    public function setRequirementInfos(array $requirementInfos)
    {
        $this->requirementInfos = $requirementInfos;

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


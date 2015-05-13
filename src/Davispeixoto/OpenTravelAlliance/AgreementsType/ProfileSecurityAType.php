<?php

namespace Davispeixoto\OpenTravelAlliance\AgreementsType;

/**
 * Class representing ProfileSecurityAType
 */
class ProfileSecurityAType
{

    /**
     * Organization for which access information is being provided.
     *
     * @property string $accessingOrganizationType
     */
    private $accessingOrganizationType = null;

    /**
     * The identifier of the organization for which access information is being
     * provided.
     *
     * @property string $accessingOrganizationID
     */
    private $accessingOrganizationID = null;

    /**
     * Specifies the type of access that the organization has.
     *
     * @property string $accessType
     */
    private $accessType = null;

    /**
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @property string $transferAction
     */
    private $transferAction = null;

    /**
     * Gets as accessingOrganizationType
     *
     * Organization for which access information is being provided.
     *
     * @return string
     */
    public function getAccessingOrganizationType()
    {
        return $this->accessingOrganizationType;
    }

    /**
     * Sets a new accessingOrganizationType
     *
     * Organization for which access information is being provided.
     *
     * @param string $accessingOrganizationType
     * @return self
     */
    public function setAccessingOrganizationType($accessingOrganizationType)
    {
        $this->accessingOrganizationType = $accessingOrganizationType;

        return $this;
    }

    /**
     * Gets as accessingOrganizationID
     *
     * The identifier of the organization for which access information is being
     * provided.
     *
     * @return string
     */
    public function getAccessingOrganizationID()
    {
        return $this->accessingOrganizationID;
    }

    /**
     * Sets a new accessingOrganizationID
     *
     * The identifier of the organization for which access information is being
     * provided.
     *
     * @param string $accessingOrganizationID
     * @return self
     */
    public function setAccessingOrganizationID($accessingOrganizationID)
    {
        $this->accessingOrganizationID = $accessingOrganizationID;

        return $this;
    }

    /**
     * Gets as accessType
     *
     * Specifies the type of access that the organization has.
     *
     * @return string
     */
    public function getAccessType()
    {
        return $this->accessType;
    }

    /**
     * Sets a new accessType
     *
     * Specifies the type of access that the organization has.
     *
     * @param string $accessType
     * @return self
     */
    public function setAccessType($accessType)
    {
        $this->accessType = $accessType;

        return $this;
    }

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityIDType
 *
 * Unique identification for the tour/activity, including name, supplier ID and
 * trading partner ID.
 * XSD Type: TourActivityID_Type
 */
class TourActivityIDType
{

    /**
     * The supplier/ operator unique code that identifies the tour and/or activity.
     *
     * @property string $supplierProductCode
     */
    private $supplierProductCode = null;

    /**
     * A trading partner code that is associated with the supplier/operator product
     * code.
     *
     * @property string $partnerProductCode
     */
    private $partnerProductCode = null;

    /**
     * The code for the supplier/ operator product brand.
     *
     * @property string $supplierBrandCode
     */
    private $supplierBrandCode = null;

    /**
     * The name of the tour and/or activity.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * An abbreviated name for the tour and/or activity.
     *
     * @property string $shortName
     */
    private $shortName = null;

    /**
     * A unique ID that identifies this tour and/or activity that may be referenced
     * elsewhere in this message.
     *
     * @property string $tourActivityID
     */
    private $tourActivityID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as supplierProductCode
     *
     * The supplier/ operator unique code that identifies the tour and/or activity.
     *
     * @return string
     */
    public function getSupplierProductCode()
    {
        return $this->supplierProductCode;
    }

    /**
     * Sets a new supplierProductCode
     *
     * The supplier/ operator unique code that identifies the tour and/or activity.
     *
     * @param string $supplierProductCode
     * @return self
     */
    public function setSupplierProductCode($supplierProductCode)
    {
        $this->supplierProductCode = $supplierProductCode;

        return $this;
    }

    /**
     * Gets as partnerProductCode
     *
     * A trading partner code that is associated with the supplier/operator product
     * code.
     *
     * @return string
     */
    public function getPartnerProductCode()
    {
        return $this->partnerProductCode;
    }

    /**
     * Sets a new partnerProductCode
     *
     * A trading partner code that is associated with the supplier/operator product
     * code.
     *
     * @param string $partnerProductCode
     * @return self
     */
    public function setPartnerProductCode($partnerProductCode)
    {
        $this->partnerProductCode = $partnerProductCode;

        return $this;
    }

    /**
     * Gets as supplierBrandCode
     *
     * The code for the supplier/ operator product brand.
     *
     * @return string
     */
    public function getSupplierBrandCode()
    {
        return $this->supplierBrandCode;
    }

    /**
     * Sets a new supplierBrandCode
     *
     * The code for the supplier/ operator product brand.
     *
     * @param string $supplierBrandCode
     * @return self
     */
    public function setSupplierBrandCode($supplierBrandCode)
    {
        $this->supplierBrandCode = $supplierBrandCode;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the tour and/or activity.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the tour and/or activity.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as shortName
     *
     * An abbreviated name for the tour and/or activity.
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * An abbreviated name for the tour and/or activity.
     *
     * @param string $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Gets as tourActivityID
     *
     * A unique ID that identifies this tour and/or activity that may be referenced
     * elsewhere in this message.
     *
     * @return string
     */
    public function getTourActivityID()
    {
        return $this->tourActivityID;
    }

    /**
     * Sets a new tourActivityID
     *
     * A unique ID that identifies this tour and/or activity that may be referenced
     * elsewhere in this message.
     *
     * @param string $tourActivityID
     * @return self
     */
    public function setTourActivityID($tourActivityID)
    {
        $this->tourActivityID = $tourActivityID;

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


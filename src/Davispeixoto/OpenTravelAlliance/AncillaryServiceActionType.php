<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AncillaryServiceActionType
 *
 * Airline or ATPCO encoded service family with product group(s), sub-group(s) with
 * required, include or exclude indicators.
 * XSD Type: AncillaryServiceActionType
 */
class AncillaryServiceActionType
{

    /**
     * The source for service code and sub-code definitions. Note that setting this
     * attribute at this level will override the global CodeSource attribute set at a
     * higher level in the message.
     *
     * @property string $codeSource
     */
    private $codeSource = null;

    /**
     * The service family type code. Select a pre-defined value from the list, or use
     * the "Other_" value in combination with the @ExtServiceCode
     * attribute.(Definition) The Service Type defines which data is being requested
     * flight-related optional services, merchandise, baggage allowance, baggage
     * charges, etc.).
     *
     * @property string $serviceCode
     */
    private $serviceCode = null;

    /**
     * A string value that represents an extended enumerated value for the
     * @ServiceCode. To use this feature, select the "Other_" item from the ServiceCode
     * list.NOTE: Any extended enumeration values should be agreed upon between trading
     * partners prior to use.
     *
     * @property string $extServiceCode
     */
    private $extServiceCode = null;

    /**
     * A description of the service family.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * A unique ID for this service family that is referenced elsewhere in this schema.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * An indicator if the service code is required and/or should be included or
     * excluded from the offer results.
     *
     * @property string $resultsAction
     */
    private $resultsAction = null;

    /**
     * Airline or ATPCO encoded product group code(s) that are associated with the
     * service code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType\ProductGroupAType[]
     * $productGroup
     */
    private $productGroup = null;

    /**
     * Gets as codeSource
     *
     * The source for service code and sub-code definitions. Note that setting this
     * attribute at this level will override the global CodeSource attribute set at a
     * higher level in the message.
     *
     * @return string
     */
    public function getCodeSource()
    {
        return $this->codeSource;
    }

    /**
     * Sets a new codeSource
     *
     * The source for service code and sub-code definitions. Note that setting this
     * attribute at this level will override the global CodeSource attribute set at a
     * higher level in the message.
     *
     * @param string $codeSource
     * @return self
     */
    public function setCodeSource($codeSource)
    {
        $this->codeSource = $codeSource;

        return $this;
    }

    /**
     * Gets as serviceCode
     *
     * The service family type code. Select a pre-defined value from the list, or use
     * the "Other_" value in combination with the @ExtServiceCode
     * attribute.(Definition) The Service Type defines which data is being requested
     * flight-related optional services, merchandise, baggage allowance, baggage
     * charges, etc.).
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * Sets a new serviceCode
     *
     * The service family type code. Select a pre-defined value from the list, or use
     * the "Other_" value in combination with the @ExtServiceCode
     * attribute.(Definition) The Service Type defines which data is being requested
     * flight-related optional services, merchandise, baggage allowance, baggage
     * charges, etc.).
     *
     * @param string $serviceCode
     * @return self
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    /**
     * Gets as extServiceCode
     *
     * A string value that represents an extended enumerated value for the
     * @ServiceCode. To use this feature, select the "Other_" item from the ServiceCode
     * list.NOTE: Any extended enumeration values should be agreed upon between trading
     * partners prior to use.
     *
     * @return string
     */
    public function getExtServiceCode()
    {
        return $this->extServiceCode;
    }

    /**
     * Sets a new extServiceCode
     *
     * A string value that represents an extended enumerated value for the
     * @ServiceCode. To use this feature, select the "Other_" item from the ServiceCode
     * list.NOTE: Any extended enumeration values should be agreed upon between trading
     * partners prior to use.
     *
     * @param string $extServiceCode
     * @return self
     */
    public function setExtServiceCode($extServiceCode)
    {
        $this->extServiceCode = $extServiceCode;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the service family.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the service family.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique ID for this service family that is referenced elsewhere in this schema.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique ID for this service family that is referenced elsewhere in this schema.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as resultsAction
     *
     * An indicator if the service code is required and/or should be included or
     * excluded from the offer results.
     *
     * @return string
     */
    public function getResultsAction()
    {
        return $this->resultsAction;
    }

    /**
     * Sets a new resultsAction
     *
     * An indicator if the service code is required and/or should be included or
     * excluded from the offer results.
     *
     * @param string $resultsAction
     * @return self
     */
    public function setResultsAction($resultsAction)
    {
        $this->resultsAction = $resultsAction;

        return $this;
    }

    /**
     * Adds as productGroup
     *
     * Airline or ATPCO encoded product group code(s) that are associated with the
     * service code.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType\ProductGroupAType
     * $productGroup
     */
    public function addToProductGroup(
        \Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType\ProductGroupAType $productGroup
    ) {
        $this->productGroup[] = $productGroup;

        return $this;
    }

    /**
     * isset productGroup
     *
     * Airline or ATPCO encoded product group code(s) that are associated with the
     * service code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProductGroup($index)
    {
        return isset($this->productGroup[$index]);
    }

    /**
     * unset productGroup
     *
     * Airline or ATPCO encoded product group code(s) that are associated with the
     * service code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProductGroup($index)
    {
        unset($this->productGroup[$index]);
    }

    /**
     * Gets as productGroup
     *
     * Airline or ATPCO encoded product group code(s) that are associated with the
     * service code.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType\ProductGroupAType[]
     */
    public function getProductGroup()
    {
        return $this->productGroup;
    }

    /**
     * Sets a new productGroup
     *
     * Airline or ATPCO encoded product group code(s) that are associated with the
     * service code.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AncillaryServiceActionType\ProductGroupAType[]
     * $productGroup
     * @return self
     */
    public function setProductGroup(array $productGroup)
    {
        $this->productGroup = $productGroup;

        return $this;
    }


}


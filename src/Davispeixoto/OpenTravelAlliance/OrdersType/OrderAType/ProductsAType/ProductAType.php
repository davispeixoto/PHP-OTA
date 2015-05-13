<?php

namespace Davispeixoto\OpenTravelAlliance\OrdersType\OrderAType\ProductsAType;

/**
 * Class representing ProductAType
 */
class ProductAType
{

    /**
     * The date or date and time that the product was issued.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $productIssueDate
     */
    private $productIssueDate = null;

    /**
     * An identification number associated to the specific product.
     *
     * @property string $productID
     */
    private $productID = null;

    /**
     * Identifies the type of product being purchased.
     *
     * @property string $productType
     */
    private $productType = null;

    /**
     * The number of the specific product being purchased.
     *
     * @property integer $productQuantity
     */
    private $productQuantity = null;

    /**
     * The serial number of the specific product.
     *
     * @property string $productSerialNumber
     */
    private $productSerialNumber = null;

    /**
     * The discount code that applies to the specific product.
     *
     * @property string $discountCode
     */
    private $discountCode = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The status of the product. This attribute would primarily be used in the
     * response message to identify the status of the item being purchased.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * The recipient(s) to whom the product pertains.
     *
     * @property string[] $listOfRecipientRPH
     */
    private $listOfRecipientRPH = null;

    /**
     * Gets as productIssueDate
     *
     * The date or date and time that the product was issued.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getProductIssueDate()
    {
        return $this->productIssueDate;
    }

    /**
     * Sets a new productIssueDate
     *
     * The date or date and time that the product was issued.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $productIssueDate
     * @return self
     */
    public function setProductIssueDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $productIssueDate)
    {
        $this->productIssueDate = $productIssueDate;

        return $this;
    }

    /**
     * Gets as productID
     *
     * An identification number associated to the specific product.
     *
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * An identification number associated to the specific product.
     *
     * @param string $productID
     * @return self
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;

        return $this;
    }

    /**
     * Gets as productType
     *
     * Identifies the type of product being purchased.
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * Identifies the type of product being purchased.
     *
     * @param string $productType
     * @return self
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Gets as productQuantity
     *
     * The number of the specific product being purchased.
     *
     * @return integer
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * Sets a new productQuantity
     *
     * The number of the specific product being purchased.
     *
     * @param integer $productQuantity
     * @return self
     */
    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    /**
     * Gets as productSerialNumber
     *
     * The serial number of the specific product.
     *
     * @return string
     */
    public function getProductSerialNumber()
    {
        return $this->productSerialNumber;
    }

    /**
     * Sets a new productSerialNumber
     *
     * The serial number of the specific product.
     *
     * @param string $productSerialNumber
     * @return self
     */
    public function setProductSerialNumber($productSerialNumber)
    {
        $this->productSerialNumber = $productSerialNumber;

        return $this;
    }

    /**
     * Gets as discountCode
     *
     * The discount code that applies to the specific product.
     *
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * Sets a new discountCode
     *
     * The discount code that applies to the specific product.
     *
     * @param string $discountCode
     * @return self
     */
    public function setDiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the product. This attribute would primarily be used in the
     * response message to identify the status of the item being purchased.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the product. This attribute would primarily be used in the
     * response message to identify the status of the item being purchased.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Adds as listOfRecipientRPH
     *
     * The recipient(s) to whom the product pertains.
     *
     * @return self
     * @param string $listOfRecipientRPH
     */
    public function addToListOfRecipientRPH($listOfRecipientRPH)
    {
        $this->listOfRecipientRPH[] = $listOfRecipientRPH;

        return $this;
    }

    /**
     * isset listOfRecipientRPH
     *
     * The recipient(s) to whom the product pertains.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfRecipientRPH($index)
    {
        return isset($this->listOfRecipientRPH[$index]);
    }

    /**
     * unset listOfRecipientRPH
     *
     * The recipient(s) to whom the product pertains.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfRecipientRPH($index)
    {
        unset($this->listOfRecipientRPH[$index]);
    }

    /**
     * Gets as listOfRecipientRPH
     *
     * The recipient(s) to whom the product pertains.
     *
     * @return string[]
     */
    public function getListOfRecipientRPH()
    {
        return $this->listOfRecipientRPH;
    }

    /**
     * Sets a new listOfRecipientRPH
     *
     * The recipient(s) to whom the product pertains.
     *
     * @param string $listOfRecipientRPH
     * @return self
     */
    public function setListOfRecipientRPH(array $listOfRecipientRPH)
    {
        $this->listOfRecipientRPH = $listOfRecipientRPH;

        return $this;
    }


}


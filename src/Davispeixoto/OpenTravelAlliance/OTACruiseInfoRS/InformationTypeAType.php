<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseInfoRS;

/**
 * Class representing InformationTypeAType
 */
class InformationTypeAType
{

    /**
     * Provides the code identifying the item.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The name of an item.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Date associated with the information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date
     */
    private $date = null;

    /**
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ReservationIDType[] $reservationID
     */
    private $reservationID = null;

    /**
     * Specifies the selected category to book. Contains information related to the
     * selected sailing. Typically the selected sailing is one of the sailings returned
     * in the previous sailing availability response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo
     */
    private $sailingInfo = null;

    /**
     * Used to provide policy information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $policyInfo
     */
    private $policyInfo = null;

    /**
     * Defines the contact information for the cruise line.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $cruiseLineInfo
     */
    private $cruiseLineInfo = null;

    /**
     * Defines the ship characteristics.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ShipInfoType $shipInfo
     */
    private $shipInfo = null;

    /**
     * Gets as code
     *
     * Provides the code identifying the item.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Provides the code identifying the item.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of an item.
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
     * The name of an item.
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
     * Gets as date
     *
     * Date associated with the information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date associated with the information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date
     * @return self
     */
    public function setDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Adds as reservationID
     *
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ReservationIDType $reservationID
     */
    public function addToReservationID(\Davispeixoto\OpenTravelAlliance\ReservationIDType $reservationID)
    {
        $this->reservationID[] = $reservationID;

        return $this;
    }

    /**
     * isset reservationID
     *
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReservationID($index)
    {
        return isset($this->reservationID[$index]);
    }

    /**
     * unset reservationID
     *
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReservationID($index)
    {
        unset($this->reservationID[$index]);
    }

    /**
     * Gets as reservationID
     *
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ReservationIDType[]
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ReservationIDType[] $reservationID
     * @return self
     */
    public function setReservationID(array $reservationID)
    {
        $this->reservationID = $reservationID;

        return $this;
    }

    /**
     * Gets as sailingInfo
     *
     * Specifies the selected category to book. Contains information related to the
     * selected sailing. Typically the selected sailing is one of the sailings returned
     * in the previous sailing availability response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType
     */
    public function getSailingInfo()
    {
        return $this->sailingInfo;
    }

    /**
     * Sets a new sailingInfo
     *
     * Specifies the selected category to book. Contains information related to the
     * selected sailing. Typically the selected sailing is one of the sailings returned
     * in the previous sailing availability response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo
     * @return self
     */
    public function setSailingInfo(\Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo)
    {
        $this->sailingInfo = $sailingInfo;

        return $this;
    }

    /**
     * Adds as policyInfo
     *
     * Used to provide policy information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $policyInfo
     */
    public function addToPolicyInfo(\Davispeixoto\OpenTravelAlliance\ParagraphType $policyInfo)
    {
        $this->policyInfo[] = $policyInfo;

        return $this;
    }

    /**
     * isset policyInfo
     *
     * Used to provide policy information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPolicyInfo($index)
    {
        return isset($this->policyInfo[$index]);
    }

    /**
     * unset policyInfo
     *
     * Used to provide policy information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPolicyInfo($index)
    {
        unset($this->policyInfo[$index]);
    }

    /**
     * Gets as policyInfo
     *
     * Used to provide policy information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getPolicyInfo()
    {
        return $this->policyInfo;
    }

    /**
     * Sets a new policyInfo
     *
     * Used to provide policy information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $policyInfo
     * @return self
     */
    public function setPolicyInfo(array $policyInfo)
    {
        $this->policyInfo = $policyInfo;

        return $this;
    }

    /**
     * Gets as cruiseLineInfo
     *
     * Defines the contact information for the cruise line.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getCruiseLineInfo()
    {
        return $this->cruiseLineInfo;
    }

    /**
     * Sets a new cruiseLineInfo
     *
     * Defines the contact information for the cruise line.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $cruiseLineInfo
     * @return self
     */
    public function setCruiseLineInfo(\Davispeixoto\OpenTravelAlliance\ContactPersonType $cruiseLineInfo)
    {
        $this->cruiseLineInfo = $cruiseLineInfo;

        return $this;
    }

    /**
     * Gets as shipInfo
     *
     * Defines the ship characteristics.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ShipInfoType
     */
    public function getShipInfo()
    {
        return $this->shipInfo;
    }

    /**
     * Sets a new shipInfo
     *
     * Defines the ship characteristics.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ShipInfoType $shipInfo
     * @return self
     */
    public function setShipInfo(\Davispeixoto\OpenTravelAlliance\ShipInfoType $shipInfo)
    {
        $this->shipInfo = $shipInfo;

        return $this;
    }


}


<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PeriodPriceType
 *
 * Provides dates and times of availability together with duration and prices. The
 * Duration attribite defines the period for which a charge applies, e.g. P1D = per
 * day, P1N = per night, P7D = per week etc. If this attribute is not present, the
 * period is assumed to be the duration of the booking.
 * XSD Type: PeriodPriceType
 */
class PeriodPriceType extends OperationScheduleType
{

    /**
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items.. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Identifies the unit on which on Extra is charged, e.g. per person, room, adult
     * etc.
     *
     * @property string $category
     */
    private $category = null;

    /**
     * Indicates whether the DurationPeriod is a 'Base' (i.e.. a charge for one of a
     * tier of durations like 3days, 7days etc.) or 'AddOn' (i.e. for periods extending
     * a base period like extra day, extra week etc.)
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Defines the period for which a charge applies, e.g. P1D = per day, P1N = per
     * night, P7D = per week etc. If this attribute is not present, the period is
     * assumed to be the duration of the booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $durationPeriod
     */
    private $durationPeriod = null;

    /**
     * An enumerated type that defines how a service is priced. Values: Per stay, Per
     * person, Per night, Per person per night, Per use.
     *
     * @property string $priceBasis
     */
    private $priceBasis = null;

    /**
     * Use with an 'AddOn' DurationPeriod to point to the 'Base' DurationPeriod(s)
     * which it extends.
     *
     * @property string[] $basePeriodRPHs
     */
    private $basePeriodRPHs = null;

    /**
     * When 'true', the accompanying price(s) are guidelines; full pricing will be
     * returned when the Extra is selected in a Quick Cost message. When 'false', an
     * accurate costing can be calculated from the price(s) given. When this attribute
     * is absent, accurate prices will be assumed.
     *
     * @property boolean $guidePriceIndicator
     */
    private $guidePriceIndicator = null;

    /**
     * The maximum period for which the associated service is bookable.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $maximumPeriod
     */
    private $maximumPeriod = null;

    /**
     * Provides a price for an extra by booking/rental period whihch may also be at
     * passenger type/age-level.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgPriceType[] $price
     */
    private $price = null;

    /**
     * Gets as rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items.. For example, used to assign individual passengers or clients to
     * particular itinerary items.
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
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items.. For example, used to assign individual passengers or clients to
     * particular itinerary items.
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
     * Gets as category
     *
     * Identifies the unit on which on Extra is charged, e.g. per person, room, adult
     * etc.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Identifies the unit on which on Extra is charged, e.g. per person, room, adult
     * etc.
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates whether the DurationPeriod is a 'Base' (i.e.. a charge for one of a
     * tier of durations like 3days, 7days etc.) or 'AddOn' (i.e. for periods extending
     * a base period like extra day, extra week etc.)
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates whether the DurationPeriod is a 'Base' (i.e.. a charge for one of a
     * tier of durations like 3days, 7days etc.) or 'AddOn' (i.e. for periods extending
     * a base period like extra day, extra week etc.)
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as durationPeriod
     *
     * Defines the period for which a charge applies, e.g. P1D = per day, P1N = per
     * night, P7D = per week etc. If this attribute is not present, the period is
     * assumed to be the duration of the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDurationPeriod()
    {
        return $this->durationPeriod;
    }

    /**
     * Sets a new durationPeriod
     *
     * Defines the period for which a charge applies, e.g. P1D = per day, P1N = per
     * night, P7D = per week etc. If this attribute is not present, the period is
     * assumed to be the duration of the booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $durationPeriod
     * @return self
     */
    public function setDurationPeriod(\Davispeixoto\OpenTravelAlliance\DurationType $durationPeriod)
    {
        $this->durationPeriod = $durationPeriod;

        return $this;
    }

    /**
     * Gets as priceBasis
     *
     * An enumerated type that defines how a service is priced. Values: Per stay, Per
     * person, Per night, Per person per night, Per use.
     *
     * @return string
     */
    public function getPriceBasis()
    {
        return $this->priceBasis;
    }

    /**
     * Sets a new priceBasis
     *
     * An enumerated type that defines how a service is priced. Values: Per stay, Per
     * person, Per night, Per person per night, Per use.
     *
     * @param string $priceBasis
     * @return self
     */
    public function setPriceBasis($priceBasis)
    {
        $this->priceBasis = $priceBasis;

        return $this;
    }

    /**
     * Adds as basePeriodRPHs
     *
     * Use with an 'AddOn' DurationPeriod to point to the 'Base' DurationPeriod(s)
     * which it extends.
     *
     * @return self
     * @param string $basePeriodRPHs
     */
    public function addToBasePeriodRPHs($basePeriodRPHs)
    {
        $this->basePeriodRPHs[] = $basePeriodRPHs;

        return $this;
    }

    /**
     * isset basePeriodRPHs
     *
     * Use with an 'AddOn' DurationPeriod to point to the 'Base' DurationPeriod(s)
     * which it extends.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBasePeriodRPHs($index)
    {
        return isset($this->basePeriodRPHs[$index]);
    }

    /**
     * unset basePeriodRPHs
     *
     * Use with an 'AddOn' DurationPeriod to point to the 'Base' DurationPeriod(s)
     * which it extends.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBasePeriodRPHs($index)
    {
        unset($this->basePeriodRPHs[$index]);
    }

    /**
     * Gets as basePeriodRPHs
     *
     * Use with an 'AddOn' DurationPeriod to point to the 'Base' DurationPeriod(s)
     * which it extends.
     *
     * @return string[]
     */
    public function getBasePeriodRPHs()
    {
        return $this->basePeriodRPHs;
    }

    /**
     * Sets a new basePeriodRPHs
     *
     * Use with an 'AddOn' DurationPeriod to point to the 'Base' DurationPeriod(s)
     * which it extends.
     *
     * @param string $basePeriodRPHs
     * @return self
     */
    public function setBasePeriodRPHs(array $basePeriodRPHs)
    {
        $this->basePeriodRPHs = $basePeriodRPHs;

        return $this;
    }

    /**
     * Gets as guidePriceIndicator
     *
     * When 'true', the accompanying price(s) are guidelines; full pricing will be
     * returned when the Extra is selected in a Quick Cost message. When 'false', an
     * accurate costing can be calculated from the price(s) given. When this attribute
     * is absent, accurate prices will be assumed.
     *
     * @return boolean
     */
    public function getGuidePriceIndicator()
    {
        return $this->guidePriceIndicator;
    }

    /**
     * Sets a new guidePriceIndicator
     *
     * When 'true', the accompanying price(s) are guidelines; full pricing will be
     * returned when the Extra is selected in a Quick Cost message. When 'false', an
     * accurate costing can be calculated from the price(s) given. When this attribute
     * is absent, accurate prices will be assumed.
     *
     * @param boolean $guidePriceIndicator
     * @return self
     */
    public function setGuidePriceIndicator($guidePriceIndicator)
    {
        $this->guidePriceIndicator = $guidePriceIndicator;

        return $this;
    }

    /**
     * Gets as maximumPeriod
     *
     * The maximum period for which the associated service is bookable.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getMaximumPeriod()
    {
        return $this->maximumPeriod;
    }

    /**
     * Sets a new maximumPeriod
     *
     * The maximum period for which the associated service is bookable.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $maximumPeriod
     * @return self
     */
    public function setMaximumPeriod(\Davispeixoto\OpenTravelAlliance\DurationType $maximumPeriod)
    {
        $this->maximumPeriod = $maximumPeriod;

        return $this;
    }

    /**
     * Adds as price
     *
     * Provides a price for an extra by booking/rental period whihch may also be at
     * passenger type/age-level.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PkgPriceType $price
     */
    public function addToPrice(\Davispeixoto\OpenTravelAlliance\PkgPriceType $price)
    {
        $this->price[] = $price;

        return $this;
    }

    /**
     * isset price
     *
     * Provides a price for an extra by booking/rental period whihch may also be at
     * passenger type/age-level.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPrice($index)
    {
        return isset($this->price[$index]);
    }

    /**
     * unset price
     *
     * Provides a price for an extra by booking/rental period whihch may also be at
     * passenger type/age-level.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPrice($index)
    {
        unset($this->price[$index]);
    }

    /**
     * Gets as price
     *
     * Provides a price for an extra by booking/rental period whihch may also be at
     * passenger type/age-level.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgPriceType[]
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * Provides a price for an extra by booking/rental period whihch may also be at
     * passenger type/age-level.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgPriceType[] $price
     * @return self
     */
    public function setPrice(array $price)
    {
        $this->price = $price;

        return $this;
    }


}


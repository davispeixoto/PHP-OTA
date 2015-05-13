<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing StatisticApplicationSetType
 *
 * Includes the statistic data reported and the codes for which it has been
 * aggregated, if applicable. The applicable date range for the data is defined in
 * its attributes.
 * XSD Type: StatisticApplicationSetType
 */
class StatisticApplicationSetType
{

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * Collection of StatisticCode elements. Used if data is partitioned/aggregated.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType[]
     * $statisticCodes
     */
    private $statisticCodes = null;

    /**
     * Collection of RevenueCategorySummary elements. Used if revenue values reported.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\RevenueCategorySummariesAType\RevenueCategorySummaryAType[]
     * $revenueCategorySummaries
     */
    private $revenueCategorySummaries = null;

    /**
     * Collection of CountCategorySummary elements. Used if count values reported.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\CountCategorySummariesAType\CountCategorySummaryAType[]
     * $countCategorySummaries
     */
    private $countCategorySummaries = null;

    /**
     * Collection of ReportSummary elements.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $reportSummaries
     */
    private $reportSummaries = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Adds as statisticCode
     *
     * Collection of StatisticCode elements. Used if data is partitioned/aggregated.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType
     * $statisticCode
     */
    public function addToStatisticCodes(
        \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType $statisticCode
    ) {
        $this->statisticCodes[] = $statisticCode;

        return $this;
    }

    /**
     * isset statisticCodes
     *
     * Collection of StatisticCode elements. Used if data is partitioned/aggregated.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStatisticCodes($index)
    {
        return isset($this->statisticCodes[$index]);
    }

    /**
     * unset statisticCodes
     *
     * Collection of StatisticCode elements. Used if data is partitioned/aggregated.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStatisticCodes($index)
    {
        unset($this->statisticCodes[$index]);
    }

    /**
     * Gets as statisticCodes
     *
     * Collection of StatisticCode elements. Used if data is partitioned/aggregated.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType[]
     */
    public function getStatisticCodes()
    {
        return $this->statisticCodes;
    }

    /**
     * Sets a new statisticCodes
     *
     * Collection of StatisticCode elements. Used if data is partitioned/aggregated.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType[]
     * $statisticCodes
     * @return self
     */
    public function setStatisticCodes(array $statisticCodes)
    {
        $this->statisticCodes = $statisticCodes;

        return $this;
    }

    /**
     * Adds as revenueCategorySummary
     *
     * Collection of RevenueCategorySummary elements. Used if revenue values reported.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\RevenueCategorySummariesAType\RevenueCategorySummaryAType
     * $revenueCategorySummary
     */
    public function addToRevenueCategorySummaries(
        \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\RevenueCategorySummariesAType\RevenueCategorySummaryAType $revenueCategorySummary
    ) {
        $this->revenueCategorySummaries[] = $revenueCategorySummary;

        return $this;
    }

    /**
     * isset revenueCategorySummaries
     *
     * Collection of RevenueCategorySummary elements. Used if revenue values reported.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRevenueCategorySummaries($index)
    {
        return isset($this->revenueCategorySummaries[$index]);
    }

    /**
     * unset revenueCategorySummaries
     *
     * Collection of RevenueCategorySummary elements. Used if revenue values reported.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRevenueCategorySummaries($index)
    {
        unset($this->revenueCategorySummaries[$index]);
    }

    /**
     * Gets as revenueCategorySummaries
     *
     * Collection of RevenueCategorySummary elements. Used if revenue values reported.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\RevenueCategorySummariesAType\RevenueCategorySummaryAType[]
     */
    public function getRevenueCategorySummaries()
    {
        return $this->revenueCategorySummaries;
    }

    /**
     * Sets a new revenueCategorySummaries
     *
     * Collection of RevenueCategorySummary elements. Used if revenue values reported.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\RevenueCategorySummariesAType\RevenueCategorySummaryAType[]
     * $revenueCategorySummaries
     * @return self
     */
    public function setRevenueCategorySummaries(array $revenueCategorySummaries)
    {
        $this->revenueCategorySummaries = $revenueCategorySummaries;

        return $this;
    }

    /**
     * Adds as countCategorySummary
     *
     * Collection of CountCategorySummary elements. Used if count values reported.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\CountCategorySummariesAType\CountCategorySummaryAType
     * $countCategorySummary
     */
    public function addToCountCategorySummaries(
        \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\CountCategorySummariesAType\CountCategorySummaryAType $countCategorySummary
    ) {
        $this->countCategorySummaries[] = $countCategorySummary;

        return $this;
    }

    /**
     * isset countCategorySummaries
     *
     * Collection of CountCategorySummary elements. Used if count values reported.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCountCategorySummaries($index)
    {
        return isset($this->countCategorySummaries[$index]);
    }

    /**
     * unset countCategorySummaries
     *
     * Collection of CountCategorySummary elements. Used if count values reported.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCountCategorySummaries($index)
    {
        unset($this->countCategorySummaries[$index]);
    }

    /**
     * Gets as countCategorySummaries
     *
     * Collection of CountCategorySummary elements. Used if count values reported.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\CountCategorySummariesAType\CountCategorySummaryAType[]
     */
    public function getCountCategorySummaries()
    {
        return $this->countCategorySummaries;
    }

    /**
     * Sets a new countCategorySummaries
     *
     * Collection of CountCategorySummary elements. Used if count values reported.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType\CountCategorySummariesAType\CountCategorySummaryAType[]
     * $countCategorySummaries
     * @return self
     */
    public function setCountCategorySummaries(array $countCategorySummaries)
    {
        $this->countCategorySummaries = $countCategorySummaries;

        return $this;
    }

    /**
     * Adds as reportSummary
     *
     * Collection of ReportSummary elements.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $reportSummary
     */
    public function addToReportSummaries(\Davispeixoto\OpenTravelAlliance\ParagraphType $reportSummary)
    {
        $this->reportSummaries[] = $reportSummary;

        return $this;
    }

    /**
     * isset reportSummaries
     *
     * Collection of ReportSummary elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReportSummaries($index)
    {
        return isset($this->reportSummaries[$index]);
    }

    /**
     * unset reportSummaries
     *
     * Collection of ReportSummary elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReportSummaries($index)
    {
        unset($this->reportSummaries[$index]);
    }

    /**
     * Gets as reportSummaries
     *
     * Collection of ReportSummary elements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getReportSummaries()
    {
        return $this->reportSummaries;
    }

    /**
     * Sets a new reportSummaries
     *
     * Collection of ReportSummary elements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $reportSummaries
     * @return self
     */
    public function setReportSummaries(array $reportSummaries)
    {
        $this->reportSummaries = $reportSummaries;

        return $this;
    }


}


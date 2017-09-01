<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns demographics for ads or campaigns.
 */
class GetDemographics
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : GetDemographics
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Type of requested objects listed in 'ids' parameter:; *ad — ads;; *campaign — campaigns.;
     *
     * {"type":"string","enum":["ad","campaign"]}
     */
    public function ids_type(string $ids_type) : GetDemographics
    {
        $this->params['ids_type'] = $ids_type;
        return $this;
    }
    /**
     * IDs requested ads or campaigns, separated with a comma, depending on the value set in 'ids_type'. Maximum 2000 objects.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : GetDemographics
    {
        $this->params['ids'] = $ids;
        return $this;
    }
    /**
     * Data grouping by dates:; *day — statistics by days;; *month — statistics by months;; *overall — overall statistics.; 'date_from' and 'date_to' parameters set temporary limits.
     *
     * {"type":"string","enum":["day","month","overall"]}
     */
    public function period(string $period) : GetDemographics
    {
        $this->params['period'] = $period;
        return $this;
    }
    /**
     * Date to show statistics from. For different value of 'period' different date format is used:; *day: YYYY-MM-DD, example: 2011-09-27 — September 27, 2011; **0 — day it was created on;; *month: YYYY-MM, example: 2011-09 — September 2011; **0 — month it was created in;; *overall: 0.
     *
     * {"type":"string"}
     */
    public function date_from(string $date_from) : GetDemographics
    {
        $this->params['date_from'] = $date_from;
        return $this;
    }
    /**
     * Date to show statistics to. For different value of 'period' different date format is used:; *day: YYYY-MM-DD, example: 2011-09-27 — September 27, 2011; **0 — current day;; *month: YYYY-MM, example: 2011-09 — September 2011; **0 — current month;; *overall: 0.
     *
     * {"type":"string"}
     */
    public function date_to(string $date_to) : GetDemographics
    {
        $this->params['date_to'] = $date_to;
        return $this;
    }
}
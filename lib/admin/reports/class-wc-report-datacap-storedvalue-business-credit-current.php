<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once(WC_DATACAP_PLUGIN_DIR . "/lib/admin/reports/class-wc-report-datacap-abstract.php");
require_once(WC_DATACAP_PLUGIN_DIR . "/lib/api/reports/storedvalue/class-wc-datacap-api-reports-storedvalue-business-credit-current.php");

/**
 * Class WC_Report_Datacap_StoredValue_Business_Credit_Current
 */
class WC_Report_Datacap_StoredValue_Business_Credit_Current extends WC_Report_Datacap_Abstract
{
    /**
     * @var string
     */
    protected $requestClass = 'WC_Datacap_API_Reports_StoredValue_Business_Credit_Current';
}
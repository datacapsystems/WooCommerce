<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once(WC_MONETARY_PLUGIN_DIR . "/lib/api/credit/class-wc-monetary-api-credit-abstract-transaction.php");

/**
 * Class WC_Monetary_API_Credit_Sale
 * @method getAccount() Card Account Number
 * @method setAccount(int $value) Card Account Number
 * @method getExpiration() Card Expiration Date (MMYY)
 * @method setExpiration(string $value) Card Expiration Date (MMYY)
 * @method getCVV() Card Account CVV
 * @method setCVV(string $value) Card Account CVV
 * @method getZip() Cardholder Zip Code
 * @method setZip(string $value) Cardholder Zip Code
 * @method getTrack2() Card Track2 Data (stripe)
 * @method setTrack2(string $value) Card Track2 Data (stripe)
 * @method getToken() Monetary Token
 * @method setToken(string $value) Monetary Token
 * @method getAccountKey() Account Encryption Key
 * @method setAccountKey(string $value) Account Encryption Key
 * @method getEncryptedAccount() Encrypted Account Data Block
 * @method setEncryptedAccount(string $value) Encrypted Account Data Block
 * @method getAmount() Transaction Amount
 * @method setAmount(string $value) Transaction Amount
 * @method getTip() Tip Amount
 * @method setTip(string $value) Tip Amount
 * @method getInvoiceNo() Unique Transaction Identifier
 * @method setInvoiceNo(string $value) Unique Transaction Identifier
 * @method getAuthCode() Voice Authorization Code
 * @method setAuthCode(string $value) Voice Authorization Code
 * @method getOverrideDuplicate() Override Duplicate Transaction
 * @method setOverrideDuplicate(bool $value) Override Duplicate Transaction
 * @method getTrace() Echoed in Response
 * @method setTrace(string $value) Echoed in Response
 * @method getTax() Tax Amount
 * @method setTax(string $value) Tax Amount
 * @method getCustomerCode() Customer code
 * @method setCustomerCode(string $value) Customer Code
 */
class WC_Monetary_API_Credit_Sale extends WC_Monetary_API_Credit_Abstract_Transaction
{
    /**
     * @var string
     */
    protected $method = self::POST;

    /**
     * @var string
     */
    protected $uri = '/credit/sale';
}
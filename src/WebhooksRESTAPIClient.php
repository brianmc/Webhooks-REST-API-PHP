<?php
/*
 * WebhooksRESTAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace WebhooksRESTAPILib;

use WebhooksRESTAPILib\Controllers;

/**
 * WebhooksRESTAPILib client class
 */
class WebhooksRESTAPIClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $basicAuthUserName = null,
        $basicAuthPassword = null
    ) {
        Configuration::$basicAuthUserName = $basicAuthUserName ? $basicAuthUserName : Configuration::$basicAuthUserName;
        Configuration::$basicAuthPassword = $basicAuthPassword ? $basicAuthPassword : Configuration::$basicAuthPassword;
    }
 
    /**
     * Singleton access to Misc controller
     * @return Controllers\MiscController The *Singleton* instance
     */
    public function getMisc()
    {
        return Controllers\MiscController::getInstance();
    }
}

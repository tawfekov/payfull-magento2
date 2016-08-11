<?php

namespace Payfull;

class Payfull
{
    protected $_config;

    public static $apiUsername;
    public static $apiPassword;
    public static $apiEndpoint;
    public static $apiUseInstallment;
    public static $apiUse3dSecure;

    public static function setApiUsername($apiUsername)
    {
        self::$apiUsername = $apiUsername;
    }

    public static function setApiPassword($apiPassword)
    {
        self::$apiPassword = $apiPassword;
    }

    public static function setApiEndpoint($apiEndpoint)
    {
        self::$apiEndpoint = $apiEndpoint;
    }

    public static function setApiUseInstallment($apiUseInstallment)
    {
        self::$apiUseInstallment = $apiUseInstallment;
    }

    public static function setApiUse3dSecure($apiUse3dSecure)
    {
        self::$apiUse3dSecure = $apiUse3dSecure;
    }
}

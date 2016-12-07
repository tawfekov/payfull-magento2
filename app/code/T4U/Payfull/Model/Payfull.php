<?php
namespace Payfull;

class Payfull
{
    protected $_config;

    protected $apiUsername;
    protected $apiPassword;
    protected $apiEndpoint;
    protected $apiUseInstallment;
    protected $apiUse3dSecure;

    public function setApiUsername($apiUsername)
    {
        $this->apiUsername = $apiUsername;
    }

    public function setApiPassword($apiPassword)
    {
        $this->apiPassword = $apiPassword;
    }

    public function setApiEndpoint($apiEndpoint)
    {
        $this->apiEndpoint = $apiEndpoint;
    }

    public function setApiUseInstallment($apiUseInstallment)
    {
        $this->apiUseInstallment = $apiUseInstallment;
    }

    public function setApiUse3dSecure($apiUse3dSecure)
    {
        $this->apiUse3dSecure = $apiUse3dSecure;
    }

    public static function post($requestData)
    {
        $charge       = [];
        $charge['id'] = time();
        return $charge;
    }

    public static function refund($transactionId, $amount)
    {
        $charge       = [];
        $charge['id'] = time();
        return $charge;
    }
}

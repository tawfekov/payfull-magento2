<?php
namespace T4U\Payfull\Controller\Service;

class Issuer extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }

    public function execute()
    {
        //give issuer in json
    }
}
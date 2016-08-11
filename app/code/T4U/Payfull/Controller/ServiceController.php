<?php
namespace T4U\Payfull\Controller;

class ServiceController extends \Magento\Framework\App\Action\Action
{
    /** @var \Magento\Framework\Controller\Result\JsonFactory */
    protected $jsonResultFactory;
 
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory
    ) {
        parent::__construct($context);
        $this->jsonResultFactory = $jsonResultFactory;
    }
 
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Json $result */
        $result = $this->jsonResultFactory->create();
        /** You may introduce your own constants for this custom REST API */
        $result->setHttpResponseCode(\Magento\Framework\Webapi\Exception::HTTP_FORBIDDEN);
        $result->setData(['error_message' => __('What are you doing here?')]);
        return $result;
    }
}
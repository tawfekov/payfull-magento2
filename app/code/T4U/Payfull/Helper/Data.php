<?php 
namespace T4U\Payfull\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function getTestConfig($config_path)
    {
        return $this->scopeConfig->getValue(
            $config_path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
?>
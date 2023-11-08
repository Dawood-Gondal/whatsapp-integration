<?php
/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_WhatsappIntegration
 * @copyright   Copyright (c) 2023 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace M2Commerce\WhatsappIntegration\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_STATUS = "whatsApp/whatsapp_chat/status";
    const XML_PATH_PHONE_NUMBER = "whatsApp/whatsapp_chat/phone_number";
    const XML_PATH_MESSAGE = "whatsApp/whatsapp_chat/message";

    /**
     * @return bool
     */
	public function getStatus()
    {
		return (bool)$this->scopeConfig->getValue(self::XML_PATH_STATUS, ScopeInterface::SCOPE_STORE);
	}

    /**
     * @return string
     */
    public function getPhone()
    {
        return (string)$this->scopeConfig->getValue(self::XML_PATH_PHONE_NUMBER, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return (string)$this->scopeConfig->getValue(self::XML_PATH_MESSAGE, ScopeInterface::SCOPE_STORE);
    }
}

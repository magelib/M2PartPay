<?php
namespace MR\PartPay\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PaymentResult extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('paymentexpress_paymentresult', 'entity_id');
    }
}
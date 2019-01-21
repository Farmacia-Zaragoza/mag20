<?php
/**
 * Copyright © 2015 Mkt. All rights reserved.
 */

namespace Mkt\Savelater\Model\Resource;

class Items extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('mkt_savelater_items', 'id');
    }
}

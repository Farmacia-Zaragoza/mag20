<?php
/**
 * Copyright © 2015 Mkt. All rights reserved.
 */

namespace Mkt\Savelater\Model\Resource\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mkt\Savelater\Model\Items', 'Mkt\Savelater\Model\Resource\Items');
    }
}

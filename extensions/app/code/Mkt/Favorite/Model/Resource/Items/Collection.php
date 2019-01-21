<?php
/**
 * Copyright © 2015 Mkt. All rights reserved.
 */

namespace Mkt\Favorite\Model\Resource\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mkt\Favorite\Model\Items', 'Mkt\Favorite\Model\Resource\Items');
    }
}

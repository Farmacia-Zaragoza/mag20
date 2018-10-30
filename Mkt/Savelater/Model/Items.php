<?php
/**
 * Copyright © 2015 Mkt. All rights reserved.
 */

namespace Mkt\Savelater\Model;

class Items extends \Magento\Framework\Model\AbstractModel
{
	/**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Mkt\Savelater\Model\Resource\Items');
    }
}

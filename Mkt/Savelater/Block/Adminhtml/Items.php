<?php
/**
 * Copyright © 2015 Mkt. All rights reserved.
 */
namespace Mkt\Savelater\Block\Adminhtml;

class Items extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'items';
        $this->_headerText = __('Savelater');
        $this->_addButtonLabel = __('Add Item');
        parent::_construct();
		$this->buttonList->remove('add');
    }
}

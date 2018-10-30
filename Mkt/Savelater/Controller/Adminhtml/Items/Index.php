<?php
/**
 * Copyright © 2015 Mkt. All rights reserved.
 */

namespace Mkt\Savelater\Controller\Adminhtml\Items;

class Index extends \Mkt\Savelater\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        //$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		//$saveData = $objectManager->get('Mkt\Savelater\Model\Items');
		//$saveData->Saverating(1,2,3,'test');
		/** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Mkt_Savelater::savelater');
        $resultPage->getConfig()->getTitle()->prepend(__('Savelater'));
        $resultPage->addBreadcrumb(__('Mkt'), __('Mkt'));
        $resultPage->addBreadcrumb(__('Savelater'), __('Savelater'));
        return $resultPage;
    }
}

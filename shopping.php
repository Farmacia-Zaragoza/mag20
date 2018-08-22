<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');
set_time_limit(0);
while (@ob_end_flush());
use Magento\Framework\App\Bootstrap;
include('app/bootstrap.php');

// We have multiple versions
$PHP_VER='v70';
//echo "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento/zz_list.lib";
///brqx/base/rcode/v70/gen/v0_0_1/rphp/objects/magento2.0/internal
include_once "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento2.0/zz_list.lib"; 

$bootstrap = Bootstrap::create(BP, $_SERVER);
$_objectManager = $bootstrap->getObjectManager();
//$state = $_objectManager->get('Magento\Framework\App\State');
//$state->setAreaCode('default');
$state = $_objectManager->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');

$product = $_objectManager->get('Magento\Catalog\Model\Product')->load(1);
echo $product->getName();
/*if($customerSession->isLoggedIn()) {
   echo $customerSession->getCustomer()->getId();
    $customerSession->getCustomer()->getName(); 
    $customerSession->getCustomer()->getEmail();
    $customerSession->getCustomer()->getGroupId(); // get Customer Group Id
}*/
echo "Starting.....\n";
//$om = \Magento\Framework\App\ObjectManager::getInstance();
/*$customerSession = $_objectManager->get('Magento\Customer\Model\Session');
if ($customerSession->isLoggedIn()) {
echo 'ddddddddddd'.$customid = $customerSession->getCustomer()->getId();
echo 'ssssssss'.$customgp = $customerSession->getCustomer()->getGroupId();
}*/
$shoppingCart = new mge_shoppingcart();
//echo $shoppingCart->addItemtocart('test-SKU11',2,$_objectManager);
//$shoppingCart->getAllItemcart($_objectManager);
//$shoppingCart->deleteQuoteItems($_objectManager);
//$shoppingCart->deletesingleitemcart('test-SKU11',$_objectManager);
//$shoppingCart->updatecartitem('test-SKU11',2,$_objectManager);
//$shoppingCart->applycouponcode('teste',$_objectManager);
$shoppingCart->RemoveCouponcode($_objectManager);
//$product->delete_product($_objectManager,'code41');
//echo $category->create_parent('RED',$_objectManager);
//echo $category->delete_parent('RED',$_objectManager);
//echo $category->getCategoryIdbyName('RED',$_objectManager);
//echo $category->getCategoryIdbySku('P-01-6',1,$_objectManager);
//echo $category->getCategoryNamebySku('P-01-6',1,$_objectManager);
//echo $category->deleteCategorybySku('P-01-6',1,$_objectManager);
//echo $category->create_child('P-01-10','DARK_RED',$_objectManager);
/*
$_products = $_objectManager->create('Magento\Catalog\Model\ResourceModel\Product\Collection');
foreach($_products as $product){
echo $product->getName();
echo $product->getSku();
}*/
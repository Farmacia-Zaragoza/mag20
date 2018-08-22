<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');
set_time_limit(0);
while (@ob_end_flush());
use Magento\Framework\App\Bootstrap;
include('../app/bootstrap.php');

// We have multiple versions
$PHP_VER='v70';
//echo "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento/zz_list.lib";
///brqx/base/rcode/v70/gen/v0_0_1/rphp/objects/magento2.0/internal
include_once "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento2.0/zz_list.lib"; 

$bootstrap = Bootstrap::create(BP, $_SERVER);
$_objectManager = $bootstrap->getObjectManager();

echo "Starting...\n";

$product = new mge_categories();
//$product->delete_product($_objectManager,'code41');
//echo $product->create_product('code41','product41',100,$_objectManager);
echo $product->getCategoryIdbyName($_objectManager,'cat1');
/*
$_products = $_objectManager->create('Magento\Catalog\Model\ResourceModel\Product\Collection');
foreach($_products as $product){
echo $product->getName();
echo $product->getSku();
}*/
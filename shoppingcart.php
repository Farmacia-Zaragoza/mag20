<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');
set_time_limit(0);
while (@ob_end_flush());
use Magento\Framework\App\Bootstrap;
include('/home/ser/zd/main/es/zdom/tst/magento/zd_main_test21/es/app/bootstrap.php');

// We have multiple versions
$PHP_VER='v70';
//echo "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento/zz_list.lib";
///brqx/base/rcode/v70/gen/v0_0_1/rphp/objects/magento2.0/internal
include_once "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento2.0/zz_list.lib"; 

$bootstrap = Bootstrap::create(BP, $_SERVER);
//echo 'ddd';
$_objectManager = $bootstrap->getObjectManager();
//echo 'ddd';
$state = $_objectManager->get('Magento\Framework\App\State');
//echo '2';
$state->setAreaCode('frontend');
//echo '1';die;
$cat = new mge_categories();
$catids=$cat->getallcategoriesByLevel(1,2,$_objectManager);
foreach($catids as $cid){
echo $cat->getcategoryNameById($cid,$_objectManager);	
}
echo '<pre>';print_r($catids);
echo "Starting...\n";die;

$productCollection = $_objectManager->create('Magento\Catalog\Model\ResourceModel\Product\Collection')->addAttributeToSelect("*")
            ->addAttributeToFilter('type_id', 'configurable');
			echo '<pre>';print_r($productCollection->getData());
    /*$productCollection->getSelect()->joinLeft(
                        'catalog_product_super_link',
                        'e.entity_id = catalog_product_super_link.parent_id',
                        array('parent_id')
                    );*/
   // $productCollection->getSelect()->where('catalog_product_super_link.parent_id IS NULL');


foreach($productCollection as $product){
	echo $product->getId();
     if($product->getTypeId() == "configurable"){
          //$children = $product->getTypeInstance()->getUsedProducts($product);
		  echo $product->getSku();
          /*if(!empty($children)){
               foreach ($children as $child){
                    //var_dump($child->getSku());
               }
          }*/
     }
}
echo "Starting...\n";die;

$shoppingCart = new mge_shoppingcart();
echo $shoppingCart->addItemtocart('test-SKU11',2,$_objectManager);
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
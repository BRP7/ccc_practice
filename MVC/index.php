<?php
include "Lib/autoload.php";

$request = new Model_Request();
$viewProduct = new View_Product($request);

if (!$request->isPost()) {
    echo $viewProduct->toHtml([]); // Pass an empty array or product data if available
} else {
    $product = new Model_Product();

    // Check the action and perform the corresponding operation
    $action = $request->getParams('action');
    $productId = $request->getParams('id');

    if ($action == 'edit') {
        $productDetails = $product->getProductDetails($productId);
        echo $viewProduct->createForm($productDetails);
    } elseif ($action == 'delete') {
        $product->del(['product_id' => $productId]);
        echo $viewProduct->toHtml([]);
    } else {
        $product->save($request->getParams('pdata'));
        echo $viewProduct->toHtml([]);
    }
}

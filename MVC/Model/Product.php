<?php
class Model_Product extends Model_Abstract
{
    public $tableName = "ccc_product";

    public function __construct()
    {
        // echo "I'm here";
        // echo get_class($this);
    }

    public function save($data)
    {
        echo "<pre>";
        $sql = $this->getQueryBuilder()->insert(
                $this->tableName,
                $data
            );
         $this->getQueryBuilder()->exec($sql);
        // echo $sql;
        // print_r($data);
    }

    public function update($data, $condition)
    {
        $sql = $this->getQueryBuilder()->update(
            $this->tableName,
            $data,
            $condition
        );
        $this->getQueryBuilder()->exec($sql);
    }

    public function del($condition)
    {
        $sql = $this->getQueryBuilder()->delete(
            $this->tableName,
            $condition
        );
        $this->getQueryBuilder()->exec($sql);
    }
    public function show($fields = '*', $conditions = [])
{
    $sql = $this->getQueryBuilder()->select($this->tableName, $fields, $conditions);
    $result = $this->getQueryBuilder()->exec($sql);

    $products = [];
    while ($row = $this->getQueryBuilder()->fetchAssoc($result)) {
        $products[] = $row;
    }

    return $products;
}

    
    
    
    
    
    
    public function getProductDetails($productId)
    {
        echo "getProduct Details inside.";
    
        $sql = $this->getQueryBuilder()->select($this->tableName, '*', ['product_id' => $productId]);
        $result = $this->getQueryBuilder()->exec($sql);
    
        if ($result !== null) {
            return $this->getQueryBuilder()->fetchAssoc($result);
        }
    
        return [];
    }
    
    
    
    
}

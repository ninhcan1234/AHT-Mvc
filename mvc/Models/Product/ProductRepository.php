<?php

namespace MVC\Models\Product;

use MVC\Models\Product\ProductResourceModel;

class ProductRepository{

    protected $productResource;

    public function __construct()
    {
        $this->productResource = new ProductResourceModel;
    }

    public function add($model){
        return $this->productResource->save($model);
    }

    public function edit($model){   
        return $this->productResource->save($model);
    }

    public function get($id)
    {
        return $this->productResource->get($id);
    }

    public function delete($model)
    {
        return $this->productResource->delete($model);
    }

    public function getAll()
    {
        return $this->productResource->getAll();
    }
}
<?php 

namespace MVC\Models\Product;

use MVC\Core\ResourceModel;
use MVC\Models\Product\ProductModel;

class ProductResourceModel extends ResourceModel
{
    public function __construct()
    {   
        $this->_init('product', 'id', new ProductModel);
    }
}
<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\Product\ProductModel;
use MVC\Models\Product\ProductRepository;

class ProductsController extends Controller
{
    function index()
    {
        $product = new ProductRepository();
        $d['product'] = $product->getAll();
        $this->set($d);
        $this->render("index");
    }
    
    function create()
    {
        if (isset($_POST["name"]) && isset($_POST["description"])) {
            $product = new ProductRepository();
            $productModel = new ProductModel();
            $productModel->setName($_POST["name"]);
            $productModel->setPrice($_POST["price"]);
            $productModel->setDescription($_POST["description"]);
            if ($product->add($productModel)) {
                header("Location: " . WEBROOT . "products/index");
            }
        }
        $this->render("add");
    }

    function edit($id)
    {
        $product = new ProductRepository();
        $d["product"] = $product->get($id);
        if (isset($_POST["name"]) && isset($_POST["description"])) {
            $productModel = new ProductModel();
            $productModel->setId($id);
            $productModel->setName($_POST["name"]);
            $productModel->setPrice($_POST["price"]);
            $productModel->setDescription($_POST["description"]);
            if ($product->edit($productModel))
            {
                header("Location: " . WEBROOT . "products/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $product = new ProductRepository();
        $productModel = new ProductModel();
        $productModel->setId($id);
        if ($product->delete($productModel))
        {
            header("Location: " . WEBROOT . "products/index");
        }
    }
}
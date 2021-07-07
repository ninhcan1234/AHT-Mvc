<?php
    namespace MVC\Models\Product;

use MVC\Core\Model;


class ProductModel extends Model{

    protected $id;
    protected $name;
    protected $prince;
    protected $description;
    protected $created_at;
    protected $updated_at;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
         $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
         $this->name = $name;
    }

    public function getDes()
    {
        return $this->description ;
    }

    public function setDes($des)
    {
         $this->description = $des;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($time)
    {
        $this->created_at = $time;;
    }

    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    public function setUpdated_at($time)
    {
        $this->updated_at = $time;
    }

    public function getPrince()
    {
        return $this->prince;
    }

    public function setPrince($prince)
    {
        $this->prince = $prince;
    }
}

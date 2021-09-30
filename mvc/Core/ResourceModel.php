<?php

namespace MVC\Core;

use MVC\Config\Database;
use PDO;

class ResourceModel implements ResourceModelInterface
{
    protected $table;
    protected $id;
    protected $model;

    public function _init($table, $id, $model) 
    {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_CLASS, get_class($this->model));
    }

    public function get($id)
    {
		$sql = "SELECT * FROM $this->table WHERE $this->id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute([$this->id=>$id]);
        return $req->fetchObject(get_class($this->model));
	}

    public function save($model) 
    {   
        $data = $model->getProperties();
        $id = $data[$this->id];
        $keys = array_keys($data);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at']=date('Y-m-d H:i:s');
        $dataKey = implode(" , ", $keys);
        $str = "";
        foreach ($keys as $key => $value) {
            $str .= $value . " = :" . $value . ",";
        }
        $dataValue = ":" . implode(" , :", $keys);
        
        $str = substr($str,0,-1);
        if(isset($id) && $id == null || $id == "" ) {
            $sql =  "INSERT INTO $this->table ($dataKey) VALUES ($dataValue)" ;
        }else{
            $sql = "UPDATE $this->table SET $str WHERE $this->id = :id";
        } 
        $req = Database::getBdd()->prepare($sql);
		return $req->execute($data);
    }

    public function delete($model)
	{
        $data['id'] = $model->getId();
        $sql = "DELETE FROM $this->table WHERE $this->id = :id";
        $req = Database::getBdd()->prepare($sql);
        return $req->execute($data);
	}
}
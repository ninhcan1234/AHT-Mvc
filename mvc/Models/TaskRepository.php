<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;

class TaskRepository
{
    private $taskResource;

    public function __construct(){
        $this->taskResource = new TaskResourceModel();
    }

    public function add($model)
    {
        return $this->taskResource->add($model);
    }

    public function edit($model)
    {
        return $this->taskResource->edit($model);
    }

    public function save($model)
    {
        return $this->taskResource->save($model);
    }

    public function get($id)
    {
        return $this->taskResource->get($id);
    }

    public function delete($model)
    {
        return $this-> taskResource->delete($model);
    }

    public function getAll()
    {
        return $this->taskResource->getAll();
    }
}
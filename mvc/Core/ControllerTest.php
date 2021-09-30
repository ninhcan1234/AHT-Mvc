<?php 

namespace MVC\Core;

class ControllerTest
{
    public $vars = [];
    public $layout = "default";

    public function set($data)
    {
        $keys = array_keys($this->vars);
        $vals = array_values($this->vars);
        foreach($data as $key => $val)
        {
            array_push($keys,$key);
            array_push($vals,$val);
        }
        $this->vars = array_combine(array_values($keys),array_values($vals));
    }

    public function render($file)
    {
        extract($this->vars);
        ob_start();
    }
}
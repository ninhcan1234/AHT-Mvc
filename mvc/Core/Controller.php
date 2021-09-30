<?php

namespace MVC\Core;

    class Controller
    {
        var $vars = [];
        var $layout = "default";

        public function set($d)
        {   
            $this->vars = array_merge($this->vars, $d);// noi mang  
        }

        public function render($filename)
        {
            extract($this->vars); // thuc hien chuyen doi array thành variable=> var $key1 = value1,...
            ob_start(); // khi user request thi data => cache(hotro cache)=> de xu ly roi moi submit len server;
            $stringNameModel = str_replace('Controller', '', get_class($this)); 
            $locate = strrpos($stringNameModel, '\\');// tim vi tri xuat hien cuoi cua substring;
            $nameModel= substr($stringNameModel, $locate + 1); //=> Tasks, Products
            require(ROOT . "Views/" . $nameModel . '/' . $filename . '.php');
            $content_for_layout = ob_get_clean(); // lay du lieu luu torng cache => xu ly no roi xoa';
           
            if ($this->layout == false)
            {
                $content_for_layout;
            }
            else
            {
                require(ROOT . "Views/Layouts/" . $this->layout . '.php');
            }
        }

        private function secure_input($data)
        {
            $data = trim($data); 
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }
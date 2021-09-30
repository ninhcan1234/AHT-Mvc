<?php

namespace MVC\Core;

class Model
{
    public function getProperties()
    {
        return get_object_vars($this); // return ve 1 mang chua cac thuoc tinh or null
    }
}

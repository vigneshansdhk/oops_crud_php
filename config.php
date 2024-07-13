<?php

class DB
{
    public function connection()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'php_oops_crud');
        if (!$conn) {
            die('connection error' . mysqli_connect_error());
        }

        return $conn;
    }

}
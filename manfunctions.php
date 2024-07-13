<?php

include './config.php';

class Manfunctions extends DB
{

    public function getAlldata($link, $table)
    {
        $query = "SELECT * FROM $table";
        $result = mysqli_query($link, $query);
        $res = [];
        if (mysqli_num_rows($result) > 0) {
            $res = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return $res;
    }

    public function findData($link, $table, $userId)
    {
        $query = "SELECT * FROM $table WHERE id = $userId";
        $result = mysqli_query($link, $query);
        $res = [];
        if (mysqli_num_rows($result) > 0) {
            $res = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return $res;
    }
    public function create()
    {
        extract($_REQUEST);
        $query = "INSERT INTO user(name,number,place)VALUES('$name','$number','$place')";
        $result = mysqli_query($link, $query);
        if ($result) {
            echo "Data inserted Successfully";
        } else {
            echo mysqli_error($link);
        }
    }

    public function update()
    {
        extract($_REQUEST);
        $query = "UPDATE user SET name = '$name',number= '$number',place='$place' WHERE id = $userid";
        $result = mysqli_query($link, $query);
        if ($result) {
            echo "Data updated Successfully";
        } else {
            echo mysqli_error($link);
        }
    }

    public function delete()
    {
        extract($_REQUEST);
        $query = "DELETE FROM user WHERE id = $userid";
        
        $result = mysqli_query($link, $query);
        if ($result) {
            echo "Data deleted Successfully";
        } else {
            echo mysqli_error($link);
        }

    }
}


$mf = new Manfunctions();
extract($_REQUEST);
$link = $mf->connection();
$_REQUEST['link'] = $link;
if (isset($submit) && $submit == 'create') {
    $mf->create();
} elseif (isset($submit) && $submit == 'update') {
    $mf->update();
} elseif (isset($submit) && $submit == 'delete') {
    $mf->delete();
}



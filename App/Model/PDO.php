<?php

class pdo_db {

    public $connect;

    public function __construct() {
        $host = "localhost";
        $db_name = "exam_five";
        $username = "root";
        $pass = "";
        $this->connect = new PDO("mysql:host; db_name=$db_name", $username, $pass);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->connect;
    }

    public function get_db($sql) {
        $query = array();
        $tv = $this->connect->prepare($sql);
        $tv->execute($query);
    }

    function select_sql($sql) {
        $tv = $this->connect->query($sql);
        $th = $tv->fetchAll();
        return $th;
    }

    public function get_select_one($sql) {
        $query = array();
        $tv = $this->connect->prepare($sql);
        $tv->execute($query);
        $row = $tv->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public static function all() {
        $model = new static();
        $sql = "select * from exam_five.$model->tableName";
//        $tv = $model->connect->query($sql);
//        $th = $tv->fetchAll();
//        return $th;
        $stmt = $model->connect->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $rs;
    }

}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


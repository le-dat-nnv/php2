<?php

class rooms extends pdo_db {

    public $id;
    public $name_kh;
    public $email;
    public $tel;
    public $address;
    public $adults;
    public $childrens;
    public $price;
    public $check_in;
    public $check_out;
    public $status;

    public function add_rooms() {
        $host = "localhost";
        $db_name = "du_an_1";
        $username = "root";
        $pass = "";
        $this->con = new PDO("mysql:host; db_name=$db_name", $username, $pass);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->con;
    }

    static function show_rooms() {
        $ctrl = new pdo_db();
        $sql = "SELECT * FROM exam_five.`room`";
        $dis = $ctrl->select_sql($sql);
        return $dis;
    }

    static function insert_rooms($ma_rooms, $price, $img) {
        $ctrl = new pdo_db();
        $sql = "INSERT INTO exam_five.`room`(`ma_rooms`, `don_gia` , `img_room`) VALUES ('$ma_rooms','$price','$img')";
        $ctrl->get_db($sql);
    }

    public function edit_rooms() {
        
    }

    static function update_rooms($ma_rooms, $price, $img, $id) {
        $ctrl = new pdo_db();
        $sql = "UPDATE exam_five.`room` SET `ma_rooms`='$ma_rooms',`don_gia`='$price',`img_room`='$img' WHERE id_room=" . $id;
        $ctrl->get_db($sql);
    }

    static function destroy($id) {
        $ctrl = new pdo_db();
        $sql = "DELETE FROM exam_five.room where id_room=" . $id;
        $ctrl->get_db($sql);
    }

    static function room_edit($id) {
        $ctrl = new pdo_db();
        $sql = "SELECT * FROM exam_five.room where id_room=" . $id;
        return $ctrl->get_select_one($sql);
    }

}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


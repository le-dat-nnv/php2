<?php
class book_rooms {
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

    public function add_bookrooms() {
        $host = "localhost";
        $db_name = "du_an_1";
        $username = "root";
        $pass = "";
        $this->con = new PDO("mysql:host; db_name=$db_name", $username, $pass);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->con;
    }
    public function show_bookrooms() {
        
    }
    public function edit_bookrooms() {
        
    }
    public function update_bookrooms() {
        
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


<?php
session_start();

class roomsController {

    public function get_data_room() {
        $list = rooms::show_rooms();
        include 'App/View/our_room/display_client.php';
    }

    public function get_of_session() {
        $id = 0;
        $ma_rooms = "";
        $price = "";
        $img_rooms = "";
        if (isset($_POST['drooms']) && $_POST['drooms']) {
            $id = $_POST['id'];
            $ma_rooms = $_POST['ma_rooms'];
            $price = $_POST['price'];
            $img_rooms = $_POST['img_rooms'];
            $add_room = [$id, $ma_rooms, $price, $img_rooms];
            array_push($_SESSION['room'], $add_room);
        }
        if ($this->check_rooms($id) >= 0) {
            $this->capnhat_rooms($this->check_rooms($id));
        } else {
//            $add_room = [$id, $ma_rooms, $price, $img_rooms];
//            array_push($_SESSION['room'], $add_room);
//           header("location:index.php?url=rooms_book");
        }
    }

//        include 'App/View/our_room/display_client.php';

    public function insert_rooms() {
        if (isset($_POST['kqua']) && $_POST['kqua']) {
            $ma_rooms = $_POST["ma_rooms"];
            $price = $_POST['don_gia'];
            $file_path = "./Uploads/";
            $target_file = $file_path . basename($_FILES['img']['name']);
            if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                
            } else {
                
            }
            rooms::insert_rooms($ma_rooms, $price, $target_file);
        }
    }

    public function get_data_room_admin() {
        $list = rooms::show_rooms();
        return $list;
    }

    public function edit_rooms() {
        if (isset($_GET['ma_r']) && $_GET['ma_r']) {
            $sua = rooms::room_edit($_GET['ma_r']);
            return $sua;
        }
    }

    public function rooms_update() {
        if (isset($_POST['btn']) && $_POST['btn']) {
            $id = $_POST["id"];
            $ma_rooms = $_POST["ma_rooms"];
            $price = $_POST['don_gia'];
            $file_path = "./Uploads/";
            $target_file = $file_path . basename($_FILES['img']['name']);
            if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                
            } else {
                
            }
            rooms::update_rooms($ma_rooms, $price, $target_file, $id);
        }
    }

    public function delete_rooms() {
        if (isset($_GET['ma_r']) && $_GET['ma_r']) {
            rooms::destroy($_GET['ma_r']);
        }
    }

    public function check_match() {
        
    }

    public function check_rooms($id) {
        $location = -1;
        for ($i = 0; $i < sizeof($_SESSION['room']); $i++) {
            if ($_SESSION['room'][$i][0] == $id) {
                $location = $i;
                break;
            }
        }
        return $location;
    }

    public function capnhat_rooms($n) {
        for ($i = 0; $i < sizeof($_SESSION['room']); $i++) {
            if ($i == $n) {
                $_SESSION['room'][$i][0] += 1;
                break;
            }
        }
    }

}

?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
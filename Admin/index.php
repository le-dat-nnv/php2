<?php
include '../App/Controller/roomsController.php';
include '../App/Model/PDO.php';
include '../App/Model/rooms.php';
$ctrl = new roomsController();
include './Display/admin_header.php';
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case "rooms":
            echo $ctrl->insert_rooms();
            include './Display/rooms/add_rooms.php';
            break;
        case "list_rooms":
            $list_admin= $ctrl->get_data_room_admin();
            include './Display/rooms/list_rooms.php';
            break;
        case "xoa_rooms":
            echo $ctrl->delete_rooms();
            $list_admin= $ctrl->get_data_room_admin();
            include './Display/rooms/list_rooms.php';
            break;
        case "sua_rooms":
            $sua_rooms= $ctrl->edit_rooms();
            include './Display/rooms/edit.php';
            break;
        case "update_rooms":
            echo $ctrl->rooms_update();
            $list_admin= $ctrl->get_data_room_admin();
            include './Display/rooms/list_rooms.php';
            break;
        case "facilities":
            include './App/View/facilities/facilaties.php';
            break;
        case "service":
            include './App/View/service/service.php';
            break;
        case "gallery":
            include './App/View/gallery/gallery.php';
            break;
        default:
            break;
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


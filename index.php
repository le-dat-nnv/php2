<?php

include './App/Controller/roomsController.php';
include './App/Model/PDO.php';
include './App/Model/rooms.php';
require './App/Controller/slide_showController.php';
require './App/Model/slide_show.php';
//$ctrl = new roomsController();
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case "slide_show":
            $ctrl = new slide_showController();
            $slide_show = $ctrl->show();
            include './App/View/header.php';
            break;
        case "our_room":
            $ctrl = new roomsController();
            echo $ctrl->get_data_room();
            break;
        case "dphong":
            $ctrl = new roomsController();
            echo $ctrl->get_of_session();
            header("location:index.php?url=rooms_book");
            break;
        case "pay":
            $ctrl = new roomsController();
            echo $ctrl->get_of_session();
            include './App/View/information_booking.php';
            break;
        case "rooms_book":
            include './App/View/add_datphong.php';
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
} else {
    include './App/View/header.php';
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


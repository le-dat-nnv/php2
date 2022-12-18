<!DOCTYPE html><!--

Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template

--><html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <?php
    require_once 'App/View/layout/header.php';
    ?>
    <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center" style="margin-top: 200px;font-family: Noto11; font-size: 70px">Our rooms</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <nav class="navbar bg-white rounded shadow ">
                    <div class="container-fluid">
                        <h4 class="mt-2 ms-4">Fiter</h4>
                    </div>
                    <form action="index.php?url=add_room" method="POST">
                        <div class="border bg-light p-3 rounded mb-3 ms-5" style="width: 260px;">
                            <h5 style="font-size: 18px;">check abilitiy</h5>
                            <label class="form-lable" style="font-weight: 500">check_in</label>
                            <input type="text" class="form-control shadow-none" name="check_in" id="txtCheckin" name="trip-start" />
                            <label class="form-lable" style="font-weight: 500">check_out</label>
                            <input type="text" class="form-control shadow-none" name="check_in" id="txtCheckout" name="trip-start"/>
                            <script>
                                $(document).ready(function () {
                                    $("#txtCheckin").datepicker({
                                        dateFormat: "dd-M-yy",
                                        onSelect: function (date) {
                                            var date2 = $('#txtCheckin').datepicker('getDate');
                                            date2.setDate(date2.getDate());
                                            $('#txtCheckout').datepicker('setDate', date2);
                                            //sets minDate to dateofbirth date + 1
                                            $('#txtCheckout').datepicker('option', 'minDate', date2);
                                        }
                                    });
                                    $('#txtCheckout').datepicker({
                                        dateFormat: "dd-M-yy",
                                        onClose: function () {
                                            var dt1 = $('#txtCheckin').datepicker('getDate');
                                            console.log(dt1);
                                            var dt2 = $('#txtCheckout').datepicker('getDate');
                                            if (dt2 <= dt1) {
                                                var minDate = $('#txtCheckout').datepicker('option', 'minDate');
                                                $('#txtCheckout').datepicker('setDate', minDate);
                                            }
                                        }
                                    });
                                });
                            </script>
                        </div>
                        <div class="border bg-light p-3 rounded mb-3 ms-5" style="width: 260px;">
                            <h5 style="font-size: 18px;">Facilities</h5>
                            <div class="mb-3">
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facilities one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facilities one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facilities one</label>
                                </div>
                            </div>
                        </div>
                        <div class="border bg-light p-3 rounded mb-3 ms-5" style="width: 260px;">
                            <h5 style="font-size: 18px;">Person</h5>
                            <div class="mb-3">
                                <div class="mb-2">
                                    <label class="form-lable" style="font-weight: 500">Adults</label>
                                    <input type="number" class="form-control shadow-none" name="check_in" id="date" name="trip-start" value="<?php echo $rooms['2'] ?>"/>
                                </div>
                                <div class="mb-2">
                                    <label class="form-lable" style="font-weight: 500">Childrens</label>
                                    <input type="number" class="form-control shadow-none" name="check_out" id="date" name="trip-start" value="<?php echo $rooms['3'] ?>"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </nav>
            </div>
            <div class="col-lg-8" style="">
                <?php
                $tb = "";
                $ico = "";
                foreach ($list as $show) {
                    extract($show);
                    $hinhpts = './App/upload/' . $img_room;
                    ?>
                    <div class="card mb-3 border-0 shadow">
                        <div class="row g-0 p-3" style="height: 250px;">
                            <div class="col-md-5 mt-2">
                                <img style="height: 200px; width:95%;" src="<?php echo $hinhpts?>" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 mt-2">
                                <h5 class="mb-3" style="font-family: Noto11; font-size: 30px;"><?=$ma_rooms?></h5>
                                <h5 class="mb-3" style="font-family: Noto11; font-size: 30px;"><?=$don_gia?></h5>
                                <div class="facilities mb-4 mt-2">
                                    <!--<h6 class="mb-1" style="font-family: Noto2; font-size: 18px;"><?//$mo_ta?></h6>-->
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <form action="index.php?url=dphong" method="POST">
                                    <input type="hidden" name="id" value="<?=$id_room?>">
                                    <input type="hidden" name="ma_rooms" value="<?=$ma_rooms?>">
                                    <input type="hidden" name="img_rooms" value="<?=$hinhpts?>">
                                    <input type="hidden" name="price" value="<?=$don_gia?>">
                                    <input type="submit" name="drooms" value="book_rooms" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php include 'App/View/layout/footer.php'; ?>
</body>
</html>

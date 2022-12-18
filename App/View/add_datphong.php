<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<table class="table">
    <thead class="table-dark">
        <tr>
            <td>Id</td>
            <td>ảnh</td>
            <td>mã phòng</td>
            <td>mô tả</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($_SESSION['room'] as $item) {
            extract($item);
            echo
            '<tr>
        <td>' . $item[0] . '</td>'
            . '<td>' . $item[2] . '</td> '
            . '<td>' . $item[1] . '</td> '
            . '<td>' . $item[3] . '</td> '
            . '</tr>';
        }
//        $_SESSION['room']=[];
        ?>
    </tbody>
</table>
<?php
//foreach ($_SESSION['room'] as $item) {
//    extract($item);
//    echo "<pre>" .
//    var_dump($item) . "</pre>";
//}
//$_SESSION['room']=[];
//$exam = $_SESSION['room'];
//$id = count($_SESSION['room']);
//$id_one = $id - 1;
//foreach ($exam as $value) {
//    extract($value);
//}
//$ctrl = new roomsController();
//$ctrl->get_of_session();
//    if ( array_key_exists($item[0], $_SESSION['room']) ) {
//for ($i = 0; $i < sizeof($_SESSION['room']); $i++) {
//    if (count($_SESSION['room'])==1) {
//        echo "nếu tồn tại ";
//    } else if ($_SESSION['room'][$i][0] == $item[0]) {
////        echo $i . "</br>";
//        header("localtion:index.php?url=rooms_book");
//    }
//    else {
//        echo "cái này thì tôi không biết nữa kia". "</br>";
////            $_SESSION['room'][$id] = array( $size, $qta );
//    }
//}
//$_SESSION['room']=[];
//     else {
//        // tác dụng là gì đây 
//        // vẫn chưa check được kia 
//        echo "cái này thì tôi không biết nữa kia";
//    }
?>
<button class="btn btn-primary"><a class="text-white text-decoration-none" href="index.php?url=pay">continue</a></button>
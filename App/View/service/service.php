<html>
    <head>
        <title>title</title>
        <style>
            .spacing{
                margin-left: 490px;
            }
            .spacing_1{
                margin-left: 50px;
            }
        </style>
    </head>
    <body>
        <?php
        include 'View/layout/header.php';
        ?>
        <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center">Service</h2>
        <div class="container">
                <?php
                $n = 0;
                $important = '';
                $important1 = '';
                $row = "";
                foreach ($show_service as $to) {
                    extract($to);
                    $hinhpt = './upload/' . $img_service;
                    if ($n == 0) {
                        $row = "row";
                        $important = '<img style="height:348px;" src="' . $hinhpt . '" class="img-fluid rounded-start w-100" alt="...">';
                        $important1 = '<div class="card-body">
                                        <h5 class="card-title">' . $ten_dv . '</h5>
                                        <p class="card-text">' . $mo_ta . '</p>
                                        <p class="card-text"><small class="text-muted">' . $price . '</small></p>
                                    </div>';
                    } else {
                        $row = "row mb-4 mt-5 pt-4";
                        $important = '<div class="card-body">
                                        <h5 class="card-title">' . $ten_dv . '</h5>
                                        <p class="card-text">' . $mo_ta . '</p>
                                        <p class="card-text"><small class="text-muted">' . $price . '</small></p>
                                    </div>';
                        $important1 = '<img style="height:348px;" src="' . $hinhpt . '" class="img-fluid rounded-start w-100" alt="...">';
                    }
                    ?>
                    <div class="<?php echo $row; ?>" >
                        <div class="col-lg-12 ">
                            <div class="card mb-3 border-1-light bg-light rounded shadow" style="height: 350px">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <?php echo $important; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $important1; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $n++;
                }
                ?>
            </div>
        <?php include 'View/layout/footer.php'; ?>
    </body>
</html>


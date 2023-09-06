<?php

include "config.php";

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>

    <body>

        <div class="container">
            <div class="card">
                <h1 class="text-center mt-5">ອັບໂຫລດຮູບ PHP PDO ເອົາຊື່ ເອົາເວລາວັນທີເດືອນປີ ມາເປັນຊື່ໄຟຮູບ</h1>
                <form method="POST" action="chk.php" enctype="multipart/form-data" class="card-body">
                    <p class="text-danger">ອັບໂຫລດຮູບໄດ້ສະເພາະນາມສະກຸນ jpeg jpg png jfif gif</p>
                    <label for="">ຊື່ :</label>

                    <input type="text" name="name" placeholder="ປ້ອນຊື້ສິ້ນຄ້າ" class="form-control mb-3">

                    <label for="">ຮູບ :</label>
                    <input type="file" name="img" accept="image/*" class="form-control mb-3">
                    <button type="submit" name="submit" class="btn btn-success">ອັິບໂຫລດ</button>
                </form>
            </div>
        </div>
    </body>

</html>
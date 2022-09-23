<?php
require "../php/add.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />

    <!-- link style -->
    <link rel="stylesheet" href="register.css" />

    <title>Wazwez Note</title>
</head>
<style>
    .container {
    background: #f6fbf9;
    border: 1px solid #32403b;
    border-radius: 49px;
    text-align: center; 
    padding: 50px 20px;
    position: absolute;
    left: 50%;
    top: 40%;
    transform: translate(-50%, -40%);
    box-shadow: 0px 16px 90px rgba(19, 7, 52, 0.3);
  }
    .gender{
        font-size: 18px;
    }
</style>
<body>
    <div class="container col-lg-4 col-md-6 col-10">
        <form action="" method="post">
            <h1>Details User</h1>
            <p class="col-10 m-auto">Fill out the form to provide a better experience</p>
            <input type="hidden" name="id" value=" ">
            <div class="input col-10 mx-auto mt-3">
                <input type="text" class="form-control" name="namalengkap" required placeholder="Nama Lengkap">
            </div>
            <div class="input col-10 mx-auto my-2">
                <input type="email" class="form-control" name="email" required placeholder="Email">
            </div>
            <div class="input col-10 mx-auto my-2">
                <input type="text" class="form-control" name="address" required placeholder="Address">
            </div>
            <div class="input gender col-10 mx-auto my-2 ">
                <p class="text-left">Choose Gender :</p>
                <div class="d-flex align-items-center justify-content-center">
                    <input class="form-check-input me-1" type="radio" name="gender" id="gendermale" value="male">
                    <label class="form-check-label me-4" for="gendermale">Male</label>
                    <input class="form-check-input me-1" type="radio" name="gender" id="genderfemale" value="female">
                    <label class="form-check-label me-4" for="genderfemale">Female</label>
                    <input class="form-check-input me-1" type="radio" name="gender" id="genderother" value="other">
                    <label class="form-check-label" for="genderother">Other</label> 
                </div>
            </div>
            <div class="input col-10 mx-auto my-2">
                <input type="text" class="form-control" name="mobilephone" required placeholder="Mobile Phone">
            </div>
            <div class="col-12 mb-1">
                <button class="btn btn-primary col-6" type="submit" name="profil">Start</button>
            </div>
        </form>
    </div>
</body>

</html>
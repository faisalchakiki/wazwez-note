<?php
require "connection.php";

if (isset($_POST["submit"])) {
    $namaTugas = htmlspecialchars($_POST["nama_tugas"]);
    $deskripsi = htmlspecialchars( $_POST["deskripsi"]);
    $deadline = htmlspecialchars($_POST["deadline"]);
    $userId = 1;

    // Query Insert Tasks
    $sqlInsertTask = "INSERT INTO tasks ( user_id, nama_tugas, deskripsi, deadline)
    VALUES ( '$userId','$namaTugas','$deskripsi','$deadline')";
    mysqli_query($conn, $sqlInsertTask);

    // Cek Input
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
        document.location.href ='http://localhost/wazweznote/index.php';
    </script>";
    } else {
        echo "<script> 
        alert('Query Fail');
    </script>";
        echo mysqli_error($conn);
    }
}


if (isset($_POST["profil"])) {
    $nama = htmlspecialchars($_POST["namalengkap"]);
    $email = htmlspecialchars($_POST["email"]);
    $address = htmlspecialchars($_POST["address"]);
    $gender = $_POST['gender'];
    $mobilephone = htmlspecialchars($_POST["mobilephone"]);
    $IDuser = 12;
    // Query Insert
    $InsertSubtask = "INSERT INTO detail_users ( user_id , full_name, address, gender, email, mobile_number)
    VALUES ($IDuser,'$nama', '$address', '$gender', '$email', '$mobilephone')";
    mysqli_query($conn, $InsertSubtask);

    // Cek Input
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
        document.location.href ='http://localhost/wazweznote/index.php';
    </script>";
    } else {
        echo "<script> 
        alert('Query Fail');
    </script>";
        echo mysqli_error($conn);
    }
}
?>
<?php

//Mengecek apakah ada nilai yang dikirim dari form
if (isset($_POST['pick'])) {
  $task = $_POST['pick'];
  for ($i = 0; $i < count($task); $i++) {
    $sqlUpdateTasks = "UPDATE tasks SET finished = 'yes' WHERE nama_tugas = '$task[$i]'";
    mysqli_query($conn, $sqlUpdateTasks);
    echo "<script>
          document.location.href ='http://localhost/wazweznote/index.php';
          </script>";
  }
}

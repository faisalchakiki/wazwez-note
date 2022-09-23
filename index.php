<?php
require "php/select.php";
require "php/add.php";
require "./php/switch-task.php";

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
    <link rel="stylesheet" href="style/style.css" />

    <title>The Project</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container-fluid pt-3 pb-2 px-5">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="right-content col-4">
                    <h1>waz<span class="colored">wez</span>.</h1>
                </div>

                <div class="left-content col-4 col-md-6 col-lg-4">
                    <div class="icon-notification me-2 order-1 order-sm-0">
                        <div>
                            <img src="asset/Notification.svg" />
                        </div>
                    </div>
                    <?php foreach ($resultUser as $user) : ?>
                        <div class="user">
                            <div class="icon-user me-md-1 me-0 order-1 order-sm-0">
                                <img src="<?= $user["avatar"] ?>" />
                            </div>
                            <span class="name-user d-none d-md-block mx-1 "><?= $user["name"] ?></span>
                            <div class="dropdown-user  d-none d-md-block">
                                <div class="container-icon">
                                    <img id="down-user" class="icon-dropdown" src="asset/dropdown.svg" onclick="uncheklistTugas('down-user','up-user','item-drop-user')" />
                                    <img id="up-user" class="icon-dropup hidden" src="asset/arrow-up.svg" onclick="uncheklistTugas('down-user','up-user','item-drop-user')" />
                                </div>
                            </div>
                        <?php endforeach;  ?>

                        <!-- item dropdown user -->
                        <div class="item-dropdown-user hidden" id="item-drop-user">
                            <a href="">
                                <p>Profil</p>
                            </a>
                            <a href="">
                                <p>Settings</p>
                            </a>
                            <a href="">
                                <p>Exit</p>
                            </a>
                        </div>
                        <!-- End item dropdown user -->
                        </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- Main Page -->
    <main>
        <div class="container col-lg-6 col-md-8 col-10">
            <p class="taks-main-first">MY TASKS</p>

            <section class="flex-content-first">
                <h4>To Do List</h4>

                <button class="button-add-tugas">
                    <img src="asset/add.svg" />
                    <span class="task-add-tugas mx-1 d-none d-md-block">Tambah tugas</span>
                </button>
            </section>

            <p class="taks-main-second">Buat list tugas harian saya</p>

            <div class="container-sort-by">
                <section class="flex-content-second mb-3">
                    <p class="taks-main-third mt-1">Sort By</p>
                    <button class="orange button-by-tanggal me-2 me-md-none border-2">
                        <span class="task-by-tanggal mx-2 d-none d-md-block">By Tanggal</span>
                        <div class="container-icon">
                            <img class="dropdown-btn" src="asset/arrow-down.svg" />
                            <img class="dropup-btn hidden" src="asset/arrow-up.svg" />
                        </div>
                    </button>
                </section>
                <!-- Fitur Sort BY -->
                <div class="hidden respons-sort-by">
                    <div class="content">
                        <label for="sort-by-1" class="taks-content-sort-by">By Tanggal</label>
                        <input type="radio" name="sort-by" id="sort-by-1" />
                    </div>
                    <div class="content">
                        <label for="sort-by-2" class="taks-content-sort-by">By Time</label>
                        <input type="radio" name="sort-by" id="sort-by-2" />
                    </div>
                    <div class="content">
                        <label for="sort-by-3" class="taks-content-sort-by">Terbaru</label>
                        <input type="radio" name="sort-by" id="sort-by-3" />
                    </div>
                </div>
                <!-- End.... -->
            </div>

            <!-- Fitur tambah tugas -->
            <div class="hidden container-respons-add-tugas">
                <form action="" method="post">

                    <section class="tambah-tugas ms-4">
                        <input type="radio" name="add-tugas" id="" checked>
                        <h6 class="nama-tugas created mx-2 mt-2">
                            <input type="text" name="nama_tugas" placeholder="Masukan nama tugas">
                        </h6>

                    </section>
                    <div class="add-desc-tugas ms-5">

                        <img class="mb-3" src="asset/menu.svg" />
                        <p class="ms-2">
                            <input type="text" name="deskripsi" placeholder="Deskripsi Tugas (Optional)" />
                        </p>

                    </div>
                    <div class="add-time-tugas ms-5">

                        <img class="mb-3" src="asset/calendar.svg" />
                        <p class="ms-2">
                            <input placeholder="Tanggal & Waktu" name="deadline" type="text" onfocus="(this.type='date')" id="date">
                        </p>

                        <button name="submit" class="btn-chek d-flex justify-content-center align-items-center">
                            <img src="asset/Plus.svg" />
                            <p class="mt-3 ms-1 d-none d-sm-block">Tambah</p>
                        </button>
                    </div>
                </form>
            </div>

            <!-- End Tambahan Items -->
            <form action="" method="post" id="main">
                <?php foreach ($resultTasks as $value) : ?>
                    <div class="container-tugas" id="tugas-<?= $value["id"] ?>">
                        <section class="tugas mt-1">
                            <div class="content-tugas">
                                <div class="round">
                                    <input class="click-checkbox" type="checkbox" name="pick[]" value ="<?= $value['nama_tugas'] ?>"  id="task-<?= $value["id"] ?>" onclick="clickCoret('task-<?= $value['id'] ?>' , 'nama-tugas-<?= $value['id'] ?>')">
                                    <label for="task-<?= $value["id"] ?>"></label>
                                </div>
                                <h6 id="nama-tugas-<?= $value["id"] ?>" class="nama-tugas-ku mx-2 mt-2"><?= $value["nama_tugas"] ?></h6>
                                <div class="created d-md-block d-none"><?= $value["deadline"] ?></div>
                                <div id="titik-tiga-<?= $value['id'] ?>" class="titik-tiga hidden">

                                    <img class="" src="asset/more-vertical.svg" id="titik-tiga-awal-<?= $value['id'] ?>" onclick="unchekTitik('titik-tiga-awal-<?= $value['id'] ?>','titik-tiga-akhir-<?= $value['id'] ?>','action-titik-<?= $value['id'] ?>')">

                                    <img class="hidden" src="asset/titik-tiga.svg" id="titik-tiga-akhir-<?= $value['id'] ?>" onclick="unchekTitik('titik-tiga-awal-<?= $value['id'] ?>','titik-tiga-akhir-<?= $value['id'] ?>','action-titik-<?= $value['id'] ?>')">
                                    <div class="action-titik-tiga hidden" id="action-titik-<?= $value['id'] ?>">

                                        <div class="item-titik-tiga d-flex align-items-center edit">
                                            <img src="asset/Edit.svg" />
                                            <p class="ms-3 d-flex align-i"><a href="php/edit.php?idtask=<?= $value['id'] ?>">Edit task</a></p>
                                        </div>
                                        <div class="item-titik-tiga d-flex align-items-center delete">
                                            <img src="asset/Delete.svg" />
                                            <p class="ms-3 d-flex align-i"><a href="php/drop.php?idtask=<?= $value['id'] ?>" onclick=" return confirm('yakin...?');">Delete task</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="drop-tugas me-3">
                                <div class="container-icon">
                                    <img id="down-<?= $value["id"] ?>" class="icon-dropdown" src="asset/dropdown.svg" onclick="uncheklistTugas('down-<?= $value['id'] ?>' ,'up-<?= $value['id'] ?>','unchek-tugas-<?= $value['id'] ?>','titik-tiga-<?= $value['id'] ?>'),'action-<?= $value['id'] ?>' " />
                                    <img id="up-<?= $value['id'] ?>" class="icon-dropup hidden" src="asset/arrow-up.svg" onclick="uncheklistTugas('down-<?= $value['id'] ?>' ,'up-<?= $value['id'] ?>','unchek-tugas-<?= $value['id'] ?>','titik-tiga-<?= $value['id'] ?>'),'action-<?= $value['id'] ?>' " />
                                </div>
                            </div>
                        </section>

                        <div class="desc-tugas ms-4"><?= $value['deskripsi'] ?></div>

                        <!-- Uncheklist -->

                        <div id="unchek-tugas-<?= $value['id'] ?>" class="uncheklist p-3 hidden">

                            <div class="header-chek mb-1 d-flex justify-content-between align-items-center">
                                <h6>Subtask</h6>
                                <div id="btn-subtask-<?= $value['id'] ?>" class="btn-subtask btn-chek d-flex justify-content-center align-items-center" onclick="addSubtask('btn-subtask-<?= $value['id'] ?>','add-subtask-<?= $value['id'] ?>')">
                                    <img onclick="addSubtask('btn-subtask-<?= $value['id'] ?>','add-subtask-<?= $value['id'] ?>')" src="asset/Plus.svg" />
                                    <p onclick="addSubtask('btn-subtask-<?= $value['id'] ?>','add-subtask-<?= $value['id'] ?>')" class="mt-3 ms-1">Tambah</p>
                                </div>
                            </div>
                            <div id="add-subtask-<?= $value['id'] ?>" class="add-subtask hidden">
                                <form action="" method="post">
                                    <section class="tambah-tugas">
                                        <input type="radio" name="add-tugas" checked>
                                        <h6 class="nama-subtask created mx-2 mt-2">
                                            <input type="text" name="nama_subtask" placeholder="Masukan nama Subtask">
                                            <button class="btn-ok" name="subtaskNew">ok</button>
                                        </h6>
                                    </section>
                                </form>
                            </div>
                            <?php
                            $idtask = $value['id'];
                            $sqlGetSubtasks = "SELECT t.id as id_task, s.id as id, s.nama_subtask as nama_subtask
                            FROM subtasks s JOIN tasks t
                            ON(s.id_tugas = t.id) WHERE t.user_id = 1 and t.id = $idtask";
                            $resultSubtasks = $conn->query($sqlGetSubtasks);

                            if (isset($_POST["subtaskNew"])) {
                                $namaTugas = htmlspecialchars($_POST["nama_subtask"]);

                                // Query Insert Subtask
                                $InsertSubtask = "INSERT INTO subtasks ( id_tugas , nama_subtask)
                                VALUES ('$idtask','$namaTugas')";
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
                            <?php foreach ($resultSubtasks as $subtask) {
                                echo "<div class='content-chek' id='subtask-{$subtask["id"]}'>
                            <div class='chek-tugas'>
                                <div class='right-chek'>
                                    <div class='round'>
                                        <input class='click-checkbox' type='checkbox' id= 'design-{$subtask["id"]}' 
                                        onclick='clickCoret('design-{$subtask["id"]}','nama-design-{$subtask["id"]}')' />
                                        <label for='design-{$subtask["id"]}'></label>
                                    </div>
                                    <h6 id='nama-design-{$subtask["id"]}' class='mx-2 mt-2'>{$subtask['nama_subtask']}</h6>
                                </div>
                                <div class='left-chek'>
                                <a href='php/drop.php?idsubtask={$subtask["id"]}'>
                                <a href='php/drop.php?idsubtask={$subtask["id"]}'>
                                <img src='asset/trash.svg'/>
                                </a>
                                </a>
                                </div>
                            </div>
                          </div>";
                            } ?>
                        </div>
                        <!-- End Uncheklist -->
                    </div>
                    <?php endforeach; ?>
                </form>
                <footer class="footer-main">
                    <button class="button-finish" type="submit" form="main">Finished</button>
                    <hr />
                <div class="content-footer-main">
                    <div class="container-icon">
                        <img id="right-complit" class="icon-dropdown" src="asset/arrow-right.svg" onclick="uncheklistTugas('right-complit','up-complit','see-tugas-complit')" />
                        <img id="up-complit" class="icon-dropup hidden" src="asset/arrow-up.svg" onclick="uncheklistTugas('right-complit','up-complit','see-tugas-complit')" />
                    </div>
                    <p class="desc-footer-main mx-2 mt-3">
                        Tugas terselesaikan <span class="colored"></span>
                    </p>
                </div>
                <div id="see-tugas-complit" class="see-complited hidden">
                    <?php foreach ($resultTasksSuccess as $row) : ?>
                        <div class="container-tugas" id="tugas-<?= $row["id"] ?>">
                            <section class="tugas mt-1">
                                <div class="content-tugas">
                                    <div class="round">

                                        <input class="click-checkbox" type="checkbox" name="test" id="task-<?= $row["id"] ?>" onclick="clickCoret('task-<?= $row['id'] ?>' , 'nama-tugas-<?= $row['id'] ?>')" checked="<?= $row['finished'] ?>">
                                        <label for="task-<?= $row["id"] ?>"> </label>

                                    </div>
                                    <h6 contenteditable="true" id="nama-tugas-<?= $row["id"] ?>" class="nama-tugas-ku mx-2 mt-2 line-through"><?= $row["nama_tugas"] ?></h6>
                                    <div id="titik-tiga-<?= $row['id'] ?>" class="titik-tiga hidden">

                                        <img class="" src="asset/more-vertical.svg" id="titik-tiga-awal-<?= $row['id'] ?>" onclick="uncheklistTugas('titik-tiga-awal-<?= $row['id'] ?>','titik-tiga-akhir-<?= $row['id'] ?>','action-titik-<?= $row['id'] ?>')">
                                        <img class="hidden" src="asset/titik-tiga.svg" id="titik-tiga-akhir-<?= $row['id'] ?>" onclick="uncheklistTugas('titik-tiga-awal-<?= $row['id'] ?>','titik-tiga-akhir-<?= $row['id'] ?>','action-titik-<?= $row['id'] ?>')">
                                        <div class="action-titik-tiga hidden" id="action-titik-<?= $row['id'] ?>">

                                            <div class="item-titik-tiga d-flex align-items-center edit">
                                                <img src="asset/Edit.svg" />
                                                <p class="ms-3 d-flex align-i"><a href="php/edit.php?idtask = <?= ($row['id']) ?>">Rename task</a></p>
                                            </div>
                                            <div class="item-titik-tiga d-flex align-items-center delete">
                                                <img src="asset/Delete.svg" />
                                                <p class="ms-3 d-flex align-i"><a href="php/drop.php?idtask=<?= $row['id'] ?>" onclick=" return confirm('yakin...?');">Delete task</a></p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="drop-tugas me-3">
                                    <div class="container-icon">
                                        <img id="down-<?= $row['id'] ?>" class="icon-dropdown" src="asset/dropdown.svg" onclick="uncheklistTugas('down-<?= $row['id'] ?>' ,'up-<?= $row['id'] ?>','unchek-tugas-<?= $row['id'] ?>','titik-tiga-<?= $row['id'] ?>'),'action-<?= $row['id'] ?>' " />

                                        <img id="up-<?= $row['id'] ?>" class="icon-dropup hidden" src="asset/arrow-up.svg" onclick="uncheklistTugas('down-<?= $row['id'] ?>' ,'up-<?= $row['id'] ?>','unchek-tugas-<?= $row['id'] ?>','titik-tiga-<?= $row['id'] ?>'),'action-<?= $row['id'] ?>' " />

                                    </div>
                                </div>
                            </section>

                            <div class="desc-tugas ms-4"><?= $row['deskripsi'] ?></div>

                            <!-- Uncheklist -->

                            <div id="unchek-tugas-<?= $row['id'] ?>" class="uncheklist p-3 hidden">

                                <div class="header-chek mb-1 d-flex justify-content-between align-items-center">
                                    <h6>Subtask</h6>
                                    <div id="btn-subtask-<?= $row['id'] ?>" class="btn-subtask btn-chek d-flex justify-content-center align-items-center" onclick="addSubtask('btn-subtask-<?= $row['id'] ?>','add-subtask-<?= $row['id'] ?>')">
                                        <img onclick="addSubtask('btn-subtask-<?= $row['id'] ?>','add-subtask-<?= $row['id'] ?>')" src="asset/Plus.svg" />
                                        <p onclick="addSubtask('btn-subtask-<?= $row['id'] ?>','add-subtask-<?= $row['id'] ?>')" class="mt-3 ms-1">Tambah</p>
                                    </div>
                                </div>
                                <div id="add-subtask-<?= $row['id'] ?>" class="add-subtask hidden">
                                    <form action="" method="post">
                                        <section class="tambah-tugas">
                                            <input type="radio" name="add-tugas" checked>
                                            <h6 class="nama-subtask created mx-2 mt-2">
                                                <input type="text" name="nama_subtask" placeholder="Masukan nama Subtask">
                                                <button class="btn-ok" type="submit" name="subtask">ok</button>
                                            </h6>
                                        </section>
                                    </form>
                                </div>
                                <?php
                                $idtask = $row['id'];
                                $sqlGetSubtasks = "SELECT t.id as id_task, s.id as id, s.nama_subtask as nama_subtask
                            FROM subtasks s JOIN tasks t
                            ON(s.id_tugas = t.id) WHERE t.user_id = 1 and t.id = $idtask";
                                $resultSubtasks = $conn->query($sqlGetSubtasks);

                                if (isset($_POST["subtask"])) {
                                    $namaTugas = htmlspecialchars($_POST["nama_subtask"]);
                                    // Query Insert Subtask
                                    $InsertSubtask = "INSERT INTO subtasks ( id_tugas , nama_subtask)
                                VALUES ('$idtask','$namaTugas')";
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
                                <?php foreach ($resultSubtasks as $subtask) {
                                    echo "<div class='content-chek'>
                        <div class='chek-tugas'>
                            <div class='right-chek'>
                                <div class='round'>
                                    <input class='click-checkbox' type='checkbox' id= 'design-{$subtask["id"]}' 
                                    onclick='clickCoret('design-{$subtask["id"]}','nama-design-{$subtask["id"]}')' />
                                    <label for='design-{$subtask["id"]}'></label>
                                </div>
                                <h6 id='nama-design-{$subtask["id"]}' class='mx-2 mt-2'>{$subtask['nama_subtask']}</h6>
                            </div>
                            <div class='left-chek'>
                                <a href='php/drop.php?idsubtask={$subtask["id"]}'>
                                <img src='asset/trash.svg'/>
                                </a>
                            </div>
                        </div>
                      </div>";
                                } ?>
                            </div>
                            <!-- End Uncheklist -->
                        </div>
                    <?php endforeach; ?>
                </div>
            </footer>
        </div>
    </main>

    <!-- End Main -->
    <script src="script/script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Tugas 2</title>
</head>
<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tugas II PWL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/constant.php">Constanta</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/do_while.php">Do While</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/for.php">For</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/foreach.php">Foreach</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/hello_world.php">Hello World</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/if.php">If</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/if_else.php">If Else</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/operator_aritmatika.php">Operator Aritmatika</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/operator_pembanding.php">Operator Pembanding</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/operator_string.php">Operator String</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/switch.php">Switch</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/variable.php">Variable</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/variable_object.php">Variable Object</a></li>
                    <li><a class="dropdown-item" href="http://localhost/Tugas2-PWL/while.php">While</a></li>
                </ul>
                </li>
            </ul>
        </div>
        </nav>

        <header class="container bg-secondary text-white">
            <div class="row">
                <div class="col-12 py-4 text-center">
                    <h1 class="font-monospace">202143579015 - Aldo Alfiyan V </h1>
                    <p class="lead">Do While Loop</p>
                </div>
            </div>
        </header>

        <!-- Perintah PHP -->
        <main class="container border">
            <div class="row">
                <div class="col-12 py-5 text-center">
                <?php 
                    $i = 0;

                    do {
                        echo "Ini Angka Ke - $i <br>";
                        $i++;
                    } while ($i < 10);
                ?>
                </div>
                <div class="col-12 py-4 text-center">
                    <img class="w-50" src="img/do_while.png" alt="gambar">
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0);">
            Tugas 2 Pemrograman Web © 2022 Copyright:
            <a class="text-dark" href="#">Aldo Alfiyan Vananda</a>
            </div>
         </footer>
</body>
</html>
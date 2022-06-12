<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

    <title>Learn CRUD AJAX</title>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg" style="background-color: #d9d9d9;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-family: Brush Script MT;" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <img src="assets/img/logo-candra.png" alt="" width="30" height="35"
                    class="d-inline-block align-text-center rounded-circle">
                Can
            </a>

            <div class="collapse navbar-collapse justify-content-lg-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Me</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Content
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->

    <!-- TAMPIL DATA -->
    <div class="container">
        <h2>CRUD AJAX</h2>

        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">MATA KULIAH</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="tampil_matkul"></tbody>
        </table>

        <!-- TAMBAH DATA -->
        <h3>Tambah Data</h3>

        <table>
            <tr>
                <td>Mata Kuliah</td>
                <td><input type="text" id="nama_matkul" required></td>
            </tr>

            <tr>
                <td>SKS</td>
                <td><input type="number" min="0" id="sks" required></td>
            </tr>

            <tr>
                <td></td>
                <td><button class="btn btn-success" id="btn-simpan">Simpan</button></td>
            </tr>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>


    <!-- Custom -->
    <script type="text/javascript" src="assets/js/index.js"></script>
</body>

</html>
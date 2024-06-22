<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="desain1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="all align-items-center">
        <h1 class="text-center">Masukan Data Siswa</h1>
        <form action="" method = "post">
        <div class="input-group mb-3 px-5">
            <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3 px-5">
            <span class="input-group-text" id="inputGroup-sizing-default">NIS</span>
            <input type="number" id="nis" name="nis" class="form-control" placeholder="Masukkan NIS dengan menggunakan angka" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3 px-5">
            <span class="input-group-text" id="inputGroup-sizing-default">Rayon</span>
            <input type="text" id="rayon" name="rayon" class="form-control" placeholder="Masukkan rayon" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="tombol d-flex justify-content-center">
            <button type="submit" class="btn btn-light mx-2" value="kirim">Submit</button>
            <button type="submit" class="btn btn-light" value="cetak"><a class="text-dark text-decoration-none" href="latihan1(2).php">Cetak</a></button>
        </div>
        </form>

        <div class="hasil">
            <?php
            // Memulai sesi 
            session_start();

            if(!isset($_SESSION['dataSiswa'])){
                $_SESSION['dataSiswa']= array(); 
            }

            if(isset($_POST['nama']) && isset($_POST['nis']) && isset($_POST['rayon'])){
                $data = array (
                    'nama' => $_POST['nama'],
                    'nis' => $_POST['nis'],
                    'rayon' => $_POST['rayon']
                    );
                    array_push($_SESSION['dataSiswa'], $data);
                };

                // Proses penghapusan data siswa
            if (isset($_GET['hapus'])) {
                $index = $_GET['hapus'];
                unset($_SESSION['dataSiswa'][$index]);
                // redirect kembali ke halaman ini setelah penghapusan
                header('Location: http://localhost/latsessionCHr/latihan1.php');
                exit;
            }
            // var_dump($_SESSION['dataSiswa']);

            echo '<table class="table">';
                echo '<thead>';
                    echo '<tr>';
                        echo '<th scope="col">Nama</th>';
                        echo '<th scope="col">NIS</th>';
                        echo '<th scope="col">Rayon</th>';
                        echo '<th scope="col">Aksi</th>';
                    echo '</tr>';
                echo '</thead>';

                foreach ($_SESSION['dataSiswa'] as $index => $value) {
                    echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$value['nama'].'</td>';
                        echo '<td>'.$value['nis'].'</td>';
                        echo '<td>'.$value['rayon'].'</td>';
                        echo '<td> <a href="?hapus='.$index.'">Hapus</a></td>';
                        echo '</tr>';
                    echo '</tbody>';                  
                }

            echo '</table>';

            // foreach ($_SESSION['dataSiswa'] as $index => $value) {
            //     echo '<tr>';
            //     echo '<td>'. $value['nama'] .'</td>';
            //     echo '<td>'. $value['nis'].'</td>';
            //     echo '<td>'. $value['rayon'].'</td>';
            //     echo '<td> <a href="?hapus='.$index.'">Hapus</a></td>';
            //     echo '</tr>';
            // }

            // echo '</table>'
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
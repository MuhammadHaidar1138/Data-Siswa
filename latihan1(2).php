<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="desain2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Data Siswa</h1>
<?php
session_start();

echo '<table class="table align-items-center">';
                echo '<thead>';
                    echo '<tr>';
                        echo '<th scope="col">Nama</th>';
                        echo '<th scope="col">NIS</th>';
                        echo '<th scope="col">Rayon</th>';
                    echo '</tr>';
                echo '</thead>';

                foreach ($_SESSION['dataSiswa'] as $index => $value) {

                    echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$value['nama'].'</td>';
                        echo '<td>'.$value['nis'].'</td>';
                        echo '<td>'.$value['rayon'].'</td>';
                        echo '</tr>';
                    echo '</tbody>';                  
                }

            echo '</table>';
?>
<button type="submit" value="kembali" class="btn btn-light"><a href="latihan1.php" class="text-dark text-decoration-none d-flex">Kembali</a></button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
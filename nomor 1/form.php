<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Genre Film : <br>
        <input type="checkbox" name="genre[]" value="horror">Horror <br>
        <input type="checkbox" name="genre[]" value="action">Action <br>
        <input type="checkbox" name="genre[]" value="anime">Anime <br>
        <input type="checkbox" name="genre[]" value="thriller">Thriller <br>
        <input type="checkbox" name="genre[]" value="animasi">Animasi <br><br>
        Tempat Wisata : <br>
        <input type="checkbox" name="wisata[]" value="bali">Bali <br>
        <input type="checkbox" name="wisata[]" value="rajaAmpat">Raja Ampat <br>
        <input type="checkbox" name="wisata[]" value="pulauDerawan">Pulau Derawan <br>
        <input type="checkbox" name="wisata[]" value="bangkaBelitung">Bangka Belitung <br>
        <input type="checkbox" name="wisata[]" value="labuanBajo">Labuan Bajo <br><br>
        Upload gambar : <br> <input type="file" name="gambar" accept="image/*"><br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
    <a href="proseslogin.php?logout=keluar">LOGOUT</a>
</body>
</html>
<?php
    if(isset($_POST['genre'])){
        $nama = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $dir = "foto/";
        $genre = $_POST['genre'];
        $wisata = $_POST['wisata'];

        $uploadgambar = move_uploaded_file($tmp, $dir.$nama);
        if(!$uploadgambar){
            die("Upload gambar error..");
        }

        $baris = count($_SESSION['array']);
        $_SESSION['array'][$baris] = array(
                    "Genre" => $genre,
                    "Wisata" => $wisata,
                    "Gambar" => $dir.$nama
        );
        header("location: data.php");
    }
?>
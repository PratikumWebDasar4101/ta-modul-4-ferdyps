<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <form method="post">
            Daftar Sepatu : <br>
            <input type="checkbox" name="sepatu[]" value="nike">Nike (Rp1.200.000) <br>
            <input type="checkbox" name="sepatu[]" value="adidas">adidas (Rp1.200.000) <br>
            <input type="checkbox" name="sepatu[]" value="puma">Puma (Rp910.000) <br>
            <input type="checkbox" name="sepatu[]" value="umbro">Umbro (Rp900.000) <br>
            <input type="checkbox" name="sepatu[]" value="mizuno">Mizuno (Rp750.000) <br>
            <input type="checkbox" name="sepatu[]" value="reebok">Reebok (Rp800.000)<br><br>
            Pengiriman : <br>
            <input type="radio" name="kurir" value="JNE">JNE <br>
            <input type="radio" name="kurir" value="TIKI">Tiki <br>
            <input type="radio" name="kurir" value="WAHANA">Wahana <br><br>
            Alamat : <input type="text" name="alamat"><br><br>
            <input type="submit" name="submit" value="Beli"><br><br>
            <a href="proses_login.php?logout=keluar">LOGOUT</a>
    </form>
    <?php
        if(isset($_POST['alamat'])){
            $alamat = $_POST['alamat'];
            $_SESSION['alamat'] = $alamat;

            $sepatu = $_POST['sepatu'];
            $_SESSION['sepatu'] = $sepatu;
            for ($i=0; $i <count($sepatu) ; $i++) { 
                if( $sepatu[$i] == "nike"){
                    $harga = 1200000;
                }
                elseif ($sepatu[$i] == "adidas") {
                    $harga= 1200000;
                }
                elseif ($sepatu[$i] == "puma") {
                    $harga= 910000;
                }
                elseif ($sepatu[$i] == "Umbro") {
                    $harga= 900000;
                }
                elseif ($sepatu[$i] == "mizuno") {
                    $harga= 750000;
                }
                elseif ($sepatu[$i] == "reebok") {
                    $harga= 800000;
                }
                $hargasepatu = $hargasepatu + $harga;
            }

            $kurir = $_POST['kurir'];
            $_SESSION['kurir'] = $kurir; 
            if ($kurir == "JNE") {
                $ongkir = 9000;
            }
            elseif($kurir == "TIKI"){
                $ongkir = 7500;
            }
            elseif($kurir == "WAHANA"){
                $ongkir = 5000;
            }
            $_SESSION['ongkir'] = $ongkir;
            $total = $hargasepatu + $ongkir;
            $_SESSION['total'] = $total;

            header("location: struk_belanja.php");
        }
    ?>
</body>
</html>
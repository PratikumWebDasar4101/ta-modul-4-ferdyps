<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<center>
    <table border="1">
        <tr>
            <th>Tangal Pembelian</th>
            <th>Data Pembeli</th>
            <th>Alamat</th>
            <th>Sepatu yang dibeli</th>
            <th>Jenis Pengiriman</th>
            <th>Total harga</th>
        </tr>
        <tr>
            <td>
            <?php 
                $tgl = date('d-m-Y');
                echo $tgl;
            ?>
            </td>
            <td>
                <?php
                    echo $_SESSION['username'];
                ?>
            </td>
            <td>
                <?php
                    echo $_SESSION['alamat'];
                ?>
            </td>
            <td>
                <?php
                for ($i=0; $i <count($_SESSION['sepatu']) ; $i++) { 
                    echo $_SESSION['sepatu'][$i]."<br>";
                }
                    
                ?>
            </td>
            <td>
                <?php
                    echo $_SESSION['kurir'];
                ?>
            </td>
            <td>
                <?php
                    echo $_SESSION['total']
                ?>
            </td>
        </tr>
    </table>
    <br><a href="proses_login.php?logout=keluar">LOGOUT</a>
</center>
</body>
</html>